<?php

namespace App\Service;

use App\Service\Engine\LibreTranslate;
use App\Service\Engine\DeepLTranslator;
use App\Service\Engine\NllbMiniTranslator;

class TranslationRouter
{
    private LibreTranslate $libre;
    private DeepLTranslator $deepl;
    private NllbMiniTranslator $nllb;

    public function __construct(
        LibreTranslate $libre,
        DeepLTranslator $deepl,
        NllbMiniTranslator $nllb
    ) {
        $this->libre = $libre;
        $this->deepl = $deepl;
        $this->nllb = $nllb;
    }

    public function translate(string $text, string $source, string $target, array $options = []): string
    {
        $engine = $this->selectEngine($source, $target, $options);

        return match ($engine) {
            'deepl' => $this->deepl->translate($text, $source, $target),
            'nllb'  => $this->nllb->translate($text, $source, $target),
            default => $this->libre->translate($text, $source, $target),
        };
    }

    private function selectEngine(string $source, string $target, array $options): string
    {
        // User-specified override
        if (!empty($options['engine'])) {
            return $options['engine'];
        }

        // Low-resource languages
        $lowResource = ['am', 'rw', 'lug', 'lo', 'km', 'wo'];
        if (in_array($source, $lowResource) || in_array($target, $lowResource)) {
            return 'nllb';
        }

        // Premium users
        if (($options['tier'] ?? '') === 'premium') {
            return 'deepl';
        }

        // Offline fallback
        if (!$this->isOnline()) {
            return 'nllb';
        }

        // Default to LibreTranslate
        return 'libre';
    }

    private function isOnline(): bool
    {
        return @fsockopen('8.8.8.8', 53, $errno, $errstr, 2) !== false;
    }
}
