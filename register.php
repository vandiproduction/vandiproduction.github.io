<?php
$conn = mysqli_connect("localhost", "root", "", "users");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm-password'];

if ($password != $confirmPassword) {
    echo "Password tidak cocok.";
} else {
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Registrasi berhasil!";