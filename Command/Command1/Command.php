<?php
//|========================
//|命令接口
//|========================
interface Command{
    //所有命令对象都必须实现此方法
    public function execute();
}