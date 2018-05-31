<?php
namespace lib;
//|=============================
//|厂家提供功能类 用于车库
//|=============================
class GarageDoor{
    public function up(){
        echo '车库门向上开启<br>';
    }
    public function down(){
        echo '车库门向下关闭<br>';
    }
    public function stop(){
        echo '车库门停止<br>';
    }
    public function lightOn(){
        echo '车库灯打开<br>';
    }
    public function lightOff(){
        echo '车库灯关闭<br>';
    }
}