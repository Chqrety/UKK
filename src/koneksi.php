<?php
// Informasi koneksi ke database
$host = "localhost"; // Ganti dengan nama host Anda
$user = "root"; // Ganti dengan nama pengguna MySQL Anda
$pass = ""; // Biarkan kosong untuk koneksi tanpa kata sandi
$dbname = "gallery"; // Ganti dengan nama database Anda

// Buat koneksi ke database
$koneksi = new mysqli($host, $user, $pass, $dbname);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Fungsi untuk membersihkan dan melindungi input
function bersihkanInput($data)
{
    global $koneksi;
    return htmlspecialchars(mysqli_real_escape_string($koneksi, $data));
}
