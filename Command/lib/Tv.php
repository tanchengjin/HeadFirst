<?php
namespace lib;
class Tv{
    public function on(){
        echo '已打开Tv<br>';
    }
    public function off(){
        echo '已关闭Tv<br>';
    }
    public function setInputChannel(){
        echo '已设置输入频道<br>';
    }
    public function setVolume(){
        echo '已设置tv Volume<br>';
    }
}