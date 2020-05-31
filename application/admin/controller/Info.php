<?php


namespace app\admin\controller;

use think\Controller;


class Info extends Controller
{
    public function index(){
        return $this->fetch();
    }
}