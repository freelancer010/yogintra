
  <link rel="canonical" href="https://yogintra.com/" /> 
  <meta name="description" content="<?php echo $app_setting->app_meta_description; ?>" />
  <meta property="og:title" content="<?php echo $app_setting->app_meta_title; ?>" />
  <meta property="og:description" content="<?php echo $app_setting->app_meta_description; ?>" />
  <meta name="keywords" content="<?php echo $app_setting->app_keywords; ?>" />
  <meta name="author" content="YogIntra" />
  <title><?php echo $app_setting->app_meta_title; ?></title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8QW4B6YQ9G"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-8QW4B6YQ9G');
    </script>
  <style>
    .yg-txt-right{
      text-align:right;
    }
    @media screen and (min-width: 1000px) and (max-width: 1200px) {
      .cst-font{
        font-size:28px !important;
      }
      .pt-20{
        padding-top:30px !important;
      }
      .pb-50{
        padding-bottom:30px !important;
      }
      h4.mb-5{
        font-size:12px !important;
      }
    }
    .test_ele .elementor-shape-fill{
      fill: #fff!important;
    }
  </style>
</head>
<body>
  <?php include('include/navbar.php'); ?>
<!-- Start main-content -->
  
  <div class="main-content"> 
    <section id="home" class="divider">
      <div class="fullwidth-carousel" data-nav="true">
        <?php foreach ($all_slider as $index => $slider): ?>
          <div class="carousel-item bg-img-cover " style='background-image: url("");' >
              <img src="<?php echo base_url()?><?php echo $slider->slider_image; ?>?x=21d" width="1519" height="854" alt="yogintra yoga poses" <?php echo ($index != 0) ? 'loading="lazy"' : ''; ?>>
            <div class="overlay"></div>
            <div class="display-table" style="z-index: 999;position: absolute;top: 0;">
              <div class="display-table-cell">
                <div class="container position-ab">
                  <div class="row">
                    <div class="col-md-6 ">
                      <div class="bg-white-transparent pt-20 pb-50 outline-border">
                        <h2 class="text-black-555 font-54" style="line-height: 1; font-weight: 900"><?php echo $slider->slider_heading; ?></h2>
                        <h5 class="font-weight-400 margin-tp sub_heading" ><?php echo $slider->slider_sub_heading; ?></h5>
                        <?php if($slider->slider_btn_name && $slider->slider_btn_link): ?>
                          <a class="btn btn-colored btn-theme-colored btn-flat  mt-15" href="<?php echo $slider->slider_btn_link; ?>"><?php echo $slider->slider_btn_name; ?></a>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
    <section class="section-content-image"  style="background-image: url('<?php echo base_url(); ?><?php echo $section_1->of_image?>');background-repeat: no-repeat;background-size: auto;">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-7 col-md-offset-5">
              <h2 class="text-uppercase line-bottom-double-line-centered mt-0 cst-font"><?php echo $section_1->of_heading; ?></h2>
              <span><?php echo $section_1->of_sub_heading; ?></span>
            </div>
          </div>
        </div>
        <div class="section-content section_1">
          <div class="row">
            <div class="col-md-5">
              <div class="left_side_image hidden-xs"></div>
            </div>
            <div class="col-md-7">
              <div class="row">
                <?php foreach ($section_1_content as $key => $content_1):?>
                  <div class="col-sm-6">
                    <div class="icon-box icon-theme-colored benefit-icon left media p-0 mb-sm-10 mt-30">
                      <a class="icon icon-circled icon-md  pull-left flip">
                        <img src="<?php echo base_url(); ?><?php echo $content_1->of_image; ?>" width="75" height="75" loading="lazy" alt="yogintra">
                      </a>
                      <div class="media-body">
                        <h2 class="media-heading heading"><b><?php echo $content_1->of_heading?></b></h2>
                        <p><?php echo $content_1->of_description?></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="divider" style="background-image: url(<?php echo base_url(); ?>assets/pattern-chakras-alt-color.jpg);background-repeat: repeat;background-size: auto;">
      <div class="elementor-shape elementor-shape-top" data-negative="false">
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="xMidYMax slice">
          <path class="elementor-shape-fill" d="M0 0v6.7c1.9-.8 4.7-1.4 8.5-1 9.5 1.1 11.1 6 11.1 6s2.1-.7 4.3-.2c2.1.5 2.8 2.6 2.8 2.6s.2-.5 1.4-.7c1.2-.2 1.7.2 1.7.2s0-2.1 1.9-2.8c1.9-.7 3.6.7 3.6.7s.7-2.9 3.1-4.1 4.7 0 4.7 0 1.2-.5 2.4 0 1.7 1.4 1.7 1.4h1.4c.7 0 1.2.7 1.2.7s.8-1.8 4-2.2c3.5-.4 5.3 2.4 6.2 4.4.4-.4 1-.7 1.8-.9 2.8-.7 4 .7 4 .7s1.7-5 11.1-6c9.5-1.1 12.3 3.9 12.3 3.9s1.2-4.8 5.7-5.7c4.5-.9 6.8 1.8 6.8 1.8s.6-.6 1.5-.9c.9-.2 1.9-.2 1.9-.2s5.2-6.4 12.6-3.3c7.3 3.1 4.7 9 4.7 9s1.9-.9 4 0 2.8 2.4 2.8 2.4 1.9-1.2 4.5-1.2 4.3 1.2 4.3 1.2.2-1 1.4-1.7 2.1-.7 2.1-.7-.5-3.1 2.1-5.5 5.7-1.4 5.7-1.4 1.5-2.3 4.2-1.1c2.7 1.2 1.7 5.2 1.7 5.2s.3-.1 1.3.5c.5.4.8.8.9 1.1.5-1.4 2.4-5.8 8.4-4 7.1 2.1 3.5 8.9 3.5 8.9s.8-.4 2 0 1.1 1.1 1.1 1.1 1.1-1.1 2.3-1.1 2.1.5 2.1.5 1.9-3.6 6.2-1.2 1.9 6.4 1.9 6.4 2.6-2.4 7.4 0c3.4 1.7 3.9 4.9 3.9 4.9s3.3-6.9 10.4-7.9 11.5 2.6 11.5 2.6.8 0 1.2.2c.4.2.9.9.9.9s4.4-3.1 8.3.2c1.9 1.7 1.5 5 1.5 5s.3-1.1 1.6-1.4c1.3-.3 2.3.2 2.3.2s-.1-1.2.5-1.9 1.9-.9 1.9-.9-4.7-9.3 4.4-13.4c5.6-2.5 9.2.9 9.2.9s5-6.2 15.9-6.2 16.1 8.1 16.1 8.1.7-.2 1.6-.4V0H0z"></path>
        </svg>
      </div>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <img src="<?php echo base_url() ?><?php echo $section_2->os_image_image; ?>" width="349" height="348" loading="lazy" alt="<?php echo $section_2->os_image_heading; ?>">
            </div>
            <div class="col-md-6">
              <h5 class="section-3 mb-0"><?php echo $section_2->os_image_sub_heading; ?></h5>
              <div class="section-3-title ssc-ttl"><?php echo $section_2->os_image_heading; ?></div>
              <div>
                <p><?php echo $section_2->os_image_description; ?></p>
              </div>
              <div class="row mt-10">
                <?php foreach ($section_2_content as $key => $content_sec_2):?>
                  <div class="col-sm-4 text-center">
                      <div class="">
                        <img src="<?php echo base_url(); ?><?php echo $content_sec_2->os_image; ?>" width="90" height="95" loading="lazy" loading="lazy" alt="<?php echo $content_sec_2->os_heading; ?>">
                      </div>
                      <h2 style="font-size: 16px"><?php echo $content_sec_2->os_heading; ?></h2>
                  </div>
                <?php endforeach; ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="divider types-of-yoga-section" style="background-image: url(<?php echo base_url(); ?>assets/parallax-decor.webp);background-position: center center;background-size: auto;">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="section-title">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="ssc-ttl brief-dec-title">A BRIEF DESCRIPTION OF THE TYPES OF YOGA SERVICES </h1>
                  <p>We at YogIntra provide various services to the nature of the clients. Wish how you would like to spend your time here we can talk and come to a conclusion.</p>
                </div>
              </div>
            </div>
            <div class="section-content text-center">
              <div class="row">
                <?php foreach ($rand_service as $key => $r_service):?>
                  <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?><?php echo $r_service->service_cat_image; ?>" height="150" width="150" loading="lazy" alt="<?php echo $r_service->service_cat_name; ?>">
                    <h4 class="mb-5"><?php echo $r_service->service_cat_name; ?></h4>
                    <a href="<?php echo base_url(); ?>service/<?php echo $r_service->service_cat_slug; ?>" class="btn btn-success">Book Now</a>
                  </div>
                <?php endforeach; ?>
                  <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>assets/icon-thumb3-150x150.jpg" height="150" width="150" loading="lazy" alt="TTC">
                    <h4 class="mb-5">TTC</h4>
                    <a href="<?php echo base_url(); ?>teacher_training_course" class="btn btn-success">Visit Now</a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>assets/icon-thumb4-150x150.jpg" height="150" width="150" loading="lazy" alt="retreat">
                    <h4 class="mb-5">Retreat</h4>
                    <a href="<?php echo base_url(); ?>retreat" class="btn btn-success">Visit Now</a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>assets/icon-thumb1-150x150.jpg" height="150" width="150" loading="lazy" alt="workshop">
                    <h4 class="mb-5">Workshop</h4>
                    <a href="<?php echo base_url(); ?>workshop" class="btn btn-success">Visit Now</a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20 animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
                    <img width="150" height="150" loading="lazy" class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>uploads/yog_center.jpg" alt="Yoga Center">
                    <h4 class="mb-5">Yoga Center</h4>
                    <a href="<?php echo base_url(); ?>yoga_center" class="btn btn-success">Visit Now</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-lighter">
      <div class="container pt-70 pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">Meet Our <span class="text-theme-colored2">Instructors</span></h2>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col" data-nav="true" data-dots="true">
              <?php foreach ($all_trainer as $key => $trainner):?>
                <div class="item">
                  <div class="team-members text-center maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" width="200" height="200" loading="lazy" alt="yogintra trainers" src="<?php echo $api; ?>/<?php echo $trainner->profile_image?>">
                    </div>
                    <?php
                      $currentYear = date("Y");
                      $birthYear = date("Y", strtotime($trainner->dob));
                    ?>
                    <div class="team-details">
                      <div class="p-10 bg-theme-colored2">
                        <h4 class="text-uppercase mt-0 mb-0 text-dark"><?php echo $trainner->name?></h4>
                        <p class="mt-0 mb-0">Age - <?php echo $currentYear - $birthYear;?></p>
                      </div>
                      
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="text-center"><a href="<?php echo base_url(); ?>trainers" class="btn btn-success mt-15">View Our More Instructors <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="divider bg-gradient_effect d-none" >
      <div class="elementor-shape ">
      <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
          <path class="elementor-shape-fill" d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7 s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7 c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3  c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6 c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7  C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5 c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1  c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7  c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6  C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8 c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2  C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3  C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1 z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1  c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"></path>
          <path class="elementor-shape-fill" d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3 C267.7,18.8,269.7,18,269.6,18z"></path>
          <path class="elementor-shape-fill" d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2 S227.6,9.9,227.4,9.8z"></path>
          <path class="elementor-shape-fill" d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4  C206.4,12.9,204.6,13.5,204.5,13.4z"></path>
          <path class="elementor-shape-fill" d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6  S201,10.7,201,10.6z"></path>
          <path class="elementor-shape-fill" d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3 C152.6,27.5,154.6,26.8,154.5,26.7z"></path>
          <path class="elementor-shape-fill" d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6  c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"></path>
          <path class="elementor-shape-fill" d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0  C76.9,11.5,75.3,12.5,75.5,12.6z"></path>
          <path class="elementor-shape-fill" d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4  C19.9,13.7,15.7,13.3,15.6,13.2z"></path>
        </svg>
      </div>
      <div class="elementor-shape elementor-shape-bottom test_ele" data-negative="false">
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
          <path class="elementor-shape-fill" d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7 s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7 c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3  c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6 c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7  C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5 c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1  c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7  c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6  C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8 c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2  C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3  C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1 z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1  c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"></path>
          <path class="elementor-shape-fill" d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3 C267.7,18.8,269.7,18,269.6,18z"></path>
          <path class="elementor-shape-fill" d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2 S227.6,9.9,227.4,9.8z"></path>
          <path class="elementor-shape-fill" d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4  C206.4,12.9,204.6,13.5,204.5,13.4z"></path>
          <path class="elementor-shape-fill" d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6  S201,10.7,201,10.6z"></path>
          <path class="elementor-shape-fill" d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3 C152.6,27.5,154.6,26.8,154.5,26.7z"></path>
          <path class="elementor-shape-fill" d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6  c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"></path>
          <path class="elementor-shape-fill" d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0  C76.9,11.5,75.3,12.5,75.5,12.6z"></path>
          <path class="elementor-shape-fill" d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4  C19.9,13.7,15.7,13.3,15.6,13.2z"></path>
        </svg>    
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center">
            <img class="img-circle img-thumbnail mb-15" src="<?php echo front_css(); ?>images/about/sq1.jpg" loading="lazy" alt="yogintra">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h2 class="mb-5">Power Vinyasa</h2>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 text-center ">
            <div class="section-4-title">Dietetics and Nutrition</div>
            <h4>Aziza Firdaus is 7 years of Clinical Experience Dietetics & Nutrition in hospital sector and private clinic as well as online coaching. Her objective is to serve the society with utmost speed, quality and integrity and to achieve her goals effectively and efficiently. She has given good results to her clients and was a part in their journey to become healthy. </h4>
          </div>
        </div>
      </div>
    </section>
    <section class="review-section">
      <div class="container">
          <div class="row">
            <div class='sk-ww-google-reviews' data-embed-id='25389280'></div>
            <script data-src='https://widgets.sociablekit.com/google-reviews/widget.js'></script>
      </div>
    </section>
    <section class="bg-lighter">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <form id="multi-step-form" name="contact_form" class="contact-form-transparent"  method="post">
              <!-- Step 1: Personal Information -->
              <div class="form-step active" id="step-1">
                  <div class="form-group">
                      <label for="name">Your Name:</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                      <label for="phone">Phone Number:</label>
                      <input type="text" class="form-control" id="phone" name="number" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email ID:</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <button class="btn btn-primary next" type="button">Next</button>
              </div>
              <!-- Step 2: Location -->
              <div class="form-step" id="step-2">
                  <div class="form-group">
                      <label for="country">Select Country:</label>
                      <select class="form-control countries" id="country" name="country" required>
                          <option value="" >Select A Country</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="state">Select State:</label>
                      <select class="form-control states" id="state" name="state" required>
                          <option value="" >Select your Country First</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="city">Select City:</label>
                      <select class="form-control cities" id="city" name="city" required>
                          <option value="" >Select your state first</option>
                      </select>
                  </div>
                  <button class="btn btn-primary prev" type="button">Previous</button>
                  <button class="btn btn-primary next" type="button">Next</button>
              </div>
              <!-- Step 3: Service Information -->
              <div class="form-step" id="step-3">
                  <div class="form-group">
                      <label for="city">Service Menu:</label>
                      <select class="form-control" id="city" name="class" required>
                        <?php 
                          $all_service = $this->db->get('service_category')->result();
                          foreach ($all_service as $key => $service):?>
                            <option value="<?php echo $service->service_cat_name; ?>"><?php echo $service->service_cat_name; ?></option>
                          <?php endforeach; ?>
                          <option value="Yoga Center">Yoga Center</option>
                          <option value="TTC">TTC</option>
                          <option value="Retreat">Retreat</option>
                          <option value="Workshop">Workshop</option>
                      </select>
                  </div>
                  <div class="form-group d-none">
                      <label for="call-time">Call Request Time From:</label>
                      <input type="time" class="form-control" id="call-time" name="call-from" >
                  </div>
                  <div class="form-group d-none">
                      <label for="call-time">To:</label>
                      <input type="time" class="form-control" id="call-time-2" name="call-to" >
                  </div>
                  <div class="form-group">
                      <label for="message">Message:</label>
                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                  </div>
                  <button class="btn btn-primary prev" type="button">Previous</button>
                  <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
            <!-- Appointment Form Validation-->
          </div>
          <div class="col-sm-6">
            <img src="<?php echo base_url(); ?>assets/chose_yoga.jpg" class="bf-ftr-img" loading="lazy" alt="yoga poses">
          </div>
        </div>
      </div>
    </section>
    
    <script type="text/javascript">
      $("#multi-step-form").submit(function(e) {
    e.preventDefault(); 
    var form = $(this);
    $.ajax({
        type: "POST",
        url: '<?php echo base_url(); ?>home/submit_contact_form',
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            console.log(data);
          if(data == 1)
          {
            window.location = "<?php echo base_url(); ?>thank_you";
          }
          else
          {
            alert('Data Submitted Failed')
          }
        },
        error: function(data)
        {
            console.log(data);
        }
    });
    
});
function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = 'json';
        var successRes = function(data) {
            success(data);
        }
        var errorRes = function(xhr, ajaxOptions, thrownError) {            
          console.log(xhr.responseText);
        }   
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000,
            xhrFields: {
            },
        });
    }
}

