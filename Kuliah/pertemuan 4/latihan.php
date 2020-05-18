 <?php 
 $tulisan = "Pada Hari Minggu ku turut ayah ke kota </br>
Naik delman istimewa ku duduk di muka </br>
Ku duduk samping pak kusir yang sedang bekerja </br>
Mengendarai kuda supaya baik jalannya </br>

Tuk-tik-tak-tik-tuk tik-tak-tik-tuk tik-tak-tik-tuk </br>
Tuk-tik-tak-tik-tuk tik-tak suara s'patu kuda </br>"; 

$tulisan = str_replace("a","o", $tulisan);
$tulisan = str_replace("i","o", $tulisan);
$tulisan = str_replace("u","o", $tulisan);
$tulisan = str_replace("e","o", $tulisan);
echo "$tulisan";
?>