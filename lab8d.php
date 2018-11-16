<?php
$a1 = array(
    array(1, 2,3),
    array(3, 4,1),
    array(5, 6,9)
);
echo "<h2> Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$a1[$row][$col];
  }
}
$a2 = array(
    array(1, 2,3),
    array(3, 4,1),
    array(5, 6,9)
);
echo "<h2> 2nd matrix </h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    echo " ".$a2[$row][$col];
  }
}

$result = array();
for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
	$result[$i][$j]=0;
		for($k=0;$k<3;$k++)
		{
		$result[$i][$j]+=$a1[$i][$k]*$a2[$k][$j];
		}
	}
	
	
}
echo "<h2> result matrix </h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    echo " ".$result[$row][$col];
  }
}
?>	
