<?php
namespace command;
//|====================================
//|命令，用来打开灯
//|====================================
class LightOnCommand implements \Command{
    public $light_on;
    public function __construct(\lib\Light $light){
        $this->light_on=$light;
    }
    public function execute(){
        $this->light_on->on();
    }
    public function undo()
    {
        $this->light_on->off();
    }
}