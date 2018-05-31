<?php
namespace animal;
use Animal;
use behavior\Bark;
use behavior\NoFly;
use behavior\Lively;
use behavior\Smell;
//|==========================
//|小狗类
//|==========================
class Dog extends Animal{
    public function __construct()
    {
        $this->cry=new Bark();
        $this->fly=new NoFly();
        $this->walk=new Lively();
        $this->capacity=new Smell();
    }
}