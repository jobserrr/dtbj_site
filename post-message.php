<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/postModal.css">

</head>

<body>
    <div class="postbody">
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
    </div>

</body>

</html>