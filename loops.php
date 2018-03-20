<?php
/**
 * Created bster PhpStorm.
 * User: Gebruiker
 * Date: 13-3-2018
 * Time: 19:05
 */


echo "b7.5<br><br>";

for ($regel = 0; $regel <= 10; $regel++){
    echo "*";
}

echo "<br><br>b7.6<br><br>";

for ($regel = 0; $regel <= 10; $regel++){

    for ($ster = 0; $ster < 10 ; $ster++) {
        echo "*";
    }
    echo "<br>";

}

echo "<br><br>b7.7<br><br>";

for ($regel = 0; $regel <= 10; $regel++){

    for ($ster = 0; $ster < $regel ; $ster++) {
        echo "*";
    }
    echo "<br>";

}

echo "<br><br>b7.8<br><br>";

for ($regel = 0; $regel < 10; $regel++){

    for ($ster = 10; $ster > $regel; $ster--) {
        echo "*";
    }
    echo "<br>";

}

echo "<br><br>b7.9.1<br><br>";

for ($regel = 0; $regel <= 9; $regel++){

    for ($spatie = 9; $spatie >= $regel; $spatie--) {
        echo " &nbsp;";
    }
    for ($ster = 0; $ster <= $regel; $ster++) {
        echo "*";
    }
    echo "</br>";
}

echo "<br><br>b7.9.2<br><br>";

for ($regel = 1; $regel <= 5; $regel++) {
    for ($spatieL = 2; $spatieL <= $regel; $spatieL++) {
        echo '&nbsp;&nbsp; ';
    }
    for ($sterL = 5; $sterL >= $regel; $sterL--) {
        echo '* ';
    }
    echo '<br>';
}


echo "<br><br>b7.9.3<br><br>";

for ($regel = 1; $regel <= 5; $regel++) {
    for ($spatieL = 2; $spatieL <= $regel; $spatieL++) {
        echo '&nbsp;&nbsp; ';
    }
    for ($sterL = 5; $sterL >= $regel; $sterL--) {
        echo '* ';
    }
    for ($sterR = 4; $sterR >= $regel; $sterR--) {
        echo '* ';
    }
    echo '<br>';
}

echo "<br><br>b7.9.4<br><br>";

for ($regel = 0; $regel <= 5; $regel++) {
    for ($spatieL = 6; $spatieL >= $regel; $spatieL--) {
        echo '&nbsp;&nbsp; ';
    }
    for ($sterL = 0; $sterL <= $regel; $sterL++) {
        echo '* ';
    }
    for ($sterR = 0; $sterR < $regel ; $sterR++) {
        echo "* ";
    }
    echo '<br>';
}

echo "<br><br>b7.9.5<br><br>";

for ($regel = 0; $regel <= 10; $regel++){

    for ($ster = 0; $ster < $regel ; $ster++) {
        echo "* ";
    }
    echo "<br>";
}
for ($regel = 0; $regel <= 10; $regel++){
    for ($ster = 9; $ster > $regel; $ster--) {
         echo "* ";
     }
    echo "<br>";
}

echo "<br><br>b7.9.6<br><br>";

for ($regel = 0; $regel <= 9; $regel++) {
    for ($spatie = 9; $spatie >= $regel; $spatie--) {
        echo " &nbsp;";
    }
    for ($ster = 0; $ster <= $regel; $ster++) {
        echo "*";
    }
    echo "</br>";
}
for ($regel2 = 2; $regel2 <= 10; $regel2++) {
    for ($spatie2 = 0; $spatie2 < $regel2; $spatie2++) {
        echo " &nbsp;";
    }
    for ($ster2 = 10; $ster2 >= $regel2; $ster2--) {
        echo "*";
    }
    echo "</br>";
}

echo "<br><br>b7.9.7<br><br>";

for ($regel = 0; $regel < 10; $regel++){

    for ($ster = 5; $ster > $regel; $ster--) {
        echo "* * ";
    }
    echo "<br>";

}

echo "<br><br>b7.9.8<br><br>";

for ($regel = 1; $regel <= 5; $regel++) {
    for ($ster = 1; $ster <= $regel; $ster++) {
        echo "*" . "&nbsp" . "&nbsp";
    }
    echo "<br>";
}
for ($regel = 1; $regel <= 5; $regel++) {
    for ($ster = 1; $ster <= $regel; $ster++) {
        echo "*" . "&nbsp" . "&nbsp";
    }
    echo "<br>";
}

echo "<br><br>b7.9.10<br><br>";



echo "<br><br>b7.9.11<br><br>";

for ($regel = 1; $regel <= 5; $regel++) {
    for ($ster = 1; $ster <= $regel; $ster++) {
        echo "*" . "&nbsp" . "&nbsp";
    }
    echo "<br>";
}
for ($regel = 1; $regel <= 5; $regel++) {
    for ($ster = 1; $ster <= $regel; $ster++) {
        echo "*" . "&nbsp" . "&nbsp";
    }
    echo "<br>";
}

echo "<br><br>b7.9.12<br><br>";



echo "<br><br>b7.9.13<br><br>";



echo "<br><br>b7.9.14<br><br>";

for ($z = 0; $z <= 10; $z++) {
    for ($y = 1; $y <= $z; $y++) {
        echo" * ";
}
    for ($a = 10; $y <= $a; $a--) {
        echo" - ";
    }
    echo"<br />";
}

echo "<br><br>b7.9.15<br><br>";

echo "test";

echo "<br><br>b7.9.16<br><br>";



echo "<br><br>b7.9.17<br><br>";



echo "<br><br>b7.9.18<br><br>";



echo "<br><br>b7.9.19<br><br>";



echo "<br><br>b7.9.20<br><br>";



echo "<br><br>b7.9.21<br><br>";



echo "<br><br>b7.9.22<br><br>";



echo "<br><br>b7.9.23<br><br>";



echo "<br><br>b7.9.24<br><br>";



