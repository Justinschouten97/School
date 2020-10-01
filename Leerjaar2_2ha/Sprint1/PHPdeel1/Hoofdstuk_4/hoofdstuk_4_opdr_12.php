<html>
    <head>
        <title>Opdracht 12 H4</title>
    </head>
    <body>
        <?php

        echo "<table border='1'>";

        // waarde vs de waarde van 1 euro
        $euro = 1;
        $amerikaanseDollar = 1.12651;
        $britsePond = 0.79494;
        $japanseYen = 119.524;
        $indiaseRoepi = 75.559;

        // headers van de table
        echo "<th>Euro</th>";
        echo "<th>Amerikaanse Dollar</th>";
        echo "<th>Britse Pond</th>";
        echo "<th>Japanse Yen</th>";
        echo "<th>Indiase Roepi</th>";


        for ($i = 1; $i <= 10; $i++){

            // variabele
            $nieuwAmerikaanseDollar = $amerikaanseDollar * $euro;
            $nieuwBritsePond = $britsePond * $euro;
            $nieuwJapanseYen = $japanseYen * $euro;
            $nieuwIdiaseRoepi = $indiaseRoepi * $euro;

            // tabel
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$nieuwAmerikaanseDollar</td>";
            echo "<td>$nieuwBritsePond</td>";
            echo "<td>$nieuwJapanseYen</td>";
            echo "<td>$nieuwIdiaseRoepi</td>";
            echo "</tr>";

            $euro++;
        }
        echo "</table>";

        ?>
    </body>
</html>
