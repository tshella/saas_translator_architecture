<?php

namespace App\Message;

final class TranslationRequest
{
    public function __construct(
        public readonly string $text,
        public readonly string $from,
        public readonly string $to,
        public readonly int $userId
    ) {}
}
