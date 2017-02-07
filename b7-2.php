<?php

/* 
 *  Filename   :
 *  Assignment :
 *  Created    :
 *  Desription :
 *  Programmer :
 */

$cijfer = 8; //rand(0.1, 10.9);

//echo $cijfer;

if  ($cijfer < 1) 
        echo "Ongeldig cijfer TE LAAG (voer een cijfer  van 1 tot en met 10 in)";
    
    elseif ($cijfer == 1) 
        echo "Zeer slecht";
    
    elseif ($cijfer == 3) 
        echo "Onvoldoende";
    
    elseif ($cijfer == 6)
        echo "Voldoende";
    
    elseif ($cijfer == 8) 
        echo "Goed";
    
    elseif ($cijfer == 9) 
        echo "Zeer goed";
    
    elseif ($cijfer == 10) 
        echo "Uitmuntend";
    
    elseif ($cijfer > 10) 
        echo "Ongeldig cijfer TE HOOG (voer een cijfer van 1 tot 10 in)";
    else 
        echo "dit klopt niet";

        
    