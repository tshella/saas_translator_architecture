<?php

namespace App\Tests\Service\Engine;

use App\Service\Engine\GoogleTranslator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;

class GoogleTranslatorTest extends TestCase
{
    public function testTranslateReturnsExpectedFormat(): void
    {
        $client = new MockHttpClient();
        $translator = new GoogleTranslator($client);

        $result = $translator->translate('Hello', 'en', 'fr');
        $this->assertSame('[Google:en->fr] Hello', $result);
    }
}

