<?php

use ApiService;
use http\Request;

class Api
{
    protected $service;
    public function __construct(ApiService $service)
    {
        $this->service = $service;
    }

    public function HandleRequest(){
        //
    }
}

?>