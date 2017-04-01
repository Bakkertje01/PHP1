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
$input = $_POST["tekst"];


//array van woorden die ingevuld zijn
$arrayWoorden = explode(" ", $input);


//controleren of er iets is verstuurd via in het tekstveld
if (isset ($input)) {
    //elk element van de input de waarde $woord geven en een nummer
    foreach ($arrayWoorden as $woord) {
        //laatste letter van elk woord
        $lastPos = strlen($woord) - 1;
        //eerste letter van elk woord
        $firstPos = $woord[0];
        //controleren of de woorden 4 letters of meer heeft
        if (strlen($woord) >= 4) {
            //de eerste en laatste letter omwisselen
            $woord[0] = $woord[$lastPos];
            $woord[$lastPos] = $firstPos;
            echo "$woord <br/>";
        } else {
            echo "$woord <br/>";
        }
    }
}

//Hallo iko beno Ernst-Jan
?>
</body>
</html>

