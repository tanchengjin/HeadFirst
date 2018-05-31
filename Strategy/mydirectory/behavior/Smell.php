<?php
namespace behavior;
use CapacityBehavior;
class Smell implements CapacityBehavior{
    public function capacity(){
        echo '嗅觉非常灵敏';
    }
}