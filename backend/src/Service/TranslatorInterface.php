<?php

namespace App\Service;

interface TranslatorInterface
{
    public function translate(string $text, string $from, string $to): string;
}
