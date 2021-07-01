<?php
session_start();

  if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTBJ BV.</title>
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/stylehomepage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body>
    <div class="post_page">
      <div class="sidebar"  onclick="RemoveName()">
        <div class="logo_content">
          <div class="logo">
            <!-- <img src="images/favicon.png" alt="LOGO"> -->
            <div class="logo_name">DTBJ BV.</div>
          </div>
          <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
          <li>
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-home'></i>
              <span class="links_name">Home</span>
            </a>
            <span class="tooltip">Home</span>
          </li>
          <li>
            <a href="account.php">
              <i class='bx bx-user'></i>
              <span class="links_name">Account</span>
            </a>
            <span class="tooltip">Account</span>
          </li>
          <li>
            <a href="Settings.php">
              <i class='bx bx-cog'></i>
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
                  <div class="name"><?php echo $_SESSION['name']  ?></div>
                  <div class="email">@<?php echo $_SESSION['user_name']?></div>
              </div>
            </div>
            <a class="logout" href="logout.php"><i class='bx bx-log-out' id="log_out"></i></a>
          </div>
        </div>
      </div>
      
      <div class="home_content">
      <div class="add_message">
        <a href="post-message.php"><i class='bx bx-message-add'></i></a>
      </div>
  <?php
    $sname = "localhost";
    $uname= "root";
    $password="";
    $db_name = "dtbj_database";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn){
      echo"connection failed!";
}     
      $sql = "SELECT * FROM `post` p join gebruikers g on p.id = g.id ORDER BY `postId` DESC";
      $result = $conn->query($sql);
    
      if ($result->num_rows > 0) {
        // output data of each row
        $rows = 0;
        while($row = $result->fetch_assoc()) {
        $rows++;
        if($row["postId"] > 0){?>
           <div class="home_container">
            <div class="homemessage_container">
              <div class="homemessageheader">
                <div class="home-profilepictures">
                  <img src="images/profielfoto.png" alt="Profile Picture">
                </div>
                <div class="home-profilename">
                
                <h4 class=home-username ><a href="">@<?php echo $row["user_name"] .  "\n"?></a><?php   echo $row["name"] ?> </h4>
              
                </div>
              </div>
              <div class="home-messagebox">
              <h4 class=home-username >
                <?php 
                // echo "<img src=". "\"". $row["postImage"]. "\"". "alt=". "\"IMG\"". ">";
                echo "<p>". $row["postMessage"]. "</p>";
                ?>
              </div>
              <div class="homemessagefooter">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
              </div>
            </div>
          </div>
          <?php
          }
          }
          }
          ?>
    <script type="text/javascript" src="java/jquery.js"></script>
    <script>
      let btn = document.querySelector("#btn");
      let sidebar = document.querySelector(".sidebar");
      let searchBtn = document.querySelector(".bx-search");

      $("#btn").click(function()
      {
        if(OnPhone == 1)
        {
          $(".homemessage_container").fadeToggle(500);
        }
      })

      setInterval(function Dummy()
      {
        if(window.screen.width <= 415)
      {
        OnPhone = 1;
      }
      else
      {
        OnPhone = 0;
      }
      }, 1)           
      btn.onclick = function() {
        sidebar.classList.toggle("active");
      }
      searchBtn.onclick = function() {
        sidebar.classList.toggle("active");
      }
      function myFunction(x) {
        x.classList.toggle("fa-thumbs-down");
      }
      </script>
      <script>
      function readCookie(name) {
        var c = document.cookie.split('; '),
          cookies = {},
          i, C;

        for (i = c.length - 1; i >= 0; i--) {
          C = c[i].split('=');
          cookies[C[0]] = C[1];
        }

        return cookies[name];
        localStorage.setItem("selLanguage", cookies[name])
      }
      console.log(readCookie('googtrans'));
    </script>
      <script>
        jQuery('.lang-select').click(function() {
        var theLang = jQuery(this).attr('data-lang');
        jQuery('.goog-te-combo').val(theLang);
          //alert(jQuery(this).attr('href'));
        window.location = jQuery(this).attr('href');
        location.reload();
              });
      </script>
      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({
            pageLanguage: 'en'
          }, 'google_translate_element');
          }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </body>

  </html>
<?php
} else {
  header("location: logout.php");
  exit();
}
?>
