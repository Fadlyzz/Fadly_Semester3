<!DOCTYPE html>
<html>
<body>

<?php
// Contoh penggunaan operator
$angka1 = 10;
$angka2 = 5;

// Operator penugasan dan aritmatika
$hasilPenjumlahan = $angka1 += $angka2;
$hasilPengurangan = $angka1 -= $angka2;
$hasilPerkalian = $angka1 *= $angka2;
$hasilPembagian = $angka1 /= $angka2;

// Operator perbandingan
$hasilLebihBesar = $angka1 > $angka2;
$hasilLebihKecil = $angka1 < $angka2;
$hasilSamaDengan = $angka1 == $angka2;
$hasilTidakSamaDengan = $angka1 != $angka2;

echo "<h1>Belajar Operator PHP</h1>";
// Aritmatika
echo "<h2>Operator Aritmatika</h2>";
echo "10 + 5 = " . ($angka1 + $angka2) . "<br>";
echo "10 - 5 = " . ($angka1 - $angka2) . "<br>";
echo "10 * 5 = " . ($angka1 * $angka2) . "<br>";
echo "10 / 5 = " . ($angka1 / $angka2) . "<br>";
echo "10 % 5 = " . ($angka1 % $angka2) . "<br>";
echo "10 ** 5 = " . ($angka1 ** $angka2) . "<br>";

// Penugasan
echo "<h2>Operator Penugasan</h2>";
echo "10 += 5 = " . $hasilPenjumlahan . "<br>";
echo "10 -= 5 = " . $hasilPengurangan . "<br>";
echo "10 *= 5 = " . $hasilPerkalian . "<br>";
echo "10 /= 5 = " . $hasilPembagian . "<br>";

// Perbandingan
echo "<h2>Operator Perbandingan</h2>";
echo "$angka1 > $angka2: " . ($hasilLebihBesar ? 'True' : 'False') . "<br>";
echo "$angka1 < $angka2: " . ($hasilLebihKecil ? 'True' : 'False') . "<br>";
echo "$angka1 = $angka2: " . ($hasilSamaDengan ? 'True' : 'False') . "<br>";
echo "$angka1 != $angka2: " . ($hasilTidakSamaDengan ? 'True' : 'False') . "<br>";

// Operator logika
$benar = true;
$salah = false;

echo "<h2>Hasil Operasi Logika</h2>";
echo "AND: " . ($benar && $salah) . "<br>"; // false
echo "OR: " . ($benar || $salah) . "<br>"; // true
echo "NOT: " . (!$benar) . "<br>"; // false
?>

</body>
</html>
