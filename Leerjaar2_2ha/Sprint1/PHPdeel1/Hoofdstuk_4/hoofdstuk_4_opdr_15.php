<html>
<head>
    <title>Opdracht 15 H4</title>
</head>
<body>
    <?php
    echo "<table border='1'>";

    // I
    echo "<th>Patroon I</th>";
    echo "<tr>";
    echo "<td>";
    echo "<br>";
    for ($i = 1; $i <= 1; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 2; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 3; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 4; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 5; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 6; $i++) {echo $i . " ";}
    echo "<br>";
    echo "<br>";
    echo "</td>";
    echo "</tr>";

    echo "<br>";

    // II
    echo "<th>Patroon II</th>";
    echo "<tr>";
    echo "<td>";
    echo "<br>";

    for ($i = 1; $i <= 6; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 5; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 4; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 3; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 2; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 1; $i <= 1; $i++) {echo $i . " ";}
    echo "<br>";
    echo "<br>";
    echo "</td>";
    echo "</tr>";

    // III (lastig)
    echo "<th>Patroon III (lastig)</th>";
    echo "<tr align='right'>";
    echo "<td>";
    echo "<br>";

    for ($i = 1; $i >= 1; $i=$i-1) {echo $i . " ";}
    echo "<br>";
    for ($i = 2; $i >= 1; $i=$i-1) {echo $i . " ";}
    echo "<br>";
    for ($i = 3; $i >= 1; $i=$i-1) {echo $i . " ";}
    echo "<br>";
    for ($i = 4; $i >= 1; $i=$i-1) {echo $i . " ";}
    echo "<br>";
    for ($i = 5; $i >= 1; $i=$i-1) {echo $i . " ";}
    echo "<br>";
    for ($i = 6; $i >= 1; $i=$i-1) {echo $i . " ";}
    echo "<br>";
    echo "<br>";
    echo "</td>";
    echo "</tr>";

    // IV (lastig)
    echo "<th>Patroon IV (lastig)</th>";
    echo "<tr align='right'>";
    echo "<td>";
    echo "<br>";

    for ($i = 1; $i <= 6; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 2; $i <= 6; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 3; $i <= 6; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 4; $i <= 6; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 5; $i <= 6; $i++) {echo $i . " ";}
    echo "<br>";
    for ($i = 6; $i <= 6; $i++) {echo $i . " ";}
    echo "<br>";
    echo "<br>";
    echo "</td>";
    echo "</tr>";


    echo "<br>";
    echo "</table>";
    ?>
</body>
</html>
