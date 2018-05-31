<?php
namespace command;
use Command;
//|======================================
//|音响命令 开启音响
//|======================================
class StereoOnCommand implements Command{
    public $stereo_on;
    public function __construct(\Stereo $stereo)
    {
        $this->stereo_on=$stereo;
    }
    public function execute()
    {
        //打开音响
        $this->stereo_on->on();
        //放入CD
        $this->stereo_on->setCd();
        //调整音量
        $this->stereo_on->setVolume(11);
    }
}