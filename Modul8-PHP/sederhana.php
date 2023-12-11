<!DOCTYPE html>
<html>
<body>

<?php
// Data rumah
$rumah = array(
    array("nama" => "Rumah A", "warna" => "Merah"),
    array("nama" => "Rumah B", "warna" => "Biru"),
    array("nama" => "Rumah C", "warna" => "Hijau")
);

// Menampilkan informasi rumah
foreach ($rumah as $data) {
    echo $data["nama"] . " memiliki warna " . $data["warna"] . "<br>";
}
?>

</body>
</html>
