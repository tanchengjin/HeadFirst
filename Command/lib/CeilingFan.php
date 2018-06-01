<?php
namespace lib;
//|=============================
//|厂家提供类 风扇
//|=============================
class CeilingFan{
    public static $HIGH=3;
    public static $MEDIUM=2;
    public static $LOW=1;
    public static $OFF=0;
    public $location;
    public $speed;
    public function __construct($location='lv')
    {
        $this->location=$location;
        $this->speed=self::$OFF;
    }
    //吊扇高转速
    public function high(){
        $this->speed=self::$HIGH;
        echo '设置了高转速';
    }
    //设置中转速
    public function medium(){
        $this->speed=self::$MEDIUM;
    }
    //吊扇低速
    public function low(){
        $this->speed=self::$LOW;
    }
    //关闭吊扇
    public function off(){
        $this->speed=self::$OFF;
    }
    //获得吊扇现在转速
    public function getSpeed(){
        return $this->speed;
    }
}