<?php 

require 'functions.php';

if(isset($_POST["register"]) ){

  if (registrasi ($_POST) > 0 )) {
    echo "<script>
          alert('user baru berhasil di  tambah
    ";
  }
}

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Registrasi</title>
  <link rel="stylesheet" type="text/css" href="../Asset/css/style2.css">
</head>
<body>
  <h1>Halaman Registrasi</h1>

<div class="form">
  <form action="" method="post">
  <ul>
      <li>
        <label for="username">username :</label>
        <input type="text" name="username" id="username">    
      </li>
      <li>
        <label for="E-mail">E-Mail :</label>
        <input type="text" name="E-mail" id="E-mail">    
      </li>
      <li>
        <label for="password">password :</label>
        <input type="text" name="password" id="password">    
      </li>
      <li>
        <label for="pass2">konfirmasi password :</label>
        <input type="text" name="pass2" id="pass2">    
      </li>
      <li>
        <button type="submit" name="register">Register</button>
      </li>
  </ul>
  </div>
  
  </form>
</body>
</html>