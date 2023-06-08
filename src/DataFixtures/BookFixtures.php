<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $book = new Book();
        $book->setName('La nuit des temps');
        $book->setDescription("Des expéditions scientifiques françaises en Antarctique révèlent l'émission d'un signal inattendu provenant de la profondeur des glaces. Une expédition rassemblant de nombreuses nations est organisée afin d’atteindre le point d'émission du signal. Ses membres communiquent grâce à un ordinateur traduisant instantanément leurs paroles.");
        $book->addAuthor($this->getReference(AuthorFixtures::AUTHOR_RB));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_SF));
        $manager->persist($book);
        $manager->flush();
        
        $book = new Book();
        $book->setName('Les robots de l\'aube');
        $book->setDescription("Elijah Baley, enquêteur terrien est depuis deux ans un héros mal dépeint à son goût à la suite de sa réussite dans Face aux feux du soleil. Il est désormais de grade C-7 et en use pour former un groupe de personnes capables de vivre à l'« Extérieur » (les Terriens, à force de vivre sous terre, sont devenus agoraphobes). Ainsi, il tente de préparer ces personnes (parmi lesquelles se trouve son fils Bentley) à quitter la Terre pour coloniser d'autres planètes.");
        $book->addAuthor($this->getReference(AuthorFixtures::AUTHOR_IA));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_SF));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_POLAR));
        $manager->persist($book);
        $manager->flush();
        
        $book = new Book();
        $book->setName('Fondation');
        $book->setDescription("Au cours du 13e millénaire de l’ère impériale, un homme, Hari Seldon, prédit au moyen d’une science statistique dont il est le créateur — la psychohistoire — la chute de cet empire, suivie de 30 000 ans de barbarie qui précéderont la naissance d'un autre Empire. Pour réduire cette période de barbarie à 1 000 ans, il suggère la création d’une Fondation dont le rôle sera de rassembler le savoir de toute l'humanité dans une Encyclopédie.");
        $book->addAuthor($this->getReference(AuthorFixtures::AUTHOR_IA));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_SF));
        $manager->persist($book);
        $manager->flush();
        
        $book = new Book();
        $book->setName('Étoile noire');
        $book->setDescription("Braxtor, alors qu'il dérive dans l'espace, est absorbé par une naine rouge. A l'intérieur de la géante il découvre un navire qui renferme des secrets scientifiques. La naine tente de garder ces secrets en contanimant Braxtor. Son corps se désintégre petit à petit mais il est sauvé par un navire qu'il a croisé sur son chemin.");
        $book->addAuthor($this->getReference(AuthorFixtures::AUTHOR_JG));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_FANTA));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_SF));
        $manager->persist($book);
        $manager->flush();
        
        $book = new Book();
        $book->setName('Mutante');
        $book->setDescription("Juan Giménez est l'un des plus grands dessinateurs de science-fiction. Ses talents de visionnaire sont remarquables. Ses scénarios aboutis ressemblent à des westerns futuristes où les règlements de comptes se déroulent dans l'espace intersidéral. Et surtout son dessin est d'une grande finesse, d'une subtilité renversante et ses couleurs, éblouissantes. Qu'il agisse seul ou accompagné de Barreiro ou de Trillo, Giménez nous fait aimer le futur.");
        $book->addAuthor($this->getReference(AuthorFixtures::AUTHOR_JG));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_FANTA));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_SF));
        $manager->persist($book);
        $manager->flush();

        $book = new Book();
        $book->setName('La caste des Méta-Baron');
        $book->setDescription("Juan Giménez est l'un des plus grands dessinateurs de science-fiction. Ses talents de visionnaire sont remarquables. Ses scénarios aboutis ressemblent à des westerns futuristes où les règlements de comptes se déroulent dans l'espace intersidéral. Et surtout son dessin est d'une grande finesse, d'une subtilité renversante et ses couleurs, éblouissantes. Qu'il agisse seul ou accompagné de Barreiro ou de Trillo, Giménez nous fait aimer le futur.");
        $book->addAuthor($this->getReference(AuthorFixtures::AUTHOR_AJ));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_FANTA));
        $book->addGenre($this->getReference(GenreFixtures::GENRE_SF));
        $manager->persist($book);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            AuthorFixtures::class,
            GenreFixtures::class,
        ];
    }
}
