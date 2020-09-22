<html>
    <head>
        <title>Opdracht 7 H4</title>
    </head>
    <body>
        <?php

        $iphone = 1000;
        $spaargeld = rand(700,1100);
        $verschil = $iphone - $spaargeld;

        echo "Spaargeld = $spaargeld";
        echo "<br>";
        if ($verschil >= 250){echo "Zoek een betere baan! Te Kort $verschil.";}
        elseif ($verschil < 250){echo "Het is bijna gelukt nog $verschil te gaan!";}
        elseif ($spaargeld >= $iphone){echo "Je hebt eindelijk genoeg je hebt $spaargeld.";}
        else echo "code werkt niet";

        ?>
    </body>
</html>
