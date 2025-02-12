<?php
require 'function.php';
$nama = mysqli_query($conn,"SELECT * FROM user ORDER BY nama LIMIT 20");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Akun</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>PASSWORD</th>
    </tr>

    <?php 
    $i = 1;
    foreach( $nama as $row) :
    ?>

    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["password"] ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>" >ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</body>
</html>