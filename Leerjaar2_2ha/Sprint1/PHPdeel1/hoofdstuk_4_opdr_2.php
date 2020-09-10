<html>
    <head>
        <title>Opdracht 2 H4</title>
    </head>
    <body>
        <?php

        // invoer van tijdzone
        date_default_timezone_set("Europe/Amsterdam");

        // invoer van de tijd (uur + min)
        $date = date("H:i");
        echo "$date";

        echo "<br>";

        // invoer van uur om te gebruiken in de switch
        $uur = date("H");

        switch ($uur){

            case ("$uur" >= 6) && ("$uur" < 12) : echo "Het is Ochtend";
                break;
            case ("$uur" >= 12) && ("$uur" < 18): echo "Het is Middag";
                break;
            case ("$uur" > 18) && ("$uur" < 24): echo "Het is Avond";
                break;

            default: echo "Het is Nacht";
        }

        ?>
    </body>
</html>
