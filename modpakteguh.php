<?php 

$b		= 0;
$c 		= 0;
$d 		= 0;
$e 		= 0;

for($a = 0; $a<=10;$a++){
	if(($a % 4) == 0 ) $b = $b + $a + $c - $e;
	if(($a % 3) == 0) $c = $c + ($a+$b) -$d;
	if(($a % 2) == 0) $d = $d + ($a+$b) - $c;
	if(($a % 1) == 0) $e = $a + $b + $c;
}
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";
 ?>