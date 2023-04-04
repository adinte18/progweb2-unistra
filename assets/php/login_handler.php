<?php

include (__DIR__ . '/ORM.php');

$orm = new ORM();


$username = $_POST['username'];
$password = $_POST['password'];


$orm->loginUser($username, $password);

?>