<?php

namespace Homesoft\PlatformFilesBundle\services;


class OmxReader {
    public function play($file) {
        $commande = 'omxplayer -o hdmi --blank '.$file;
        $this->stop();
        $msg = shell_exec($commande);
        sleep(1);
        return $msg;
    }
    public function getPid(){
        $msg = exec("pgrep omxplayer.bin");
        sleep(1);
        return $msg;
    }
    public function stop() {
        shell_exec('killall omxplayer.bin');
        sleep(1);
    }
    public function getInstance(){

    }
    public function pause($file){
        /* Quand t'auras trouvé gros se sera cool */
        sleep(1);
    }
    public function rewind($file){
        /* Quand t'auras trouvé gros se sera cool */
        sleep(1);
    }
    public function advance($file){
        sleep(1);
    }
    public function increaseVolume($file){
        /* Quand t'auras trouvé gros se sera cool */
        sleep(1);
    }
    public function decreaseVolume($file){
        /* Quand t'auras trouvé gros se sera cool */
        sleep(1);
    }
}