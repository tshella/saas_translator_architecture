<?php

namespace App\Service\Engine;

use App\Service\TranslatorInterface;

class OpenAiTranslator implements TranslatorInterface
{
    public function translate(string $text, string $from, string $to): string
    {
        return "[OpenAI:$from->$to] " . $text;
    }
}
