<html>
<head>
	<style>
hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
} 
</style>
<body>

<?php
	$num_arr = array(99, 12, 10, 77, 28, 33, 45, 21, 88, 100, 24, 98, 33, 88, 12, 28);

	echo "1. display all values in order:" . "<br>";
	foreach ($num_arr as $value) {
		echo $value . " ";
	}
	echo "<hr>";

	asort($num_arr); // sort array in ascending order
	echo "2. display all values in ascending order:" . "<br>";
	foreach ($num_arr as $value) {
		echo $value . " ";
	}
	echo "<hr>";

	arsort($num_arr); // sort array in descending order
	echo "3. display all values in descending order:" . "<br>";
	foreach ($num_arr as $value) {
		echo $value . " ";
	}
	echo "<hr>";

	echo "4. display all unique values:". "<br>";
	$unique_arr = array_unique($num_arr); // get unique values
	ksort($unique_arr); // sort array to original order 
	asort($unique_arr); // sort array to ascending order
	foreach ($unique_arr  as $value) {
		echo $value . " ";
	}
	echo "<hr>";

// gets the duplicate values
function get_duplicates($num_arr){
	return array_unique(array_diff_assoc($num_arr, array_unique($num_arr)));
}

	$dup = get_duplicates($num_arr);
	echo "5. display all duplicate values:" . "<br>";
	foreach ($dup as $value) {
		echo $value . " ";
	}
	echo "<hr>";

	// display maximum value
	echo "6. maximum value: " . max($num_arr) . "<br>";
	echo "<hr>";

	// display minimum value
	echo "7. minimum value: " . min($num_arr) . "<br>";
	echo "<hr>";

	// mean
	$count = count($num_arr);
	$sum = array_sum($num_arr);
	echo "8. mean: " . $sum / $count;
	echo "<hr>";

	// median
	$mid = floor(($count) / 2);
	sort($num_arr);
	if($count % 2 == 0){ // even number
		echo "9. median: " . ($num_arr[$mid-1] + $num_arr[$mid]) / 2;
	}else{
		echo "9. median: " . $sorted_arr[$mid];
	}
	echo "<hr>";
	//mode

?>
</body>
</head>
</html>