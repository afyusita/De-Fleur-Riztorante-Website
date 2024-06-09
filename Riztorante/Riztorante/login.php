<?php
session_start(); // Memulai sesi
require 'koneksi.php'; // Menghubungkan ke database

// Periksa apakah data POST tersedia
if (isset($_POST["emailreg"]) && isset($_POST["passreg"])) {
    // Escape input untuk keamanan
    $emailreg = mysqli_real_escape_string($conn, $_POST["emailreg"]);
    $passreg = mysqli_real_escape_string($conn, $_POST["passreg"]);

    // Query untuk memeriksa apakah data pengguna ada di database
    $query_sql = "SELECT * FROM newregister WHERE emailreg = '$emailreg' AND passreg = '$passreg'";
    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        // Pengguna ditemukan, buat sesi login
        $_SESSION['emailreg'] = $emailreg;
        header("Location: dashboard.php"); // Arahkan ke halaman dashboard atau halaman yang diinginkan
        exit();
    } else {
        // Pengguna tidak ditemukan atau password salah
        echo "<p style='text-align:center;color:red;'>Email atau password salah.</p>";
    }

    // Tutup koneksi
    mysqli_close($conn);
} else {
    echo "<p style='text-align:center;color:red;'>Data POST tidak lengkap.</p>";
}
?>
