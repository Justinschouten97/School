<html>
    <head>
        <title>Opdracht 10 H4</title>
    </head>
    <body>
        <?php

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

        ?>
    </body>
</html>
