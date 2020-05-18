<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 2b</title>
</head>
<body>
		<table border="1" cellspacing="0" cellpadding="5">
	
	<tr>
		<th>kolom 1</th>
		<th>kolom 2</th>
		<th>kolom 3</th>
		<th>kolom 4</th>
		<th>kolom 5</th>
	</tr>

<?php
		for (
		 		$a=1;
				$a <= 5;
				$a++
		 		) {
			echo "<tr>";
		 	if ($a % 2) {
		 	for (
		 		$b=1; 
		 		$b <=5; 
		 		$b++
		 	) {
		 		echo "<td> baris ke $b, kolom ke $b</td>";
		 	}
		 }
		 else{
		 	for ($b=1; $b <5 ; $b++) { 
		 	echo "<td>&nbsp;</td>";
		 }
		 	}

		 	echo "</tr>";
}
?>

</table>
</body>
</html>