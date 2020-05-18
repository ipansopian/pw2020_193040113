<?php 
require 'functions.php';

if (isset($_POST["register"])){

  if (registrasi($_POST) > 0){
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
            </script>";
  }else{
    echo "<script>
            alert('Registrasi Gagal');
            </script>";
  }
}
?>
<head>
<title>registrasi</title>
</head>
  <body> 
    <h1>Registrasi Akun</h1>
      <form action="" method="post">
        <link rel="stylesheet" type="text/css" href="../Asset/css/style2.css">
    <table>
          <ul>
            <li><label for="username">username</label></li>
            <li><input type="text" name="username"></li>
          </ul>
          <ul>
            <li><label for="password">password</label></li>
            <li><input type="password" name="password"></li>
          </ul>
          <ul>
            <li><label for="password2">Confirm password</label></li>
            <li><input type="password2" name="password2"></li>
          </ul>
          <ul>
            <button type="submit" name="register">REGISTER</button>
          </ul>
        </table>
    </form>
</body>
