<?php

namespace Homesoft\PlatformFilesBundle\services\SystemScanner;
namespace Homesoft\PlatformFilesBundle\services;
use Symfony\Component\HttpFoundation\Response;



class SystemScanner {
    private $os;
    private $mediaPlayer;

    public function _construct() {
        $this->setOs(PHP_OS);
        $this->scanMediaPlayer();
    }
    public function scanMediaPlayer() {
        if($this->checkVlc()){
            $this->setMediaPlayer("cvlc");
        }
        if($this->checkOmxplayer()){
            $this->setMediaPlayer("omxplayer");
        }
    }

    public function getVideoService(){
        $service = "";
        switch($this->getMediaPlayer()) {
            case "omxplayer":
                $service = "omx_reader";
                break;
            case "cvlc":
                $service = "vlc_reader";
                break;
            case "":
                return new response("Vous n'avez aucun lecteur video compatible avec ce fichier ! Installez omxplayer, vlc ou mplayer");
                break;
        }
        return $service;
    }
    private function checkVlc() {
        $msg = shell_exec('cvlc --version');
        if($msg === "cvlc --version : commande introuvable"){
            return false;
        }
        return true;
    }
    private function checkOmxplayer(){
        $msg = shell_exec('omxplayer -v');
        if($msg === null) {
            return false;
        }
        return true;
    }
    public function getOs(){
        return $this->os;
    }
    private function setOs($os){
        $this->os = $os;
    }
    public function getMediaPlayer(){
        return $this->mediaPlayer;
    }
    private function setMediaPlayer($mediaPlayer){
        $this->mediaPlayer = $mediaPlayer;
    }
}