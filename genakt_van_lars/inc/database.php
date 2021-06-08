<?php
function dbconnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "dtbjsite";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        //die("Connection succes: ");
    }

    return $conn;
}

?>