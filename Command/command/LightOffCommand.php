<?php
namespace command;
class LightOffCommand implements \Command{
    public $light_off;
    public function __construct(\lib\Light $light)
    {
        $this->light_off=$light;
    }

    public function execute()
    {
        $this->light_off->off();
    }
    public function undo()
    {
        $this->light_off->on();
    }
}