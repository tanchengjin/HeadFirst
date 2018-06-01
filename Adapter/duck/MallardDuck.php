<?php
//|===============================
//|绿头鸭
//|===============================
class MallardDuck implements Duck{
    public function quack()
    {
        echo '呱呱叫';
    }
    public function fly()
    {
        echo '飞行';
    }
}