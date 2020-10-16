<html>
    <head>
        <title>Opdracht 10 H4</title>
    </head>
    <body>
        <?php
        // manier 1
        $beginGetal = 78; // voor de eind print
        $getal = $beginGetal; // voor de loop
        $som = 0;

        for ($i = 0; $i < $getal; $i++){

            $som -= $i;
            $getal -= $i;
            echo $i. " + ";

        }

        echo "$i";
        echo " = ";
        echo $beginGetal;

        echo " <br> ";
        echo " <br> ";

        // manier 2
        $g = 12;
        $s = 0;
        echo "waarde van de variabel $getal is : " . $g;
        for($i = 0; $i<$g; $i++){
            $s += $i;
            echo $i . " + ";
        }
        $s += $g;
        echo $g . " = " . $s;

        ?>
    </body>
</html>
