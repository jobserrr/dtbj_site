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
          <a href="test.php">
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
                



    <form action="change-p.php" method="post">
     	<h2>Change Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Old Password</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <br>

     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password">
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
     	       <br>

     	<button type="submit">CHANGE</button>
          <a href="Settings.php" class="ca">Back</a>
     </form>
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
}else{
     header("Location: index.php");
     exit();
}
 ?>