<?php

namespace App\Tests\Service\Engine;

use App\Service\Engine\DeepLTranslator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

class DeepLTranslatorTest extends TestCase
{
    public function testTranslateReturnsExpectedText(): void
    {
        $mockResponse = new MockResponse(json_encode([
            'translations' => [['text' => 'Bonjour']]
        ]));

        $client = new MockHttpClient($mockResponse);
        $translator = new DeepLTranslator($client, 'test-key', 'http://api.deepl.com/v2/translate');

        $result = $translator->translate('Hello', 'en', 'fr');

        $this->assertSame('Bonjour', $result);
    }

    public function testTranslateHandlesInvalidJsonGracefully(): void
    {
        $mockResponse = new MockResponse('not-json');

        $client = new MockHttpClient($mockResponse);
        $translator = new DeepLTranslator($client, 'test-key', 'http://api.deepl.com/v2/translate');

        $result = $translator->translate('Hello', 'en', 'fr');

        $this->assertSame('[Error]', $result);
    }
}
