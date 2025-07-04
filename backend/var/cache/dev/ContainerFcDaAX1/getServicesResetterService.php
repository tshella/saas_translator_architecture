<?php

namespace ContainerFcDaAX1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['request_stack'])) {
                yield 'request_stack' => ($container->services['request_stack'] ?? null);
            }
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (isset($container->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (isset($container->privates['http_client.transport'])) {
                yield 'http_client.transport' => ($container->privates['http_client.transport'] ?? null);
            }
            if (isset($container->privates['http_client.uri_template'])) {
                yield 'http_client' => ($container->privates['http_client.uri_template'] ?? null);
            }
            if (isset($container->privates['translation.locale_switcher'])) {
                yield 'translation.locale_switcher' => ($container->privates['translation.locale_switcher'] ?? null);
            }
            if (isset($container->services['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->services['debug.stopwatch'] ?? null);
            }
            if (isset($container->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($container->services['event_dispatcher'] ?? null);
            }
            if (false) {
                yield 'debug.log_processor' => null;
            }
            if (isset($container->privates['session_listener'])) {
                yield 'session_listener' => ($container->privates['session_listener'] ?? null);
            }
            if (isset($container->services['cache.validator_expression_language'])) {
                yield 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? null);
            }
            if (isset($container->privates['messenger.transport.in_memory.factory'])) {
                yield 'messenger.transport.in_memory.factory' => ($container->privates['messenger.transport.in_memory.factory'] ?? null);
            }
            if (isset($container->privates['security.token_storage'])) {
                yield 'security.token_storage' => ($container->privates['security.token_storage'] ?? null);
            }
            if (false) {
                yield 'cache.security_expression_language' => null;
            }
            if (isset($container->services['cache.security_is_granted_attribute_expression_language'])) {
                yield 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? null);
            }
            if (isset($container->privates['debug.security.firewall'])) {
                yield 'debug.security.firewall' => ($container->privates['debug.security.firewall'] ?? null);
            }
            if (isset($container->privates['debug.security.firewall.authenticator.login'])) {
                yield 'debug.security.firewall.authenticator.login' => ($container->privates['debug.security.firewall.authenticator.login'] ?? null);
            }
            if (isset($container->privates['debug.security.firewall.authenticator.api'])) {
                yield 'debug.security.firewall.authenticator.api' => ($container->privates['debug.security.firewall.authenticator.api'] ?? null);
            }
            if (isset($container->privates['debug.security.firewall.authenticator.main'])) {
                yield 'debug.security.firewall.authenticator.main' => ($container->privates['debug.security.firewall.authenticator.main'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (isset($container->privates['doctrine.debug_data_holder'])) {
                yield 'doctrine.debug_data_holder' => ($container->privates['doctrine.debug_data_holder'] ?? null);
            }
            if (isset($container->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($container->privates['monolog.handler.main'] ?? null);
            }
            if (isset($container->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($container->privates['monolog.handler.console'] ?? null);
            }
            if (isset($container->privates['monolog.handler.deprecation'])) {
                yield 'monolog.handler.deprecation' => ($container->privates['monolog.handler.deprecation'] ?? null);
            }
        }, fn () => 0 + (int) (isset($container->services['request_stack'])) + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (false) + (int) (false) + (int) (isset($container->privates['cache.annotations'])) + (int) (false) + (int) (isset($container->privates['cache.messenger.restart_workers_signal'])) + (int) (isset($container->privates['http_client.transport'])) + (int) (isset($container->privates['http_client.uri_template'])) + (int) (isset($container->privates['translation.locale_switcher'])) + (int) (isset($container->services['debug.stopwatch'])) + (int) (isset($container->services['event_dispatcher'])) + (int) (false) + (int) (isset($container->privates['session_listener'])) + (int) (isset($container->services['cache.validator_expression_language'])) + (int) (isset($container->privates['messenger.transport.in_memory.factory'])) + (int) (isset($container->privates['security.token_storage'])) + (int) (false) + (int) (isset($container->services['cache.security_is_granted_attribute_expression_language'])) + (int) (isset($container->privates['debug.security.firewall'])) + (int) (isset($container->privates['debug.security.firewall.authenticator.login'])) + (int) (isset($container->privates['debug.security.firewall.authenticator.api'])) + (int) (isset($container->privates['debug.security.firewall.authenticator.main'])) + (int) (isset($container->services['doctrine'])) + (int) (isset($container->privates['doctrine.debug_data_holder'])) + (int) (isset($container->privates['monolog.handler.main'])) + (int) (isset($container->privates['monolog.handler.console'])) + (int) (isset($container->privates['monolog.handler.deprecation']))), ['request_stack' => ['?resetRequestFormats'], 'cache.app' => ['reset'], 'cache.system' => ['reset'], 'cache.validator' => ['reset'], 'cache.serializer' => ['reset'], 'cache.annotations' => ['reset'], 'cache.property_info' => ['reset'], 'cache.messenger.restart_workers_signal' => ['reset'], 'http_client.transport' => ['?reset'], 'http_client' => ['?reset'], 'translation.locale_switcher' => ['reset'], 'debug.stopwatch' => ['reset'], 'debug.event_dispatcher' => ['reset'], 'debug.log_processor' => ['reset'], 'session_listener' => ['reset'], 'cache.validator_expression_language' => ['reset'], 'messenger.transport.in_memory.factory' => ['reset'], 'security.token_storage' => ['disableUsageTracking', 'setToken'], 'cache.security_expression_language' => ['reset'], 'cache.security_is_granted_attribute_expression_language' => ['reset'], 'debug.security.firewall' => ['reset'], 'debug.security.firewall.authenticator.login' => ['reset'], 'debug.security.firewall.authenticator.api' => ['reset'], 'debug.security.firewall.authenticator.main' => ['reset'], 'doctrine' => ['reset'], 'doctrine.debug_data_holder' => ['reset'], 'monolog.handler.main' => ['reset'], 'monolog.handler.console' => ['reset'], 'monolog.handler.deprecation' => ['reset']]);
    }
}
