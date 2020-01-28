<style>
table {
  border-collapse: collapse;
  width: 100%;
  height: 50%;
}

table, th, td {
  border: 1px solid black;
  text-align: center;
}
</style>

<body>
	<p style='text-align: center; border: solid black; padding-bottom: 0'>Multiplication Table</>
</body>

<?php
	echo "<table width = 100%>";

	for($row = 1; $row <= 11; $row++){
		echo "<tr>";
		$count = 1;
		if($row == 1)
			echo "<td>X</td>";
		else {
			$count = $row - 1;
			echo "<td>".$count . "</td>";
		}

	for($column = 1; $column <=10; $column++){
		echo "<td>".$count * $column."</td>";
	}//column end

	}//row end

	echo "Hello";
	
?>