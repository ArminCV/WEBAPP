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

<?php 

	echo "<table width = 100%>";
	echo "<tr><td colspan='11'><b>Multiplication Table</b></tr>";
	for($row = 1; $row <= 11; $row++){
		echo "<tr>";
		$count = 1;
		if($row == 1)
			echo "<td style='background-color:#80bfff'>X</td>";
		else {
			$count = $row - 1;
			echo "<td style='background-color:#80bfff'>".$count . "</td>";
		}

	for($column = 1; $column <=10; $column++){
		if($row == 1){
			echo "<td style='background-color:#80bfff'>".$count * $column."</td>";
		}
		else{
		echo "<td>".$count * $column."</td>";
		}
	}//column end
	}//row end
	
	echo "<tr style='txt-align:left;'><td colspan='11' style='text-align:left;'><b>Written by:</b> <span style='color:red'>Armin Carl E. Valdez</span></tr>";
	echo "<tr ><td colspan='11' style='text-align:left;'><b>Lab Act.: 1</b></tr>";
	?>