</div>
        <footer class="footer py-4  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  © <script>
                    document.write(new Date().getFullYear())
                  </script>,
                  made with <i class="fa fa-heart"></i> by
                  <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                  for a better web.
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    </div>
  </main>
  <script>
  window.addEventListener('unload', function(event) {
    // Enviar una solicitud al servidor para eliminar la cookie de sesión del usuario
    fetch('../controllers/cerrar_sesion.php', { method: 'POST' });
  });
</script>
  <!--   Core JS Files   -->
  <script src="../../vendor/assets/js/core/popper.min.js"></script>
<!--Jquery-->
<script src="../../vendor/jquery/jquery.min.js"></script>
						<!--animsition-->
	<script src="../../vendor/animsition/js/animsition.min.js"></script>
						<!--bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
						<!--select2-->
	<script src="../../vendor/select2/select2.min.js"></script>
						<!--daterangepicker-->
	<script src="../../vendor/daterangepicker/moment.min.js"></script>
	<script src="../../vendor/daterangepicker/daterangepicker.js"></script>
						<!--countdowntime-->
	<script src="../../vendor/countdowntime/countdowntime.js"></script>
						<!--datatables-->
	<script src="../../vendor/datatables/JSZip-2.5.0/jszip.js"></script>
	<script src="../../vendor/datatables/pdfmake-0.1.36/pdfmake.js"></script>
	<script src="../../vendor/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
	<script src="../../vendor/datatables/DataTables-1.13.3/js/jquery.dataTables.js"></script>
	<script src="../../vendor/datatables/DataTables-1.13.3/js/dataTables.bootstrap5.js"></script>
	<script src="../../vendor/datatables/AutoFill-2.5.2/js/dataTables.autoFill.js"></script>
	<script src="../../vendor/datatables/AutoFill-2.5.2/js/autoFill.bootstrap5.js"></script>
	<script src="../../vendor/datatables/Buttons-2.3.5/js/dataTables.buttons.js"></script>
	<script src="../../vendor/datatables/Buttons-2.3.5/js/buttons.bootstrap5.js"></script>
	<script src="../../vendor/datatables/Buttons-2.3.5/js/buttons.colVis.js"></script>
	<script src="../../vendor/datatables/Buttons-2.3.5/js/buttons.html5.js"></script>
	<script src="../../vendor/datatables/Buttons-2.3.5/js/buttons.print.js"></script>
						<!--js-->
	<script src="../../vendor/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../vendor/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../../vendor/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../vendor/assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>