function locationInfo() {
    var rootUrl = "https://geodata.phplift.net/api/index.php";
    var call = new ajaxCall();
    this.getCities = function(id) {
        jQuery(".cities option:gt(0)").remove();
        var url = rootUrl+'?type=getCities&countryId='+ '&stateId=' + id;
        var method = "post";
        var data = {};
        jQuery('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.cities').find("option:eq(0)").html("Select City");
                var listlen = Object.keys(data['result']).length;
                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {
                        var option = `<option value='${val.name}'>${val.name}</option>`;
                        jQuery('.cities').append(option);
                    });
                }
                jQuery(".cities").prop("disabled",false);
        });
    };

    this.getStates = function(id) {
        jQuery(".states option:gt(0)").remove();
        jQuery(".cities option:gt(0)").remove();
        var stateClasses = jQuery('#stateId').attr('class');

        
        var url = rootUrl+'?type=getStates&countryId=' + id;
        var method = "post";
        var data = {};
        jQuery('.states').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.states').find("option:eq(0)").html("Select State");
            
                jQuery.each(data['result'], function(key, val) {
                    // var option = jQuery('');
                    var option = `<option value='${val.name}' stateid='${val.id}'>${val.name}</option>`;
                    // option.attr('value', val.name).text(val.name);
                    // option.attr('stateid', val.id);
                    jQuery('.states').append(option);
                });
                jQuery(".states").prop("disabled",false);
            
        });
    };

    this.getCountries = function() {
        var url = rootUrl+'?type=getCountries';
        var method = "post";
        var data = {};
        jQuery('.countries').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.countries').find("option:eq(0)").html("Select Country");
            jQuery.each(data['result'], function(key, val) {
                var option = `<option value='${val.name}' countryid='${val.id}'>${val.name}</option>`;
                // option.attr('value', val.name).text(val.name);
                // option.attr('countryid', val.id);
                jQuery('.countries').append(option);
            });
                // jQuery(".countries").prop("disabled",false);
            
        });
    };

}

