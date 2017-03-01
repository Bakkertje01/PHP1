<?php

    /* 
     *  Filename   :
     *  Assignment :
     *  Created    :
     *  Desription :
     *  Programmer :
     */

    $cijfer = 6; //rand(0.1, 10.9);

    //echo $cijfer;
    ?>
    
 <p>
 <h1>if-else</h1>

     <?php
     
   
       if ($cijfer == 1 OR $cijfer == 2) { 
            echo "Zeer slecht";

    }   elseif ($cijfer == 4 OR $cijfer == 5) {
            echo "Onvoldoende";

    }   elseif ($cijfer == 6 OR $cijfer == 7){
            echo "Voldoende";

    }   elseif ($cijfer == 8) {
            echo "Goed";

    }   elseif ($cijfer == 9) {
            echo "Zeer goed";

    }   elseif ($cijfer == 10) {
            echo "Uitmuntend";

    }   else  {
            echo "Ongeldig cijfer, TE HOOG (voer een cijfer van 1 tot 10 in)";
    }  
?>
</p>

<p>
<h1>Switch</h1>
<?php 
        
        $cijfer = 87;
        
        switch ($cijfer) {
            
            case ($cijfer == 1 OR $cijfer == 2):
                echo"Zeer slecht";
                break;
            case ($cijfer == 4 OR $cijfer == 5):
                echo"onvoldoende";
                break;
            case ($cijfer == 6 OR $cijfer == 7):
                echo"voldoende";
                break;
            case ($cijfer == 8):
                echo "goed";
                break;
            case ($cijfer == 9):
                echo "Zeer goed";
                break;
            case ($cijfer == 10):
                echo "Uitmuntend";
                break;
          
            default:
                echo "het klopt niet";
                                
        }
        
        ?>
</p>