<?php
// src/Homesoft/MediaBundle/DataFixtures/ORM/LoadFile.php

namespace Homesoft\MediaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Homesoft\ExternalDiskBundle\Entity\ExternalDisk;
use Homesoft\MediaBundle\Entity\File;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadFile implements FixtureInterface, OrderedFixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager) {
        $filesArray = array(

            array(
                "path"      => "C:\\media\\externalDisk\\raspberry-server\\public\\films\\",
                "name"      => 'Willow',
                "extension" => "avi",
                "size"      => 650000000
            ),
            array(
                "path"      => "C:\\media\\externalDisk\\raspberry-server\\public\\films\\",
                "name"      => 'Matrix',
                "extension" => "avi",
                "size"      => 650000000
            ),
            array(
                "path"      => "C:\\media\\externalDisk\\raspberry-server\\public\\films\\",
                "name"      => 'LeSeigneurDesAnneaux',
                "extension" => "mkv",
                "size"      => 650000000
            ),
            array(
                "path"      => "C:\\media\\externalDisk\\raspberry-server\\public\\films\\",
                "name"      => 'Willow',
                "extension" => "avi",
                "size"      => 650000000
            ),
            array(
                "path"      => "C:\\media\\externalDisk\\raspberry-server\\public\\films\\",
                "name"      => 'Matrix',
                "extension" => "mkv",
                "size"      => 650000000
            ),
            array(
                "path"      => "C:\\media\\externalDisk\\raspberry-server\\public\\films\\",
                "name"      => 'LeSeigneurDesAnneaux',
                "extension" => "mp4",
                "size"      => 650000000
            )
        );
        $repositoryExternalsDisks = $manager->getRepository("HomesoftExternalDiskBundle:ExternalDisk");
        $externalDisk = $repositoryExternalsDisks->findOneByName("ExternalDisk");
        foreach ($filesArray as $fileArray) {
            $file = new File();
            $file->setName($fileArray['name']);
            $file->setPath($fileArray['path']);
            $file->setExtension($fileArray['extension']);
            $file->setSize($fileArray['size']);
            $file->setExternalDisk($externalDisk);
            $manager->persist($file);
        }
        $manager->flush();
    }

    public function getOrder() {
        return 2;
    }
}