<html>
    <head>
        <title>Opdracht 13 H4</title>
    </head>
    <body>
        <?php

        echo "<table border='1'>";

        $miles = 1;
        $kilometer = 1609; // 1 Kilometer is 1609 Miles

        // headers van de table
        echo "<th>Miles</th>";
        echo "<th>Kilometers</th>";

        for ($i = 1; $i < 11; $i++){

            // variabele
            $nieuwKilometer = $kilometer * $miles;

            // tabel
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$nieuwKilometer</td>";
            echo "</tr>";

            $miles++;
        }
        echo "</table>";

        ?>
    </body>
</html>
