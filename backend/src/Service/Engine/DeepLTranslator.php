<?php

namespace App\Service\Engine;

use App\Service\TranslatorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DeepLTranslator implements TranslatorInterface
{
    private HttpClientInterface $client;
    private string $apiKey;
    private string $apiUrl;

    public function __construct(HttpClientInterface $client, string $apiKey, string $apiUrl)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->apiUrl = $apiUrl;
    }

    public function translate(string $text, string $from, string $to): string
    {
        $response = $this->client->request('POST', $this->apiUrl, [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'body' => [
                'auth_key' => $this->apiKey,
                'text' => $text,
                'source_lang' => strtoupper($from),
                'target_lang' => strtoupper($to),
            ],
        ]);

        $data = $response->toArray();

        return $data['translations'][0]['text'] ?? '[DeepL Error]';
    }
}
