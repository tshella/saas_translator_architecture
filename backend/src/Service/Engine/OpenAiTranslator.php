<?php

namespace App\Service\Engine;

use App\Service\TranslatorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class OpenAiTranslator implements TranslatorInterface
{
    private HttpClientInterface $client;
    private string $apiKey;
    private string $model;

    public function __construct(HttpClientInterface $client, string $apiKey, string $model)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->model = $model;
    }

    public function translate(string $text, string $from, string $to): string
    {
        // Basic simulated format, real implementation should use OpenAI API
        return "[OpenAI:$from->$to] " . $text;
    }
}
