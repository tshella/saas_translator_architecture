<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Glossary
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column]
    private int $userId;

    #[ORM\Column]
    private string $sourceTerm;

    #[ORM\Column]
    private string $preferredTerm;

    // getters and setters ...
}
