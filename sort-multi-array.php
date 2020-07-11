<?php
function sort_array($input)
{
	$clength = count($input);
	for($x = 0; $x < $clength; $x++) {
		sort($input[$x]);
		$xlength = count($input[$x]);
		echo "Array ", $x, " : ";
		for($xx = 0; $xx < $xlength; $xx++) {
			echo $input[$x][$xx];
			if($xx != $xlength) { echo ",";}
		}
		echo "<br>";
	}
}

$data = array(
	array("a","c","b","d","e"),
	array("g","f","i","h"),
	array("k", "j", "l", "n", "m")
);

sort_array($data);
?>