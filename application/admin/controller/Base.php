<?php

namespace app\admin\controller;
use think\App;
use think\Controller;
use think\process\pipes\Windows;
use think\Request;

/**
 * 后台公共继承类
 * Class Base
 * @package app\admin\controller
 */
class Base extends Controller
{
    public function __construct(Request $request, App $app)
    {
        parent::__construct($request, $app);

    }

    public function returnSuccess(){

    }

    public function returnError(){

    }

    public function _empty(){
      return  redirect(url('Info/index'));
    }
}