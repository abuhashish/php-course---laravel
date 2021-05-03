<?php
$numbers=[22,30,40,"type"];

foreach ($numbers  as $number)
    echo "$number <br>";


$array=array_splice($numbers, 1, 1);
echo "<pre>";
print_r($numbers);
echo "</pre>";
?>