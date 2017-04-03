<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 3-4-2017
 * Time: 17:05
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <?php
    include "header.php";
    ?>

    <?php
    include "navbar.php";
    ?>

    <div class="content">

        <h2>Locatie:</h2>
        <?php
        include "location.php";
        ?>


    </div>

    <div class="footer">
        <p class="footer">
            Dit is de contactpagina
        </p>
    </div>
</div>


</body>
</html>