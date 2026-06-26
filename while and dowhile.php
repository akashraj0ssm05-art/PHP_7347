<?php
echo "Using while loop:<br>";

$i = 15;
while($i <= 20) {
    echo $i . " ";
    $i++;
}

echo "<br><br>Using do...while loop:<br>";

$j = 15;
do {
    echo $j . " ";
    $j++;
} while($j <= 20);
?>