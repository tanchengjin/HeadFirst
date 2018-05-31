<?php
namespace lib;
//|====================================
//|厂家提供音响类
//|====================================
class Stereo{
    public function on(){
        echo '打开音响<br>';
    }
    public function off()
    {
    echo '关闭音响<br>';
    }
    public function setCd(){
    echo '设置cd<br>';
    }
    public function setDvd(){
        echo '设置dvd<br>';
    }
    public function setRadio(){
        echo '设置声音<br>';
    }
    public function setVolume($volume){
        echo '现在音量大小为'.$volume.'<br>';
    }
}