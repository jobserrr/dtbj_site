<?php
function db_connect()
{

}
function storeMessage()
{



    if($_SERVER['REQUEST_METHOD'] == "POST")
    {


        // fetch posted data
        $userMessage        = trim($_POST['userMessage']);
        
        $errorMessage = [];
        // Empty first name
        if($userMessage == "")
        {
            // add new item to the array $error
            $errorMessage[] = "Please leave a valid message";
        }
        elseif(strlen($userMessage) > 160)
        {
            $errorMessage[] = "The message provided is too long, max 160 characters permitted!";
        }
        // count the number of items in $errorMessage
        if(count($errorMessage) > 0)
        {
            // errors occurred
            // don't do anything
            // just return an error or errors
            return $errorMessage;
        }
        else // if count($errorMessage) == 0
        {

            $sname = "localhost";
            $uname= "root";
            $password="";
            
            $db_name = "dtbj_database";
            
            $conn = mysqli_connect($sname, $uname, $password, $db_name);
            // define the query to be sent
            $insetPostSQL = "
            INSERT INTO `post`
            (
                `postId`,
                `postMessage`
            )
            VALUES
            (
                '',
                '" . $userMessage . "'
            )
            ";
           
            // run / execute the query and store in result
            // if boolean true, then the SQL passed
            if (mysqli_query($conn, $insetPostSQL)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $insetPostSQL . "<br>" . mysqli_error($conn);
              }
            // $result = $conn->query($insetPostSQL) or die($conn->error);
        }
        
       
        return false;
    }
    return "Please fill in our Guestbook";
}
storemessage();
?> 

