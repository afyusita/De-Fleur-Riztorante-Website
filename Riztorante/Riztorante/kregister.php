<?php
require 'koneksi.php'; // Menghubungkan ke database

$koneksi = mysqli_connect('localhost', 'root', '', 'riztorante');

// Periksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Periksa apakah data POST tersedia sebelum menggunakannya
if (isset($_POST["namereg"]) && isset($_POST["emailreg"]) && isset($_POST["passreg"])) {
    // Menghindari SQL Injection dengan melarikan nilai input
    $namereg = mysqli_real_escape_string($koneksi, $_POST["namereg"]);
    $emailreg = mysqli_real_escape_string($koneksi, $_POST["emailreg"]);
    $passreg = mysqli_real_escape_string($koneksi, $_POST["passreg"]);

    $query_sql = "INSERT INTO newregister (namereg, emailreg, passreg) VALUES ('$namereg', '$emailreg', '$passreg')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query_sql)) {
        header("Location: register.php");
        exit(); // Hentikan eksekusi script setelah mengirim header
    } else {
        echo "Registrasi gagal: " . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
} else {
    echo "Data POST tidak lengkap";
}
?>
