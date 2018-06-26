<?php

$host="localhost";
$dbusername="whisper";
$dbpassword="whisper1234";
$dbname="hotel";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
$conn->set_charset("utf8mb4");


?>
