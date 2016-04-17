<?php
/**
 * Created by PhpStorm.
 * User: tompouce
 * Date: 17/04/2016
 * Time: 12:33
 */

namespace Homesoft\PlatformFilesBundle\Entity;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class RemotesCollection {
    private $remotes;

    public function getRemotes(){
        return $this->remotes;
    }
    public function addRemote(Remote $remote){
        $this->remotes[] =  $remote;
    }
    public function setRemote($remotes){
        $this->remotes = $remotes;
    }
    public function getJson(){
        $remotesArray = array();
        if($this->remotes !== null){
            foreach($this->remotes AS $remote){
                $mediaDirectoriesArray = array();
                if($remote->getMediaDirectories() !== null){
                    foreach($remote->getMediaDirectories() AS $mediaDirectory) {
                        $mediaDirectoriesArray[] = array(
                            "path"      => $mediaDirectory->getPathName(),
                            "basename"  => $mediaDirectory->getBasename(),
                        );
                    }
                }
                $remotesArray[] = array(
                    "path"              => $remote->getPath()->getPathName(),
                    "basename"          => $remote->getPath()->getBasename(),
                    "mediaDirectories"  => $mediaDirectoriesArray
                );
            }
        }
        return $remotesArray;
    }

    public function getJsonWithSeria(){
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        if($this->remotes !== null) {
            foreach ($this->remotes AS $remote) {
                $remotesArray[] = $serializer->serialize($remote, 'json');
            }
        }
        return $remotesArray;
    }
}