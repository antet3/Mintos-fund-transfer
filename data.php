<?php

$host = "localhost";
$port = "3306";
$user = "root";
$password = "root";
$database = "transfer_accounts";

$connection = new mysqli("$host:$port", $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$query = "SELECT * FROM accounts";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
$accounts = array();
while ($row = mysqli_fetch_assoc($result)) {
    $accounts[] = $row;
}

$query = "SELECT * FROM transactions";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
$transactions = array();
while ($row = mysqli_fetch_assoc($result)) {
    $transactions[] = $row;
}

mysqli_close($conn);

?>