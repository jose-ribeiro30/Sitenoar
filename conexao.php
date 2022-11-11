<?php

$host = "sql201.epizy.com";
$db = "epiz_32971908_starjobs";
$user = "epiz_32971908";
$pass = "W5vOLHo9OtwZW2";

$mysqli = new mysqli($host,$user,$pass,$db);

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

?>