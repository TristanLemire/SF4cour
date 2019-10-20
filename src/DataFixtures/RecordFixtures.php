<?php

namespace App\DataFixtures;

use App\Entity\Record;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class RecordFixtures extends BaseFixture implements DependentFixtureInterface
{
    protected function loadData(ObjectManager $manager)
    {
        // TODO: Implement loadData() method.
        // $artist = $this->getRandomRefrence('artist');
        // La fonction anonyme sera exécutée 50 fois
        $this->createMany(50, 'record', function ($num) {
            // Construction du nom d'artiste
            $title = $this->faker->randomElement(['LA ', 'LE ', 'LI ', 'LO', '']);
            $title .= $this->faker->firstName;
            $title .= $this->faker->randomElement([
                ' ' . $this->faker->realText(10),
                ' kaamelott ' . $this->faker->domainWord,
                ' & The ' . $this->faker->lastName,
                ''
            ]);
            $record = (new Record())
                ->setArtist($this->getRandomReference('artist'))
                ->setTitle($title)
                ->setDescription( $this->faker->realText(10))
                ->setReleasedAt( $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null))
                ->setLabel($this->getRandomReference('label'))
            ;
            // Toujours retourner l'entité
            return $record;
        });
        // Pour terminer, enregistrer
        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            ArtistFixtures::class,
            LabelFixtures::class,
        ];
    }
}
