<?php
session_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="" method="POST">
        <div>
            <label>Username</label>
            <input type="text" name="username" require>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" require>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        </form>
    </body>
</html>

<?php
//github copile
if(isset($_POST['username'])){
    extract($_POST);
    require_once "koneksi.php";
    $query = "SELECT * FROM table_user WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row != null) {
        //validasi password jika data ada pada database
        if (password_verify($password, $row['password'])) {
            //untuk mengisi session bahwa login berhasil
            $_SESSION['username'] = $username;
            $datetime = date("Y-m-d H:i:s");
            mysqli_query($koneksi,"UPDATE table_user set login_terakhir = '$datetime' WHERE username = '$username'");
            //update last login
            echo "<script>alert('Berhasil melakukan login');window.location='index.php?page=home';</script>";
        } else {
            echo "<script>alert('Password yang Anda masukkan salah !');window.location='login.php';</script>";
        }
    }else {
        echo "<script>alert('Data dengan username $username tidak ditemukan !');window.location='login.php';</script>";
    }
}
?>