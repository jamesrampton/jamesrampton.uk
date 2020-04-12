<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png" sizes="32x32">
    <title>James Rampton</title>
</head>
<body>
<style>
    @-webkit-keyframes pulse {
        0%, 100% { fill: #292929; }
        50% { fill: #595959; width: 340px; height: 340px; margin: -170px 0 0 -170px;}
    }
    @-moz-keyframes pulse {
        0%, 100% { fill: #292929; }
        50% { fill: #595959; width: 340px; height: 340px; margin: -170px 0 0 -170px;}
    }
    @-o-keyframes pulse {
        0%, 100% { fill: #292929; }
        50% { fill: #595959; width: 340px; height: 340px; margin: -170px 0 0 -170px;}
    }
    @keyframes pulse {
        0%, 100% { fill: #292929; }
        50% { fill: #595959; width: 340px; height: 340px; margin: -170px 0 0 -170px;}
    }
    body, html {
        background: #e2e1dc;
        background-repeat: repeat;
        width: 100%;
        height: 100%;
        margin: 0;
        position: relative;
    }
    .center {
        position: absolute;
        top: 50%;
        left: 50%;
    }
    #logo {
        position: relative;
        z-index: 10;
        width: 300px;
        height: 300px;
        margin: -150px 0 0 -150px;
        fill: #292929;
        -webkit-animation: pulse 3s 1;
        -moz-animation: pulse 3s 1;
        -o-animation: pulse 3s 1;
        animation: pulse 3s 1;
    }
    #copyright {
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        font-family: Avenir, sans-serif;
        font-size: 12px;
        color: #bbbbbb;
    }
</style>
<svg class="center" id="logo" xmlns="http://www.w3.org/2000/svg" width="642" height="642" viewBox="0 0 642 642"><path d="M342.41,235.76H410C410,451.7,226,628.35.52,628.35V569.46c170.13,0,313.49-117.76,342.6-275h-29.6a319.77,319.77,0,0,0-20.07,111.76H231.94c0-215.94,184-392.59,409.54-392.59V72.54C515.5,72.54,403.53,137.71,342.41,235.76Z"/></svg>
<p id="copyright">&copy; James Rampton <?php echo date("Y"); ?></p>
</body>
</html>
