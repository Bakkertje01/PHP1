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
        <pre>
        
            <?php
            echo "<h1>For</h1>";

            for ($z = 0; $z <= 10; $z++)
            {
                for ($y = 1; $y <= $z; $y++)
                {
                    echo" + ";
                }
                for ($a = 10; $y <= $a; $a--)
                {

                    echo" - ";
                }
                echo"<br />";
            }


            echo "<h1>While</h1>";

            $z = 0;
            while ($z <= 10)
            {
                $y = 1;
                while ($y <= $z)
                {
                    echo " + ";
                    $y++;
                }
                $a = 10;
                while ($y <= $a)
                {
                    echo " - ";
                    $a--;
                }
                echo "</br>";
                $z++;
            }

            echo "<h1>Do-While</h1>";

            $z = 0;
            do
            {
                $y = 1;
                do
                {
                    if ($y <= $z)
                    {
                    echo " + ";
                    }
                    else
                    {
                    echo " - ";
                    }
                    $y++;
                } while ($y <= $z);

                $a = 10;
                do
                {
                          echo " - ";
                    
                    $a--;
                } while ($y <= $a);
                
            echo "</br>";
            $z++;
            } while ($z <= 10)
            ?>
    

        </pre>


    </body>
</html>