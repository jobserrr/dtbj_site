<?php 
session_start();
 
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  include "inc/db_connect.php";
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DTBJ BV.</title>
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="css/styleSettings.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
  <div class="post_page" id="dark-mode light-mode">
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
          <i class='bx bx-search'></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
        </li>
        <li>
          <a href="post.php">
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
            <img src="images/Jep.png" alt="PF">
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
      <div class="container" id="dark-mode light-mode">
        <div class="row gutters">
          <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 Settings-centering">
            <div class="card h-100">
              <div class="card-body">
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-3 text-primary">Personal Details</h6>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="fullName">Username</label>
                      <input type="text" class="form-control" id="fullName" placeholder="Username">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="eMail">Email</label>
                      <input type="email" class="form-control" id="eMail" placeholder="email">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="phone">Password</label>
                      <br>
                    <a href="change-password.php"><button id="myBtn">Change password</button></a>
                    </body>
                    </html>
                    </div>
                  </div>
                  <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <h6 class="mb-3 text-primary">Settings</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="form-group">
                        <label for="Street">Dark-mode</label>
                        <br>
                        <label onclick="DarkModeOff()">Off<input checked type="radio" name="btn"></label>
                        <label onclick="DarkModeOn()">On<input type="radio" name="btn"></label>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="form-group">
                        <label for="Street">Translate</label>
                        <div id="google_translate_element"></div>

                        <script type="text/javascript">
                          function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                              pageLanguage: 'en'
                            }, 'google_translate_element');
                          }
                        </script>

                        <script>function DarkModeOff() {
                            localStorage.setItem("Mode", 0);
                            if (DarkModeVar == 0) {
                              var element = document.getElementById;
                              element.classList.toggle("light-mode");
                            }
                          }

                          function DarkModeOn() {
                            localStorage.setItem("Mode", 1);
                            if (DarkModeVar == 1) {
                              var element = document.getElementById;
                              element.classList.toggle("#dark-mode");
                            }
                          }
                          setInterval(function ModeTest() {
                            DarkModeVar = localStorage.getItem("Mode");
                            if (DarkModeVar == 1) {
                              var element = document.getElementById;
                              element.classList.toggle("#dark-mode");
                            }
                            if (DarkModeVar == 0) {
                              var element = document.getElementById;
                              element.classList.toggle("light-mode");
                            }
                          },)</script>

                        <script>
                          jQuery('.lang-select').click(function() {
                            var theLang = jQuery(this).attr('data-lang');
                            jQuery('.goog-te-combo').val(theLang);

                            //alert(jQuery(this).attr('href'));
                            window.location = jQuery(this).attr('href');
                            location.reload();

                          });
                        </script>

                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                      </div>
                    </div>
                  </div>
                  <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="text-right">
                        <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      let btn = document.querySelector("#btn");
      let sidebar = document.querySelector(".sidebar");
      let searchBtn = document.querySelector(".bx-search");

      btn.onclick = function() {
        sidebar.classList.toggle("active");
      }
      searchBtn.onclick = function() {
        sidebar.classList.toggle("active");
      }
    </script>
    <script type="text/javascript" src="java/java.js"></script>

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

</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>