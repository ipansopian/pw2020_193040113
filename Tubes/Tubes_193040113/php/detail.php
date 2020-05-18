<?php 

if (!isset ($_GET['id'])) {
    header ("location: ../indek.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$buku = query ("SELECT * FROM bukubestseller WHERE id = $id");

?>

<html>
    <head>

        <link rel="stylesheet" type="text/css" href="../Asset/css/style3.css">

    </head>

<body>
    <div class="container">
        <div class="gambar">
        
            <img src="../asset/img/<?= $buku['Gambar']; ?>" width="100">
        </div>
        <div class="keterangan">
          <p><?= $buku["No"]; ?></p>
          <p><?= $buku["NamaBuku"]; ?></p>
          <p><?= $buku["Pengarang"]; ?></p>
          <p><?= $buku["TahunRilis"]; ?></p>
          <p><?= $buku["Harga"]; ?></p>
        </div>

      <button class ="tombol-kembali"><a href="../indek.php">kembali</a></button>
    </div>
  </body>
</html>