<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="java/java.js"></script>
</head>
<body>
<div class="container">
        <div class="card">
            <div class="inner-box" id="card">
            <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="login-check.php" method="POST">
                        <?php if (isset($_GET['error'])) {
                        ?><p class="error"><?php echo $_GET['error']; ?></p><?php
                                                                        } ?>
                        <input type="text" name="uname" class="input-box" placeholder="Gebruikersnaam">
                        <input type="password" name="password" class="input-box" placeholder="Wachtwoord">
                        <button type="submit" class="submit-btn pulse">Login</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="transitionToPage('Register.php')">Ik heb nog geen account</button>
                    <a href="">Wachtwoord Vergeten</a>
                </div>
                
                <div class="card-back">
                    <h2>REGISTREER</h2>
                    <form action="signup-check.php" method="POST">
                        <?php if (isset($_GET['error'])) {
                        ?><p class="error"><?php echo $_GET['error']; ?></p><?php } ?>
                        <input type="text" class="input-box" placeholder="Gebruikersnaam" name="uname">
                        <input type="text" class="input-box" placeholder="name" name="name">
                        <input type="password" class="input-box" placeholder="Wachtwoord" name="password">
                        <input type="password" class="input-box" placeholder="Vul wachtwoord opnieuw in" name="re_password">
                        <button type="submit" class="submit-btn">login</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                    <a onclick="transitionToPage('register.php')"><button type="button" class="btn-registreer" >Ik heb een account</button></a>
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
        
        window.transitionToPage = function(href) {
    document.getElementById('card').style.transform = "rotateY(-200deg)"
    setTimeout(function() { 
        window.location.href = href
    }, 500)
    document.addEventListener('DOMContentLoaded', function(event) {
    document.getElementById('card').style.transform = "rotateY(-200deg)"
})  
}
    </script>
</body>
</html>