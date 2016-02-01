<?php

namespace Homesoft\PlatformFilesBundle\services;

use Symfony\Component\Finder\Finder;


class RemoteScanner {
    private $pathRemote;
    private $finder;

    /* Get directories in $path and return a finders array */
    public function scanRemotes() {
        $finder = new Finder();
        $remotes = $finder
            ->directories()
            ->depth(0)
            ->in($this->pathRemote)
        ;
        return $remotes;
    }

    public function scanRemoteFiles($path){
        $finder = new Finder();

        $files = $finder
            ->directories()
            ->in($path)
        ;
        return $files;
    }

    public function directoryExist($path) {
        if(!file_exists($path)){
            return false;
        }
        return true;
    }

    public function getTree() {
        return array_merge($this->getDirectories($this->pathRemote), $this->getFiles($this->pathRemote));
    }

    public function getFiles() {
        $finder = new Finder();
        $files = array();
        $finder
            ->files()
            ->in($this->pathRemote)
        ;
        foreach($finder AS $file) {
            $parent = $this->getParentPath($file);
            $files[] = array(
                "id"        => $file->getRealPath(),
                "text"      => $file->getBasename(),
                "type"      => $file->getType(),
                "parent"    => $parent
            );
        }
        return $files;
    }

    public function getDirectories() {
        $finder = new Finder();
        $directories = array();
        $directoriesFinder = $finder
            ->directories()
            ->in($this->pathRemote)
        ;
        foreach($directoriesFinder AS $directory) {
            $parent = $this->getParentPath($directory);
            $directories[] = array(
                "id"        => $directory->getRealPath(),
                "text"      => $directory->getBasename(),
                "type"      => $directory->getType(),
                "parent"    => $parent
            );
        }
        return $directories;
    }
    public function getParentPath($directory){
        $parent = "#";
        if($directory->getRelativePath() !== ""){
            $dirs = explode("/",$directory->getRealPath());
            unset($dirs[(count($dirs)-1)]);
            $parent = implode("/", $dirs);
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