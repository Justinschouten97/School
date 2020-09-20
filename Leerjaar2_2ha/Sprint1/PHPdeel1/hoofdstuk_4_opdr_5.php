<html>
    <head>
        <title>Opdracht 5 H4</title>
    </head>
    <body>
        <?php

        $getal = rand(0,20);
        echo "Is het getal $getal even? ";

        if ($getal % 2 == 0){
            echo "Ja";
        }
        else{
            echo "Nee";
        }

        ?>
    </body>
</html>
