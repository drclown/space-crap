<?php
/**
 * Created by PhpStorm.
 * User: tompouce
 * Date: 17/04/2016
 * Time: 17:54
 */

namespace Homesoft\PlatformFilesBundle\Entity;


class MediasCollection
{
    private $medias;

    public function __construct() {
        $this->setMedias(array());
    }

    /**
     * @return mixed
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * @param mixed $medias
     */
    public function setMedias($medias)
    {
        $this->medias = $medias;
    }

    public function addMedias(Media $media) {
        $this->medias[] = $media;
    }

    public function getJson(){
        $mediasArray = array();
        if($this->medias !== null){
            foreach($this->medias AS $media){
                $mediasArray[] = array(
                    "name"      => utf8_encode($media->getName()),
                    "extension" => utf8_encode($media->getExtension()),
                    "path"      => utf8_encode($media->getPath())
                );
            }
        }
        return $mediasArray;
    }
}