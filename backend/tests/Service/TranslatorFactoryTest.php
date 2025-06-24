<?php

namespace App\Tests\Service;

use App\Service\TranslatorFactory;
use App\Service\Engine\LibreTranslate;
use App\Service\Engine\GoogleTranslator;
use App\Service\Engine\DeepLTranslator;
use App\Service\Engine\OpenAiTranslator;
use PHPUnit\Framework\TestCase;

class TranslatorFactoryTest extends TestCase
{
    private TranslatorFactory $factory;

    protected function setUp(): void
    {
        parent::setUp();

        $libre = $this->createMock(LibreTranslate::class);
        $google = $this->createMock(GoogleTranslator::class);
        $deepl = $this->createMock(DeepLTranslator::class);
        $openai = $this->createMock(OpenAiTranslator::class);

        $this->factory = new TranslatorFactory(
            libre: $libre,
            google: $google,
            deepl: $deepl,
            openai: $openai
        );
    }

    public function testReturnsLibreTranslateAsDefault(): void
    {
        $this->assertInstanceOf(LibreTranslate::class, $this->factory->create('libre'));
    }

    public function testReturnsGoogleTranslator(): void
    {
        $this->assertInstanceOf(GoogleTranslator::class, $this->factory->create('google'));
    }

    public function testReturnsDeepLTranslator(): void
    {
        $this->assertInstanceOf(DeepLTranslator::class, $this->factory->create('deepl'));
    }

    public function testReturnsOpenAiTranslator(): void
    {
        $this->assertInstanceOf(OpenAiTranslator::class, $this->factory->create('openai'));
    }

    public function testThrowsExceptionForUnknownProvider(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->factory->create('unknown');
    }
}
