<?php

namespace App\DataFixtures;

use App\Entity\Label;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LabelFixtures extends BaseFixture
{
    protected function loadData(ObjectManager $manager)
    {
        // TODO: Implement loadData() method.
        // $artist = $this->getRandomRefrence('artist');
        // La fonction anonyme sera exécutée 50 fois
        $this->createMany(10, 'label', function ($num) {
            // Construction du nom d'artiste
            $name = $this->faker->firstName;
            $label = (new Label())
                ->setName($name)
            ;
            // Toujours retourner l'entité
            return $label;
        });
        // Pour terminer, enregistrer
        $manager->flush();
    }
}
