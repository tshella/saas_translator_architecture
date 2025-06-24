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
        parent::setUp(); // ✅ Prevent PHPUnit deprecation warning

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
        $translator = $this->factory->create('libre');
        $this->assertInstanceOf(LibreTranslate::class, $translator);
    }

    public function testReturnsGoogleTranslator(): void
    {
        $translator = $this->factory->create('google');
        $this->assertInstanceOf(GoogleTranslator::class, $translator);
    }

    public function testReturnsDeepLTranslator(): void
    {
        $translator = $this->factory->create('deepl');
        $this->assertInstanceOf(DeepLTranslator::class, $translator);
    }

    public function testReturnsOpenAiTranslator(): void
    {
        $translator = $this->factory->create('openai');
        $this->assertInstanceOf(OpenAiTranslator::class, $translator);
    }

    public function testThrowsExceptionForUnknownProvider(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->factory->create('unknown');
    }
}
