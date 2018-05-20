<?php

$host = "localhost";
$user = "homestead";
$password = "secret";
$port = 3306;
$db_name = "chat";

$connection= new mysqli($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysqli($database, $connection);


$truncatetable= mysqli("TRUNCATE TABLE table_name");

if($truncatetable !== FALSE)
{
   echo("All rows have been deleted.");
}
else
{
   echo("No rows have been deleted.");
}

?>