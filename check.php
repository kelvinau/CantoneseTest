<?php
$total = 2;
$result = 0;

$hi = $_POST['hi'];
if ($hi == "nei5 hou2")
  $result++; 
  
$sleep = $_POST['sleep'];
if ($sleep == "ngo5 soeng2 fan3 gaau3")
  $result++;

echo "Result: ".($result/$total)*100."%";
echo "testing";
?>
