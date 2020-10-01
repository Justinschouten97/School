<html>
<head>
    <title>Opdracht 14 H4</title>
</head>
<body>
    <?php

    echo "<table border='1'>";

    $miles = 1;
    $kilometer = 1609; // 1 Kilometer is 1609 Miles
    $tabelGroote = 40;


    if ($tabelGroote >= 0 || $tabelGroote < 21){
        // headers van de table
        echo "<th>Miles</th>";
        echo "<th>Kilometers</th>";

        for ($i = 1; $i < 21; $i++) {

            // variabele
            $nieuwKilometer = $kilometer * $miles;

            // tabel
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$nieuwKilometer</td>";
            echo "</tr>";

            $miles++;
        }

        if ($tabelGroote >= 20 && $tabelGroote < 41){
            // headers van de table
            echo "<th>Miles</th>";
            echo "<th>Kilometers</th>";

            for ($i = 21; $i < $tabelGroote; $i++) {

                // variabele
                $nieuwKilometer = $kilometer * $miles;

                // tabel
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$nieuwKilometer</td>";
                echo "</tr>";

                $miles++;
            }
        }

        echo "</table>";
    }






    ?>
</body>
</html>
