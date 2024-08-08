<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $app_setting->app_name; ?> | Dashboard</title>
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url()?><?php echo $app_setting->fevicon; ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo admin_css() ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo admin_css() ?>dist/css/custom.css">
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/font-awesome-4/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/sweetalert/sweetalert.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  
  <script src="<?php echo admin_css() ?>plugins/sweetalert/sweetalert.min.js"></script>
  <?php if($this->uri->segment(3) == 'view_all_gallery' || $this->uri->segment(3) == 'view_all_category' || $this->uri->segment(3) == 'all_slider' || $this->uri->segment(3) == 'section_1' || $this->uri->segment(3) == 'section_2' || $this->uri->segment(3) == 'blog_category' || $this->uri->segment(3) == 'view_all_post' || $this->uri->segment(3) == 'testimonial' || $this->uri->segment(3) == 'service_category' || $this->uri->segment(3) == 'all_service' || $this->uri->segment(3) == 'view_all_event' || $this->uri->segment(3) == 'event_booking' || $this->uri->segment(3) == 'landing_page' || $this->uri->segment(3) == 'view_all_yoga_center'): ?>
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <?php 
  endif;
  if($this->uri->segment(3) == 'visual_setting' ): ?>
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <?php 
  endif;
  if($this->uri->segment(3) == 'add_center' || $this->uri->segment(3) == 'edit_center' || $this->uri->segment(3) == 'application_setting' || $this->uri->segment(3) == 'add_new_post' || $this->uri->segment(3) == 'edit_blog_post' || $this->uri->segment(3) == 'add_service' || $this->uri->segment(3) == 'edit_service' || $this->uri->segment(3) == 'add_new_event' || $this->uri->segment(3) == 'edit_event' || $this->uri->segment(3) == 'add_landing_page' || $this->uri->segment(3) == 'edit_landing_page'): ?>
  <link rel="stylesheet" href="<?php echo admin_css() ?>plugins/summernote/summernote-bs4.min.css">
  <?php endif;
  if($this->uri->segment(3) == 'edit_course'): ?>
    <link rel="stylesheet" href="<?php echo admin_css() ?>dist/css/dropzone.css">
    <script src="<?php echo admin_css() ?>dist/js/onDomChange.js"></script>
    <script src="<?php echo admin_css() ?>dist/js/dragula.min.js"></script>
  <?php endif;?>
  
  <script src="<?php echo admin_css() ?>dist/js/3.5.1.jquery.min.js"></script>
  <?php if($this->uri->segment(3) == 'edit_bundle_course' ): ?>
    <link rel="stylesheet" href="<?php echo admin_css(); ?>plugins/select2/css/select2.min.css">
  <?php endif;?>
</head>


