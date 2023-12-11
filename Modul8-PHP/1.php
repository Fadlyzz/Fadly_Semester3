<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P</title>
</head>
<body>
    <h1>Sembarang</h1>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $umur = $_POST["umur"];

        echo "Halo, $nama! Kamu berumur $umur tahun.";
    }
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama">
        Umur: <input type="text" name="umur">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
