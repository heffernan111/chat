<?php

$host = "localhost";
$user = "homestead";
$password = "secret";
$port = 3306;
$db_name = "chat";

$con = new mysqli($host, $user, $password, $db_name);

function formatdate($date){
	return date('g:i a', strtotime($date));
}


?>