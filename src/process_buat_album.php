<?php
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form data
    $namaAlbum = bersihkanInput($_POST['NamaAlbum']);
    $deskripsi = bersihkanInput($_POST['Deskripsi']);

    // Validate form data (you may add more validation as needed)
    if (empty($namaAlbum) || empty($deskripsi)) {
        echo "Please fill in all fields.";
    } else {
        // Assuming you have a user authentication system and user is logged in
        // Replace this with the actual user ID retrieval method based on your system
        // $userId = $_SESSION['UserId']; // Adjust this based on your authentication system
        $userId = 1; // Adjust this based on your authentication system

        // Get today's date
        $todayDate = date("Y-m-d");

        // Insert data into the database
        $sql = "INSERT INTO album (NamaAlbum, Deskripsi, TanggalDibuat, UserId) VALUES ('$namaAlbum', '$deskripsi', '$todayDate', '$userId')";

        if ($koneksi->query($sql) === TRUE) {
            // Menampilkan alert dengan JavaScript
            echo '<script>alert("Data berhasil ditambahkan!");</script>';
            // Mengarahkan ke album.php setelah menampilkan alert
            echo '<script>window.location.href = "album.php";</script>';
            exit(); // Pastikan untuk menghentikan eksekusi skrip setelah melakukan redirect
        } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }
    }
}
