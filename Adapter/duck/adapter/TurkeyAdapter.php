<?php
namespace adapter;
//|==========================================
//|将火鸡冒充成鸭子对象
//|将火鸡适配成鸭子对象
//|==========================================
class TurkeyAdapter implements \Duck{
    public $turkey;
    //必须是一个作为参数的Turkey(火鸡)对象
    public function __construct(\Turkey $turkey)
    {
        $this->turkey=$turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }
    public function fly()
    {
        //火鸡飞行很短  但可以长途飞行 只需要调用5次飞行方法即可
        for ($i=0;$i<5;$i++){
            $this->turkey->fly();
        }
    }
}