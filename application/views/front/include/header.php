



<!-- Favicon and Touch Icons -->
<link href="<?php echo base_url(); ?><?php echo $app_setting->fevicon; ?>" rel="shortcut icon" type="image/png">
<link href="<?php echo base_url(); ?><?php echo $app_setting->fevicon; ?>" rel="apple-touch-icon">
<link href="<?php echo base_url(); ?><?php echo $app_setting->fevicon; ?>" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo base_url(); ?><?php echo $app_setting->fevicon; ?>" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo base_url(); ?><?php echo $app_setting->fevicon; ?>" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?php echo front_css(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo front_css(); ?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo front_css(); ?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo front_css(); ?>css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="<?php echo front_css(); ?>css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="<?php echo front_css(); ?>css/menuzord-skins/menuzord-bottom-trace.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo front_css(); ?>css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php echo front_css(); ?>css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo front_css(); ?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo front_css(); ?>css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="<?php echo front_css(); ?>css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<!-- <link  href="<?php //echo front_css(); ?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?php //echo front_css(); ?>js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?php //echo front_css(); ?>js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/> -->

<!-- CSS | Theme Color -->
<link href="<?php echo front_css(); ?>css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?php echo front_css(); ?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo front_css(); ?>js/jquery-ui.min.js"></script>
<script src="<?php echo front_css(); ?>js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo front_css(); ?>js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php echo front_css(); ?>js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo front_css(); ?>js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style type="text/css">
:root {
  --theme-color-1 : <?php echo $visual_setting->color_1; ?>;
  --theme-color-2 : <?php echo $visual_setting->color_2; ?>;
  }
  </style>
<body class="">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Yogintra",
  "url": "https://yogintra.com/",
  "logo": "https://yogintra.com/uploads/6501ab36d6f70Rectrangular-logo-2.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-9867291573",
    "contactType": "Customer Service"
  }
}
</script>

<div id="wrapper">
  <!-- preloader -->
  <?php if($this->uri->segment(1) == 'pages'):?>
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  <?php endif; ?>
   <!-- Header -->
  <header id="header" class="header header-floating">
    <div class="header-top sm-text-center style-bordered">
      <div class="container">
        <div class="row">
          <!---<div class="col-md-6">
            <div class="widget">
                <div id="google_translate_element"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="widget">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center list-bordered">
                <li><a href="<?php echo base_url(); ?>become_yoga_trainer">Hire</a></li>
                <li><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
                <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
              </ul>
            </div>
          </div>---->
        </div>
      </div>
    </div>
    <div class="header-nav navbar-scrolltofixed navbar-sticky-animated" style="z-index: 999; position: relative; top: 0px;">
      <div class="header-nav-wrapper">
        <div class="container ipad_header">
          <nav id="menuzord-right" class="menuzord orange no-bg menuzord-responsive"><a href="javascript:void(0)" class="" style="display: none;"><em></em><em></em><em></em></a>
            <a class="menuzord-brand switchable-logo pull-left flip mb-10" href="<?php echo base_url(); ?>">
              <img class="logo-default" src="<?php echo base_url(); ?><?php echo $app_setting->app_sticky_logo; ?>" alt="YogIntra Logo">
              <img class="logo-scrolled-to-fixed" src="<?php echo base_url(); ?><?php echo $app_setting->app_sticky_logo; ?>" alt="YogIntra Logo">
            </a>
            <ul class="menuzord-menu menuzord-right menuzord-indented scrollable" style="max-height: 400px;">
             <li  <?php if($this->uri->segment(1) == ''){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>">Home</a>
              </li>
              <li <?php if($this->uri->segment(1) == 'about' || $this->uri->segment(1) == 'gallery' || $this->uri->segment(1) == 'blog'){echo 'class="active"';}?>><a href="#">About</a>
                <ul class="dropdown">
                  <li><a href="<?php echo base_url(); ?>about">About</a></li>   
                <li><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
                <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
                </ul>
              </li>
              <li <?php if($this->uri->segment(1) == 'service'){echo 'class="active"';}?>><a href="#">Yoga Services</a>
                <ul class="dropdown">
                  <?php 
                  $all_service = $this->db->get('service_category')->result();
                  foreach ($all_service as $key => $service):?>
                    <li><a href="<?php echo base_url(); ?>service/<?php echo $service->service_cat_slug; ?>"><?php echo $service->service_cat_name; ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </li>
              <li <?php if($this->uri->segment(1) == 'yoga_center'){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>yoga_center">Yoga Center</a></li>
              <li <?php if($this->uri->segment(1) == 'teacher_training_course'){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>teacher_training_course">TTC</a></li>
              <li <?php if($this->uri->segment(1) == 'retreat'){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>retreat">Retreat </a></li>
              <li <?php if($this->uri->segment(1) == 'workshop'){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>workshop">Workshop </a></li>
              <li <?php if($this->uri->segment(1) == 'trainers'){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>trainers">Trainer</a></li>
              <li <?php if($this->uri->segment(1) == 'become-yoga-trainer'){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>become-yoga-trainer">Hire</a></li>
              <li <?php if($this->uri->segment(1) == 'contact'){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>contact">Contact</a></li>
              <li class="scrollable-fix"></li>
            </ul>
          </nav>
        </div>
      </div>
    </div><div style="display: none; width: 1343px; height: 92px; float: none;"></div>
  </header>

  <style type="text/css">
@media only screen and (max-width: 600px) {
    .header-nav-centered-logo nav.menuzord .menuzord-brand img
    {
      width: 180px!important;
    }
    .menuzord-responsive .showhide
    {
      margin-top: 0;
    }
    #header
  {
    height: 70px!important;
  }
}
#header
{
  height: 90px;
}
.menuzord-brand {
  margin: 10px 30px 0 0;
}  
.menuzord-menu > li > a {
  padding: 22px 10px;
}
  </style>

<script type="text/javascript">
   function googleTranslateElementInit() {
      new google.translate.TranslateElement({
         pageLanguage: 'en', // Change this to your website's default language
         autoDisplay: false,
      }, 'google_translate_element');
   }
$(window).load(function(){
    $(".goog-logo-link").empty();
    $('.goog-te-gadget').html($('.goog-te-gadget').children());
    $(".VIpgJd-ZVi9od-l4eHX-hSRGPd").empty();
})

</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">

.goog-te-gadget-icon {
    display: none!important; /* Hide the Google Translate icon */
}
#google_translate_element {
  position: relative;
  top: 5px;
  left: 10px;
}
.goog-te-gadget {
  postion: absolute !important;
  display: flex !important;

}
.goog-te-combo {
    border-radius: 0!important;
    box-shadow: none!important;
    height: 25px!important;
    border: 1px solid #eeeeee!important;
} 
.goog-logo-link {
    display:none !important;
} 
<?php if($this->uri->segment(1) != ''):?>
.header-nav-wrapper
{
  background-color: #fff;
}
<?php endif; ?>
@media only screen and (max-width: 1000px) {
  .header.header-floating {
    position: relative;
    background-color: #fff;
  }
}
@media only screen and (max-width: 1199px) and (min-width: 1000px)  {
    .ipad_header
    {
        width: 1100px;
    }
    .menuzord-menu > li > a
    {
      padding: 22px 5px!important;
    }
    .menuzord-menu.menuzord-right
    {
      float: inherit;
    }
}
</style>