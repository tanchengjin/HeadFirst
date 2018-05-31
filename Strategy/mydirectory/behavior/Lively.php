<?php
namespace behavior;
use WalkBehavior;
class Lively implements WalkBehavior{
    public function walk(){
        echo '欢快的用四只脚爬行,看见主人很高兴';
    }
}