<?php

function storeMessage()
{



    if ($_SERVER['REQUEST_METHOD'] == "POST") {


        







        // fetch posted data
        $userMessage        = trim($_POST['userMessage']);
        // $session_id         = $_SESSION['id'];
        $errorMessage = array();
        // Empty first name
        if ($userMessage == "") {
            // add new item to the array $error
            $errorMessage[] = "Please leave a valid message";
        } elseif (strlen($userMessage) > 160) {
            $errorMessage[] = "The message provided is too long, max 160 characters permitted!";
        } elseif (!isset($_SESSION['id'])) {
         
            $errorMessage[] = "you must log in to post a message";
        }
        // count the number of items in $errorMessage
        if (count($errorMessage) > 0) {
            // errors occurred
            // don't do anything
            // just return an error or errors
            return $errorMessage;
        } else // if count($errorMessage) == 0
        {
            
        

            $sname = "localhost";
            $uname = "root";
            $password = "";

            $db_name = "dtbj_database";

            $conn = mysqli_connect($sname, $uname, $password, $db_name);
            // define the query to be sent
            $insetPostSQL = "
            INSERT INTO `post`
            (
                `id`,
                `postId`,
                `postMessage`
            )
            VALUES
            (
                '" . $_SESSION['id'] . "',
                '',
                '" . $userMessage . "'
            )
            ";

            // run / execute the query and store in result
            // if boolean true, then the SQL passed
            if (mysqli_query($conn, $insetPostSQL)) {
                header("location: post.php");
            } else {
                echo "Error: " . $insetPostSQL . "<br>" . mysqli_error($conn);
            }
            // $result = $conn->query($insetPostSQL) or die($conn->error);
        }


        return false;
    }
    return "";
}

?>

