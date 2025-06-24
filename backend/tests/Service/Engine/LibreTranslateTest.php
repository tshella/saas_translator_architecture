<?php

namespace App\Tests\Service\Engine;

use App\Service\Engine\LibreTranslate;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

class LibreTranslateTest extends TestCase
{
    public function testTranslateReturnsExpectedText(): void
    {
        $mockResponse = new MockResponse(json_encode([
            'translatedText' => 'Bonjour le monde',
        ]));

        $client = new MockHttpClient($mockResponse);
        $translator = new LibreTranslate($client, 'http://fake.local/translate');

        $result = $translator->translate('Hello world', 'en', 'fr');

        $this->assertSame('Bonjour le monde', $result);
    }

    public function testTranslateReturnsFallbackOnInvalidJson(): void
    {
        $mockResponse = new MockResponse('invalid-json');

        $client = new MockHttpClient($mockResponse);
        $translator = new LibreTranslate($client, 'http://fake.local/translate');

        $result = $translator->translate('Test', 'en', 'fr');

        $this->assertSame('[Error]', $result);
    }
}
