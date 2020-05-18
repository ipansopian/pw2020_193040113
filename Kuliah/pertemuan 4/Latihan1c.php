<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<style>
		.box{
			width: 50px;
			height: 50px;
			border-radius: 90px;
			border: 2px solid;
			margin: 5px;
			background-color: red;
			float: left;
			text-align: center;
			line-height: 40px;
		}
		.clear{
			clear: both;
		}
	</style>

	<?php 
	$a = "A";
	$b = "B";
	$c = "C";
?>
<!-- baris1 -->
<div class="box"><?php echo $a ?></div>
<div class="clear"></div>
<!-- baris2 -->
<div class="box"><?php echo $b ?></div>
<div class="box"><?php echo $b ?></div>
<div class="clear"></div>
<!-- baris3 -->
<div class="box"><?php echo $c ?></div>
<div class="box"><?php echo $c ?></div>
<div class="box"><?php echo $c ?></div>

</body>
</html>