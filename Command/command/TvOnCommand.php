<?php
namespace command;
class TvOnCommand implements \Command{
    public $tv_on;
    public function __construct(\lib\Tv $tv)
    {
        $this->tv_on=$tv;
    }
    public function execute(){
        $this->tv_on->on();
        $this->tv_on->setInputChannel();
        $this->tv_on->setVolume();
    }
    public function undo()
    {
        $this->tv_on->off();
    }
}