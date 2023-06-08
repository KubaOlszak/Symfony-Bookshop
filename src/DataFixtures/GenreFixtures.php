<?php

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GenreFixtures extends Fixture
{
    public const GENRE_POLAR = 'GENRE_POLAR';
    public const GENRE_ROM = 'GENRE_ROM';
    public const GENRE_SF = 'GENRE_SF';
    public const GENRE_FANTA = 'GENRE_FANTA';

    public function load(ObjectManager $manager): void
    {
        $genre = new Genre();
        $genre->setName('Polar');
        $manager->persist($genre);
        $this->addReference(self::GENRE_POLAR, $genre);
        $manager->flush();
        
        $genre = new Genre();
        $genre->setName('Romance');
        $manager->persist($genre);
        $this->addReference(self::GENRE_ROM, $genre);
        $manager->flush();
        
        $genre = new Genre();
        $genre->setName('S-F');
        $manager->persist($genre);
        $this->addReference(self::GENRE_SF, $genre);
        $manager->flush();
        
        $genre = new Genre();
        $genre->setName('Fantastique');
        $manager->persist($genre);
        $this->addReference(self::GENRE_FANTA, $genre);
        $manager->flush();
    }
}
