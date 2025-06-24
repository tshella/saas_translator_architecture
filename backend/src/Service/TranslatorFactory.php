<?php

namespace App\Service;

use App\Service\Engine\LibreTranslate;
use App\Service\Engine\GoogleTranslator;
use App\Service\Engine\DeepLTranslator;
use App\Service\Engine\OpenAiTranslator;

class TranslatorFactory
{
    public function __construct(
        private LibreTranslate $libre,
        private GoogleTranslator $google,
        private DeepLTranslator $deepl,
        private OpenAiTranslator $openai
    ) {}

    public function create(string $provider): TranslatorInterface
    {
        return match (strtolower($provider)) {
            'google' => $this->google,
            'deepl' => $this->deepl,
            'openai' => $this->openai,
            'libre', 'default' => $this->libre,
            default => throw new \InvalidArgumentException("Unknown provider: $provider")
        };
    }
}
