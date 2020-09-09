<html>
    <head>
        <title>Opdracht 1</title>
    </head>
    <body>
        <div id="info" class="info" style="border: black 1px dotted">
            <?php
                date_default_timezone_set("Europe/Amsterdam");

                $today = date("j F Y");
                echo "Het is vandaag: $today";

                echo "<br>";

                $dayOfYear = date('z');
                echo "vandaag is het de $dayOfYear e dag van het jaar";

                echo "<br>";

                $dayOfWeek = date("l");
                $dayOfWeekNr = date("w");
                echo "$dayOfWeek is de $dayOfWeekNr e van de week";

                echo "<br>";

                $month = date("F");
                $days = date('t');
                echo "De maand $month heeft in totaal $days dagen"
            ?>
        </div>
    </body>
</html>

