<!DOCTYPE html>
<html>
<body>

<?php
// Variabel global
$globalVariable = "Variabel Global";

function contohFungsi() {
    // Variabel lokal
    $localVariable = "Variabel Lokal";
    
    // Mengakses variabel global dari dalam fungsi
    global $globalVariable;
    
    echo "Dalam fungsi: " . $localVariable . "<br>";
    echo "Dalam fungsi: " . $globalVariable . "<br>";
}

// Memanggil fungsi
contohFungsi();

// Mencoba mengakses variabel lokal dari luar fungsi (akan menyebabkan error)
// echo "Di luar fungsi: " . $localVariable . "<br>";

// Mengakses variabel global dari luar fungsi
echo "Di luar fungsi: " . $globalVariable . "<br>";
?>

</body>
</html>
