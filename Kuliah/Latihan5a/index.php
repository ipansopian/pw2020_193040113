<?php 

$conn = mysqli_connect("localhost", "root", "", "pw_193040113" );

$result = mysqli_query( $conn, "SELECT * FROM bukubestseller")


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
</head>
<body>
    
<h1>Buku Best Seller</h1>

<table border="1" cellpading="10" cellspacing="0">

<tr>
<th>No</th>
<th>Gambar</th>
<th>Nama Buku</th>
<th>Pengarang</th>
<th>Tahun Rilis</th>
<th>Harga</th>
</tr>

<?php while( $row = mysqli_fetch_assoc($result) ) : ?>

<tr>
<td><?= $row["No"];?></td>
<td><img src="asset/img/<?= $row["Gambar"]; ?>" width="50"></td>
<td><?= $row["Nama Buku"];?></td>
<td><?= $row["Pengarang"];?></td>
<td><?= $row["Tahun Rilis"];?></td>
<td><?= $row["Harga"];?></td>
</tr>

<?php endwhile; ?>




</table>





</body>
</html>