<?php

include ('functions.php');

$numbers = array(7, 9, 8, 9, 8, 8, 6);
printArr($numbers);

echo "Largest <br>";
$largest = largest($numbers);
echo "$largest<br>";

echo "Average <br>";
$average = average($numbers);
echo "$average<br>";

echo "Dupes removed. <br>";
$unique = removeDups($numbers);
printArr($unique);

echo "Distribution <br>";
$distributed = distribution($numbers);
printArr($distributed);

?>
