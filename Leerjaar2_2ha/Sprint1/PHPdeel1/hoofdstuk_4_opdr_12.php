<html>
    <head>
        <title>Opdracht 12 H4</title>
    </head>
    <body>
        <?php

        $valutas = array();
        $valutas[0] = "Euro";
        $valutas[1] = "Amerikaanse dollar";
        $valutas[2] = "Britse pond";
        $valutas[3] = "Japanse Yen";
        $valutas[4] = "Indiase Roepi";

        foreach ($valutas as $valuta){
            echo "$valuta <br>";
        }

        echo "<table border='1'>";
        for ($i = 1; $i < 10; $i++){
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$valuta</td>";
            echo "<td>$valuta</td>";
            echo "<td> = </td>";
            echo "</tr>";

        }
        echo "</table>";

        echo "<br>";



        ?>
    </body>
</html>
