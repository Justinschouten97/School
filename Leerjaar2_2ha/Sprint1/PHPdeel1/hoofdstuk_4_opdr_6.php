<html>
    <head>
        <title>Opdracht 6 H4</title>
    </head>
    <body>
        <?php

        // invoer van tijdzone
        date_default_timezone_set("Europe/Amsterdam");

        // invoer van de tijd (uur + min)
        $date = date("H:i");
        echo "Het is nu $date";

        echo "<br>";

        // invoer van uur om te gebruiken in de switch
        $uur = date("H");
        $temperatuur = 20; // is graden
        $luchtvochtigheid = 85; // is 85%

        $nugraden = rand(15,25); //
        echo "Het is nu $nugraden graden";
        echo "<br>";

        $nuLuchtvochtigheid = rand(70,90);
        echo "De luchtvochtigheid is $nuLuchtvochtigheid %";
        echo "<br>";


        if (($nugraden == $temperatuur) && ($nuLuchtvochtigheid <= $luchtvochtigheid)){
            echo "<br>";
            echo "Airco moet uit! (Het is kouder dan 20 graden en luchtvochtigheid onder 85%)";
        }

        elseif (($uur >= 8) && ($uur < 17)) {
            echo "<br>";
            echo "Airco moet aan!";
        }

        else {echo "<br>"; echo "Airco moet uit!";}


        ?>
    </body>
</html>
