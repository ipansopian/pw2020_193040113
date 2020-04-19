<?php 

require 'php/functions.php';

$buku = query("SELECT * FROM bukubestseller");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>
</head>
<body>
    
    <div class ="container">
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

<?php $i = 1; ?>
<?php foreach ($buku as $row) : ?> 
    
    <tr>
        
        <td><?= $i++;?></td>
        <td><img src="asset/img/<?= $row['Gambar']; ?>" width="50"></td>
        <td><?= $row['Nama Buku'];?></td>
        <td><?= $row["Pengarang"];?></td>
        <td><?= $row["Tahun Rilis"];?></td>
        <td><?= $row["Harga"];?></td>
    </tr>

<?php $i++ ?>
<?php endforeach; ?>

             </table>
        </div>
    </body>
</html>