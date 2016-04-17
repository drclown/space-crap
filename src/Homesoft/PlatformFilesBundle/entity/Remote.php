<?php
namespace Homesoft\PlatformFilesBundle\Entity\Remote;
namespace Homesoft\PlatformFilesBundle\Entity;



class Remote {
    private $path;
    private $mediaDirectories;

    public function __construct($path){
        $this->path = $path;
    }

    public function getPath() {
        return $this->path;
    }

    public function setPath($path) {
        $this->path = $path;
    }

    public function getMediaDirectories()
    {
        return $this->mediaDirectories;
    }
    public function setMediaDirectories(array $mediaDirectories)
    {
        $this->mediaDirectories = $mediaDirectories;
    }
    public function addMediaDirectory($mediaDirectory){
        $this->mediaDirectories[] = $mediaDirectory;
    }
}