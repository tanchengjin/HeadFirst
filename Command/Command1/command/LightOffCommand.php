<?php
namespace command;
use Command;
class LightOffCommand implements Command{
    public $light_off;
    public function __construct(Light $light)
    {
        $this->light_off=$light;
    }

    public function execute()
    {
        $this->light->off();
    }
}