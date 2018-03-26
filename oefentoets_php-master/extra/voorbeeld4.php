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
        
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="userName"/> Name
            <br><br>
            <input type="password" name="passWord"/> Password
            <br><br>
            <select name="shipMethod">
                <option value="air">Air</option>
                <option value="land">Land</option>
                <option value="sea">Sea</option>
            </select>
            <br><br>
            <input type="submit" name="submit"></input>
        </form>     

        <?php     
        if (isset($_POST["submit"])) {
            if (!empty($_POST["userName"]) && $_POST["passWord"] != null)
            {
                echo "<br>Name: " . $_POST["userName"] . "<br>Wachtwoord: " . $_POST["passWord"];
            }
            else
            {
                echo "Geen invoer!";
            }
        }
        ?>
    </body>
</html>