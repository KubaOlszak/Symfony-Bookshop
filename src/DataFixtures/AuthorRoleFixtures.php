<?php

namespace App\DataFixtures;

use App\Entity\AuthorRole;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorRoleFixtures extends Fixture
{
    public const ROLE_EC = 'ROLE_EC';
    public const ROLE_SC = 'ROLE_SC';
    public const ROLE_DE = 'ROLE_DE';

    public function load(ObjectManager $manager): void
    {
        $authorRole = new AuthorRole();
        $authorRole->setName('Écrivain/e');
        $manager->persist($authorRole);
        $this->addReference(self::ROLE_EC, $authorRole);
        $manager->flush();
        
        $authorRole = new AuthorRole();
        $authorRole->setName('Scénariste');
        $manager->persist($authorRole);
        $this->addReference(self::ROLE_SC, $authorRole);
        $manager->flush();
        
        $authorRole = new AuthorRole();
        $authorRole->setName('Déssinateur/trice');
        $manager->persist($authorRole);
        $this->addReference(self::ROLE_DE, $authorRole);
        $manager->flush();
    }
}
