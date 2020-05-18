<?php 

session_start();

if (!isset($_SESSION["login"]) ) {
  header("location: login.php");
  exit;
}
require  'functions.php';
$buku = query("SELECT *FROM bukubestseller");

if(isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $row = query("SELECT * FROM bukubestseller WHERE
              Gambar LIKE '%$keyword%' OR
              NamaBuku LIKE '%$keyword%' OR
              Pengarang LIKE '%$keyword%' OR
              TahunRilis LIKE '%$keyword%' OR
              Harga LIKE '%$keyword%'  ");
} else {
  $row = query("SELECT * FROM bukubestseller");
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

<form action="" method="get">
      <input type="text" name="keyword" autofocus>
      <button type="submit" name="cari">Cari Di Sini!!</button> 
       
       <br>

      <div class="logout">
        <a href="logout.php">logout</a>
      </div> 
</form>
 <br>
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
        <td><?= $row ['NamaBuku'];?> </td>
        <td><?= $row ['Pengarang'];?> </td>
        <td><?= $row ['TahunRilis'];?> </td>
        <td><?= $row ['Harga'];?> </td>
      </tr>
    
    <?php $i++; ?>
<?php endforeach; ?>


</table>
</body>
</html>