<?php
// Simpan informasi login admin
$admin_username = 'admin';
$admin_password = 'admin123';

// Cek apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password valid
    if ($username === $admin_username && $password === $admin_password) {
        // Jika valid, redirect ke halaman admin
        header('Location: admin_dashboard.php');
        exit;
    } else {
        // Jika tidak valid, tampilkan pesan error
        $error_message = 'Username atau password salah';
    }
}
?>
<?php if (isset($error_message)) : ?>
    <div class="alert alert-danger" role="alert"><?php echo $error_message; ?></p>
    </div>
<?php endif; ?>