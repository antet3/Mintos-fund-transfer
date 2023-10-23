<?php

use ApiService;
use Data;

class Api
{
    protected $service;
    protected $data;
    public function __construct(ApiService $service)
    {
        $this->service = $service;
    }
    public function HandleRequest()
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if($requestMethod == 'GET')
        {
            if(isset($_GET['client_id'])){
                return $this->service->account_list($_GET['client_id']);
            }
            else if(isset($_GET['account_id'])){
                return $this->service->transaction_history($_GET['account_id']);
            }
            else{
                //case where nesagāja
            }
        }
        else if($requestMethod == 'POST'){
            if(isset($_POST['sender_id']) && isset($_POST['receiver_id']) && isset($_POST['amount'])){
                return $this->service->fund_transfer($_POST['sender_id'], $_POST['receiver_id'], $_POST['amount']);
            }
            else{
                //case where atkal nesagāja
            }
        }
    }
}

?>