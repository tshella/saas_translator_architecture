<?php

namespace App\Service\Engine;

use App\Service\TranslatorInterface;

class GoogleTranslator implements TranslatorInterface
{
    public function translate(string $text, string $from, string $to): string
    {
        // Simulated translation logic
        return "[Google:$from->$to] " . $text;
    }
}
