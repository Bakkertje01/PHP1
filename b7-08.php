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
        for ($z = 1; $z < 10; $z++)
        {
            for ($y = 6; $y > $z; $y--)
            {
                echo "*";
            }
            echo"<br />";
        }
        ?>
    </p>

    <p>
    <h1>Do-While</h1>
    <?php
    $z = 1;
    do
    {
        $y = 6;
        do
        {
            echo "*";
            $y--;
        } while ($y > $z);
        echo "</br>";
        $z++;
    } while ($z < 6);
    ?>
</p>

<p>
<h1>While</h1>
<?php
$z = 1;
while ($z < 10)
{
    $y = 6;
    while ($y > $z)
    {
        echo "*";
        $y--;
    }
    echo "</br>";
    $z++;
}
?>
</p>
</body>
</html>