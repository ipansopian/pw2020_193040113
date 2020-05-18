<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 2d</title>
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
background-color: #57e65a;
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

.ganjil{

background-color: #003;
color: #fff;
}

.genap{

	background-color: #57e65a;
}
		</style>
	</head>
<body>
	<?php

for ($a=1; $a <= 5; $a++) { 
	if ($a%2) {
			for ($b=$a; $b >= 1; $b--) { 
			echo "<div class='kotak'>#$a</div>";
			echo "<div class='kotak1 ganjil'>$a</div>";
		}
		echo "<div class='clear'></div>";
	} else {
		for ($b=$a; $b >= 1; $b--) { 
		echo "<div class='kotak'>#$a</div>";
		echo "<div class='kotak1 genap'>$a</div>";
	}
	echo "<div class='clear'></div>";
	}
	
}





?>


</body>
</html>
