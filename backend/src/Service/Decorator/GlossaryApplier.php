<?php

namespace App\Service\Decorator;

use Doctrine\ORM\EntityManagerInterface;

class GlossaryApplier
{
    public function __construct(private EntityManagerInterface $em) {}

    public function apply(string $text, int $userId): string
    {
        $glossaries = $this->em->getRepository('App:Glossary')->findBy(['userId' => $userId]);
        foreach ($glossaries as $entry) {
            $text = str_ireplace($entry->getSourceTerm(), $entry->getPreferredTerm(), $text);
        }
        return $text;
    }
}
