<?php


class Data
{
    
    protected $host = "localhost";
    protected $port = "3306";
    protected $user = "root";
    protected $password = "root";
    protected $database = "transfer_accounts";

    protected $connection = new mysqli($this->host, $this->port, $this->user, $this->password, $this->database);

    function __construct(){
        if ($this->connection->connect_error) {
            die("Connection failed: ". $this->connection->connect_error);
        }
    }

    function get_list($query){
        $list = array();
        $result = mysqli_query($this->connection, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($this->connection));
        }
        while ($row = mysqli_fetch_assoc($result))
        {
            $list[] = $row;
        }
    }
}
?>