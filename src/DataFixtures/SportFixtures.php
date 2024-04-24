<?php
// src/DataFixtures/SportFixtures.php

namespace App\DataFixtures;

use App\Entity\Sport;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SportFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Sport 1
        $sport1 = new Sport();
        $sport1->setNomSport('Volleyball');
        $sport1->setImage('https://www.google.com/url?sa=i&url=https%3A%2F%2Folympics.com%2Fen%2Fnews%2Fhow-to-play-volleyball&psig=AOvVaw1IhL0KN3vyvagKQ2nmXw18&ust=1705517626792000&source=images&cd=vfe&opi=89978449&ved=0CBYQjRxqFwoTCMiJrrXK4oMDFQAAAAAdAAAAABAD');
        $manager->persist($sport1);

        // Sport 2
        $sport2 = new Sport();
        $sport2->setNomSport('Basketball');
        $sport2->setImage('img/basketball.jpg');
        $manager->persist($sport2);

        // Sport 3
        $sport3 = new Sport();
        $sport3->setNomSport('Tennis');
        $sport3->setImage('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eurosport.fr%2Ftennis%2F&psig=AOvVaw01j3He4-nlK4RZnbHwHCnY&ust=1705515394958000&source=images&cd=vfe&opi=89978449&ved=0CBcQjRxqFwoTCPisy4jG4oMDFQAAAAAdAAAAABAD');
        $manager->persist($sport3);



        // Sport 5
        $sport5 = new Sport();
        $sport5->setNomSport('Natation');
        $sport5->setImage('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.passeportsante.net%2Ffr%2FActualites%2FDossiers%2FDossierComplexe.aspx%3Fdoc%3Dnatation-activite-physique-multiples-bienfaits&psig=AOvVaw1WvsAqquw1IMc8x570vUaY&ust=1705516922455000&source=images&cd=vfe&opi=89978449&ved=0CBYQjRxqFwoTCPjMx-TH4oMDFQAAAAAdAAAAABAK');
        $manager->persist($sport5);

        // Sport 6
        $sport6 = new Sport();
        $sport6->setNomSport('Boxe');
        $sport6->setImage('https://www.google.com/url?sa=i&url=https%3A%2F%2Fconseilsport.decathlon.fr%2Ffaut-il-forcement-frapper-fort-pour-progresser-en-boxe&psig=AOvVaw0ljNqQdZ6WTLQ_oljvNN89&ust=1705516964035000&source=images&cd=vfe&opi=89978449&ved=0CBYQjRxqFwoTCLDnhPrH4oMDFQAAAAAdAAAAABAD');
        $manager->persist($sport6);

        // Sport 7
        $sport7 = new Sport();
        $sport7->setNomSport('Golf');
        $sport7->setImage('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.skysports.com%2Fgolf%2Fnews%2F12176%2F13024060%2Fgolf-ball-rollback-key-questions-on-what-is-happening-why-change-is-coming-and-how-it-will-affect-you&psig=AOvVaw2BawDWS7ylRi8o6pCoKnIV&ust=1705517004125000&source=images&cd=vfe&opi=89978449&ved=0CBYQjRxqFwoTCIjf4IzI4oMDFQAAAAAdAAAAABAD');
        $manager->persist($sport7);

        // Sport 8
        $sport8 = new Sport();
        $sport8->setNomSport('Ski alpin');
        $sport8->setImage('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.france24.com%2Ffr%2Finfo-en-continu%2F20240113-ski-alpin-l-italienne-sofia-goggia-remporte-la-descente-d-altenmarkt&psig=AOvVaw1ZD__Z-h_sjjzkUNqkaiPL&ust=1705517049032000&source=images&cd=vfe&opi=89978449&ved=0CBcQjRxqFwoTCJi1sanI4oMDFQAAAAAdAAAAABAD');
        $manager->persist($sport8);

        $manager->flush();
    }
}
