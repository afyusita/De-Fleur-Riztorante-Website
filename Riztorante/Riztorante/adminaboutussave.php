<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connect to the database
$koneksi = mysqli_connect('localhost', 'root', '', 'riztorante');

// Check connection
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";

    // Get uploaded file names
    $header_img = $_FILES['header_img']['name'];
    $chef1_img = $_FILES['chef1_img']['name'];
    $chef2_img = $_FILES['chef2_img']['name'];

    // Get text input values
    $desc_title = $_POST['desc_title'];
    $desc_txt = $_POST['desc_txt'];
    $form1_title = $_POST['form1_title'];
    $form1_desc = $_POST['form1_desc'];
    $form2_title = $_POST['form2_title'];
    $form2_desc = $_POST['form2_desc'];

    // Move uploaded files to the target directory and check for errors
    $upload_ok = true;

    if (!move_uploaded_file($_FILES['header_img']['tmp_name'], $target_dir . $header_img)) {
        echo "Error uploading header image.<br>";
        $upload_ok = false;
    }
    if (!move_uploaded_file($_FILES['chef1_img']['tmp_name'], $target_dir . $chef1_img)) {
        echo "Error uploading chef1 image.<br>";
        $upload_ok = false;
    }
    if (!move_uploaded_file($_FILES['chef2_img']['tmp_name'], $target_dir . $chef2_img)) {
        echo "Error uploading chef2 image.<br>";
        $upload_ok = false;
    }

    // If all files were uploaded successfully, proceed to insert data into the database
    if ($upload_ok) {
        $sql = "INSERT INTO aboutus_admin (header_img, desc_title, desc_txt, form1_title, form1_desc, chef1_img, form2_title, form2_desc, chef2_img) 
                VALUES ('$header_img', '$desc_title', '$desc_txt', '$form1_title', '$form1_desc', '$chef1_img', '$form2_title', '$form2_desc', '$chef2_img')";

        if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil disimpan.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    }

    // Close the database connection
    mysqli_close($koneksi);
}
?>
