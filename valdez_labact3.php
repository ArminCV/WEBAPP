<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-weight: normal;
  text-align: center;
}

input{
	width: 100%;
}
</style>
</head>
<body>

<?php 

function is_anagram($str1, $str2){

	if(strlen($str1) != strlen($str2)){
		"<td style='width:25%'>Not An Anagram</td>";
	}else{
		
		$str1 = strtolower(str_replace(" ","", $str1));
		$str2 = strtolower(str_replace(" ","", $str2));
		
		$str1 = str_split($str1);
		$str2 = str_split($str2);
		
		sort($str1);
		sort($str2);
		
		if($str1 === $str2){
			echo "<td style='width:25%'>✔</td>";
		}else{
			echo "<td style='width:25%'>✘</td>";
		}
		
	}
}// is_anagram end

$string1 = array("Rat", "Hello", "Car", "Inch", "Act", "The Morse Code", "Base", "Stressed", "A gentleman");
$string2 = array("Tar", "Elbow", "Arc", "Chin", "Cat", "Here comes dot", "Save", "Desserts", "Elegant man");

echo "<table style='width: 100%'>";
echo "<tr>
		<th>String 1</th>
		<th>String 2</th>
		<th>Anagram</th>";
for($row=0; $row<9; $row++){
	echo "<tr>";
	
	for($col=0; $col<3; $col++){
		switch($col){
			case 0:
				echo "<td style='width:25%'>" . $string1[$row] . "</td>";
				break;
			case 1:
				echo "<td style='width:25%'>" . $string2[$row] . "</td>";
				break;
			case 2:
				is_anagram($string1[$row], $string2[$row]);
				break;
		}//switch end
	}//column end
}//row end

echo "<tr style='txt-align:left;'><td colspan='3' style='text-align:left;'><b>Written by:</b> <span style='color:red'>Armin Carl E. Valdez</span></tr>";
	echo "<tr ><td colspan='3' style='text-align:left;'><b>Lab Act.: 3</b></tr>";

?>

</body>
</html>