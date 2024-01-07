<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Gagal: " . $conn->connect_error);
}

// Memeriksa apakah request menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $gender = $_POST["gender"];

    // Menggunakan prepared statement untuk mencegah SQL injection
    $sql = $conn->prepare("INSERT INTO oke (nama, email, website, gender) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $nama, $email, $website, $gender);

    // Mengeksekusi pernyataan SQL
    if ($sql->execute()) {
        echo "Tersimpan";

        // Menyimpan data ke file (gunakan FILE_APPEND jika ingin menambahkan data)
        $data = "Nama: $nama\nEmail: $email\nGender: $gender\nWebsite: $website\n";
        file_put_contents("data_registrasi.txt", $data, FILE_APPEND);
        
        echo "Registrasi berhasil! Terima kasih, $nama.";
    } else {
        echo "Gagal Tersimpan";
    }

    // Menutup prepared statement
    $sql->close();
} else {
    echo "Akses tidak sah.";
}
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Menutup koneksi database
$conn->close();

?>
