<?php
$trans = array(
    array(1, 2,3),
    array(4, 5,6),
    array(7, 8,9)
);

$trans2=array(
    array(1, 2,3),
    array(4, 5,6),
    array(7, 8,9)
);
$sum=array();
echo "<h2> Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$trans[$row][$col];
  }
}
echo "<h2> 2nd matrix </h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    echo " ".$trans2[$row][$col];
  }
  
}
echo "<h2> sum matrix </h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    $sum[$row][$col]=$trans2[$row][$col]+$trans[$row][$col];
	echo " ".$sum[$row][$col];
}
}
?>
