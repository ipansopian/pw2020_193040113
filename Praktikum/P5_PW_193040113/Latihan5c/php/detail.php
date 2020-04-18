<?php 

if (!isset ($_GET['id'])) {
    header ("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$buku = query ("SELECT * FROM bukubestseller WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
        
            <img src="../asset/img/<?= $buku['Gambar']; ?>" width="100">
        </div>
        <div class="keterangan">
          <p><?= $buku["No"]; ?></p>
          <p><?= $buku["Nama Buku"]; ?></p>
          <p><?= $buku["Pengarang"]; ?></p>
          <p><?= $buku["Tahun Rilis"]; ?></p>
          <p><?= $buku["Harga"]; ?></p>
        </div>

      <button class ="tombol-kembali"><a href="../index.php">kembali</a></button>
    </div>
  </body>
</html>
