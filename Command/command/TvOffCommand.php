<?php
namespace command;
//|==================================
//|实现TV的关闭
//|==================================
class TvOffCommand implements \Command{
    public $tv;
    public function __construct(\lib\Tv $tv){
        $this->tv=$tv;
    }
    public function execute(){
        $this->tv->off();
    }
    public function undo()
    {
        $this->tv->on();
        $this->tv->setInputChannel();
        $this->tv->setVolume();
    }
}