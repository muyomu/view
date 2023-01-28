<?php

namespace muyomu\view;

use muyomu\http\Request;
use muyomu\http\Response;
use muyomu\view\client\ModeAndViewClient;

class ModeAndView implements ModeAndViewClient
{
    private string $viewName;

    private array $mode = array();

    public function view(Request $request,Response $response):void{
        $response->setHeader("Content-Type","text/html");
        $viewName = $this->viewName;
        $file = "../view/{$viewName}".".php";
        $result = file_exists($file);
        $PageData = $this->mode;
        if ($result){
            //数据类型
            include "../view/{$viewName}".".php";
        }else{
            //数据类型
            include "../view/http/400/404".".html";
        }
        die();
    }

    public function setViewName(string $name):void{
        $this->viewName = $name;
    }

    public function setAttribute(string $name,mixed $value):void{
        $this->mode[$name] = $value;
    }
}