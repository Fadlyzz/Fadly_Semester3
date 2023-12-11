<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Gagal". $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO oke (nama, email, website, gender) VALUES ('$nama','$email','$website','$gender')";
    $result = $conn->query($sql);
    if ($result) {
        echo "Tersimpan";
    } else {
        echo "Gagal Tersimpan";
    }
    $data = "Nama: $nama\nEmail: $email\nGender: $gender\nWebsite: $website\n";
    file_put_contents("data_registrasi.txt", $data, FILE_APPEND);
    
    echo "Registrasi berhasil! Terima kasih, $nama.";
} else {
    echo "Akses tidak sah.";
}

?>
