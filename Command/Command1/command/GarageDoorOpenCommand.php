<?php
namespace command;
use Command;
use lib\GarageDoor;
class GarageDoorOpenCommand implements Command{
    public $garage;
    public function __construct(GarageDoor $garage)
    {
        $this->garage=$garage;
    }

    public function execute(){
        $this->garage->up();
    }
}