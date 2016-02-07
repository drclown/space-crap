<?php
/**
 * Created by PhpStorm.
 * User: tompouce
 * Date: 07/02/2016
 * Time: 14:36
 */

namespace Homesoft\PlatformFilesBundle\services;


class SystemScanner {
    private $os;
    private $mediaPlayer;

    public function _construct(){
        $this->setOs(PHP_OS);
        $this->scanMediaPlayer();
    }
    public function scanMediaPlayer() {
        if($this->checkOmxplayer()){
            $this->setMediaPlayer("omxplayer");
        }
        if($this->checkVlc()){
            $this->setMediaPlayer("cvlc");
        }
    }
    private function checkVlc() {
        $msg = shell_exec('cvlc --version');
        if($msg === "cvlc --version : commande introuvable"){
            return true;
        }
        return false;
    }
    private function checkOmxplayer(){
        $msg = shell_exec('omxplayer -v');
        if($msg === "omxplayer -v : commande introuvable") {
            return true;
        }
        return false;
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