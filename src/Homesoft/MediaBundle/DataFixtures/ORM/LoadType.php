<?php
// src/Homesoft/MediaBundle/DataFixtures/ORM/LoadType.php

namespace Homesoft\MediaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Homesoft\MediaBundle\Entity\Type;

class LoadType implements FixtureInterface, OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $typesArray = array('Serie','Movie');

        foreach ($typesArray as $name) {
            $type = new Type();
            $type->setName($name);
            $manager->persist($type);
        }
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }
}