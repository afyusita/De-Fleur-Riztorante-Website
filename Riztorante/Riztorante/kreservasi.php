<?php
require 'koneksi.php';

$koneksi = mysqli_connect('localhost', 'root', '', 'riztorante');

// Menghindari SQL Injection dengan menggunakan mysqli_real_escape_string
$pax = mysqli_real_escape_string($koneksi, $_POST["pax"]);
$date = mysqli_real_escape_string($koneksi, $_POST["date"]);
$time = mysqli_real_escape_string($koneksi, $_POST["time"]);
$name = mysqli_real_escape_string($koneksi, $_POST["name"]);
$phonenumber = mysqli_real_escape_string($koneksi, $_POST["phonenumber"]);
$notes = mysqli_real_escape_string($koneksi, $_POST["notes"]);

$query_sql = "INSERT INTO tbl_user (pax, date, time, name, phonenumber, notes)
              VALUES ('$pax', '$date', '$time', '$name', '$phonenumber', '$notes')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: reservasi 2.html");
} else {
    echo "Reservasi gagal: " . mysqli_error($koneksi);
}
?>
