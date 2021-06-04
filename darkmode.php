<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>* {
    margin: 0;
}

#IndexBody {
    height: 100%;
    width: 100%;
    /* color: black;
    background-color: white; */
}

.dark-mode {
    background-color: black;
    color: white;
}

.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: black;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: grey;
}

input:focus+.slider {
    box-shadow: 0 0 1px grey;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}


/* Rounded sliders */

.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}</style>
</head>

<body class="">
    <div class="body">
        <div class="switch">
            <h2>toggle dark-mode</h2>
            <label class="switch" onchange="ToggleDarkMode()">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <script type="text/javascript" src="java/java.js"></script>
</body>

</html>
