<?php
/**
 * Created by PhpStorm.
 * User: tompouce
 * Date: 24/04/2016
 * Time: 22:11
 */

namespace Homesoft\ExternalDiskBundle\Service;


use Homesoft\ExternalDiskBundle\Entity\ExternalDisk;

class SynchronizerExternalDisk {
    private $externalDisk;

    /**
     * SynchronizerExternalDisk constructor.
     * @param $externalDisk
     */
    public function __construct(ExternalDisk $externalDisk) {
        $this->externalDisk = $externalDisk;
    }

    public function synchronize() {

        $repository = $this->getDoctrine()->getManager()->getRepository('HomesoftExternalDiskBundle:ExternalDisk');

        $externalDisk = $repository->findOneByName($this->externalDisk->getName());
        print_r($externalDisk);
        if($this->isOnDb()) {

        }
        else {

        }
    }

    public function isOnDb(){
    }


}