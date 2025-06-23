<?php

namespace App\Service\Decorator;

class ToneAdjuster
{
    public function adjust(string $text, string $tone): string
    {
        return match ($tone) {
            'formal' => "[Formal] " . $text,
            'casual' => "[Casual] " . $text,
            'professional' => "[Professional] " . $text,
            default => $text,
        };
    }
}
