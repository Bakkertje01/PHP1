<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        /*
         *  Filename   :
         *  Assignment :
         *  Created    :
         *  Desription :
         *  Programmer :
         */
        ?>
    </title>
</head>
<body>
<?php
//echo "naam:".$_POST["naam"]."<br>";

if(isset($_POST["tekst "]))
{
    $input = $_POST["tekst"];

    //array van woorden die ingevuld zijn
    $arrayWoorden = explode(" ", $input);

    //controleren of er iets is verstuurd via in het tekstveld
    //elk element van de input de waarde $woord geven en een nummer
    foreach ($arrayWoorden as $woord) {


        $textlower = substr($woord, 1);
        if (strtolower($textlower) == $textlower && ucfirst($woord) == $woord) {
            //maakt string lower, daarna vergelijkt hij met orgineel, zonder eerste letter,
            // == controleerd de eerste letter
            echo $woord . "</br>";
        } else {
            echo strtolower($woord) . "</br>";
            //string kleiner maken en echo'en
        }
    }
}
else
{
    echo "geen input";

}


?>
</body>
</html>

