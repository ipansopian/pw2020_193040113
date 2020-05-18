<?php

session_start();

if (!isset($_SESSION["login"]) ) {
  header("location: login.php");
  exit;
}

require 'functions.php';

$id =$_GET["id"];
$row = query ("SELECT * FROM bukubestseller WHERE id = $id"); 
    if(isset($_POST['ubah'])){
        if(ubah($_POST) > 0){
            echo "<script>
                        alert('Data Berhasil diubah')
                        document.location.href = 'admin.php';
                   </script>";

        } else {
            echo "<script> 
                        alert('Data Gagal diubah')
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
  <h3>Form Ubah Daftar Buku</h3>
  <form action="" method="post">
  <input type="hidden" name="id" value="<?= $row['id']; ?>">
    <ul>
    <li>
        <label for="No">No :</label><br>
        <input type="text" name="No" id="No" required value="<?= $row['No']?>">
      </li>
      <li>
        <label for="Gambar">Gambar :</label><br>
        <input type="text" name="Gambar" id="Gambar" required value="<?= $row['Gambar']?>"><br><br>
      </li>
      <li>
        <label for="NamaBuku">NamaBuku :</label><br>
        <input type="text" name="NamaBuku" id= "NamaBuku" required value="<?= $row['NamaBuku']?>"><br><br>
      </li>
      <li>
        <label for="Pengarang">Pengarang :</label><br>
        <input type="text" name="Pengarang" id="Pengarang" required value="<?= $row['Pengarang']?>"><br><br>
      </li>
      <li>
        <label for="TahunRilis">Tahun Rilis :</label><br>
        <input type="text" name="TahunRilis" id="TahunRilis" required value="<?= $row['TahunRilis']?>"><br><br>
      </li>
      <li>
        <label for="Harga">Harga :</label><br>
        <input type="text" name="Harga" id="Harga" required value="<?= $row['Harga']?>"><br><br>
      </li>
        </select>
      </li>
      <br>
      <button type="submit" name="tambah">Ubah Data</button>
      <button type="submit">
          <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</Body>
</html>


