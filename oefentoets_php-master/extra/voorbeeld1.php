<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!--
            <form> - tag to create a form
            action - attribute to specify the location and name of the
                     PHP page that will process the data entered into
                     the form
            method - get / post
            post - Information sent from a form with the POST method is 
                   invisible to others and has no limits on the amount 
                   of information to send.
            get - Information sent from a form with the GET method is visible 
                  to everyone (it will be displayed in the browser's address
                  bar) and has limits on the amount of information to send.
        -->

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Snelheid:
            <input type="text" name="snelheid"></input>
            <br/>
            Gemeten snelheid:
            <input type="text" name="snelheidGemeten"></input>
            <br/>

            <select name="binnenBuiten">
                <option value="binnen">binnen bebouwde kom</option>
                <option value="buiten">buiten bebouwde kom</option>
            </select>

            Punten rijbewijs: <input type="checkbox" name="punten" />


            <br/>
            <input type="submit" name="submit"></input>
        </form>     

        <?php
        if (isset($_POST["snelheid"]))
        {
                
            $snelheid = $_POST["snelheid"];
            $snelheidGemeten = $_POST["snelheidGemeten"];

            if ($_POST["binnenBuiten"] == "binnen") // binnen

                {
                if (isset($_POST["punten"]))
                {
                    $teBetalen = (($snelheidGemeten - $snelheid) * 10.5) + 7;
                    echo " " . $teBetalen ;
                }
                else
                {
                    echo " " . (($snelheidGemeten - $snelheid) * 9) + 7;
                }
            }
            else // buiten
            {
                echo " " . (($snelheidGemeten - $snelheid) * 7) + 7;
            }
            echo " " . $_POST["snelheid"] . " " . $_POST["snelheidGemeten"] . " " . $_POST["binnenBuiten"];
        }
        ?>
    </body>
</html>
