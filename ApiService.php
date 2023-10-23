<?php

use Data;

class ApiService
{
    protected $data;
    public function __construct(Data $data){
        $this->data = $data;
    }

    function account_list($id)
    {
        $this->data->get_list("SELECT id FROM accounts WHERE client_id = '$id'");
    }

    function transaction_history($id)
    {
        $this->data->get_list("SELECT * FROM accounts WHERE sender_id = '$id' OR receiver_id = '$id'");
    }

    function fund_transfer($sender_id, $receiver_id, $amount)
    {
        //
    }
}

?>