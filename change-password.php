<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Change Password</title>
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
              <img src="images/profielfoto.png" alt="PF">
              <div class="name_email">
                <div class="name"><?php echo $_SESSION['name']  ?></div>
                <div class="email">@<?php echo $_SESSION['user_name'] ?></div>
              </div>
            </div>
            <a class="logout" href="logout.php"><i class='bx bx-log-out' id="log_out"></i></a>
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
                    <form action="change-u.php" method="post">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="mb-3 text-primary">Change Password</h3>
                        <?php if (isset($_GET['error'])) { ?>
                          <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                          <p class="success"><?php echo $_GET['success']; ?></p>
                        <?php } ?>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">Old Password</label>
                          <input type="password" name="op" class="form-control" placeholder="Old Password">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="phone">New Password</label>
                          <br>
                          <input type="password" name="np" class="form-control" placeholder="New Password">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="phone">Confirm New Passwordd</label>
                          <br>
                          <input type="password" name="c_np" class="form-control" placeholder="Confirm New Password">
                        </div>
                      </div>
                      <br>
                      <button type="button" class="btn btn-dark">Change</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
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

<?php
} else {
  header("Location: index.php");
  exit();
}
?>