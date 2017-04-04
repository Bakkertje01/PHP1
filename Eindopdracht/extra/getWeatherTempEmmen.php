<?php
    function getWeatherStringEmmen()
    {   
        $BASE_URL = "http://query.yahooapis.com/v1/public/yql";
        $yql_query = 'select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="Emmen, NL")';
        $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=xml";

        $reader = new XMLReader();
        $tempLocation = 0;
        $tempText = '';
        $tempCode = '';
        $location = '';

        if (!$reader->open($yql_query_url))
        {
            print "can't read link";
        }

        while ($reader->read())
        {
            if ($reader->nodeType == XMLReader::ELEMENT)
            {
                $name = $reader->name;

                if ($name == 'yweather:location')
                {
                    $location = $reader->getAttribute('city');
                }

                if ($name == 'yweather:condition')
                {
                    $tempText = $reader->getAttribute('text');
                    $tempCode = $reader->getAttribute('code');
                    $tempLocation = $reader->getAttribute('temp');
                }
            }

            if (in_array($reader->nodeType, array(XMLReader::TEXT, XMLReader::CDATA, XMLReader::WHITESPACE, XMLReader::SIGNIFICANT_WHITESPACE)) && $name != '')
            {
                $value = $reader->value;
            }
        }
        return $location . " " . $tempLocation . " " . $tempCode . " " . $tempText;
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Weer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <?php
    include "header.php";
    ?>

    <?php
    include "navbar.php";
    ?>

    <div class="content">

        <h2>Weer:</h2>
        <?php
        echo getWeatherStringEmmen();
        ?>

        <?php
            include_once('getWeatherTempEmmen.php');
            $api = getWeatherStringEmmen();
            $splitter = explode(" ", $api);

            $weer = $splitter[2];
            $color = "white";
            switch ($weer)
            {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                case 7:
                case 8:
                case 9:
                case 10:
                case 11:
                case 12:
                case 13:
                    $color = "white";
                    break;
                case 14:
                case 15:
                case 16:
                case 17:
                case 18;
                case 19:
                    $color = "lightbrown";
                    break;
                case 20:
                case 21:
                case 22:
                case 23:
                case 24:
                    $color = "lightblue";
                    break;
                case 25:
                case 26:
                    $color = "lightgrey";
                    break;
                case 27:
                case 28:
                case 29:
                case 30:
                case 31:
                    $color = "cyan";
                    break;
                case 32:
                    $color = "yellow";
                    break;
                default:
                    $color = "red";
            }

            ?>

            <style>
            body{
            background-color: <?php echo $color; ?>;
             }
            </style>

    </div>

    <div class="footer">
        <p class="footer">
            Dit is de contactpagina
        </p>
    </div>
</div>


</body>
</html>

