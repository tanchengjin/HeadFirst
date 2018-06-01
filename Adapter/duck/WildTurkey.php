<?php
//|===============================
//|野生火鸡
//|===============================
class WildTurkey implements Turkey{
    public function gobble()
    {
        echo '火鸡咯咯叫<br>';
    }
    public function fly()
    {
        echo '火鸡飞不远但可以长途飞行<br>';
    }
}