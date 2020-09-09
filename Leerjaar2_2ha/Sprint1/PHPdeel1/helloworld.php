<html>
<head>
    <title>Hello World example</title>
</head>
<body>
<?php
// Variable
echo "<b>Variabele</b>";
echo "<br>";
$message = "Hello \"World\"";
echo $message;

$name = "Henk";
echo "<br> Hallo $name";

// booleans
echo "<br>";
echo "<br>";
echo "<b>booleans</b>";
$light = true;
echo "<br>";
echo $light;

// arrays
echo "<br>";
echo "<b>arrays</b>";
$days = array();
$days[0] = "Zondag";
$days[1] = "Maandag";
$days[2] = "Dinsdag";
$days[3] = "Woensdag";
$days[4] = "Donderdag";
$days[5] = "Vrijdag";
$days[6] = "Zaterdag";

echo "<br>";

echo "$days[5]";

echo "<br>";

// Variabele voor de datum en tijd
echo "<br>";
echo "<b>Variabele voor de datum en tijd</b>";
echo "<br>";
date_default_timezone_set("Europe/Amsterdam");

$today = date("j F Y");
echo "Vandaag is het: $today";

echo "<br>";

$time = date("H:i");
echo "Het is nu: $time uur";

echo "<br>";

$month = date("F");
$daysInMonth = date("t");
echo "Deze maand, $month heeft $daysInMonth dagen";

echo "<br>";

$week = date("W");
echo "Deze week is het week: $week"
?>
</body>
</html>

