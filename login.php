<?php
$conn = mysqli_connect("localhost", "root", "", "users");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "Login berhasil!";
} else {
    echo "Username atau password salah.";
}

mysqli_close($conn);
?>