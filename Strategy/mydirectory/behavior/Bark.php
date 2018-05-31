<?php
namespace behavior;
use CryBehavior;
class Bark implements CryBehavior{
    public function cry(){
        echo '汪汪叫';
    }
}