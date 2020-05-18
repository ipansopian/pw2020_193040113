<?php
session_start();

require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman login admin 
if(isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// cek cokies
if (isset($_COOKIE['username']) && isset ($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

//ambil username berdasarkan id
$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
$row = mysqli_fetch_assoc($result);

// cek cookie dan username
if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("location: admin.php");
    exit;
    }
}
// Login
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if(mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row ['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row ['id'], false);
        
    // jika remember me di centang
    if (isset($_POST['remember'])) {
        setchookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setchookie('hash', $hash, time() + 60 * 60 * 24);
    }        
            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
        }
        header("Location: ../indek.php");
        die;
    }
    $error = true;
    }
}
?>

<head>
<title>halaman login</title>
<h1>Halaman login</h1>
    </head>
        <body>
            <form action="" method="post">
            <link rel="stylesheet" type="text/css" href="../Asset/css/style2.css">
                <?php if (isset($error)) : ?>
                    <p style="color : red; font-style : italic;">Username Atau Password salah</p>
                <?php endif; ?>
                <table>
                    <ul>
                        <li><label for="username">Username</label></li>
                        <li><input type="text" name="username"></li>
                    </ul>
                    <ul>
                        <li><label for="password">Password</label></li>
                        <li><input type="password" name="password"></li>
                    </ul>
                <div class="remember">
                    <input type="checkbox" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <div class="login">
                <a href="admin.php" >login </a>
                </div>
                    <p>
                username:upin <br>
                pass : upin
                </p>
                <div class="registrasi">
                    <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
                </div>
            </table>
        </form>    
     </body>