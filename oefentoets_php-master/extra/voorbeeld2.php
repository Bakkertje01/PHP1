 <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>">
            <textarea name="textarea"></textarea>
            <br/>
            <input type="submit">
        </form>

        <?php
        if (($_SERVER["REQUEST_METHOD"] == "POST") && $_POST['textarea'] != "")
        {
            $string = $_POST['textarea'];
            
            echo $string;
        }
        ?>
    </body>
</html>