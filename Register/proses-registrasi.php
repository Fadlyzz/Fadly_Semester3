<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];
    $negara = $_POST["negara"];
    $comment = $_POST["comment"];

    
    // Di sini, Anda dapat menambahkan kode untuk menyimpan data ke database atau melakukan tindakan lain sesuai kebutuhan.
    
    // Contoh: Menyimpan data ke dalam file teks
    $data = "Nama: $nama\nJenis Kelamin: $jenis_kelamin\nAlamat: $alamat\nNegara: $negara\nAlamat Email: $email\nKomentar: $comment\n";
    file_put_contents("data_registrasi.txt", $data, FILE_APPEND);
    
    echo "Registrasi berhasil! Terima kasih, $nama.";
} else {
    echo "Akses tidak sah.";
}
?>
