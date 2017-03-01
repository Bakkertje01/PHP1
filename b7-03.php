<!DOCTYPE html>

<html>
    <head>
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
        
        //ER MOET NOG EEN FUNCTIE OMHEEN BOEK
       
        
        function honderd_klopt($number){
            
            if ($number <= 100) {
                $result = $number . " Is less than or equal to 100";
            }
                elseif ($number > 100) {
                $result = $number . " Is greater than 100";
            }
            
            echo "<p>$result</p>";
        }
        
        honderd_klopt(45);
        
        
            /*
            $number = 75;
            ($number > 100 ) ? $result = $number . "is greater than 100":
                               $result = $number . "Is less than or equal to 100";
            echo "<p>$result</p>"
             
             */
        ?> 
    </body>
</html>

