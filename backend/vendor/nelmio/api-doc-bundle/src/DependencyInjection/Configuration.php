<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\DependencyInjection;

use Nelmio\ApiDocBundle\Describer\OperationIdGeneration;
use Nelmio\ApiDocBundle\Render\Html\AssetsMode;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('nelmio_api_doc');

        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->booleanNode('type_info')
                    ->info('Use the symfony/type-info component for determining types.')
                    ->defaultFalse()
                ->end()
                ->booleanNode('use_validation_groups')
                    ->info('If true, `groups` passed to #[Model] attributes will be used to limit validation constraints')
                    ->defaultFalse()
                ->end()
                ->enumNode('operation_id_generation')
                    ->info('How to generate operation ids')
                    ->values([...OperationIdGeneration::cases(), ...array_map(static fn (OperationIdGeneration $operationId): string => $operationId->value, OperationIdGeneration::cases())])
                    ->defaultValue(OperationIdGeneration::ALWAYS_PREPEND)
                ->end()
                ->arrayNode('cache')
                    ->validate()
                        ->ifTrue(function ($v) { return null !== $v['item_id'] && null === $v['pool']; })
                        ->thenInvalid('Can not set cache.item_id if cache.pool is null')
                    ->end()
                    ->children()
                        ->scalarNode('pool')
                            ->info('define cache pool to use')
                            ->defaultNull()
                        ->end()
                        ->scalarNode('item_id')
                            ->info('define cache item id')
                            ->defaultNull()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('documentation')
                    ->useAttributeAsKey('key')
                    ->info('The documentation used as base')
                    ->example(['info' => ['title' => 'My App']])
                    ->prototype('variable')->end()
                ->end()
                ->arrayNode('media_types')
                    ->info('List of enabled Media Types')
                    ->defaultValue(['json'])
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('html_config')
                    ->info('UI configuration options')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('assets_mode')
                            ->defaultValue(AssetsMode::CDN)
                            ->validate()
                                ->ifNotInArray([AssetsMode::BUNDLE, AssetsMode::CDN, AssetsMode::OFFLINE])
                                ->thenInvalid('Invalid assets mode %s')
                            ->end()
                        ->end()
                        ->arrayNode('swagger_ui_config')
                            ->info('https://swagger.io/docs/open-source-tools/swagger-ui/usage/configuration/')
                            ->addDefaultsIfNotSet()
                            ->ignoreExtraKeys(false)
                        ->end()
                        ->arrayNode('redocly_config')
                            ->info('https://redocly.com/docs/redoc/config/')
                            ->addDefaultsIfNotSet()
                            ->ignoreExtraKeys(false)
                        ->end()
                        ->arrayNode('stoplight_config')
                            ->info('https://docs.stoplight.io/docs/elements/b074dc47b2826-elements-configuration-options')
                            ->addDefaultsIfNotSet()
                            ->ignoreExtraKeys(false)
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('areas')
                    ->info('Filter the routes that are documented')
                    ->defaultValue(
                        [
                            'default' => [
                                'path_patterns' => [],
                                'host_patterns' => [],
                                'with_attribute' => false,
                                'documentation' => [],
                                'name_patterns' => [],
                                'disable_default_routes' => false,
                                'cache' => [],
                                'security' => [],
                            ],
                        ]
                    )
                    ->beforeNormalization()
                        ->ifTrue(function ($v) {
                            return 0 === \count($v) || isset($v['path_patterns']) || isset($v['host_patterns']) || isset($v['documentation']);
                        })
                        ->then(function ($v): array {
                            return ['default' => $v];
                        })
                    ->end()
                    ->validate()
                        ->ifTrue(function ($v) {
                            return !isset($v['default']);
                        })
                        ->thenInvalid('You must specify a `default` area under `nelmio_api_doc.areas`.')
                    ->end()
                    ->useAttributeAsKey('name')
                    ->prototype('array')
                        ->addDefaultsIfNotSet()
                        ->children()
                            ->arrayNode('path_patterns')
                                ->defaultValue([])
                                ->example(['^/api', '^/api(?!/admin)'])
                                ->prototype('scalar')->end()
                            ->end()
                            ->arrayNode('host_patterns')
                                ->defaultValue([])
                                ->example(['^api\.'])
                                ->prototype('scalar')->end()
                            ->end()
                            ->arrayNode('name_patterns')
                                ->defaultValue([])
                                ->example(['^api_v1'])
                                ->prototype('scalar')->end()
                            ->end()
                            ->arrayNode('security')
                                ->defaultValue([])
                                ->example(['bearerAuth' => ['type' => 'http', 'scheme' => 'bearer']])
                                ->info('Security schemes to use for this area')
                                ->useAttributeAsKey('securityScheme')
                                ->arrayPrototype()
                                    ->children()
                                        ->scalarNode('type')
                                            ->validate()
                                                ->ifNotInArray($securityTypes = ['http', 'apiKey', 'openIdConnect', 'oauth2'])
                                                ->thenInvalid('Invalid `type` value %s. Available types are: '.implode(', ', $securityTypes))
                                            ->end()
                                        ->end()
                                        ->scalarNode('scheme')
                                            ->validate()
                                                ->ifNotInArray($schemes = ['basic', 'bearer'])
                                                ->thenInvalid('Invalid `scheme` value %s. Available schemes are: '.implode(', ', $schemes))
                                            ->end()
                                        ->end()
                                        ->scalarNode('in')
                                            ->validate()
                                                ->ifNotInArray($in = ['header', 'query', 'cookie'])
                                                ->thenInvalid('Invalid `in` value %s. Available locations are: '.implode(', ', $in))
                                            ->end()
                                        ->end()
                                        ->scalarNode('name')->end()
                                        ->scalarNode('description')->end()
                                        ->scalarNode('openIdConnectUrl')->end()
                                    ->end()
                                    ->ignoreExtraKeys(false)
                                ->end()
                            ->end()
                            ->booleanNode('with_attribute')
                                ->defaultFalse()
                                ->info('whether to filter by attributes')
                            ->end()
                            ->booleanNode('disable_default_routes')
                                ->defaultFalse()
                                ->info('if set disables default routes without attributes')
                            ->end()
                            ->arrayNode('documentation')
                                ->useAttributeAsKey('key')
                                ->defaultValue([])
                                ->info('The documentation used for area')
                                ->example(['info' => ['title' => 'My App']])
                                ->prototype('variable')->end()
                            ->end()
                            ->arrayNode('cache')
                                ->children()
                                    ->scalarNode('pool')
                                        ->info('define cache pool to use')
                                        ->defaultNull()
                                    ->end()
                                    ->scalarNode('item_id')
                                        ->info('define cache item id')
                                        ->defaultNull()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('models')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('use_jms')->defaultFalse()->end()
                    ->end()
                    ->children()
                        ->arrayNode('names')
                            ->prototype('array')
                                ->children()
                                    ->scalarNode('alias')->isRequired()->end()
                                    ->scalarNode('type')->isRequired()->end()
                                    ->variableNode('groups')
                                        ->defaultValue(null)
                                        ->validate()
                                            ->ifTrue(function ($v) { return null !== $v && !\is_array($v); })
                                            ->thenInvalid('Model groups must be either `null` or an array.')
                                        ->end()
                                    ->end()
                                    ->variableNode('options')
                                        ->defaultValue(null)
                                        ->validate()
                                            ->ifTrue(function ($v) { return null !== $v && !\is_array($v); })
                                            ->thenInvalid('Model options must be either `null` or an array.')
                                        ->end()
                                    ->end()
                                    ->arrayNode('serializationContext')
                                        ->defaultValue([])
                                        ->prototype('variable')->end()
                                    ->end()
                                    ->arrayNode('areas')
                                        ->defaultValue([])
                                        ->prototype('scalar')->end()
                                    ->end()
                                ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
