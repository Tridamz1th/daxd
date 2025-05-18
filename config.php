<?php
$servername = "localhost";
$username = "username"; // Ganti dengan username database
$password = "password"; // Ganti dengan password database
$dbname = "database"; // Ganti dengan nama database

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>