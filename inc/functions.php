<?php
function getPost()
{
    // Create databses connection
    $conn = db_connect();
    // define empty array posts
    $posts = [];
    // define sql
    $getPostsSQL = "
    SELECT * FROM `post`
    ORDER BY
    `postId`
    ASC
    ";
    // run / execute query
    // this will result in a result ser or
    $result = $conn->query($getPostsSQL) or die($conn->error);
    // fetch the result to an associative array
    $posts = $result->fetch_all(MYSQLI_ASSOC);
    // return the array
    return $posts;
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
            $conn = db_connect();
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
            $result = $conn->query($insetPostSQL) or die($conn->error);
        }
        if($result)
        {
            return array("Thnx for filling in the form", "We look out to your next message!");
        }

        return false;
    }
    return "Please fill in our Guestbook";
}
?> 

