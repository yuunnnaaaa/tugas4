<?php

$conn = mysqli_connect("localhost", "root", "", "project");
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;

    }
    return $rows;
}
function registrasi($data) {
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $conf_password = mysqli_real_escape_string($conn,$data["conf_password"]);

    if ( $password !== $conf_password) {
        echo "<scrpit>
                alert('konfirmasi password tidak sesuai!');
                </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$password')");

    return mysqli_affected_rows($conn);

}
?>