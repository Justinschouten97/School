<html>
    <head>
        <title>Opdracht 1 H4</title>
    </head>
    <body>
        <?php

        // invoer van tijdzone
        date_default_timezone_set("Europe/Amsterdam");

        // invoer van de tijd (uur + min)
        $date = date("H:i");
        echo "$date";

        echo "<br>";

        // invoer van uur om te gebruiken in de if statement
        $uur = date("H");

        if (($uur >= 6) && ($uur < 12)) {
            echo "Het is Octend";}

        else if (($uur >= 12) && ($uur < 18)) {
            echo "Het is Middag";}

        else if (($uur >= 18) && ($uur < 24)) {
            echo "Het is Avond";}

        else {echo "Het is Nacht";}

        ?>
    </body>
</html>
