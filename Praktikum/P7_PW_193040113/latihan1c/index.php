<?php 

require 'php/functions.php';

if (isset($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $buku = query ("SELECT * FROM bukubestseller WHERE
    'No' LIKE '%$keyword%'OR
    Gambar LIKE '%$keyword%'OR
    NamaBuku LIKE '%$keyword%'OR
    Pengarang LIKE '%$keyword%'OR
    TahunRilis LIKE '%$keyword%'OR
    Harga LIKE '%$keyword%' ");

}else{
    $buku = query("SELECT * FROM bukubestseller");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" type="text/css" href="Asset/css/style2.css">
</head>
<body>
    
    <div class ="container">
    <h1>Daftar Buku Best Seller</h1>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus
                    placeholder="silahkan cari sendiri!!!"
                    autocomplete="off" >
        <button type="submit" name="cari">Cari</button>
    </form>

    <?php if(empty($buku)) : ?>
    <h1>Data tidak ditemukan</h1>
    <?php else : ?>


        <?php foreach ($buku as $row) : ?> 
            <p class="Nama Buku"></p>
                 <a href="php/detail.php ?id=<?= $row ['id'] ?>"
                 style="text-decoration:none; color:black;" > 
                 <img src="Asset/img/<?= $row ['img'];?>" alt=""><br>
                    <?= $row ["NamaBuku"] ?>
                </a>
            </p>
<?php endforeach; ?>
<?php endif ; ?>
</div>
    <a href="php/admin.php">
        <button type="">
        Masuk ke halaman admin
        </button>
    </a>
             </table>
        </div>
    </body>
</html>