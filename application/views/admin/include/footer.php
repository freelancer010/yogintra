  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>©  <script>document.write(new Date().getFullYear()); </script> <?php echo $app_setting->app_name?></strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script type="text/javascript">
  const base_url = "<?php echo base_url()?>";
  var uri  = 'no';
</script>
<?php if($this->uri->segment(3) != 'edit_course_lession' && $this->uri->segment(3) != 'my_attandence'): ?>
<!-- jQuery -->
<script src="<?php echo admin_css(); ?>plugins/jquery/jquery.min.js"></script>
<?php endif; ?>
<!-- Bootstrap 4 -->
<script src="<?php echo admin_css(); ?>plugins/jquery-ui/jquery-ui.min.js"></script>


<script src="<?php echo admin_css(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo admin_css(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo admin_css(); ?>dist/js/adminlte.js"></script>

<?php if($this->uri->segment(3) == 'edit_bundle_course'): ?>
<script src="<?php echo admin_css(); ?>plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript"> 
  $(function () {
    //Initialize Select2 Elements 
    $('.select2').select2()
  });

</script>
<style>
.select2-selection__choice
{
      border: 1px solid #28a745!important;
  background: #28a745!important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove
{
  color:#fff;
}
</style>
<?php endif;;?>

<?php if($this->uri->segment(3) == 'view_all_gallery' || $this->uri->segment(3) == 'view_all_category' || $this->uri->segment(3) == 'all_slider' || $this->uri->segment(3) == 'section_1' || $this->uri->segment(3) == 'section_2' || $this->uri->segment(3) == 'blog_category' || $this->uri->segment(3) == 'view_all_post' || $this->uri->segment(3) == 'testimonial' || $this->uri->segment(3) == 'service_category' || $this->uri->segment(3) == 'all_service' || $this->uri->segment(3) == 'view_all_event' || $this->uri->segment(3) == 'event_booking' || $this->uri->segment(3) == 'landing_page' | $this->uri->segment(3) == 'view_all_yoga_center'): ?>
<!-- DataTables  & Plugins -->

<script src="<?php echo admin_css(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo admin_css(); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo admin_css(); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo admin_css(); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo admin_css(); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo admin_css(); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo admin_css(); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo admin_css(); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo admin_css(); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo admin_css(); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo admin_css(); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>

<script type="text/javascript">
  <?php if($this->uri->segment(3) == 'about_us_page' ): ?>
    $(function () {
      $(".table").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,  "searching": true,
      })
    });
  <?php endif;?>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,  "searching": true,"ordering": false,
        buttons: [
         {
            extend: 'print',
            footer: false,
            
         }         
      ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
  
  
</script>


<?php 
endif;
if($this->uri->segment(3) == 'visual_setting' ): ?>
<script src="<?php echo admin_css(); ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript">
   $('.my-colorpicker2').colorpicker();
</script>
<?php 
endif;
if($this->uri->segment(3) == 'add_center' || $this->uri->segment(3) == 'edit_center' || $this->uri->segment(3) == 'application_setting' || $this->uri->segment(3) == 'add_new_post' || $this->uri->segment(3) == 'edit_blog_post' || $this->uri->segment(3) == 'add_service' || $this->uri->segment(3) == 'edit_service' || $this->uri->segment(3) == 'add_new_event' || $this->uri->segment(3) == 'edit_event' || $this->uri->segment(3) == 'add_landing_page' || $this->uri->segment(3) == 'edit_landing_page'): ?>
<!-- Summernote -->
<script src="<?php echo admin_css(); ?>plugins/summernote/summernote-bs4.min.js"></script>
<script type="text/javascript">
  $(function () {
    // Summernote
    $('.text-editor').summernote({
      toolbar: [
    // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']],
      ],
      height: 200,
    });
  })
</script>
<?php endif;?>
<script src="<?php echo admin_css(); ?>dist/js/custom.js"></script>
</body>
</html>
<style type="text/css">
  .app_name{
    color: red;
  }
  .font-awsom{
    font-family: fontAwesome
  }

.select2-container .select2-selection--single
{
  height: calc(2.25rem + 2px);
}
.select2-container--default .select2-selection--single .select2-selection__arrow
{
  top: 5px;
}
.required
{
  color: red;
}

.bs-stepper-header {
  overflow-x: auto;
  white-space: nowrap;
}
</style>