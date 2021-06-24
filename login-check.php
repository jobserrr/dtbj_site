<?php
session_start();
include "inc/db_connect.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function Validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = Validate($_POST['uname']);
    $pass = Validate($_POST['password']);
    if (empty($uname)) {
        header("location: login.php?error=Gebruikersnaam is verplicht");
        exit();
    } elseif (empty($pass)) {
        header("location: login.php?error=Wachtwoord is verplicht");
        exit();
    } else {
        //hashin the passowrd
        $pass = md5($pass);
        
        $sql = "SELECT * FROM `gebruikers` where user_name='$uname' and password='$pass' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['user_name']=== $uname && $row['password'] === $pass){
                // $_SESSION['user'] = $row[''];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("location: post.php");
                exit();
            } else {
                header("location: login.php?error=verkeerde gebruikersnaam of wachtwoord");
                exit();
            }
        } else {
            header("location: login.php?error=verkeerde gebruikersnaam of wachtwoord");
            exit();
        }
    }
} else {
    header("location: login.php");
    exit();
}
