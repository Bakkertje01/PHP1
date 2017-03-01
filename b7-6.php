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
            
                for($x=0; $x<=6; $x++)
                {                
                       for($i=0; $i<=10; $i++){ 
                        echo "*";
                }
                echo "</br>";
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
                while ($z <=6) {
                $f = 1;
                while ($f <=10){
                echo "*";
                $f++;
                }
                echo "</br>";
                $z++;
                }
            ?>
        </p>
    </body>
</html>