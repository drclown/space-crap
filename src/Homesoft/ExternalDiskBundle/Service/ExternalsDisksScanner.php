<?php

namespace Homesoft\ExternalDiskBundle\Service;

use Homesoft\ExternalDiskBundle\Entity\ExternalDisk;
use Symfony\Component\Finder\Finder;
use Doctrine\Common\Collections\ArrayCollection;


class ExternalsDisksScanner
{
    private $basePath = "/media";
    private $directoriesToCheck = [
        "movies" => array("film", "films", "movies", "movie"),
        "series" => array("serie", "series", "tvshow", "tv-show", "tv-shows", "tvshows")
    ];

    public function __construct($path = "") {
        if($path !== ""){
            $this->setBasePath($path);
        }
    }

    /**
     * @return ArrayCollection
     * Scan le repertoire base du server ($this->basePath) pour trouver tous les externalsDisks branchés.
     */
    public function scanExternalDisk() {
        $externalsDisks = new ArrayCollection();
        $finder = new Finder();
        foreach($finder->directories()->depth(0)->in($this->basePath) AS $path) {

            $seriesPath =  $this->findSeriesPaths($path->getRealPath());
            $moviesPath =  $this->findMoviesPaths($path->getRealPath());
            $externalsDisks->add(new ExternalDisk($path->getBasename(), $path->getRealPath(), $seriesPath, $moviesPath));
        }
        return $externalsDisks;
    }

    /**
     * @param string
     * @return string
     * Scan le repertoire reçu en parametre pour trouver le repertoire qui stock les series
     */
    public function findSeriesPaths($path) {
        $seriesPath = "";
        foreach($this->directoriesToCheck['series'] AS $key => $directoryToCheck){
            $finder = new Finder();
            foreach($finder->in("$path")->name("$directoryToCheck") AS $directory) {
                $seriesPath =  $directory->getRealPath();
            }
        }
        return $seriesPath;
    }

    /**
     * @param string
     * @return string
     * Scan le repertoire reçu en parametre pour trouver le repertoire qui stock les films
     */
    public function findMoviesPaths($path) {
        $moviesPath = "";
        foreach($this->directoriesToCheck['movies'] AS $key => $directoryToCheck){
            $finder = new Finder();
            foreach($finder->in("$path")->name("$directoryToCheck") AS $directory) {
                $moviesPath = $directory->getRealPath();
            }
        }
        return $moviesPath;
    }

    /**
     * @param $basePath
     */
    public function setBasePath($basePath) {
        if(!is_string($basePath)) {
            trigger_error("The remoteScanner path must be a string !");
            return;
        }
        if($basePath === "") {
            trigger_error("The path is empty !");
            return;
        }
        else {
            if(file_exists($basePath)){
                $this->basePath = $basePath;
            }
            else {
                trigger_error("The path doesnt exist !");
                return;
            }
        }
    }
}