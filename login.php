<?php
require 'function.php';

if ( isset($_POST["login"]) ) {
    
    $nama = $_POST["nama"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE nama = '$nama'");

    // cek username
    if( mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }
    $error = true;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>

<h1>Halaman Login</h1>

<?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>

<form action="" method="post">

    <ul>
        <li>
            <label for="nama">Name :</label>
            <input type="text" name="nama" id="nama">
        </li>

        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <br>
        <li>
            <button type="submit" name="login">Login</button>
        </li>

    </ul>


</form>
    
</body>
</html>