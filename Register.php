<?php
include("insertdatabase.php");
    $return = storeMessage();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="" method="POST">
                        <input type="text" class="input-box" placeholder="Gebruikersnaam">
                        <input type="password" class="input-box" placeholder="Wachtwoord">
                        <button type="submit" class="submit-btn">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                            <button type="button" class="btn" onclick="openRegistreer()">Ik heb nog geen account</button>
                            <a href="">Wachtwoord Vergeten</a>
                </div>
                <div class="card-back">
                    <h2>REGISTREER</h2>
                    <form action="register.php" method="POST">
                        <input type="text" class="input-box" placeholder="Gebruikersnaam" name="">
                        <input type="email" class="input-box" placeholder="Email">
                        <input type="password" class="input-box" placeholder="Wachtwoord">
                        <button type="submit" class="submit-btn">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>
                        <form>
                            <button type="button" class="btn-registreer" onclick="openLogin()">Ik heb een account</button>
                            <a href="">Wachtwoord Vergeten</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // login en registeer flip
        var card = document.getElementById("card")

        function openRegistreer() {
            card.style.transform = "rotateY(-180deg)"
        }

        function openLogin() {
            card.style.transform = "rotateY(0deg)"
        }
    </script>
</body>

</html>