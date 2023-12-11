<!DOCTYPE html>
<html>
<body>

<?php
// Konsep 1: Integer
$umur = 20;

// Konsep 2: String
$nama = "Fadly";

// Konsep 3: Float
$nilaiMatematika = 9.5;

// Konsep 4: Boolean
$statusAktif = true;

// Menampilkan informasi menggunakan echo
echo "<h2>Informasi Siswa</h2>";
echo "<p>Nama: $nama</p>";
echo "<p>Umur: $umur tahun</p>";
echo "<p>Nilai Matematika: $nilaiMatematika</p>";

if ($statusAktif) {
    echo "<p>Status: Aktif</p>";
} else {
    echo "<p>Status: Nonaktif</p>";
}
?>

</body>
</html>
