<?php

namespace Homesoft\PlatformFilesBundle\services;


class OmxReader {
    private $fifoFile = "/tmp/cmd-omxplayer";
    public function link($file) {
        if($this->fifoExist()){
            $this->removeFifo();
        }
        $this->createFifo();
        $cmd = 'omxplayer -o hdmi --blank ' . $file . " < " . $this->fifoFile;
        //$cmd = 'mplayer -vo x11 -slave -input file='. $this->fifoFile.' '.$file;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function play() {
        sleep(3);
        $cmd = 'echo . > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function pause() {
        $cmd = 'echo -n p > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        return $msg;
    }

    public function backward() {
        $cmd = 'echo -n "<" > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function stepBackward() {
        $cmd = 'echo -n $\'\x5b\x44\' > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function fastBackward() {
        $cmd = 'echo -n "<" > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function forward() {
        $cmd = 'echo -n ">" > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function fastForward() {
        $cmd = 'echo -n ">" > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function stepForward() {
        $cmd = 'echo -n $\'\x1b\x5b\x43\' > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function stop() {
        $cmd = 'echo -n q > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        $this->kill();
        return $msg;
    }

    public function kill() {
        $cmd = 'killall omxplayer.bin';
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function loadSubtitle() {
        $msg = shell_exec('echo -n s > '.$this->fifoFile);
        sleep(1);
        return $msg;
    }

    public function volumeUp() {
        $msg = shell_exec('echo -n + > '.$this->fifoFile);
        sleep(1);
        return $msg;
    }

    public function volumeDown() {
        $msg = shell_exec('echo -n - > '.$this->fifoFile);
        sleep(1);
        return $msg;
    }
    public function volumeOff() {
        $msg = shell_exec('echo -n - > '.$this->fifoFile);
        sleep(1);
        return $msg;
    }

    public function fifoExist() {
        if(file_exists($this->fifoFile)) {
            return true;
        }
        return false;
    }

    public function createFifo() {
        $cmd = 'mkfifo '.$this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
    public function removeFifo() {
        $cmd = 'rm ' . $this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
    public  function getFifoFile() {
        return $this->fifoFile;
    }
    public function setFifoFile($fifoFile){
        $this->fifoFile = $fifoFile;
    }
}