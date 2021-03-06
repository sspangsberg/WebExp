<?php require_once "controller.php"?>

<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='stylesheet.css'/>
</head>
<body>

<div class="header">

    <div class="container">
        <h1>
            <?php echo retrieveContent(2); ?>
        </h1>

        <!--
        <p>
            Connect your ideas globally
        </p>
        <a class="btn" href="">Learn More</a>
        -->
    </div>
</div>

<div class="nav">
    <div class="container">
        <?php require_once "menu.html"?>
    </div>
</div>

<div class="main">
    <div class="container">
        <img src="https://s3.amazonaws.com/codecademy-content/projects/innovation-cloud/cloud.svg" height="128" width="196"/>

        <?php echo handleRequest($_GET["id"]); ?>

    </div>
</div>
<!--
<div class="jumbotron">
    <div class="container">

        <h1>
            Stay Connected
        </h1>
        <p>
            Receive weekly insights from industry insiders.
        </p>
        <a class="btn" href="">Join</a>
    </div>
</div>
-->
<div class="footer">
    <p>
        <a class="btn" href="">Admin</a>
    </p>
</div>
</body>
</html>