<?php

namespace App\Command;

use App\Entity\User;
use App\Entity\Glossary;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:seed')]
class SeedDatabaseCommand extends Command
{
    public function __construct(private EntityManagerInterface $em)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $user = new User();
        $user->setEmail('demo@translator.com');
        $user->setPassword('hashed-password'); // hash it properly
        $user->setRoles(['ROLE_USER']);
        $this->em->persist($user);

        $glossary = new Glossary();
        $glossary->setUserId(1);
        $glossary->setSourceTerm('AI');
        $glossary->setPreferredTerm('Artificial Intelligence');
        $this->em->persist($glossary);

        $this->em->flush();
        $output->writeln('Seeded successfully.');

        return Command::SUCCESS;
    }
}
