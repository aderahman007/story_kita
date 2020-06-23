<!-- Footer -->
<footer class="py-2 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Ade Rahman <?= date('Y'); ?></p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom JavaScript for this theme -->
<script src="<?php echo base_url('assets/js/scrolling-nav.js'); ?>"></script>

<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo base_url('assets/sweetalert/dist/sweetalert2.all.min.js'); ?>"></script>

<script>
  var ckeditor = CKEDITOR.replace('ckeditor', {
    height: '200px'
  });

  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline('editable');
</script>


</body>

</html>