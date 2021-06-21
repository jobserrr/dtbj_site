<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DTBJ BV.</title>
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="css/stylehomepage.css">
  <link rel="stylesheet" type="text/css" href="css/styleaccount.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="post_page">
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        <!-- <img src="images/favicon.png" alt="LOGO"> -->
        <div class="logo_name">DTBJ BV.</div>
      </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav_list">
    <li>
        <i class='bx bx-search' ></i>
        <input type="text" placeholder="Search...">        
      <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="post.php">
        <i class='bx bx-home' ></i>
        <span class="links_name">Home</span>
        </a>
      <span class="tooltip">Home</span>
      </li>
      <li>
        <a href="account.php">
        <i class='bx bx-user' ></i>
        <span class="links_name">Account</span>
        </a>
      <span class="tooltip">Account</span>
      </li>
      <li>
        <a href="settings.php">
        <i class='bx bx-cog' ></i>
        <span class="links_name">Settings</span>
        </a>
      <span class="tooltip">Settings</span>
      </li>
    </ul>
    <div class="profile_content">
      <div class="profile">
        <div class="profile_details">
          <img src="images/profielfoto.png" alt="PF">
          <div class="name_email">
            <div class="name">Jesper Pluijm</div>
            <div class="email">86053@roc-teraa.nl</div>
          </div>
        </div>
        <i class='bx bx-log-out' id="log_out"></i>
      </div>
    </div>
  </div>
  <div class="home_content">
    <div class="background-img">         
       <img src="./images/profielfoto.png" alt="Avatar" >

        <!-- <div class="foto">
        </div> -->
    </div>
    <div class="form">
      <div class="container">
        <h1>Thijs Klerkx</h1>
      </div>
    <div class="scroll">
      <!-- <div class="posts">
        <div class="background-post">
          Naam:
        </div>
        <DIV class="bericht">
          Hier komt uw bericht te staan!
        </DIV>
      </div>
      <div class="posts">
        <div class="background-post">
          Naam:
        </div>
        <DIV class="bericht">
          Hier komt uw bericht te staan!
        </DIV>
    </div>
    <div class="posts">
        <div class="background-post">
          Naam:
        </div>
        <DIV class="bericht">
          Hier komt uw bericht te staan!
        </DIV>
    </div>
    <div class="posts">
        <div class="background-post">
          Naam:
        </div>
        <DIV class="bericht">
          Hier komt uw bericht te staan!
        </DIV>
    </div>
    </div> -->
    <div class="home_container">
        <div class="homemessage_container">
          <div class="homemessageheader">
            <div class="home-profilepictures">
              <img src="images/profielfoto.png" alt="Profile Picture">
            </div>
            <div class="home-profilename">
            <h4 class="home-username">DaanRijnders (username)</h4>
            </div>
          </div>
          <div class="home-messagebox">
            <img src="images/logo.png" alt="">
            <p>Hallo Mensen!
              Welkom bij mijn eerste post. Ik ga vandaag aanslag plegen op het huis van
              jesper pluijm. Ik hoop dat ik zijn hele huis opblaas. Fijne dag allemaal project X in gemert
            </p>
          </div>
          <div class="homemessagefooter">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
          </div>
        </div>
      </div>
  </div>
  </div>
  
  <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");
        btn.onclick = function(){
          sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function(){
          sidebar.classList.toggle("active");
        }
        function myFunction(x) {
        x.classList.toggle("fa-thumbs-down");
        }
</script>
</body>
</html>