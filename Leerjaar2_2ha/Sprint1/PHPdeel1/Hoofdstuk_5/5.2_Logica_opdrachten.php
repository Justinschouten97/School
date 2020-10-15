<?php

$x = 5;

if ($x == 1)
    $y += 5;
elseif ($x == 2)
    $y += 10;
elseif ($x == 3)
    $y += 15;
elseif ($x == 4)
    $y += 20;
elseif ($x == 5)
    $y += 25;
else
    $y += 0;

echo "x = ". $x;
echo "<br>";
echo "y = ". $y;
echo "<br>";

switch ($x >= 0){
    case ($x == 1): $y += 5;
        echo " x = ". $x;
        echo "<br>";
        echo " y = ". $y;
    case 2: $y += 10;
        echo " x = ". $x;
        echo "<br>";
        echo " y = ". $y;
    case 3: $y += 15;
        echo " x = ". $x;
        echo "<br>";
        echo " y = ". $y;
    case 4: $y += 20;
        echo " x = ". $x;
        echo "<br>";
        echo " y = ". $y;
    case 5: $y += 25;
        echo " x = ". $x;
        echo "<br>";
        echo " y = ". $y;
    default: $y += 0;
        echo " x = ". $x;
        echo "<br>";
        echo " y = ". $y;
}