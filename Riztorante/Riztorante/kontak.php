<?php
require 'koneksi.php';

// Membuat koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'riztorante');

// Periksa koneksi ke database
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Periksa apakah data POST telah diterima
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menghindari SQL Injection dengan menggunakan mysqli_real_escape_string
    $name = mysqli_real_escape_string($koneksi, $_POST["name"]);
    $email = mysqli_real_escape_string($koneksi, $_POST["email"]);
    $phone = mysqli_real_escape_string($koneksi, $_POST["phone"]);
    $message = mysqli_real_escape_string($koneksi, $_POST["message"]);

    // Validasi data
    $errors = [];
    if (empty($name)) {
        $errors[] = "Nama harus diisi.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid.";
    }
    if (empty($phone) || !preg_match('/^[0-9]{1,20}$/', $phone)) {
        $errors[] = "Nomor telepon tidak valid atau terlalu panjang (maksimal 20 karakter).";
    }
    if (empty($message)) {
        $errors[] = "Pesan harus diisi.";
    }

    // Jika terdapat error, tampilkan error
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Menyusun query SQL untuk memasukkan data
        $query_sql = "INSERT INTO contact (name, email, phone, message)
                      VALUES ('$name', '$email', '$phone', '$message')";

        // Menjalankan query
        if (mysqli_query($koneksi, $query_sql)) {
            header("Location: contact.html");
            exit();
        } else {
            echo "Kontak gagal: " . mysqli_error($koneksi);
        }
    }
}

// Menutup koneksi ke database
mysqli_close($koneksi);
?>
