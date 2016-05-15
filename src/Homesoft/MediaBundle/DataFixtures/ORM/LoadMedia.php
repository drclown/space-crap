<?php
// src/Homesoft/MediaBundle/DataFixtures/ORM/LoadMedia.php

namespace Homesoft\MediaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Homesoft\MediaBundle\Entity\Media;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadMedia implements FixtureInterface, OrderedFixtureInterface {

    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager) {
        $MediasArray = array(
            array(
                "title"      => "matrix",
                "synopsis"  => 'Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l\'un des pirates les plus recherchés du cyber-espace. À cheval entre deux mondes, Neo est assailli par d\'étranges songes et des messages cryptés provenant d\'un certain Morpheus. Celui-ci l\'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu\'est-ce que la Matrice ? Nul ne le sait, et aucun homme n\'est encore parvenu à en percer les défenses. Mais Morpheus est persuadé que Neo est l’Élu, le libérateur mythique de l\'humanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...',
                "nationality"      => 'en'
            )
        );
        $repositoryFile = $manager->getRepository("HomesoftMediaBundle:File");
        $file = $repositoryFile->findOneByName("Matrix");
        foreach ($MediasArray as $MediaArray) {
            $media = new Media();
            $media->setTitle($MediaArray['title']);
            $media->setSynopsis($MediaArray['synopsis']);
            $media->setNationality($MediaArray['nationality']);
            $media->setFile($file);
            $manager->persist($media);
        }
        $manager->flush();
    }

    public function getOrder() {
        return 4;
    }
}