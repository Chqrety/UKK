<?php
// Pastikan Anda sudah memasukkan informasi koneksi.php di sini
include "koneksi.php";

// Mulai atau resume sesi
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
header("Location: login.php");
exit();
