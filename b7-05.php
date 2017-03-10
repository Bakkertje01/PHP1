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
        <p>
        <h1>For</h1>
            <?php
                for ($x = 0; $x <= 10; $x++) {
                    //zolang x kleiner is dan 10, print *, als dat gebeurt is dan ++
                    echo "*";
                }
            ?>
        </p>
        
        <p>
        <h1>Do while</h1>
            <?php
                $y = 1;

                do {
                    echo "*";
                    $y++;
                } while ($y <= 10);
            ?>
        </p>
        
        <p>
        <h1>While</h1>
            <?php
                $z = 1;

                while ($z <= 10) {
                    echo "*";
                    $z++;
                }
            ?>
        </p>
    </body>
</html>
