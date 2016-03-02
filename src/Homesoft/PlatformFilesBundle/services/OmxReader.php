<?php

namespace Homesoft\PlatformFilesBundle\services;


class OmxReader {

    public function link($file) {
        if($this->fifoExist()){
            $this->removeFifo();
        }
        $this->createFifo();
        $cmd = 'omxplayer -o hdmi --blank ' . $file . " < /tmp/cmd-omxplayer";
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function play() {
        sleep(5);
        $cmd = "echo . > /tmp/cmd-omxplayer";
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function pause() {
        $cmd = "echo -n p > /tmp/cmd-omxplayer";
        $msg = shell_exec($cmd);
        return $msg;
    }

    public function rewind() {
        $cmd = "echo -n $'\x5b\x44' > /tmp/cmd-omxplayer";
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
    public function stop() {
        $cmd = "echo -n q > /tmp/cmd-omxplayer";
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function loadSubtitle() {
        $msg = shell_exec('echo -n s > /tmp/cmd-omxplayer');
        sleep(1);
        return $msg;
    }
    public function forward() {
        $cmd = "echo -n $'\x5b\x43' > /tmp/cmd-omxplayer";
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
    public function increaseVolume() {
        $msg = shell_exec('echo -n + > /tmp/cmd-omxplayer');
        sleep(1);
        return $msg;
    }
    public function decreaseVolume() {
        $msg = shell_exec('echo -n - > /tmp/cmd-omxplayer');
        sleep(1);
        return $msg;
    }

    public function fifoExist() {
        if(file_exists("/tmp/cmd-omxplayer")) {
            return true;
        }
        return false;
    }

    public function createFifo() {
        $cmd = 'mkfifo /tmp/cmd-omxplayer';
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
    public function removeFifo() {
        $cmd = 'rm /tmp/cmd-omxplayer';
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
}