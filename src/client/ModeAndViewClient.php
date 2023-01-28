<?php

namespace muyomu\view\client;

use muyomu\http\Request;
use muyomu\http\Response;

interface ModeAndViewClient
{
    public function view(Request $request,Response $response):void;

    public function setViewName(string $name):void;
}