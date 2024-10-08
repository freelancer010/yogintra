
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

{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Yogintra",
  "image": "https://yogintra.com/assets/og-logo.jpg",
  "@id": "https://yogintra.com/",
  "url": "https://yogintra.com/",
  "telephone": "+91-9867291573",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "D-408 Shivlila Apt Mumbra devi colony road",
    "addressLocality": "Mumbai Thane",
    "addressRegion": "West Bengal",
    "postalCode": "400612",
    "addressCountry": "India"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 19.186440995177897,
    "longitude": 73.04725068022144
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "09:00",
    "closes": "20:00"
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
        </div>
      </div>
    </div>
    <div class="header-nav navbar-scrolltofixed navbar-sticky-animated" style="z-index: 999; position: relative; top: 0px;">
      <div class="header-nav-wrapper">
        <div class="container ipad_header">
          <nav id="menuzord-right" class="menuzord orange no-bg menuzord-responsive"><a href="javascript:void(0)" class="" style="display: none;"><em></em><em></em><em></em></a>
            <a class="menuzord-brand switchable-logo pull-left flip mb-10" href="<?php echo base_url(); ?>">
              <img class="logo-default" width="205" height="55" src="<?php echo base_url(); ?><?php echo $app_setting->app_sticky_logo; ?>" alt="YogIntra Logo">
              <img class="logo-scrolled-to-fixed" width="205" height="55" src="<?php echo base_url(); ?><?php echo $app_setting->app_sticky_logo; ?>" alt="YogIntra Logo">
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
  .header-nav-centered-logo nav.menuzord .menuzord-brand img{
    width: 180px!important;
  }
  .menuzord-responsive .showhide{
    margin-top: 0;
  }
  #header{
    height: 70px!important;
  }
}
#header{
  height: 90px;
}
.menuzord-brand {
  margin: 10px 30px 0 0;
}  
.menuzord-menu > li > a {
  padding: 22px 10px;
}
</style>

<style type="text/css">
<?php if($this->uri->segment(1) != ''):?>
.header-nav-wrapper
{
  background-color: #fff;
}
<?php endif; ?>
:root {
  --theme-color-1 : <?php echo $visual_setting->color_1; ?>;
  --theme-color-2 : <?php echo $visual_setting->color_2; ?>;
}
@media only screen and (max-width: 1000px) {
  .header.header-floating {
    position: relative;
    background-color: #fff;
  }
}
@media only screen and (max-width: 1199px) and (min-width: 1000px)  {
    .ipad_header{
      width: 1100px;
    }
    .menuzord-menu > li > a{
      padding: 22px 5px!important;
    }
    .menuzord-menu.menuzord-right{
      float: inherit;
    }
}
</style>