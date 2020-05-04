<?php 

require  'functions.php';

$buku = query("SELECT *FROM bukubestseller");
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
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Hapus Dan Ubah</th>
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
            <a href=""><button>Ubah</button</a>
            <a href=""><button>Hapus</button</a>
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