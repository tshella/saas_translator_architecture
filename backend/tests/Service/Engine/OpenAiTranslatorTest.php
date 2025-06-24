<?php

namespace App\Tests\Service\Engine;

use App\Service\Engine\OpenAiTranslator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;

class OpenAiTranslatorTest extends TestCase
{
    public function testTranslateReturnsExpectedFormat(): void
    {
        $client = new MockHttpClient();
        $translator = new OpenAiTranslator($client, 'fake-key', 'gpt-4');

        $result = $translator->translate('Hello', 'en', 'fr');
        $this->assertSame('[OpenAI:en->fr] Hello', $result);
    }
}
