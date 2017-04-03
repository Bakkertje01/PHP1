<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 3-4-2017
 * Time: 18:24
 */


function achtergrond() {
    $GLOBALS['$tempCode'] ;

    echo $GLOBALS['$tempCode'];

    if ($GLOBALS <= 21) {
        echo "background color black";
    } elseif ($GLOBALS <= 30) {
        echo "background color yellow";
    } else {
        echo "background color red";
    }
}
achtergrond();

?>



