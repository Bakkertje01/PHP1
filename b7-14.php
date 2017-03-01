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
                for ($z=0; $z<=10; $z++){ 
                   for ($y=0; $y<$z; $y++){
                       echo" + ";
                   }
                       for ($a=1; $a<10; $a++){ 
                        for ($b=6; $b>$a; $b--){
                            
                        }
                   echo" - ";
                }
                   echo"<br />";
                }

            ?>
        </p>
        <p>
        <h1>Do-While</h1>
                <?php
            $z = 0;
            do{
                $y = 0;
                do {
                    echo "+";
                    $y++;
                }  while ($y <= $z);
                echo "</br>";
                $z++;
            }   while ($z <= 10);
            ?>
        </p>
        <p>
        <h1>While</h1>
            <?php
                $z = 1;
                while ($z <=10) {
                    $y = 1;
                    while ($y <=$z){
                echo "+";
                $y++;
                }
                echo "</br>";
                $z++;
                }
            ?>
        </p>
        
        
        
    </body>
</html>