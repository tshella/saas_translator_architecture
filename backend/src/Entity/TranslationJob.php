<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class TranslationJob
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column]
    private int $userId;

    #[ORM\Column]
    private string $originalText;

    #[ORM\Column]
    private string $translatedText;

    #[ORM\Column]
    private \DateTimeImmutable $createdAt;

    // getters and setters ...
}
