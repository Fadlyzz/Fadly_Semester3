<?php include "../header.php"; ?>

<?php
if (isset($_GET['delete'])) {
    $surveiid = $_GET['delete'];
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <h1 class="mt-4"><i class="fas fa-trash-alt text-danger fa-3x"></i></h1>
                <h2 class="mb-4"><b>DELETE</b></h2>
                <p>Yakin data akan dihapus?</p>
            </div>
            <div class="modal-footer justify-content-center border-0">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                <a href="delete.php?delete=<?php echo $surveiid; ?>" class="btn btn-danger btn-block">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('#deleteModal').modal('show');
        
        // Tambahkan skrip ini untuk mengarahkan kembali ke home.php saat tombol Cancel ditekan
        $('#deleteModal').on('hidden.bs.modal', function () {
            window.location.href = 'home.php';
        });
    });
</script>

<?php
    exit(); // Pastikan untuk keluar dari script setelah menampilkan modal
}
?>

<?php include "footer.php"; ?>
