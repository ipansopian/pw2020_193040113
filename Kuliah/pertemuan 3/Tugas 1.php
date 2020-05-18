<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
<style type="text/css">
	
.kotak {
width: 30px;
height: 30px;
text-align: center;
line-height: 30px;
border:1px solid;
float: left;
margin: 2px;
color:black;
}

.kotak1 {
background-color: black;
width: 30px;
height: 30px;
text-align: center;
line-height: 30px;
border:1px solid;
float: left;
margin: 2px;
color:black;
}

.clear{
clear: both;


}

.hitam{

background-color: black;
}

.putih{

background-color: white;
}
		</style>
	</head>
<body>
	<?php


for ($b=1; $b <=5 ; $b++) { 

	if ($b%2) {
				for ($i=1; $i <=5 ; $i++) {

				if ($i%2) {
				echo "<div class='kotak hitam'></div>";
				} else {

					echo "<div class=' kotak putih'></div>";
				}

			} echo "<div class='clear'></div>";

		}else{
			for ($i=1; $i <=5 ; $i++) {

			if ($i%2) {
			echo "<div class='kotak putih'></div>";
			} else {

				echo "<div class=' kotak hitam'></div>";
			}

		} echo "<div class='clear'></div>";

	}
}



?>


</body>
</html>
