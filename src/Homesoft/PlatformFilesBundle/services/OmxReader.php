<?php

namespace Homesoft\PlatformFilesBundle\services;


class OmxReader {
    public function play($file) {
        shell_exec('omxplayer '.$file);
        sleep(1);
    }
    public function stop() {
        shell_exec('killall -9 omxplayer');
        sleep(1);
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