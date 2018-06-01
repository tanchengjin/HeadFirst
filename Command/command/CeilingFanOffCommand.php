<?php
namespace command;
class CeilingFanOffCommand implements \Command{
    public $ceiling_fan;
    public $prev_speed;
    public function __construct(\lib\CeilingFan $ceiling_fan)
    {
        $this->ceiling_fan=$ceiling_fan;
    }

    public function execute()
    {
        $this->prev_speed=$this->ceiling_fan->getSpeed();
        $this->ceiling_fan->off();
    }
    public function undo()
    {
        if($this->prev_speed == $this->ceiling_fan::$HIGH){
            $this->ceiling_fan->high();
        }elseif ($this->prev_speed == $this->ceiling_fan::$MEDIUM){
            $this->ceiling_fan->medium();
        }elseif ($this->prev_speed == $this->ceiling_fan::$LOW){
            $this->ceiling_fan->low();
        }elseif($this->prev_speed == $this->ceiling_fan::$OFF){
            $this->ceiling_fan->off();
        }
    }
}