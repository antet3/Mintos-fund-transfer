<?php

class ApiService
{
    function account_list($client, $result)
    {
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                if($row["client_id"] == $client){
                    echo $row["id"];
                }
            }
        }
    }

    function transaction_history($account_id)
    {
        //
    }

    function fund_transfer($account_id_1, $account_id_2, $transfer_amount, $currency_code_1, $currency_code_2)
    {
        //
    }
}

?>