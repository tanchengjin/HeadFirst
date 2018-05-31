<?php
namespace command;
use Command;
//|====================================
//|音响命令 关闭音响
//|====================================
class StereoOffCommand implements Command{
    public $stereo;
    public function __construct(\Stereo $stereo)
    {
        $this->stereo=$stereo;
    }

    public function execute(){
        $this->stereo->off();
    }
}