<?php

$jml = $_GET['jml'];

echo "<table border=1>\n";

for ($a = $jml; $a > 0; $a--)
{
    $sum = ($a * ($a + 1)) / 2;

    echo "<tr>\n";
    echo "<td colspan='$jml'>Total : $sum</td>";
    echo "</tr>\n";

    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--)
    {
        echo "<td>$b</td>";
    }
    echo "</tr>\n";
}

echo "</table>";

?>