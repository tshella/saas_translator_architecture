<?php

namespace App\Service\Engine;

use App\Service\TranslatorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GoogleTranslator implements TranslatorInterface
{
    public function __construct(private HttpClientInterface $client) {}

    public function translate(string $text, string $from, string $to): string
    {
        // Placeholder response. In reality, you'd call the Google Cloud Translation API here.
        return "[Google:$from->$to] " . $text;
    }
}
