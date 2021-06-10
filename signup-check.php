<?php
session_start();
include "inc/db_connect.php";
if (isset($_POST['uname']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['re_password'])) {
    function Validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = Validate($_POST['uname']);
    $pass = Validate($_POST['password']);
    $name = Validate($_POST['name']);
    $re_pass = Validate($_POST['re_password']);
    $user_data = 'uname=' . $uname . '&name=' . $name;



    if (empty($uname)) {
        header("location: Register.php?error=Gebruikersnaam is verplicht&$user_data");
        exit();
    } elseif (empty($name)) {
        header("location: Register.php?error=Naam is verplicht&$user_data");
        exit();
    } elseif (empty($pass)) {
        header("location: Register.php?error=Wachtwoord is verplicht&$user_data");
        exit();
    } elseif (empty($re_pass)) {
        header("location: Register.php?error=Opnieuw wachtwoord invullen is verplicht&$user_data");
        exit();
    } elseif ($pass !== $re_pass) {
        header("location: Register.php?error=Wachtwoorden komen niet overeen&$user_data");
        exit();
    } else {
        //hashin the passowrd
        $pass = md5($pass);

        $sql = "SELECT * FROM `gebruikers` where user_name='$uname'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("location: Register.php?error=Deze gebruikersnaam is al gebruikt probeer een andere&$user_data");
            exit();
        }
        else{
            $sql2 = "insert into gebruikers(user_name, password, name) values('$uname', '$pass', '$name')";
            $result2 = mysqli_query($conn, $sql2);
            if($result2){
                header("location: Register.php?succes=account gemaakt!&$user_data");
            exit();
            }else{
                header("location: Register.php?error=onbekend probleem&$user_data");
            exit();
            }
        }
        
    }
    // } else {
    //     header("location: Register.php");
    //     exit();
}
