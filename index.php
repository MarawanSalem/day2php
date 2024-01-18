<!-- Lap 2 Php By Marwan Mohamed  -->

<?php
// Task1
$myName = "Marwan\nMohamed";
$lineByline=nl2br($myName);
echo $lineByline;
// -----------------------------------------------------------
// Task2

foreach ($_SERVER as $key => $value) {
    echo "<li><strong>$key:</strong> $value</li>";
}
// -----------------------------------------------------------
echo "<hr>";
// Task3
$myArr=[12 , 45 , 10 ,25];

$sum = 0;
foreach ($myArr as $number) {
    $sum += $number;
}
$count = count($myArr);
$average = ($count > 0) ? $sum / $count : 0;
echo "Sum: $sum<br>";
echo "Average: $average<br>";
rsort($myArr);
print_r($myArr);
// -----------------------------------------------------------
echo "<hr>";
// Task4
$arr2 = [ "sara" => 31 , "john" => 41 , "walaa" => 39 , "ramy" => 40];

ksort($arr2);
echo "Ascending order based on keys: ";
print_r($arr2);

asort($arr2);
echo "<br>Ascending order based on values: ";
print_r($arr2);

krsort($arr2);
echo "<br>Descending order based on keys: ";
print_r($arr2);

arsort($arr2);
echo "<br>Descending order based on values: ";
print_r($arr2);


?>