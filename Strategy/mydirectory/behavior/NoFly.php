<?php
namespace behavior;
use FlyBehavior;
class NoFly implements FlyBehavior{
    public function fly(){
        echo '不会飞行';
    }
}