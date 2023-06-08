<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture implements DependentFixtureInterface
{
    public const AUTHOR_RB = 'AUTHOR_RB';
    public const AUTHOR_IA = 'AUTHOR_IA';
    public const AUTHOR_JG = 'AUTHOR_JG';
    public const AUTHOR_AJ = 'AUTHOR_AJ';

    public function load(ObjectManager $manager): void
    {
        $author = new Author();
        $author->setName('René Barjavel');
        $author->addRole($this->getReference(AuthorRoleFixtures::ROLE_EC));
        $manager->persist($author);
        $this->addReference(self::AUTHOR_RB, $author);
        $manager->flush();
        
        $author = new Author();
        $author->setName('Isaac Asimov');
        $author->addRole($this->getReference(AuthorRoleFixtures::ROLE_EC));
        $manager->persist($author);
        $this->addReference(self::AUTHOR_IA, $author);
        $manager->flush();
        
        $author = new Author();
        $author->setName('Juan Gimenez');
        $author->addRole($this->getReference(AuthorRoleFixtures::ROLE_EC));
        $author->addRole($this->getReference(AuthorRoleFixtures::ROLE_DE));
        $manager->persist($author);
        $this->addReference(self::AUTHOR_JG, $author);
        $manager->flush();

        $author = new Author();
        $author->setName('Alejandro Jodorowsky');
        $author->addRole($this->getReference(AuthorRoleFixtures::ROLE_EC));
        $manager->persist($author);
        $this->addReference(self::AUTHOR_AJ, $author);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            AuthorRoleFixtures::class,
        ];
    }
}
