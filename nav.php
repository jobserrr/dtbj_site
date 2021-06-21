<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DTBJ BV.</title>
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="css/stylehomepage.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
          <a href="#">
            <i class='bx bx-user'></i>
            <span class="links_name">Account</span>
          </a>
          <span class="tooltip">Account</span>
        </li>
        <li>
          <a href="#">
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
              <div class="name">Jesper Pluijm</div>
              <div class="email">86053@roc-teraa.nl</div>
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
      <div class="home_container">
        <div class="homemessage_container">
          <div class="homemessageheader">
            <div class="home-profilepictures">
              <img src="images/profielfoto.png" alt="Profile Picture">
              <h4 class="home-username">DaanRijnders (username)</h4>
            </div>

            <div class="home-message">
              
            </div>
          </div>
          <div class="home-messagebox">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur explicabo ipsum porro incidunt quo, adipisci natus minima, odio vitae aut nam! Eius expedita perspiciatis nemo impedit illum provident et exercitationem.
          </div>


        </div>
      </div>



      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content postmodal">
            <div class="modal-body">
              <div class="wrapper">
                <div class="input-box">
                  <div class="post-area">
                    <form method="post" action="">
                      <span class="placeholder" id="myTextarea">whats happening</span>
                      <div class=" input editable" contenteditable="true" spellcheck="false" id="test2"></div>
                      <div class="input readonly" contenteditable="true" spellcheck="false"></div>
                      <p><img id="output" class="output" width="200" /></p>
                      <p> <img class="preview" id="preview" alt=""></p>
                      <p><img id="outputGif" width="200"></p>
                  </div>
                  <div class="privacy">
                    <i class='bx bx-globe'></i>
                    <span>iedereen kan reageren</span>
                  </div>
                </div>
                <div class="bottom">
                  <ul class="icons">
                    <li><label for="imgInp" style="cursor: pointer;"><i class='bx bxs-file-image'></i></label></li>
                    <li><label for="file2" style="cursor: pointer;"><i class='bx bxs-file-gif'></i></label></li>

                    <li><i class='bx bx-happy'></i></li>
                    <li><i class='bx bxs-user'></i></li>
                    <label for="imgInp">UPLOAD PICTURE:</label>
                    <input type="file" name="photo" id="imgInp" onchange="loadFile(event);" style="display: none;">
                    <input type="file" accept="image/gif" name="image" id="file2" onchange="loadFile(eventGif)" style="display: none;">
                  </ul>
                  <div class="content">
                    <span class="counter">100</span>
                    <button>post</button>
                  </div>
                </div>
                </form>
                <script src="java/postModal.js">
                  // var loadFile = function(event) {
                  //   var image = document.getElementById('output');
                  //   image.src = URL.createObjectURL(event.target.files[0]);
                  // };
                  // var loadFile = function(eventGif) {
                  //   var image = document.getElementById('outputGif');
                  //   image.src = URL.createObjectURL(event.target.files[0]);
                  // };
                  var loadFile = function(event) {
                    oldimg = $('.preview').attr('src');
                    var preview = document.getElementById('preview');
                    preview.src = URL.createObjectURL(event.target.files[0]);
                    newimg = preview.src;
                    if (newimg.indexOf('/null') > -1) {
                      preview.src = oldimg;
                    }
                  };

                  $('.submit-button').on('click', function(event) {
                    alert('This is a dummy submit button. It does nothing.');
                    event.preventDefault();
                  });
                </script>
                <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->
                <!-- </div> -->
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

</body>

</html>
<?php
