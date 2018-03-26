<!--
Naam:
Studentnummer:
-->
<!DOCTYPE html>
<html>
<head>
    <title>Stringbewerking</title>
</head>
<body>
<?php
/*
*
* Door student in te vullen.
*
*/

$invoerString = "23-02-2010"; // dagen < als 10 moet een 0
// voor staan. Voorbeeld: 01.

$verschil = explode("-", $invoerString);

$verschil[0];
$verschil[1];
$verschil[2];

$geboren = "De persoon is geboren op: ";

echo $geboren;
echo $verschil[0]." ";

if ($verschil[1] == 01) {
    echo "januari ";
} elseif ($verschil[1] == 02){
    echo "februari ";
} elseif ($verschil[1] == 03){
    echo "maart ";
} elseif ($verschil[1] == 04){
    echo "april ";
} elseif ($verschil[1] == 05){
    echo "mei ";
} elseif ($verschil[1] == 06){
    echo "juni ";
} elseif ($verschil[1] == 07){
    echo "juli ";
} elseif ($verschil[1] == 08){
    echo "augustus ";
} elseif ($verschil[1] == 09){
    echo "september ";
} elseif ($verschil[1] == 10){
    echo "oktober ";
} elseif ($verschil[1] == 11){
    echo "november ";
} elseif ($verschil[1] == 12){
    echo "december ";
}

echo $verschil[2]." ";

switch($verschil[1]) {
    case 03:
    case 04:
    case 05:
        echo "in de voorjaarsperiode";
        break;
    case 06:
    case 07:
    case 08:
        echo "in de zomerpeiode";
        break;
    case 09:
    case 10:
    case 11:
        echo "in de herfstperiode";
        break;
    case 12:
    case 01:
    case 02:
        echo "in de winterperiode";
        break;

}
?>
</body>
</html>