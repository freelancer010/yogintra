<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo htmlspecialchars($title); ?> | <?php echo htmlspecialchars($app_setting->app_name); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo admin_css() ?>plugins/sweetalert/sweetalert.min.css">
  <script src="<?php echo admin_css() ?>plugins/sweetalert/sweetalert.min.js"></script>
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo admin_css() ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="<?php echo base_url() ?>">
            <img src="<?php echo base_url(); ?><?php echo $app_setting->app_sticky_logo; ?>" width="60%" alt="image">
        </a>
        </div>
   
  
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
       <?php
    $errors = $this->session->userdata('errors');
    if (isset($errors)) {
        ?>
        <script>
            swal ( "Oops" ,  "<?php echo $errors ?>" ,  "error" )
        </script>
        <?php echo $errors ?>
        <?php
        $this->session->unset_userdata('errors');
    }
    $error = $this->session->userdata('error');
    if (isset($error)) {
        ?>
         <script>
            swal ( "Oops" ,  "<?php echo $error ?>" ,  "error" )
        </script>
        <?php
        $this->session->unset_userdata('error');
    }
    $success = $this->session->userdata('success');
    if (isset($success)) {
        ?>
         <script>
            swal({
          title: "Done!",
          text: "<?php echo $success ?>",
          icon: "success",
        });
        </script>
        <?php
        $this->session->unset_userdata('success');
    }
    ?>
      <?php echo form_open(base_url().'login/index'); ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user_email" placeholder="Enter Your Email ID">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 password">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="form1" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close() ?>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo admin_css() ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo admin_css() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo admin_css() ?>dist/js/adminlte.min.js"></script>

</body>
</html>
