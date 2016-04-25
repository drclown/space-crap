<?php

namespace Homesoft\PlatformFilesBundle\services\RemoteScanner;

namespace Homesoft\PlatformFilesBundle\services;

use Homesoft\PlatformFilesBundle\Entity\Media;
use Homesoft\PlatformFilesBundle\Entity\MediasCollection;
use Symfony\Component\Finder\Finder;
use Homesoft\PlatformFilesBundle\Entity\Remote;
use Homesoft\PlatformFilesBundle\Entity\RemotesCollection;

class RemoteScanner {
    private $basePath;
    private $listDirectoriesToCheck = ["film", "films", "serie", "series", "reportages", "reportage"];

    private $arrayExtensions = [
        "video" => ["mp4", "avi", "mkv", "wmv", "divx", "flv"],
        "image" => ["jpeg", "jpg", "png", "gif"],
        "audio" => ["mp3"],
        "text" => ["txt"],
        "code" => ["html", "php", "css", "xml"]
    ];

    public function __construct($path = "") {
        $this->setBasePath($path);
    }

    /* Retourne un RemotesCollection trouvé dans $this->basePath */
    public function scanRemotes() {
        $listRemotes = new RemotesCollection();
        $finder = new Finder();
        $remotes = $finder
            ->directories()
            ->depth(0)
            ->in($this->basePath)
        ;
        foreach($remotes AS $path) {
            $listRemotes->addRemote(new Remote($path));
        }
        $this->findMediaPaths($listRemotes);
        return $listRemotes;
    }

    public function findMediaPaths(RemotesCollection $remotes) {
        if($remotes->getRemotes() !== null){
            foreach($remotes->getRemotes() AS $remote){
                $path = $remote->getPath();
                foreach($this->listDirectoriesToCheck AS $directoryToCheck){
                    $finder = new Finder();
                    foreach($finder->in("$path")->name("$directoryToCheck") AS $directory) {
                        $remote->addMediaDirectory($directory);
                    }
                }
            }
        }
    }

    public function getFileType($nameFile){
        $type = "";
        $extension = $this->getExtension($nameFile);
        foreach($this->getArrayExtensions() AS $key => $extensions){
            if(in_array($extension, $extensions)){
                $type = $key;
            }
        }
        return "file-".$type;
    }

    public function getExtension($nameFile) {
        $extension = explode(".", $nameFile);
        if(count($extension) > 0) {
            $extension = $extension[count($extension)-1];
        }
        return $extension;
    }

    public function getTitleMedia($nameFile){
        $title = explode(".", $nameFile);
        if(count($title) > 0) {
            unset($title[count($title)-1]);
            $title = $title[count($title)-1];
        }
        return $title;
    }

    // Retourne un media collection en fonction du $path donné
    public function getMedias($path){
        $finder = new Finder();
        $files = new MediasCollection();
        foreach($finder->files()->in($path) AS $file){
            $basename = $file->getBasename();
            $media =  new Media();
            
            $media->setExtension($this->getExtension($basename));
            $media->setPath($file->getRealPath());
            $media->setTitle($this->getTitleMedia($basename));
            $files->addMedias($media);
        }
        return $files;
    }

    public function getDirectoriesAndFiles() {
        $finder = new Finder();
        $DirectoriesAndFiles = array();

        foreach($finder->in($this->basePath) AS $DirectoryAndFile) {
            $type = "dir";
            if($DirectoryAndFile->getType() === "file") {
                $type = $this->getFileType($DirectoryAndFile->getBasename());
            }
            $parent = $this->getParentPath($DirectoryAndFile);
            $DirectoriesAndFiles[] = array(
                "id"        => $DirectoryAndFile->getRealPath(),
                "text"      => $DirectoryAndFile->getBasename(),
                "type"      => $type,
                "parent"    => $parent
            );
        }
        return $DirectoriesAndFiles;
    }

    public function getParentPath($directory) {
        $parent = "#";
        if($directory->getRelativePath() !== "") {
            $dirs = explode("/",$directory->getRealPath());
            if(count($dirs) == 1 ) {
                $dirs = explode("\\",$directory->getRealPath());
                unset($dirs[(count($dirs)-1)]);
                $parent = implode("\\", $dirs);
            }
            else {
                $dirs = explode("/",$directory->getRealPath());
                unset($dirs[(count($dirs)-1)]);
                $parent = implode("/", $dirs);
            }
        }
        return $parent;
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

    public function getBasePath(){
        return $this->basePath;
    }

    public function getArrayExtensions() {
        return $this->arrayExtensions;
    }
}