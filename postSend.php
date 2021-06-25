<?php 
include "inc/db_connect.php";
function storemessage(){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $postMessage = $_POST['postMessage'];
        $errorMessage = array();
        if($postMessage == ""){
            $errorMessage[] = "kan bericht niet posten!";
        }
    }

    if(count($errorMessage) > 0)
            {
                return $errorMessage;
            }
            else{
    // Connects with database and inserts SQL code in the database's SQL
    $conn = db_connect();

    $insertPostSQL = "
    INSERT INTO `post`
    (
        `postMessage`
        )
        VALUES
        (
            null,
            '" . $postMessage . "'
        )   
        ";

        $result = $conn->query($insertPostSQL) or die($conn->error);
}
if($result =! null){
    header("location: post-message.php?succes=post gemaakt!");
exit();
}else{
    header("location: post-message.php?error=onbekend probleem&$user_data");
exit();
$result = null;
}
}

?>