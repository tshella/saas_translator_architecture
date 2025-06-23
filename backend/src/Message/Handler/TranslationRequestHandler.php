<?php

namespace App\Message\Handler;

use App\Message\TranslationRequest;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use App\Service\TranslatorFactory;

class TranslationRequestHandler implements MessageHandlerInterface
{
    public function __construct(private TranslatorFactory $factory) {}

    public function __invoke(TranslationRequest $message)
    {
        $translator = $this->factory->create('google'); // example
        $translated = $translator->translate($message->text, $message->from, $message->to);
        // Save translation or send back to client
    }
}