<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed <?php //if($uri->getSegment(3) == 'add_new_order'){echo 'sidebar-collapse';}?>">
<div class="wrapper">

 <!-- 
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php //echo base_url()?><?php //echo $app_setting->admin_panel_logo; ?>" alt="<?php //echo $app_setting->application_name; ?>" width="100">
  </div> -->
  <div class="loader" style="display:none"></div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark" style="background-color:#feeeef">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-dark"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" style="padding: 0rem 1rem;" href="<?php echo base_url() ?>"  role="button"><button class="btn btn-outline-success btn-sm view-website"><i class="fa fa-home"></i>&nbsp;Home</button></a>
      </li>
   </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="fa fa-cog text-dark"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
            <a href="<?php echo base_url() ?>admin/update_profile/update_profile_details" class="dropdown-item">Update Profile
            </a>
             <div class="dropdown-divider"></div>
              <a href="<?php echo base_url() ?>admin/update_profile/update_profile_password" class="dropdown-item">Change Password
             </a>
             <div class="dropdown-divider"></div>
              <a href="<?php echo base_url() ?>admin/logout" class="dropdown-item">Logout
             </a>
         </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#feeeef">
    <!-- Brand Logo -->
    <a style="background-color:#feeeef" href="<?php echo base_url()?>/admin/admin/dashboard" class="brand-link dashboard-title text-dark text-center  ">
      <img src="<?php echo base_url(); ?><?php echo $app_setting->app_sticky_logo; ?>" alt="<?php echo $app_setting->app_name; ?>" style="height:40px">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo check_image(user()->user_photo); ?>" class="img-circle elevation-2" alt="<?php echo user()->user_name; ?>">
        </div>
        <div class="info">
          <a href="#" style="margin-bottom: -5px;" class="d-block"><?php echo user()->user_name; ?></a>
          <span style="color:#000;font-size:12px">( <?php echo user()->user_role; ?> )</span>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2 navbar-white">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($this->uri->segment(2) == 'dashboard'){echo 'menu-open';}?>">
            <a href="<?php echo base_url()?>admin/admin/dashboard" class="nav-link <?php if($this->uri->segment(2) == 'dashboard'){echo 'active';}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if($this->uri->segment(2) == "event"){ echo "menu-open";}?>">
              <a href="#" class="nav-link <?php if($this->uri->segment(2) == "event"){ echo "active";}?>">
                 <i class="nav-icon fa fa-briefcase"></i>
                 <p>
                    Event
                    <i class="fas fa-angle-left right"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/event/view_all_event" class="nav-link <?php if($this->uri->segment(3)=="all_service"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>View All Event</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/event/event_booking" class="nav-link <?php if($this->uri->segment(3)=="event_booking"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>Event Booking</p>
                    </a>
                 </li>
              </ul>
           </li>
          <li class="nav-item has-treeview <?php if($this->uri->segment(2) == "service"){ echo "menu-open";}?>">
              <a href="#" class="nav-link <?php if($this->uri->segment(2) == "service"){ echo "active";}?>">
                 <i class="nav-icon fa fa-briefcase"></i>
                 <p>
                    Service
                    <i class="fas fa-angle-left right"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/service/service_category" class="nav-link <?php if($this->uri->segment(3)=="service_category"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>Service Category</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/service/all_service" class="nav-link <?php if($this->uri->segment(3)=="all_service"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>All Service</p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item has-treeview <?php if($this->uri->segment(2) == "yoga_center"){ echo "menu-open";}?>">
              <a href="#" class="nav-link <?php if($this->uri->segment(2) == "yoga_center"){ echo "active";}?>">
                 <i class="nav-icon fa fa-building"></i>
                 <p>
                    Yoga Center
                    <i class="fas fa-angle-left right"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/yoga_center/view_all_yoga_center" class="nav-link <?php if($this->uri->segment(3)=="view_all_yoga_center"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>View All Center</p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item has-treeview <?php if($this->uri->segment(2) == "gallery"){ echo "menu-open";}?>">
              <a href="#" class="nav-link <?php if($this->uri->segment(2) == "gallery"){ echo "active";}?>">
                 <i class="nav-icon fa fa-building"></i>
                 <p>
                    Gallery
                    <i class="fas fa-angle-left right"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/gallery/view_all_category" class="nav-link <?php if($this->uri->segment(3)=="view_all_category"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>View All category</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/gallery/view_all_gallery" class="nav-link <?php if($this->uri->segment(3)=="view_all_gallery"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>View All Gallery</p>
                    </a>
                 </li>
              </ul>
           </li>
          <li class="nav-item has-treeview <?php if($this->uri->segment(2) == "blog"){ echo "menu-open";}?>">
              <a href="#" class="nav-link <?php if($this->uri->segment(2) == "blog"){ echo "active";}?>">
                 <i class="nav-icon fab fa-blogger"></i>
                 <p>
                    Blog
                    <i class="fas fa-angle-left right"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/blog/blog_category" class="nav-link <?php if($this->uri->segment(3)=="blog_category"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>Blog Category</p>
                    </a>
                 </li>
                 <li class="nav-item ">
                    <a href="<?php echo base_url() ?>admin/blog/add_new_post" class="nav-link <?php if($this->uri->segment(3)=="add_new_post"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>Add New Post</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/blog/view_all_post" class="nav-link <?php if($this->uri->segment(3)=="view_all_post"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>View all Post</p>
                    </a>
                 </li>
                 <!-- <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/blog/view_blog_comments" class="nav-link <?php if($this->uri->segment(3)=="view_blog_comments"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>View Blog Comments</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/blog/widget" class="nav-link <?php if($this->uri->segment(3)=="widget"){echo 'active';}?>">
                       <i class="fa fa-long-arrow-right nav-icon"></i>
                       <p>
                          Widget
                       </p>
                    </a>
                 </li> -->
              </ul>
           </li>

           <li class="nav-item <?php if($this->uri->segment(2) == 'Landing_page'){echo 'menu-open';}?>">
              <a href="#" class="nav-link <?php if($this->uri->segment(2) == 'Landing_page'){echo 'active';}?>">
                <i class="nav-icon far fa-id-card"></i>
                <p>
                Landing Page
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item ">
                  <a href="<?php echo base_url(); ?>admin/Landing_page/landing_page" class="nav-link <?php if($this->uri->segment(3) =="landing_page"){echo 'active';}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Landing Page </p>
                  </a>
                </li>

       
              </ul>
            </li>


          <li class="nav-item <?php if($this->uri->segment(2) == 'front_setting'){echo 'menu-open';}?>">
              <a href="#" class="nav-link <?php if($this->uri->segment(3) == 'front_setting'){echo 'active';}?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Front Setting
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ">
                  <a href="<?php echo base_url()?>/admin/front_setting/all_slider" class="nav-link <?php if($this->uri->segment(3) == 'all_slider'){echo 'active';}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Slider</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="<?php echo base_url()?>/admin/front_setting/section_1" class="nav-link <?php if($this->uri->segment(3) == 'section_1'){echo 'active';}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Section 1</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="<?php echo base_url()?>/admin/front_setting/section_2" class="nav-link <?php if($this->uri->segment(3) == 'section_2'){echo 'active';}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Section 2</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="<?php echo base_url(); ?>admin/front_setting/testimonial" class="nav-link <?php if($this->uri->segment(3) =="testimonial"){echo 'active';}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Testimonial </p>
                  </a>
                </li>
                
                <!--  <li class="nav-item ">-->
                <!--  <a href="<?php echo base_url(); ?>admin/front_setting/landing_page" class="nav-link <?php if($this->uri->segment(3) =="landing_page"){echo 'active';}?>">-->
                <!--    <i class="far fa-circle nav-icon"></i>-->
                <!--    <p>Landing Page </p>-->
                <!--  </a>-->
                <!--</li>-->
    
              </ul>
            </li>
           <li class="nav-item has-treeview <?php if($this->uri->segment(2) == "setting"){ echo "menu-open";}?>">
            <a href="#" class="nav-link <?php if($this->uri->segment(2) == "setting"){ echo "active";}?>">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Setting 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item ">
                  <a href="<?php echo base_url() ?>/admin/setting/application_setting" class="nav-link <?php if($this->uri->segment(3) =="application_setting"){echo 'active';}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Application Setting</p>
                  </a>
                </li>
                <!--<li class="nav-item ">-->
                <!--  <a href="<?php echo base_url() ?>/admin/setting/visual_setting" class="nav-link <?php if($this->uri->segment(3) =="visual_setting"){echo 'active';}?>">-->
                <!--    <i class="far fa-circle nav-icon"></i>-->
                <!--    <p>Visual Setting</p>-->
                <!--  </a>-->
                <!--</li> -->
            </ul>
          </li>
                    <li class="nav-item">
            <a href="<?php echo base_url()?>admin/logout" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Signout 
              </p>
            </a>
          </li>

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
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
<style type="text/css">
  .dark-mode {
  /* background-color: #454d55 !important;
  color: #fff; */
}
</style>
   <style type="text/css">
            body, .sidebar a
            {
                color: #434C66!important;
            }
            .navbar-white {
              background-color: #feeeef!important;
              color: #1f2d3d;
            }
            .user-panel {
          border-bottom: 0!important;
        }
        .card
        {
            background-color: #feeeef!important;
        }
        .table td, .table th
        {
            text-align: left!important;
        }
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active, .btn-primary:hover, .btn-primary, .page-item.active .page-link
        {
            background-color: #01aeb7!important;
            color: #FEEEEF!important;
        }
        table a
        {
            color: #01aeb7!important;
        }
        </style>