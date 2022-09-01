<?php
session_start();
?>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style_login.css?<?php echo time(); ?>">
</head>

<body>
    <div class="login-box">
        <h2>Sign In</h2>
        <form action="" method="POST">
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <button>Submit</button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['username'])) {
    extract($_POST);
    require_once "koneksi.php";
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row != null) {
        //validasi password jika data ada pada database
        if (password_verify($password, $row['password'])) {
            //untuk mengisi session bahwa login berhasil
            $_SESSION['username'] = $username;
            $datetime = date("Y-m-d H:i:s");
            mysqli_query($koneksi, "UPDATE user set login_terakhir = '$datetime' WHERE username = '$username'");
            //update last login
            echo "<script>alert('Login Berhasil');window.location='home.php';</script>";
        } else {
            echo "<script>alert('Password yang Anda masukkan salah !');window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('Data dengan username $username tidak ditemukan !');window.location='login.php';</script>";
    }
}
?>