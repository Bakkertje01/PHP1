<?php
/**
 * Created by PhpStorm.
 * User: Ernst-Jan Bakker
 * Date: 5-4-2017
 * Time: 17:19
 */
?>
<!--
Naam:
Studentnummer:
-->

<!DOCTYPE html>
<html>
<head>
<title>Wegenbelasting berekenen</title>
</head>
<body>
<h1>Bepalen Wegenbelasting</h1><hr />



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Geef het gewicht van het voertuig op in kilogrammen<br/>
    <input type="text" name="kilogram"></input>
    <br/>


Motor <input type="radio" name="motor" /><br/>
Personenwagen <input type="radio" name="personenwagen" /><br/>
vrachtwagen <input type="radio" name="vrachtwagen" /><br/>

    <input type="submit" name="submit"></input>

</form>

<?php


if (isset($_POST["kilogram"]))
{

    $kilogram = $_POST["kilogram"];

        if (isset($_POST["motor"]))
        {
            $motorbelasting = ($kilogram * 0.60);
            echo " " . $motorbelasting ;
        }
        elseif (isset($_POST["personenwagen"]))
        {
            $personenwagenbelasting = ($kilogram * 0.55);
            echo " " . $personenwagenbelasting ;
        }
        elseif (isset($_POST["vrachtwagen"]))
        {
            $vrachtwagenbelasting = ($kilogram * 0.50);
            echo " " . $vrachtwagenbelasting ;
        }

        else {
            echo "er gaat iets mis";
        }

}
?>