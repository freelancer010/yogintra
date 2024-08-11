<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $service->page_meta_description; ?>" />
<meta name="keywords" content="<?php echo $service->page_keywords; ?>" />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title><?php echo $service->page_meta_title; ?></title>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo front_css(); ?>images/bg/bg6.jpg"); background-position: 50% 55px;height: 300px;'>
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Service</h2>
              <ol class="breadcrumb text-center mt-10">
                <li><a href="<?php echo base_url(); ?>" class="text-white">Home</a></li>
                <li class="active text-gray">Service</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- Section: Course gird -->
    <section>
      <div class="container pb-20">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <p>YogIntra provides One of the Best <?php echo $service->service_cat_name; ?> in India with our expertise, professional and experienced team of Trainers. </p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <?php if($all_service_data): 
              foreach ($all_service_data as $key => $service_data):?>
              <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                <div class="box-hover-effect thumb-cross-effect">
                  <div class="effect-wrapper">
                    <div class="thumb">
                      <img class="img-fullwidth" src="<?php echo base_url(); ?><?php echo $service_data->service_image; ?>" alt="<?php echo $service_data->service_name; ?>">
                    </div>
    
                    <div class="text-holder text-holder-top-right">
                      <a href="<?php echo base_url(); ?>service_details/<?php echo $service_data->service_slug; ?>" class="btn btn-dark btn-theme-colored">View More</a>
                    </div>
                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="<?php echo base_url(); ?>service_details/<?php echo $service_data->service_slug; ?>">View more</a>
                  </div>
                  <h3><a href="<?php echo base_url(); ?>service_details/<?php echo $service_data->service_slug; ?>"><?php echo $service_data->service_name; ?></a></h3>
                </div>
              </div>
            <?php endforeach;
          else: ?>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-30 text-center">
              <h2>No Data Found</h2>
            </div>
          <?php endif; ?>
          </div>
        </div>
      </div> 
    </section>
<style type="text/css">
.box-hover-effect:hover .effect-wrapper .text-holder-top-right {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

  <!-- end main-content -->