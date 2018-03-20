<?php
/**
 * Created bster PhpStorm.
 * User: Gebruiker
 * Date: 13-3-2018
 * Time: 19:05
 */


echo "b7.5<br><br>";

for ($regel = 0; $regel <= 10; $regel++) {
    echo "*";
}

echo "<br><br>b7.6<br><br>";

for ($regel = 0; $regel <= 10; $regel++) {

    for ($ster = 0; $ster < 10; $ster++) {
        echo "*";
    }
    echo "<br>";

}

echo "<br><br>b7.7<br><br>";

for ($regel = 0; $regel <= 10; $regel++) {

    for ($ster = 0; $ster < $regel; $ster++) {
        echo "*";
    }
    echo "<br>";

}

echo "<br><br>b7.8<br><br>";

for ($regel = 0; $regel < 10; $regel++) {

    for ($ster = 10; $ster > $regel; $ster--) {
        echo "*";
    }
    echo "<br>";

}

echo "<br><br>b7.9.1<br><br>";

for ($regel = 0; $regel <= 9; $regel++) {

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
    for ($sterR = 0; $sterR < $regel; $sterR++) {
        echo "* ";
    }
    echo '<br>';
}

echo "<br><br>b7.9.5<br><br>";

for ($regel = 0; $regel <= 10; $regel++) {

    for ($ster = 0; $ster < $regel; $ster++) {
        echo "* ";
    }
    echo "<br>";
}
for ($regel = 0; $regel <= 10; $regel++) {
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

for ($regel = 0; $regel < 10; $regel++) {

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

echo "mist";

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

echo "mist";

echo "<br><br>b7.9.13<br><br>";

$l = 7;
$k = 0;
for ($u = 0; $u < 8; $u++) {
    for ($i = 0; $i < $k; $i = $i + 1) {
        echo '+ ';
    }
    $k++;
    echo "- ";
    for ($j = 0; $j < $l; $j = $j + 1) {
        echo '+ ';
    }
    $l = $l - 1;
    echo("<br/>");
}

echo "<br><br>b7.9.14<br><br>";

for ($z = 0; $z <= 10; $z++) {
    for ($y = 1; $y <= $z; $y++) {
        echo " * ";
    }
    for ($a = 10; $y <= $a; $a--) {
        echo " - ";
    }
    echo "<br />";
}

echo "<br><br>b7.9.15<br><br>";

for ($i = 1; $i <= 9; $i++) {
    for ($spatieL = 2; $spatieL <= $i; $spatieL++) {
        echo '-&nbsp;&nbsp;';
    }
    for ($plusL = 8; $plusL >= $i; $plusL--) {
        echo '+ ';
    }
    for ($plusR = 7; $plusR >= $i; $plusR--) {
        echo '+ ';
    }
    for ($spatieR = 2; $spatieR <= $i; $spatieR++) {
        if ($spatieR >= 9) {
        } else {
            echo '&nbsp;-&nbsp;';
        }
    }
    echo '<br>';
}

echo "<br><br>b7.9.16<br><br>";

echo "mist";

echo "<br><br>b7.9.17<br><br>";

for ($i = 1; $i < 8; $i++) {
    for ($j = 8; $j > $i; $j--) {
        echo " - ";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "+";
    }
    echo "<br />";
}
for ($i = 8; $i > 0; $i--) {
    for ($j = 8; $j > $i; $j--) {
        echo " - ";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "+";
    }
    echo "<br />";
}

echo "<br><br>b7.9.18<br><br>";

for ($i = 1; $i <= 15; $i++) {
    for ($y = 1; $y <= ($i > 8 ? 16 - $i : $i); $y++) {
        echo "+";
    }
    for ($yy = 7; $yy >= ($i > 8 ? 16 - $i : $i); $yy--) {
        echo "-";
    }
    echo "</br>";
}

echo "<br><br>b7.9.19<br><br>";

echo "mist";

echo "<br><br>b7.9.20<br><br>";

for ($i = 6; $i >= 1; $i--) {
    for ($ii = 1; $ii <= $i; $ii++) {
        echo "$ii";
    }
    echo "</br>";
}

echo "<br><br>b7.9.21<br><br>";

for ($row = 1; $row <= 6; $row++) {
    for ($Q = 6; $Q >= $row; $Q--) {
        echo"&nbsp;&nbsp;";
    }
    for ($G = $row; $G >= 1; $G--) {
        echo"$G";
    }
    echo"<br>";
}

echo "<br><br>b7.9.22<br><br>";

for ($i = 7; $i >= 1; $i--) {
    for ($spatieI = 6; $spatieI >= $i; $spatieI--) {
        echo ("&nbsp;&nbsp;&nbsp;&nbsp;");
    }
    for ($getalI = 1; $getalI < $i; $getalI++) {
        echo $getalI . "&nbsp;&nbsp;";
    }
    echo ("<br/>");
}

echo "<br><br>b7.9.23<br><br>";

echo "mist";

echo "<br><br>b7.9.24<br><br>";

for ($y = 0; $y < 10; $y++) {
    for ($x = 0; $x < 10; $x++) {
        $val = ($x + $y) % 10;
        echo "$val ";
    }
    echo "<br>";
}


