<html>
    <head>
        <title>Hoofdstuk 4 Info</title>
        <style type="text/css">
            table{
                border-collapse: collapse;
                border: 1px solid black;
            }
            td{
                border: 1px solid black;
                width: 25px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
//        $euroTeken = "€";
//
//
//        // if .. else en if
//        echo "<b>if .. else en if</b>";
//        echo "<br>";
//            $var1 = 10;
//            $var2 = 15;
//
//            if ($var1 < $var2) {
//                echo "De waarde van var1 is kleiner dan die van var2";
//            }
//            echo "<br>";
//
//            $var3 = "Hello";
//            $var4 = "world";
//
//            if ($var3 == $var4) {
//                echo "$var3 is gelijk aan $var4";
//            } else {
//                echo "$var3 is niet gelijk aan $var4";
//            }
//            echo "<br>";
//
//            $shippingType = "verzenden";
//            $totalPrice = 43.15;
//
//            if (($shippingType == "verzenden") && ($totalPrice >= 50)) {
//                echo "Verzendkosten zijn: $euroTeken 3,-";
//            } elseif (($shippingType == "verzenden") && ($totalPrice >= 50)) {
//                echo "Verzendkosten zijn: $euroTeken 5,-";
//            } else {
//                echo "Bestelling wordt afgehaald: geen verzendkosten";
//            }
//            echo "<br>";
//
//            // oude manier
//            $error = 404;
//
//            if ($error == 400){
//                echo "Bad request";
//            }
//
//            elseif ($error == 403){
//                echo "Forbidden";
//            }
//
//            elseif ($error == 404){
//                echo "Not found";
//            }
//
//            elseif ($error == 500){
//                echo "Internal server error";
//            }
//
//            elseif ($error == 503){
//                echo "Bad gateway";
//            }
//
//            else {
//                echo "Unknow code";
//            }
//            echo "<br>";
//
//            // nieuwe manier
//            $errorNieuw = 404;
//
//            switch ($errorNieuw){
//                case 400 : echo "Bad request"; break;
//                case 403 : echo "Forbidden"; break;
//                case 404 : echo "Not found"; break;
//                case 500 : echo "Internal server error"; break;
//                case 503 : echo "Bad gate way"; break;
//
//                default : echo "Unknow code"; break;
//            }
//            echo "<br>";
//
//            // extra voorbeeld wat je met switch kan
//            $a = 1;
//            $b = 2;
//
//            switch ($a <=> $b){
//                case -1 : echo "$a is kleiner dan $b"; break;
//                case 0 : echo "$a is gelijk dan $b"; break;
//                case 1 : echo "$a is groter dan $b"; break;
//
//            }
//            echo "<br>";

            // loop statements
//            while(true){
//                echo "Dit is een while-loop<br>";
//            }

//            $price = 10;
//
//            while($price < 100){
//                $price = $price + 25;
//                echo "Prijs wordt met 25 verhoogd: $price <br>";
//            }

//        for ($i = 0; $i < 10; $i++){
//            echo "$i <br>";
//        }

            // tafel van 9 met een for loop
//            $number = 9;
//            for ($i = 1; $i < 10; $i++){
//                echo "$i x $number = " . ($i * $number) . " <br>";
//            }

//        tafel van 9 met table en border
        $number = 9;
            echo "<table border='1'>";
            for ($i = 1; $i < 10; $i++){
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td> x </td>";
                echo "<td>$number</td>";
                echo "<td> = </td>";
                echo "<td>" . ($i * $number) . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            echo "<br>";

            $days = array();
            $days[0] = "Zondag";
            $days[1] = "Maandag";
            $days[2] = "Dinsdag";
            $days[3] = "Woensdag";
            $days[4] = "Donderdag";
            $days[5] = "Vrijdag";
            $days[6] = "Zaterdag";

            foreach ($days as $days){
                echo "$days <br>";
            }










            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "Code draait wel!"
        ?>
    </body>
</html>

