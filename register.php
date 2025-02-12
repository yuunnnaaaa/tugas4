<?php
require 'function.php';

if( isset($_POST["register"]) ) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Daftar Akun</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Lengkap: </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password">Konfirmasi password: </label>
                <input type="password" name="conf_password" id="conf_password">
            </li>
            <li>
                <button type="submit" name="register">Simpan</button>
            </li>
        </ul>
    </form>
</body>
</html>