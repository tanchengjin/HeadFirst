<?php
namespace command;
use Command;
//|====================================
//|音响命令 关闭音响
//|====================================
class StereoOffCommand implements Command{
    public $stereo;
    public function __construct(\lib\Stereo $stereo)
    {
        $this->stereo=$stereo;
    }

    public function execute(){
        $this->stereo->off();
    }
    public function undo(){
        $this->stereo->on();
        //放入CD
        $this->stereo->setCd();
        //调整音量
        $this->stereo->setVolume(11);
    }
}