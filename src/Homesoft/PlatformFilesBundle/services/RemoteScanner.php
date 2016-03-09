<?php

namespace Homesoft\PlatformFilesBundle\services\RemoteScanner;

namespace Homesoft\PlatformFilesBundle\services;

use Symfony\Component\Finder\Finder;
use Homesoft\PlatformFilesBundle\services\Remote;

class RemoteScanner {
    private $pathRemote;
    private $videoExtensions = ["mp4", "avi", "mkv", "wmv", "divx", "flv"];
    private $listDirectoriesToCheck = ["film", "films", "serie", "series", "reportages", "reportage", "musiques", "musique"];
    private $imageExtensions = ["jpeg", "jpg", "png", "gif"];
    private $audioExtensions = ["mp3"];
    private $textExtensions = ["txt"];
    private $codeExtensions = ["html", "php", "css", "xml"];

    public function __construct($path = "") {
        $this->setPathRemote($path);
    }

    /* Retourne les dossiers trouvés dans $this->pathRemote sous la forme d'un tableau de remotes */
    public function scanRemotes() {
        $listRemotes = array();
        $finder = new Finder();
        $remotes = $finder
            ->directories()
            ->depth(0)
            ->in($this->pathRemote)
        ;
        foreach($remotes AS $path) {
            $listRemotes[] = new Remote($path);
        }
        return $listRemotes;
    }

    public function findSeriesFilmsPaths($remotes) {
        foreach($remotes AS $remote){
            $path = $remote->getPath();
            foreach($this->listDirectoriesToCheck AS $directoryToCheck){
                $finder = new Finder();
                foreach($finder->in("$path")->name("$directoryToCheck") AS $directory) {
                    $remote->addDirectory($directory);
                }
            }
        }
        return $remotes;
    }

    public function directoryExist($path) {
        if(!file_exists($path)){
            return false;
        }
        return true;
    }

    public function getFileType($nameFile){
        $type = "";
        $extension = $this->getExtension($nameFile);
        if(in_array($extension, $this->videoExtensions)){
            $type = "-film";
        }
        elseif(in_array($extension, $this->imageExtensions)){
            $type = "-image";
        }
        elseif(in_array($extension, $this->audioExtensions)){
            $type = "-audio";
        }
        elseif(in_array($extension, $this->textExtensions)){
            $type = "-code";
        }
        elseif(in_array($extension, $this->codeExtensions)){
            $type = "-text";
        }
        return "file".$type;
    }

    public function getExtension($nameFile) {
        $extension = explode(".", $nameFile);
        if(count($extension) > 0) {
            $extension = $extension[count($extension)-1];
        }
        return $extension;
    }

    public function getDirectoriesAndFiles() {
        $finder = new Finder();
        $DirectoriesAndFiles = array();

        foreach($finder->in($this->pathRemote) AS $DirectoryAndFile) {
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

    public function setPathRemote($pathRemote) {
        if(!is_string($pathRemote)) {
            trigger_error("The remoteScanner path must be a string !");
            return;
        }
        if($pathRemote === "") {
            trigger_error("The path is empty !");
            return;
        }
        else {
            if($this->directoryExist($pathRemote)){
                $this->pathRemote = $pathRemote;
            }
            else {
                trigger_error("The path doesnt exist !");
                return;
            }
        }
    }

    public function getPathRemote(){
        return $this->pathRemote;
    }
}