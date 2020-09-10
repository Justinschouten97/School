<html>
    <head>
        <title>Opdracht 4 H4</title>
    </head>
    <body>
        <?php

        $price = 100;
        $euroTeken = "€";

        if ($price >= 150){
            $nieuwPrice = $price * 1.19;
            $verhoging = "19%";
            echo "Oude prijs: $euroTeken $price Na Verhoging van $verhoging is de prijs: $euroTeken $nieuwPrice";
        }

        if ($price <= 55){
            $nieuwPrice = ($price / 100) * 111;
            $verhoging = "11%";
            echo "Oude prijs: $euroTeken $price Na Verhoging van $verhoging is de prijs: $euroTeken $nieuwPrice";
        }

        if (($price >= 56) && ($price < 150)) {
            $nieuwPrice = ($price / 100) * 116;
            $verhoging = "16%";
            echo "Oude prijs: $euroTeken $price Na Verhoging van $verhoging is de prijs: $euroTeken $nieuwPrice";
        }

        ?>
    </body>
</html>
