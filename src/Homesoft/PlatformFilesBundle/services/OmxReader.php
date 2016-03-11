<?php

namespace Homesoft\PlatformFilesBundle\services;


class OmxReader {
    private $fifoFile = "/tmp/cmd-omxplayer";
    private $logFile = "/tmp/log-space-crap.txt";
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
        if(file_exists($this->fifoFile)){
            $this->removeFifo();
        }
        $this->createFifo();
        if(!file_exists($this->logFile)){
            $this->createLog();
        }
        $this->writeLog($file);
        $cmd = 'omxplayer -o hdmi --blank ' . $this->formatPath($file) . " < " . $this->fifoFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }

    public function formatPath($pathFile) {
        $pathFile = str_replace(' ', '\\ ', $pathFile);
        $pathFile = str_replace(')', '\\)', $pathFile);
        return str_replace('(', '\\(', $pathFile);
    }

    public function ctrlVideo($cmd){
        $msg = $this->readLog();
        switch($cmd){
            case "play":
                sleep(3);
                $cmd = 'echo '.$this->listCtrlVideo[$cmd].' > '.$this->fifoFile;
                shell_exec($cmd);
            break;
            case "stop":
                $this->eraseLog();
                $msg = "";
                $cmd = 'echo '.$this->listCtrlVideo[$cmd].' > '.$this->fifoFile;
                shell_exec($cmd);
                $this->kill();
            break;
            default:
                $cmd = 'echo '.$this->listCtrlVideo[$cmd].' > '.$this->fifoFile;
                shell_exec($cmd);
            break;
        }
        return $msg;
    }
    public function kill() {
        $cmd = 'killall omxplayer.bin';
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
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
    public function createLog(){
        $cmd = 'touch '.$this->logFile;
        $msg = shell_exec($cmd);
        sleep(1);
        return $msg;
    }
    public function writeLog($filePlaying) {
        $logFile = fopen($this->logFile, 'r+');
        ftruncate($logFile,0);
        fwrite($logFile, $filePlaying);
        fclose($logFile);
    }
    public function eraseLog() {
        $logFile = fopen($this->logFile, 'r+');
        ftruncate($logFile,0);
        fclose($logFile);
    }
    public function readLog() {
        if(!file_exists($this->logFile)){
            $this->createLog();
        }
        $logFile = fopen($this->logFile, 'r+');
        $fileSize = filesize($this->logFile);
        if($fileSize > 0){
            return fread($logFile, filesize($this->logFile));
        }
        return "";
    }
}