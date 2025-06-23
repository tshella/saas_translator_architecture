<?php

namespace App\Service\Engine;

use App\Service\TranslatorInterface;

class DeepLTranslator implements TranslatorInterface
{
    public function translate(string $text, string $from, string $to): string
    {
        return "[DeepL:$from->$to] " . $text;
    }
}
