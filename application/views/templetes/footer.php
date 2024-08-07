<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Kelurahan Nanga Bulik <?= date('Y') ?></span>
            <br>
            <span>Made With &#128150; by TRK 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LOGOUT</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Anda akan dikembalikan ke halaman Login, Apakah Anda Yakin?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
<script>
    var baseUrl = "<?php echo base_url(); ?>";
</script>
<script src="<?= base_url('assets/') ?>js/custom.js"></script>
<script src="<?= base_url('assets/') ?>js/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').dataTable();
    });
</script>
<script src="<?= base_url('assets/') ?>js/chosen.jquery.min.js"></script>
<script>
    $(function () {
        $('.chosen').chosen();
    });
</script>
<script>
    // jQuery to handle modal button click
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var userId = button.data('user-id'); // Extract info from data-* attributes
        var modal = $(this);
        modal.find('#confirmDeleteButton').attr('href', '<?= base_url('admin/hapus_user/'); ?>' + userId);
    });
</script>
</body>

</html>