<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 user-scalable=no">
    <link rel="mask-icon" href="img/pinned_icon.svg?v=2" color="#333333">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png" sizes="32x32">
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ea942b1dc0.js" crossorigin="anonymous"></script>
    <title>James Rampton</title>
</head>
<body>
<style>
    body, html {
        background: #e2e1dc;
        background-repeat: repeat;
        width: 100%;
        height: 100%;
        margin: 0;
        position: relative;
        font-family: 'Darker Grotesque', sans-serif;
        font-size: 100%;
    }
    #wrapper {
        position: absolute;
        top: calc(50% - 90px);
        left: 50%;
        z-index: 10;
        width: 250px;
        height: 250px;
        margin: -125px 0 0 -125px;
        fill: #333333;
    }
    #logo {
        width: 250px;
        height: 250px;
    }
    #social {
        text-align: center;
        margin-top: 50px;
        font-size: 40px;
    }
    .social-link, .social-link:visited {
        padding: 15px;
        color: #333333;
        text-decoration: none;
        display: inine-block;
    }
    #copyright {
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        color: #bbbbbb;
    }
</style>
<div id="wrapper">
<svg id="logo" xmlns="http://www.w3.org/2000/svg" width="642" height="642" viewBox="0 0 642 642"><path d="M342.41,235.76H410C410,451.7,226,628.35.52,628.35V569.46c170.13,0,313.49-117.76,342.6-275h-29.6a319.77,319.77,0,0,0-20.07,111.76H231.94c0-215.94,184-392.59,409.54-392.59V72.54C515.5,72.54,403.53,137.71,342.41,235.76Z"/></svg>
<div id="social">
<a class="social-link" href="https://vimeo.com/jamesrampton"><i class="fa fa-vimeo"></i></a>
<a class="social-link" href="https://soundcloud.com/jamesrampton"><i class="fa fa-soundcloud"></i></a>
<a class="social-link" href="https://jamesrampton.bandcamp.com"><i class="fa fa-bandcamp"></i></a>
</div>
</div>
<p id="copyright">&copy; James Rampton <?php echo date("Y"); ?></p>
</body>
</html>
