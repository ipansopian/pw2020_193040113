<?php 
$a= 3.14;
$jari1= 5;
$jari2= 6;

$luas_lk1 = HitungLuasLingkaran($jari1);

$luas_lk2 = HitungLuasLingkaran($jari2);

function HitungLuasLingkaran($jari){

$luas = $jari*$jari;
return $luas;
}

function tambah2luaslingkaran($luas1,$luas2)
{
	$total_luas = $luas1+$luas2;
	return $total_luas;
}

echo "Total luas = ".tambah2luaslingkaran($luas_lk1,$luas_lk2);
 ?>