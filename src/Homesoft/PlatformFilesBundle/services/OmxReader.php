<?php

namespace Homesoft\PlatformFilesBundle\services;


class OmxReader {
    public function play($file) {
        $this->createFifo();
<<<<<<< HEAD
        $cmd = 'omxplayer -o hdmi --blank '.$file." < /tmp/cmd-omxplayer";
=======
        $cmd = 'omxplayer -o hdmi --blank '.$file." < /tmp/cmd";
>>>>>>> 26f9a8e7eb545ee8657103c1535fc2fc81128770

        //$this->stop();

        shell_exec($cmd);
<<<<<<< HEAD
        $cmd = "echo . > /tmp/cmd-omxplayer";
=======
        $cmd = "echo . > /tmp/cmd";
>>>>>>> 26f9a8e7eb545ee8657103c1535fc2fc81128770
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
    public function createFifo(){
        $cmd = 'mkfifo /tmp/cmd-omxplayer';
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
    public function removeFifo(){
        $cmd = 'rm /tmp/cmd-omxplayer';
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
    public function stop() {
        $msg = shell_exec('echo -n q > /tmp/cmd-omxplayer');
        $this->removeFifo();
        sleep(1);
        return $msg;
    }
    public function getInstance(){

    }
    public function pause() {
        $msg = shell_exec('echo -n p > /tmp/cmd-omxplayer');
        sleep(1);
        return $msg;
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