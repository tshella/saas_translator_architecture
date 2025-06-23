<?php

namespace App\Service\Engine;

use App\Service\TranslatorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class LibreTranslate implements TranslatorInterface
{
    public function __construct(private HttpClientInterface $client, private string $apiUrl) {}

    public function translate(string $text, string $from, string $to): string
    {
        $response = $this->client->request('POST', $this->apiUrl . '/translate', [
            'json' => [
                'q' => $text,
                'source' => $from,
                'target' => $to,
                'format' => 'text',
                'api_key' => 'changeme'
            ]
        ]);

        $data = $response->toArray();
        return $data['translatedText'] ?? '[Error]';
    }
}
