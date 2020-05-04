<?php 

require  'functions.php';
$buku = query("SELECT *FROM bukubestseller ");

if(isset($_POST["cari"]) ){
  $bukubestseller = cari ($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Asset/css/style1.css">
</head>
<body>
      <a href="tambah.php">Tambah data</a>

<h3>Kumpulan Buku Best Seller</h3>

<form action="" method="post">

<input type="text" name="keyword" autofocus
placeholder="silahkan cari sendiri!!!" autocomplete="off">
<button type="submit" name="cari" >Cari</button>
</form>

  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Hapus</th>
      <th>Gambar</th>
      <th>Nama Buku</th>
      <th>Pengarang</th>
      <th>Tahun Rilis</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $row) : ?>
      <tr>
        <td><?= $i ?></td>
        <td>
            <a href="ubah.php?id=<?= $row['id']; ?>">
            <button>Ubah</button</a>
          
            <a href="hapus.php?id=<?= $row['id']; ?>"
                     onclick="return confirm('Hapus Data??')">
            <button>Hapus</button</a>
        </td>
        <td><img src="../asset/img/<?=$row['Gambar'];?>" width="50px" alt=""></td>
        <td><?= $row ['Nama Buku'];?> </td>
        <td><?= $row ['Pengarang'];?> </td>
        <td><?= $row ['Tahun Rilis'];?> </td>
        <td><?= $row ['Harga'];?> </td>
      </tr>
      
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>
</html>