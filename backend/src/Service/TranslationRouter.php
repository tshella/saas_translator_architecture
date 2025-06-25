<?php

namespace App\Service;

use App\Service\Engine\LibreTranslate;
use App\Service\Engine\DeepLTranslator;
use App\Service\Engine\NllbMiniTranslator;
use Psr\Log\LoggerInterface;
use Exception;

class TranslationRouter
{
    private LibreTranslate $libre;
    private DeepLTranslator $deepl;
    private NllbMiniTranslator $nllb;
    private LoggerInterface $logger;

    public function __construct(
        LibreTranslate $libre,
        DeepLTranslator $deepl,
        NllbMiniTranslator $nllb,
        LoggerInterface $logger
    ) {
        $this->libre = $libre;
        $this->deepl = $deepl;
        $this->nllb = $nllb;
        $this->logger = $logger;
    }

    /**
     * Routes translation to the appropriate engine.
     *
     * @param string $text   The input text to translate.
     * @param string $source The source language code (e.g. 'en').
     * @param string $target The target language code (e.g. 'fr').
     * @param array $options Additional options (e.g. engine override, tier).
     *
     * @return string The translated text.
     */
    public function translate(string $text, string $source, string $target, array $options = []): string
    {
        $engine = $this->selectEngine($source, $target, $options);

        $this->logger->info("Routing translation", [
            'engine' => $engine,
            'source' => $source,
            'target' => $target,
            'options' => $options,
        ]);

        try {
            return match ($engine) {
                'deepl' => $this->deepl->translate($text, $source, $target),
                'nllb'  => $this->nllb->translate($text, $source, $target),
                default => $this->libre->translate($text, $source, $target),
            };
        } catch (Exception $e) {
            $this->logger->error("Translation failed", [
                'engine' => $engine,
                'error' => $e->getMessage(),
            ]);
            throw new \RuntimeException('Translation failed: ' . $e->getMessage());
        }
    }

    /**
     * Smart selection of which engine to use.
     */
    private function selectEngine(string $source, string $target, array $options): string
    {
        // Engine override from user
        if (!empty($options['engine'])) {
            return strtolower($options['engine']);
        }

        // Low-resource language support: NLLB preferred
        $lowResourceLangs = ['am', 'rw', 'lug', 'lo', 'km', 'wo', 'ig', 'ha', 'xh'];
        if (in_array($source, $lowResourceLangs) || in_array($target, $lowResourceLangs)) {
            return 'nllb';
        }

        // Premium user gets DeepL
        if (($options['tier'] ?? '') === 'premium') {
            return 'deepl';
        }

        // Offline fallback
        if (!$this->isOnline()) {
            return 'nllb';
        }

        // Default
        return 'libre';
    }

    /**
     * Check if the system is online (e.g., DNS reachable).
     */
    private function isOnline(): bool
    {
        return @fsockopen('8.8.8.8', 53, $errno, $errstr, 2) !== false;
    }
}
