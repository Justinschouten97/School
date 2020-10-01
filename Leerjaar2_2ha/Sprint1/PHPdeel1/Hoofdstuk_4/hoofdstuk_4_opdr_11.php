<html>
    <head>
        <title>Opdracht 11 H4</title>
    </head>
    <body>
        <?php

        $faculteitVanGetal = 5; // voor de eind print
        $getal = $faculteitVanGetal; // voor de loop
        $som = $getal;

        echo "(formule: $getal! = ";

        for ($i = 1; $i < $getal; $i++){

            $som = $faculteitVanGetal * $i;
            $faculteitVanGetal = $faculteitVanGetal * $i;
            echo $i. " x ";

        }

        echo "$i";
        echo " = ";
        echo "$som)";

        echo "<br>";
        echo "<br>";
        echo "De faculteit van $getal is $som"

        ?>
    </body>
</html>
