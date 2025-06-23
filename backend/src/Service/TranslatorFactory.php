<?php

namespace App\Service;

use App\Service\Engine\GoogleTranslator;
use App\Service\Engine\DeepLTranslator;
use App\Service\Engine\OpenAiTranslator;

class TranslatorFactory
{
    public function create(string $provider): TranslatorInterface
    {
        return match ($provider) {
            'google' => new GoogleTranslator(),
            'deepl' => new DeepLTranslator(),
            'openai' => new OpenAiTranslator(),
            default => throw new \InvalidArgumentException("Unknown provider: $provider")
        };
    }
}
