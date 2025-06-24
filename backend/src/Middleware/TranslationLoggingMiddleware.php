<?php

namespace App\Middleware;

use App\Message\TranslationRequest;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Middleware\MiddlewareInterface;
use Symfony\Component\Messenger\Middleware\StackInterface;

class TranslationLoggingMiddleware implements MiddlewareInterface
{
    public function __construct(private LoggerInterface $logger) {}

    public function handle(Envelope $envelope, StackInterface $stack): Envelope
    {
        $message = $envelope->getMessage();

        if ($message instanceof TranslationRequest) {
            $this->logger->info(sprintf(
                'Received translation request: text="%s", from=%s, to=%s, userId=%d',
                $message->text,
                $message->from,
                $message->to,
                $message->userId
            ));
        }

        return $stack->next()->handle($envelope, $stack);
    }
}
