<?php

namespace Homesoft\PlatformFilesBundle\services;


class OmxReader {
    private $fifoFile = "/tmp/cmd-omxplayer";
    private $listCtrlVideo = array(
        "play"          => ".",
        "pause"         => "-n p",
        "stop"          => "-n q",
        "backward"      => "-n '<'",
        "forward"       => "-n '>'",
        "step-backward" => "-n $'\x5b\x44'",
        "step-forward"  => "-n $'\x1b\x5b\x43'",
        "fast-backward" => "-n '<'",
        "fast-forward"  => "-n '>'",
        "load-subtitle" => "-n s",
        "volume-up"     => "-n +",
        "volume-down"   => "-n -"
    );
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
    public function ctrlVideo($cmd){
        $cmd = 'echo '.$this->listCtrlVideo[$cmd].' > '.$this->fifoFile;
        $msg = shell_exec($cmd);
        return $msg;
    }
    public function kill() {
        $cmd = 'killall omxplayer.bin';
        $msg = shell_exec($cmd);
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