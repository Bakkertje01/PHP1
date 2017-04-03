<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Interests</title>
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

        <h2>Interests:</h2>
        <?php
        $interests = array("Voetbal", "Gamen", "Jeugdsoos", "Techniek", "Mountainbike", "Google");

            foreach($interests as $x) {
                echo $x;
                echo "<br>";
            }
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