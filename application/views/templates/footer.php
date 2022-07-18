    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>UAS Pemrograman Web Lanjut</strong>
      <sub>
        <strong>Copyright&copy; 2022 <a href="https://adminlte.io">AdminLTE.io</a></strong>
      </sub>
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.5-beta
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?=base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>assets/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="<?=base_url()?>assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="<?=base_url()?>assets/plugins/raphael/raphael.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="<?=base_url()?>assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Data Tables -->
  <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- Select2 -->
  <script src="<?=base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  
</body>
</html>

<script>
  //Data table
  $(document).ready(function() {
    $('#table1').DataTable();
  });

  //Initialize Select2 Elements
  $('.select2').select2()

  //Date picker
  $('#tglpinjam').datetimepicker({
    format: 'YYYY-MM-DD'
  });
  $('#tglkembali').datetimepicker({
    format: 'YYYY-MM-DD'
  });
</script>