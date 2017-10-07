<?php

//while

$x = 0;
while ($x <= 10) {
	echo $x;

	echo "<br>";

	$x ++;
	# code...
}

echo "<hr>";


//do while
$y = 0;

do {
	echo $y;

	echo "<br>";

	$y ++;
} while ($y <= 10);

echo "<hr>";

//for 


for($i=0; $i<=10; $i++){
	
	echo $i;

	echo "<br>";

	if ($i == 5)
		echo "<hr>";
		break;
}

for($i=0; $i<=10; $i++){
	
	echo $i;

	echo "<br>";

	if ($i == 5)
		echo "<hr>";
		continue;
}