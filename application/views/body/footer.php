 

    <!-- Core JS -->

    <!-- Data Table -->

    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/vendor/libs/jquery/jquery.js');?>"></script>
    <script src="<?= base_url('assets/vendor/libs/popper/popper.js');?>"></script>
    <script src="<?= base_url('assets/vendor/js/bootstrap.js');?>"></script>
    <script src="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js');?>"></script>

    <script src="<?= base_url('assets/vendor/js/menu.js');?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url('assets/vendor/libs/apex-charts/apexcharts.js');?>"></script>
    
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/jquery.dataTables.js"></script><!-- xx -->
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/datatables-bootstrap5.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/datatables.responsive.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/responsive.bootstrap5.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/datatables.checkboxes.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/datatables-buttons.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/buttons.bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('assets/js/main.js');?>"></script>

    <!-- Page JS -->
    <script src="<?= base_url('assets/js/dashboards-analytics.js');?>"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>

  </body>
</html>