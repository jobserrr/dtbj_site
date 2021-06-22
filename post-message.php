<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/postModal.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="postbody">
        <div id="arrowback"><a href="nav.php"><i class='bx bx-arrow-back'></i></a></div>
        <div class="wrapper">
            <div class="input-box">
                <div class="post-area">
                    <form method="post" action="postSend.php">
                        <span class="placeholder" id="myTextarea">whats happening</span>
                        <div class="input editable" contenteditable="true" spellcheck="false"></div>
                        <div class="input readonly" contenteditable="true" spellcheck="false"></div>
                        <img src="" id="imgJplu">
                </div>
                <div class="privacy">
                    <i class='bx bx-globe'></i>
                    <span>iedereen kan reageren</span>
                </div>
            </div>
            <div class="bottom">
                <ul class="icons">


                    <li><label for="imgInp" style="cursor: pointer;"><i class='bx bxs-file-image'></i><input type="text"></label></li>
                    <!-- <li><label for="file2" style="cursor: pointer;"><i class='bx bxs-file-gif'></i></label></li> -->

                    <li><i class='bx bx-happy'></i></li>
                    <li><i class='bx bxs-user'></i></li>
                    <!-- <label for="imgInp"><i class="bx bxs-gif"></i></label> -->
                    <!-- <input type="file" name="photo" id="imgInp" onchange="loadFile(event);" style="display: none;">
                    <input type="file" accept="image/gif" name="image" id="file2" onchange="loadFile(eventGif)" style="display: none;"> -->
                </ul>
                <div class="content">
                    <span class="counter">100</span>
                    <button>post</button>
                </div>
            </div>
            </form>
            <script src="java/postModal.js">
                
            </script>
        </div>
    </div>
    </div>



</body>

</html>
<!-- <p><img id="output" class="output" width="200" /></p>
<p> <img class="preview" id="preview" alt=""></p>
<p><img id="outputGif" width="200"></p> -->