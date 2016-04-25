<?php
// src/Homesoft/ExternalDiskBundle/DataFixtures/ORM/LoadExternalDisk.php

namespace Homesoft\ExternalDiskBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Homesoft\ExternalDiskBundle\Entity\ExternalDisk;
use Homesoft\MediaBundle\Entity\File;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadFile implements FixtureInterface, OrderedFixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager) {
        $externalsDisksArray = array(
            array(
                "path"      => "C:\\media\\externalDisk\\",
                "name"      => 'ExternalDisk'
            ),
        );

        foreach ($externalsDisksArray as $externalDiskArray) {
            $externalDisk = new ExternalDisk();
            $externalDisk->setName($externalDiskArray['name']);
            $externalDisk->setPath($externalDiskArray['path']);
            $manager->persist($externalDisk);
        }
        $manager->flush();
    }

    public function getOrder(){
        return 1;
    }
}