jQuery(function() {
    var loc = new locationInfo();
    loc.getCountries();
    
    jQuery(".countries").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).attr('countryid');
        if(countryId != ''){
            loc.getStates(countryId);
        }
        else{
            jQuery(".states option:gt(0)").remove();
        }
    });
    jQuery(".states").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities option:gt(0)").remove();
        }
    });
});

$(document).ready(function () {
    $.ajax({
        url: "https://restcountries.com/v3.1/all",
        type: 'GET',
        success: function(response) { }
    });

    var currentStep = 1;

    $(".next").click(function () {
        if (validateStep(currentStep)) {
            $("#step-" + currentStep).removeClass("active");
            currentStep++;
            $("#step-" + currentStep).addClass("active");
        }
    });

    $(".prev").click(function () {
        $("#step-" + currentStep).removeClass("active");
        currentStep--;
        $("#step-" + currentStep).addClass("active");
    });

    function validateStep(step) {
        var isValid = true;

        // Reset previous error messages and styles
        $(".form-group").removeClass("has-error");
        $(".error-message").remove();

        if (step === 1) {
            // Step 1 Validation
            var name = $("#name").val();
            var phone = $("#phone").val();
            var email = $("#email").val();

            if (!name) {
                isValid = false;
                $("#name").closest(".form-group").addClass("has-error");
                $("#name").after('<div class="error-message">Please enter your name.</div>');
            }
            if (!phone) {
                isValid = false;
                $("#phone").closest(".form-group").addClass("has-error");
                $("#phone").after('<div class="error-message">Please enter your phone number.</div>');
            }
            if (!email) {
                isValid = false;
                $("#email").closest(".form-group").addClass("has-error");
                $("#email").after('<div class="error-message">Please enter your email address.</div>');
            }
        } else if (step === 2) {
            // Step 2 Validation
            var country = $("#country").val();
            var state = $("#state").val();
            var city = $("#city").val();

            if (!country) {
                isValid = false;
                $("#country").closest(".form-group").addClass("has-error");
                $("#country").after('<div class="error-message">Please select your country.</div>');
            }
            if (!state) {
                isValid = false;
                $("#state").closest(".form-group").addClass("has-error");
                $("#state").after('<div class="error-message">Please select your state.</div>');
            }
            if (!city) {
                isValid = false;
                $("#city").closest(".form-group").addClass("has-error");
                $("#city").after('<div class="error-message">Please select your city.</div>');
            }
        } else if (step === 3) {
            // Step 3 Validation
            var callTime = $("#call-time").val();
            var callTime_2 = $("#call-time-2").val();
            var message = $("#message").val();

            // if (!callTime) {
            //     isValid = false;
            //     $("#call-time").closest(".form-group").addClass("has-error");
            //     $("#call-time").after('<div class="error-message">Please enter your call request time.</div>');
            // }
            // if (!callTime_2) {
            //     isValid = false;
            //     $("#call-time-2").closest(".form-group").addClass("has-error");
            //     $("#call-time-2").after('<div class="error-message">Please enter your call To time.</div>');
            // }
            if (!message) {
                isValid = false;
                $("#message").closest(".form-group").addClass("has-error");
                $("#message").after('<div class="error-message">Please enter a message.</div>');
            }
        }
        return isValid;
    }
});
var $owl_carousel_4col = $('.owl-carousel-4col');
if ( $owl_carousel_4col.length > 0 ) {
    if(!$owl_carousel_4col.hasClass("owl-carousel")){
        $owl_carousel_4col.addClass("owl-carousel owl-theme");
    }
    $owl_carousel_4col.each(function() {
        var data_dots = ( $(this).data("dots") === undefined ) ? false: $(this).data("dots");
        var data_nav = ( $(this).data("nav")=== undefined ) ? false: $(this).data("nav");
        var data_duration = ( $(this).data("duration") === undefined ) ? 4000: $(this).data("duration");
        $(this).owlCarousel({
            // rtl: THEMEMASCOT.isRTL.check(),
            autoplay: true,
            autoplayTimeout: data_duration,
            loop: true,
            items: 4,
            margin: 15,
            dots: false,
            nav: data_nav,
            navText: [
                '<i class="fa fa-chevron-left"></i>',
                '<i class="fa fa-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: true
                },
                480: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 3,
                    center: false
                },
                750: {
                    items: 3,
                    center: false
                },
                960: {
                    items: 3
                },
                1170: {
                    items: 4
                },
                1300: {
                    items: 4
                }
            }
        });
    });
}
var $owl_carousel_3col = $('.owl-carousel-3col');
if ( $owl_carousel_3col.length > 0 ) {
    if(!$owl_carousel_3col.hasClass("owl-carousel")){
        $owl_carousel_3col.addClass("owl-carousel owl-theme");
    }
    $owl_carousel_3col.each(function() {
        var data_dots = ( $(this).data("dots") === undefined ) ? false: $(this).data("dots");
        var data_nav = ( $(this).data("nav")=== undefined ) ? false: $(this).data("nav");
        var data_duration = ( $(this).data("duration") === undefined ) ? 4000: $(this).data("duration");
        $(this).owlCarousel({
            autoplay: true,
            autoplayTimeout: data_duration,
            loop: true,
            items: 3,
            margin: 15,
            dots: data_dots,
            nav: data_nav,
            navText: [
                '<i class="fa fa-chevron-left"></i>',
                '<i class="fa fa-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                750: {
                    items: 2,
                    center: false
                },
                960: {
                    items: 2
                },
                1170: {
                    items: 3
                },
                1300: {
                    items: 3
                }
            }
        });
    });
}
</script>
<style type="text/css">
  .section_1 .benefit-icon .icon
  {
    background-color: #fff;
  }
  @media (max-width: 767px) {
      .section-content-image {
          background-image: none!important;
      }
      .font-54 {
        font-size: 2rem !important;
      }
      .position-ab
      {
        position: absolute;
        top: 0;
      }
      .sub_heading
      {
          font-size: 13px;
      }
      .margin-tp
      {
          margin-top:10px!important;
      }
      .fullwidth-carousel .carousel-item {
        min-height: 0;
        width: 100%;
      }
  }
  .margin-tp{
      margin-top:40px;
  }
  .padding-200{
      padding-top:200px;
      padding-bottom:200px;
  }
  .form-step {
      display: none;
  }
  .form-step.active {
      display: block;
  }
  .border-1px {
    border: 1px solid #c9c7c7 !important;
  }
  .kzANES{
    height: none !important;
  }
</style>
