<?php
/**
 * Created by PhpStorm.
 * User: tompouce
 * Date: 24/04/2016
 * Time: 20:08
 */

namespace Homesoft\MediaBundle\Service;

use \Homesoft\MediaBundle\Entity\Movie;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Finder\Finder;

class MediasResearcher
{
    private $extensions = [
        "video" => ["mp4", "avi", "mkv", "wmv", "divx", "flv"],
        "image" => ["jpeg", "jpg", "png", "gif"],
        "audio" => ["mp3"],
        "text" => ["txt"],
        "code" => ["html", "php", "css", "xml"]
    ];
    
    

    /**
     * @param $path string
     * @return ArrayCollection
     */
    public function getAllSeries($path) {
        $finder = new Finder();
        $series = new ArrayCollection();
        foreach($finder->files()->in($path) AS $file){
            $basename = $file->getBasename();
            if($this->getFileType($basename) === "video") {
                $serie = new Serie();
                $serie->setTitle(utf8_encode($basename));
                $serie->setUrl(utf8_encode($file->getRealPath()));
                $series->add($serie);
            }
        }
        return $series;
    }

    /**
     * @param $path string
     * @return ArrayCollection
     */
    public function getAllMovies($path) {
        $finder = new Finder();
        $movies = new ArrayCollection();
        foreach($finder->files()->in($path) AS $file){
            $basename = $file->getBasename();
            if($this->getFileType($basename) === "video") {
                $movie = new Movie();
                $movie->setTitle(utf8_encode($basename));
                $movie->setUrl(utf8_encode($file->getRealPath()));
                $movies->add($movie);
            }
        }
        return $movies;
    }

    /**
     * @param $nameFile string
     * @return string
     */
    public function getFileType($nameFile){
        $type = "";
        $extension = $this->getExtension($nameFile);
        foreach($this->extensions AS $key => $extensions){
            if(in_array($extension, $extensions)){
                $type = $key;
            }
        }
        return $type;
    }

    public function getExtension($nameFile) {
        $extension = explode(".", $nameFile);
        if(count($extension) > 0) {
            $extension = $extension[count($extension)-1];
            return $extension;
        }
        return "";
    }
}