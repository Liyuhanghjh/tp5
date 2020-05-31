<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return '欢迎来到TP5.1版本框架首页';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
