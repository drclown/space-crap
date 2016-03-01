<?php
namespace Homesoft\PlatformFilesBundle\services\Remote;
namespace Homesoft\PlatformFilesBundle\services;



class Remote {
    private $path;
    private $pathSerie;
    private $pathFilm;
    private $directories;

    public function __construct($path){
        $this->path = $path;
    }

    public function getPath() {
        return $this->path;
    }

    public function setPath($path) {
        $this->path = $path;
    }

    public function getPathFilm() {
        return $this->pathFilm;
    }

    public function setPathFilm($pathFilm){
        $this->pathFilm = $pathFilm;
    }

    public function getPathSerie()
    {
        return $this->pathSerie;
    }

    public function setPathSerie($pathSerie)
    {
        $this->pathSerie = $pathSerie;
    }

    public function getDirectories()
    {
        return $this->directories;
    }

    public function setDirectories(array $directories)
    {
        $this->directories = $directories;
    }
    public function addDirectory($directory){
        $this->directories[] = $directory;
    }
}