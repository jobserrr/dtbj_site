<?php 
    function db_connect()       
    {
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "dtbj_database";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error)
        {
        die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            //die("Connection succes: ");
        }

        return $conn;
    }
    function getGuestbookPosts()
    {
     // create database connection
        $conn = db_connect();

        // define empty array posts
        $posts = array();

        // define sql

        $getPostsSQL = "

        SELECT * FROM 'gebruikersgegevens' ORDER BY 'Gebruikersnaam' ASC";

        // run / execute query

        // this will result in a result set or

        $result = $conn->query($getPostsSQL) or die($conn->error);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

        return $posts;
    }

    function storeMessage()
    {
        
        // check if there was a form posted     with method='post' 
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            // Fills all variables with the posted data from the form
            $Gebruikersnaam = trim($_POST['Gebruikersnaam']);
            $Password = trim($_POST['Password']);
            $Email = trim($_POST['Email']);
            echo "hoi";
            $errorMessage = array();

            // Checks if any text areas are NOT filled in, if NOT it  fills the errorMessage string with the according message
            if($Gebruikersnaam == "")
            {
                // add item to array errorMessage
                $errorMessage[] = "Please enter your first name";
            }

            if($Password == "")
            {
                // add item to array errorMessage
                $errorMessage[] = "Please enter your last name";
            }

            elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL))
            {
                // add item to array errorMessage
                $errorMessage[] = "This email adress is not valid, please enter a valid adress";
            }

            // if($MessageTitle == "")
            // {
            //     // add item to array errorMessage
            //     $errorMessagearray() = "Please enter a title for your message";
            // }

            // if($Message == "")
            // {
            //     // add item to array errorMessage
            //     $errorMessagearray() = "Please fill in your message";
            // }

            // // check if message has not more than 160 characters
            // elseif(strlen($Message) > 160)
            // {
            //     $errorMessagearray() = "Message too long, please enter a message under the 160 characters";
            // }
            if(count($errorMessage) > 0)
            {
                return $errorMessage;
            }
            else
            {
                // Connects with database and inserts SQL code in the database's SQL
                $conn = db_connect();

                $insertPostSQL = "
                INSERT INTO `gebruikersgegevens`
                (
                    `Gebruikersnaam`,
                    `Password`,
                    `Email`

                    )
                    VALUES
                    (
                        null,
                        '" . $Gebruikersnaam . "',
                        '" . $Password . "',
                        '" . $Email . "'
                    )   
                    ";

                    $result = $conn->query($insertPostSQL) or die($conn->error);
            }
            $result = null;
            // checks if all came through and is inserted, if true fills errorMessage string with confirmation message
            if($result != null)
            {
                return array("Thank you for filling in our form!", "We are looking forward to your next message!");
            }
            return false;
        }
        // If non of the above happened AKA the page has just been loaded in this message will be filled into the errorMessage string
        return "Please fill in our Guestbook";
    }
?>