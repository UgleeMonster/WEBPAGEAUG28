<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$n3 = $_POST['num3'];
$n4 = $_POST['num4'];

$sybau = $n1 + $n2;
$diddy = $n4 - $n3;
$pog = $n1 * $n3;
$scallywag = $n2 / $n3;
$ave = ($n1 + $n2 + $n3 + $n4) / 4;

echo "The sum of $n1 and $n2 is $sybau <br>";
echo "The diff of $n4 and $n3 is $diddy <br>";
echo "The sum of $n1 and $n3 is $pog <br>";
echo "The sum of $n2 and $n3 is ".round($scallywag, 2);
echo "<br> The average of $n1, $n2, $n3, and $4 is $ave <br>";
?>