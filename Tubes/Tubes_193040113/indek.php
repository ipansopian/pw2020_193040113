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
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tubes_193040113</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="asset/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="asset/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<!-- NAVBAR -->
<body>
<section id="navbar">
<div class="navbar-fixed">
    <nav class="#2e7d32 green darken-3">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#Murah" class="brand-logo">Lapak Buku Murah</a>
          <a href="#sidenav" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#list">List Buku Best Seller </a></li>
            <li><a href="#admin">Masuk Halaman Admin</a></li>
            <li><a href="#order">Order By</a></li>
            <li><a href="#toko">toko</a></li>
            <li><a href="#cari">cari </a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</section>

<!--SIDENAV-->
<section id="sidenav">
<ul class="sidenav" id="mobile-nav">
    <li><a href="#list">List Buku Best Seller </a></li>
    <li><a href="#admin">Masuk Halaman Admin</a></li>
    <li><a href="#order">Order By</a></li>
    <li><a href="#toko">toko</a></li>
    <li><a href="#cari">cari</a></li>
</ul>
</section>
 <!-- SLIDER -->
 <section id="slider">
 <div class="slider">
    <ul class="slides">
      <li>
        <img src="asset/img/buk1.jpg"> 
        <div class="caption left-align">
          <h3>Aku rela di penjara asalkan bersama buku</h3>
          <h5 class="light grey-text text-lighten-3">Karena dengan buku aku bebas</h5>
        </div>
      </li>
      <li>
        <img src="asset/img/buk2.jpg"> 
        <div class="caption center-align">
          <h3>Kalau kita membaca buku yang sama dengan yang dibaca orang lain</h3>
          <h5 class="light grey-text text-lighten-3">Kita cuma bisa berpikir seperti orang lain</h5>
        </div>
      </li>
      <li>
        <img src="asset/img/buk3.jpg"> 
        <div class="caption left-align">
          <h3>Jangan membaca sampai koma,</h3>
          <h5 class="light grey-text text-lighten-3">Tapi bacalah sampai titik.</h5>
        </div>
      </li>
    </ul>
  </div>
  </div>
  </section>

  <section id="cari">
  <div class="cari">
    <form action="" method="get">
      <input type="text" name="keyword" autofocus
                    placeholder="silahkan cari sendiri!!!"
                    autocomplete="off" >
      <button type="submit" name="cari">Cari</button>
    </form>
  </div>
<br><br>
</div>
</section>
  <?php if(empty($buku)) : ?>
    <h1>Data tidak ditemukan</h1>
  <?php else : ?>
    <section id="list"></section>
      <h4><b>List Buku Best Seller</b></h4>
        <?php foreach ($buku as $row) : ?> 
            <p class="Nama Buku header center teal-text text-lighten-2"></p>
                 <a href="php/detail.php ?id=<?= $row ['id'] ?>"
                 style="text-decoration:none; color:black;" > 
                 <img src="Asset/img/<?= $row ['img'];?>" alt=""><br>
                    <?= $row ["NamaBuku"] ?>
                </a>
            </p>
            <?php endforeach; ?>
            <?php endif ; ?>
            </div>
             </table>
          </div>
        </div>
      </div>

    </div>
  </div>

<!-- ORDER BY -->
<section id="order">
<div class="parallax-container">
      <div class="parallax"><img src="asset/img/buku2.jpg"></div>
        <div class="container">
          <h3 class="center light white-text"><b>Bisa Order Di</b></h3>
            <div class="row">      
              <div class="col m4 s12 left">
                <img src="asset/img/tokped.png">
              </div>
              <div class="col m4 s12 right">
                <img src="asset/img/bl.png">
              </div>
            </div>
          </div>
        </div>
        <!-- ALAMAT TOKO -->
        <section id="toko" class="toko">
          <div class="container">
             <div class="row">
               <h3 class="bold center">Alamat toko</h3>
                  <div class="col m4 s12">
                    <div class="card-panel center">
                    <i class="material-icons medium">business</i>
                  <h5>Jl.abc no:1 sulawesi</h5>
                <p>wa:089567345556</p>
                </div>
              </div>  
              <div class="col m4 s12">
                    <div class="card-panel center">
                    <i class="material-icons medium">business</i>
                  <h5>Jl.kendari no:12 sumatra</h5>
                <p>wa:089231456785</p>
                </div>
              </div>  
              <div class="col m4 s12">
                    <div class="card-panel center">
                    <i class="material-icons medium">business</i>
                  <h5>Jl.gagak no:68 bandung</h5>
                <p>wa:022123343326</p>
                </div>
              </div>  
            </div>
        </div>
        </section>
        <!-- Testimoni -->
<section id="testimoni" class="testimoni">
<div class="container">
<h3 class="center">Testimoni</h3>
  <div class="row">
    <div class="col m3 s12">
      <img src="asset/img/t3.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
      <img src="asset/img/t1.jpeg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
      <img src="asset/img/t2.png" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
      <img src="asset/img/t4.png" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
      <img src="asset/img/t5.jpeg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
      <img src="asset/img/t6.png" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
      <img src="asset/img/t7.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
      <img src="asset/img/t8.jpeg" class="responsive-img materialboxed">
      </div>
    </div>
  </div>
</section>

        <!-- CONTACT US -->
        <section id="admin" class="admin">
        <div class="container">
          <h3 class="center">Contac Us</h3>
          <p class="center-align ">
          <a href="php/admin.php ?id=<? $row ['id'] ?>"
          >Masuk ke halaman admin
                    </button>
                    </a>
                    </p>
      </div>
      </section>
    </div>
  </div>

  <footer class="page-footer #2e7d32 green darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Seputar Website Ini</h5>
          <p class="grey-text text-lighten-4">Ini adalah website jual buku buku best seller yang murah dan berkualitas</p>


        </div>
        </div>
        </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="brown-text text-lighten-3" >ipan</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
   const sideNav = document.querySelectorAll('.sidenav');
   
   const slider = document.querySelectorAll('.slider');
   M.Slider.init(slider, {
     indicators: false,
     height: 500,
     transition:600,
     interval:3000
   });

   const parallax= document.querySelectorAll('.parallax');
   
   const materialbox= document.querySelectorAll('.materialboxed');
  
  </script>

</body>

</html>