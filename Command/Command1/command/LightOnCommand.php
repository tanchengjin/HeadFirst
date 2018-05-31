<?php
namespace command;
use Command;
//|====================================
//|命令，用来打开灯
//|====================================
use lib\Light;
class LightOnCommand implements Command{
    public $light;
    public function __construct(Light $light){
        $this->light=$light;
    }
    public function execute(){
        $this->light->on();
    }
}