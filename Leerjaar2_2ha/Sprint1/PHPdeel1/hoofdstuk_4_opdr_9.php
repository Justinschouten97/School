<html>
    <head>
        <title>Opdracht 9 H4</title>
    </head>
    <body>
        <?php

        // kan je een driekhoek maken (ja/nee)
        $zijde1 = rand(1,2);
        $zijde2 = rand(1,2);
        $zijde3 = rand(1,2);

        echo "Zijde 1 = $zijde1 cm";
        echo "<br>";
        echo "Zijde 2 = $zijde2 cm";
        echo "<br>";
        echo "Zijde 3 = $zijde3 cm";
        echo "<br>";

        if (($zijde1 == $zijde2) && ($zijde2 == $zijde3)){echo "Je kan <b>wel</b> een driehoek maken!";}
        else {echo "Je kan <b>geen</b> driehoek maken!";}


        ?>
    </body>
</html>
