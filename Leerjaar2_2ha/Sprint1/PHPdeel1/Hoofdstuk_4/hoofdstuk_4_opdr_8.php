<html>
    <head>
        <title>Opdracht 8 H4</title>
    </head>
    <body>
        <?php

        // check hoe oud de persoon is
        $leeftijd = rand(14,20);
        echo "Je leeftijd = $leeftijd";
        echo "<br>";

        $stepasTeller = rand(0,1);
        $stempasOntvangen = $stepasTeller;


        if (($leeftijd >= 16) && $leeftijd < 18){
            echo "Je kan een scooter examen doen!";
            echo "<br>";
        }

        elseif ($leeftijd >= 18){
            echo "Je mag stemmen!";
            echo "<br>";

            if ($stempasOntvangen == 1){
                echo "Je hebt geen stempas en nu kan je niet stemmen";
                echo "<br>";
            }
            if ($stempasOntvangen == 0){
                echo "Je hebt een stempas en nu kan je lekker stemmen";
                echo "<br>";
            }
        }

        else {
            echo "Je bent te jong!";
            echo "<br>";
        }

        ?>
    </body>
</html>
