<?php
require 'functions.php';
    if(isset($_POST['tambah'])){
        if(tambah($_POST) > 0){
            echo "<script>
                        alert('Data Berhasil ditambahkan')
                        document.location.href = 'admin.php';
                   </script>";

        } else {
            echo "<script> 
                        alert('Data Gagal ditambahkan')
                        document.location.href = 'admin.php';
                 </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Asset/css/style2.css">
</head>
<Body>
  <h3>Form Tambah Daftar Buku</h3>
  <form action="" method="post">
    <ul>
    <li>
        <label for="No">No :</label><br>
        <input type="text" name="No" id="No" required><br><br>
      </li>
      <li>
        <label for="Gambar">Gambar :</label><br>
        <input type="text" name="Gambar" id="Gambar" required><br><br>
      </li>
      <li>
        <label for="NamaBuku">Nama Buku :</label><br>
        <input type="text" name="NamaBuku" id= "NamaBuku" required><br><br>
      </li>
      <li>
        <label for="Pengarang">Pengarang :</label><br>
        <input type="text" name="Pengarang" id="Pengarang" required><br><br>
      </li>
      <li>
        <label for="Harga">Harga :</label><br>
        <input type="text" name="Harga" id="Harga" required><br><br>
      </li>

        <label for="TahunRilis">Tahun Rilis :</label><br>
        <select name="TahunRilis" id="TahunRilis" required>
          <option value="">----------Tahun Rilis----------</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2016">2017</option>
          <option value="2016">2018</option>
          <option value="2016">2019</option>
          <option value="2016">2020</option>
        </select>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
          <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</Body>
</html>

