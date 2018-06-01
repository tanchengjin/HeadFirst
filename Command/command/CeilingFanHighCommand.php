<?php
namespace command;
class CeilingFanHighCommand implements \Command{
    public $ceiling_fan;
    //用于存储最后按下的命令
    public $prev_speed;
    public function __construct(\lib\CeilingFan $ceilingFan)
    {
        $this->ceiling_fan=$ceilingFan;
    }
    public function execute(){
        //记录之前风扇的状态
        $this->prev_speed=$this->ceiling_fan->getSpeed();
        var_dump($this->ceiling_fan->$HIGH);
        //设置风扇高速转动
        $this->ceiling_fan->high();
    }
    public function undo()
    {
        if($this->prev_speed == $this->ceiling_fan::HIGH){
            $this->ceiling_fan->high();
        }elseif ($this->prev_speed == $this->ceiling_fan::MEDIUM){
            $this->ceiling_fan->medium();
        }elseif ($this->prev_speed == $this->ceiling_fan::LOW){
            $this->ceiling_fan->low();
        }elseif($this->prev_speed == $this->ceiling_fan::OFF){
            $this->ceiling_fan->off();
        }
    }
}