<?php 

$sname = "localhost";
$uname= "root";
$password="usbw";

$db_name = "dtbj_database";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn){
    echo"connection failed!";
}

?>