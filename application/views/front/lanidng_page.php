<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $page_data->page_meta_description; ?>" />
<meta name="keywords" content="<?php echo $page_data->page_keywords; ?>" />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title><?php echo $page_data->page_meta_title; ?></title>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8QW4B6YQ9G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8QW4B6YQ9G');
</script>

 <style>
    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
      .about-section .image-column .inner-column .author-desc
      {
            position: absolute !important;
          bottom: 19px !important;
          z-index: 1 !important;
          background: orange !important;
          padding: 5px 5px !important;
          left: 100px !important;
          width: 50% !important;
          border-radius: 1 !important;
        }
      }
 
    @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
      h1.font-54{
          font-size: 1.857143rem !important;
        }
      }
      .sec-title {
         position: relative;
         z-index: 1;
         margin-bottom: 20px;
      }

      .sec-title .title {
         position: relative;
         display: block;
         font-size: 18px;
         line-height: 24px;
         color: #176a71;
         font-weight: 500;
         margin-bottom: 15px;
      }

      .sec-title h2 {
         position: relative;
         display: block;
         font-size: 40px;
         line-height: 1.28em;
         color: #222222;
         font-weight: 600;
         padding-bottom: 18px;
      }

      .sec-title h2:before {
         position: absolute;
         content: '';
         left: 0px;
         bottom: 0px;
         width: 50px;
         height: 3px;
         background-color: #d1d2d6;
      }

      .sec-title .text {
         position: relative;
         font-size: 16px;
         line-height: 26px;
         color: #848484;
         font-weight: 400;
         margin-top: 35px;
      }

      .sec-title.light h2 {
         color: #ffffff;
      }

      .sec-title.text-center h2:before {
         left: 50%;
         margin-left: -25px;
      }

      .list-style-one {
         position: relative;
      }

      .list-style-one li {
         position: relative;
         font-size: 16px;
         line-height: 26px;
         color: #222222;
         font-weight: 400;
         padding-left: 35px;
         margin-bottom: 12px;
      }

      .list-style-one li:before {
         content: "\f058";
         position: absolute;
         left: 0;
         top: 0px;
         display: block;
         font-size: 18px;
         padding: 0px;
         color: #ff2222;
         font-weight: 600;
         -moz-font-smoothing: grayscale;
         -webkit-font-smoothing: antialiased;
         font-style: normal;
         font-variant: normal;
         text-rendering: auto;
         line-height: 1.6;
         font-family: "Font Awesome 5 Free";
      }

      .list-style-one li a:hover {
         color: #176a71;
      }

      .btn-style-one {
         position: relative;
         display: inline-block;
         font-size: 17px;
         line-height: 30px;
         color: #ffffff;
         padding: 10px 30px;
         font-weight: 600;
         overflow: hidden;
         letter-spacing: 0.02em;
         background-color: #176a71;
      }

      .btn-style-one:hover {
         background-color: #176a71;
         color: #ffffff;
      }

      .about-section {
         position: relative;
         padding: 120px 0 70px;
      }

      .about-section .sec-title {
         margin-bottom: 45px;
      }

      .about-section .content-column {
         position: relative;
         margin-bottom: 50px;
      }

      .about-section .content-column .inner-column {
         position: relative;
         padding-left: 30px;
      }

      .about-section .text {
         margin-bottom: 20px;
         font-size: 16px;
         line-height: 26px;
         color: #848484;
         font-weight: 400;
      }

      .about-section .list-style-one {
         margin-bottom: 45px;
      }

      .about-section .btn-box {
         position: relative;
      }

      .about-section .btn-box a {
         padding: 15px 50px;
      }

      .about-section .image-column {
         position: relative;
      }

      .about-section .image-column .text-layer {
         position: absolute;
         right: -110px;
         top: 50%;
         font-size: 325px;
         line-height: 1em;
         color: #ffffff;
         margin-top: -175px;
         font-weight: 500;
      }

      .about-section .image-column .inner-column {
         position: relative;
         padding-left: 80px;
         padding-bottom: 0px;
      }

      .about-section .image-column .inner-column .author-desc {
         position: absolute;
         bottom: 16px;
         z-index: 1;
         background: orange;
         padding: 10px 15px;
         left: 96px;
         width: calc(100% - 185px);
         border-radius: 50px;
      }

      .about-section .image-column .inner-column .author-desc h2 {
         font-size: 21px;
         letter-spacing: 1px;
         text-align: center;
         color: #fff;
         margin: 0;
      }

      .about-section .image-column .inner-column .author-desc span {
         font-size: 16px;
         /*letter-spacing: 6px;*/
         text-align: center;
         color: #fff;
         display: block;
         font-weight: 400;
      }

      .about-section .image-column .inner-column:before {
         content: '';
         position: absolute;
         width: calc(50% + 80px);
         height: calc(100% + 160px);
         top: -80px;
         left: -3px;
         background: transparent;
         z-index: 0;
         border: 44px solid #176a71;
      }

      .about-section .image-column .image-1 {
         position: relative;
      }

      .about-section .image-column .image-2 {
         position: absolute;
         left: 0;
         bottom: 0;
      }

      .about-section .image-column .image-2 img,
      .about-section .image-column .image-1 img {
         box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
         border-radius: 46px;
      }

      .about-section .image-column .video-link {
         position: absolute;
         left: 70px;
         top: 170px;
      }

      .about-section .image-column .video-link .link {
         position: relative;
         display: block;
         font-size: 22px;
         color: #191e34;
         font-weight: 400;
         text-align: center;
         height: 100px;
         width: 100px;
         line-height: 100px;
         background-color: #ffffff;
         border-radius: 50%;
         box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
         -webkit-transition: all 300ms ease;
         -moz-transition: all 300ms ease;
         -ms-transition: all 300ms ease;
         -o-transition: all 300ms ease;
         transition: all 300ms ease;
      }

      .about-section .image-column .video-link .link:hover {
         background-color: #191e34;
         color: #fff;
      }

      .layer-overlay.overlay-theme-colored2-9::before {
         background: rgba(17, 17, 17, 0.5) none repeat scroll 0 0;
      }

      .YogIntra-info {
         color: #3d3333;
      }

      @media only screen and (max-width: 600px) {
         .about-section .image-column .image-1 img {
            border-radius: 0 !important;
         }

         .about-section .image-column .inner-column {
            padding-left: 0 !important;
         }
        .padding-top-media
        {
            margin-top:30px;
        }
         .about-section .image-column .inner-column::before {
            content: '';
            position: absolute;
            width: 100% !important;
            height: 350px !important;
            top: -10px !important;
            /*left: -7px !important;*/
            background: transparent;
            z-index: 0;
            border: 44px solid #176a71;
         }

         .about-section {
            position: relative;
            padding: 10px 0 0px !important;
         }

         .about-section .image-column .inner-column .author-desc {
            position: absolute;
            bottom: 0 !important;
            z-index: 1;
            background: orange;
            padding: 5px 5px !important;
            left: 0 !important;
            width: 100% !important;
            border-radius: 0 !important;
         }

         .about-section .image-column .inner-column .author-desc span {
            font-size: 16px;
            letter-spacing: 0 !important;
            text-align: center;
            color: #fff;
            display: block;
            font-weight: 400;
         }

         .sec-title h2 {
            position: relative;
            display: block;
            font-size: 30px !important;
            line-height: 1.28em;
            color: #222222;
            font-weight: 600;
            padding-bottom: 18px;
            text-align: center;
         }

         .about-section .content-column .inner-column {
            position: relative;
            padding-left: 0 !important;
         }

         .about-section .sec-title {
            margin-bottom: 5px !important;
         }

         .sec-title h2::before {
            position: absolute;
            content: '';
            left: 150px !important;
            bottom: 0px;
            width: 50px;
            height: 3px;
            background-color: #d1d2d6;
            text-align: center;
         }

         .about-section .btn-box a {
            padding: 10px 30px !important;
         }

         .about-section .btn-box {
            position: relative;
            text-align: center !important;
         }

         .section-padding {
            padding-bottom: 0px !important;
         }

         .section-padding-2 {
            padding-top: 0 !important;
         }
         .text-xs-center
         {
            text-align: center;
         }
         .text-size
         {
            font-size: 14px!important;
         }
         article
         {
            margin-top: 0!important;
            display: block!important;
         }
         .box1
         {
            margin-right: 20px!important;
            margin-left: 20px;
         }
         .box2
         {
            padding-top: 0!important;
            padding-bottom: 0!important;
            margin: 20px!important;
         }
      }
   </style>
</head>
<body>
<?php include('include/navbar.php'); ?>
<!-- Start main-content -->

  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay overlay-white-8est" data-bg-img="<?php echo base_url(); ?><?php echo $page_data->page_image; ?>">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pt-100 pb-100">
            <div class="row">
              <div class="col-md-8">
                <div class="home-content">
                 <!--  <div>
                    <img src="<?php echo base_url(); ?><?php echo $app_setting->app_sticky_logo?>">
                  </div> -->
                  <h1 class="text-white text-uppercase font-54"><?php echo $page_data->page_image_title; ?></h1>
                <h5 class="text-white font-weight-400"><?php echo $page_data->page_image_description; ?></h5>
                <!-- <a class="btn btn-colored btn-theme-colored btn-flat smooth-scroll-to-target mt-15" href="#donate-now">Donate Now</a> -->
                </div>
              </div>
              <div class="col-md-4">
              
                <!-- Appointment Form Starts -->
                <form id="multi-step-form" class="booking-form form-home bg-black-333 p-30" method="post">
                  <h3 class="mt-0 text-white mb-20">Make An Appointment</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-step active" id="step-1">
                        <div class="form-group">
                            <label for="name">Your Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:  </label>
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
                                <!-- Add options for countries here -->
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
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: About -->
    <section>
      <div class="container" style="padding-top: 30px !important;padding-bottom: 30px!important;">
        <div class="row">
          <div class="col-sm-8" style="text-align: justify;">
            <?php echo $page_data->page_content; ?>
          </div>
        </div>
      </div>
    </section>


    <section class="">
      <div class="container" style="padding-top: 30px !important;padding-bottom: 30px!important;">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
             <p style="text-align: center; "><span style="color: inherit; font-size: 36px; font-family: Philosopher, sans-serif !important;">LIFE IN DIVINE YOGA</span><br></p>
             <h2 style="text-align: center;">|| योग: कर्मसु कौशलम् ||</h2>
 </div> </div>
             <div class="row">
            <p style="font-size: 14px;">A journey of self-discovery, inner peace, and spiritual awakening. Embrace balance, harmony, and enlightenment through mindful practice and connection with the divine.</p>
          </div>
           <div class="row mt-10">
               <!--  <?php foreach ($section_2_content as $key => $content_sec_2):?>
                  <div class="col-sm-4 text-center">
                      <div class="">
                        <img src="<?php echo base_url(); ?><?php echo $content_sec_2->os_image; ?>" alt="<?php echo $content_sec_2->os_heading; ?>">
                      </div>
                      <h2 style="font-size: 16px"><?php echo $content_sec_2->os_heading; ?></h2>
                  </div>
                <?php endforeach; ?> -->

                             <div class="col-sm-4 text-center">
                      <div class="">
                        <img src="<?php echo base_url(); ?>uploads/6503db8d98529icon-1.png" alt="Alternative Medicines">
                      </div>
                      <h2 style="font-size: 16px">Alternative Medicines</h2>
                  </div>
                                  <div class="col-sm-4 text-center">
                      <div class="">
                        <img src="<?php echo base_url(); ?>uploads/6503dbc7b2fc5icon-2.png" alt="For Good Health">
                      </div>
                      <h2 style="font-size: 16px">For Good Health</h2>
                  </div>
                                  <div class="col-sm-4 text-center">
                      <div class="">
                        <img src="<?php echo base_url(); ?>uploads/6503dbe5edf47icon-3.png" alt="Healthy Mind &amp; Body">
                      </div>
                      <h2 style="font-size: 16px">Healthy Mind &amp; Body</h2>
                  </div>
                
              </div>
             

        </div>
    </div>


</section>
<section class="">
      <div class="container" style="padding-top: 30px !important;padding-bottom: 30px!important;">
        <div class="section-title text-center">
           <row>
                 <img src="<?php echo base_url(); ?>uploads/download.png" alt="For Good Health">

              </row>
      </div>
  </div>
</section>

<section class="">
      <div class="container" style="padding-top: 30px !important;padding-bottom: 30px!important;">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
             <p style="text-align: center; "><span style="color: inherit; font-size: 36px; font-family: Philosopher, sans-serif !important;">THE MAIN REASONS TO PRACTICE YOGA</span><br></p>
             <h2 style="text-align: center;">|| योगश्चित्तवृत्तिनिरोधः ||</h2>
         </div>
     </div>
      <div class="row">
             <p style="text-align: center;">ELEVATE MIND, BODY, AND SPIRIT THROUGH ANCIENT PRACTICES AND MODERN WISDOM. EMBRACE BALANCE AND BLISS ON YOUR JOURNEY WITHIN.</p>
            </div> 

             <div class="row">
              
                  <div class="col-sm-6">
                    <div class="icon-box icon-theme-colored benefit-icon left media p-0 mb-sm-10 mt-30">
                      <a class="icon icon-circled icon-md  pull-left flip">
                        <img src="<?php echo base_url(); ?>uploads/65030a9e1ab49health-icon.png" alt="yogintra good for health">
                      </a>
                      <div class="media-body">
                        <h3 class="media-heading heading"><b>Good for Health</b></h3>
                        <p>Yoga Fit is where you can find balance, harmony and energy. Also yoga improve strength, balance and flexiblity.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="icon-box icon-theme-colored benefit-icon left media p-0 mb-sm-10 mt-30">
                      <a class="icon icon-circled icon-md  pull-left flip">
                        <img src="<?php echo base_url(); ?>uploads/65030aafc7902heart-beat.png" alt="yogintra Good for Cardio">
                      </a>
                      <div class="media-body">
                        <h3 class="media-heading heading"><b>Good for Cardio</b></h3>
                        <p>Yoga Fit improves blood circulation and decreases blood pressure of the body. A lower pulse rate helps your heart.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="icon-box icon-theme-colored benefit-icon left media p-0 mb-sm-10 mt-30">
                      <a class="icon icon-circled icon-md  pull-left flip">
                        <img src="<?php echo base_url(); ?>uploads/65030ac4021e6weight-loss.png" alt="yogintra Good for Body">
                      </a>
                      <div class="media-body">
                        <h3 class="media-heading heading"><b>Good for Body</b></h3>
                        <p>Yoga Fit is where you can gain a balance of metabolism. Maintain a healthy weight, beautiful strong body, and control your hunger.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="icon-box icon-theme-colored benefit-icon left media p-0 mb-sm-10 mt-30">
                      <a class="icon icon-circled icon-md  pull-left flip">
                        <img src="<?php echo base_url(); ?>uploads/65030ad5516adbreathing.png" alt="yogintra Good for Breathing">
                      </a>
                      <div class="media-body">
                        <h3 class="media-heading heading"><b>Good for Breathing</b></h3>
                        <p>Yoga Fit improves your respiratory by helping your lungs work more efficiently. Breathing exercises are a therapy which cure lungs problem.</p>
                      </div>
                    </div>
                  </div>
             
</div>
</div>
</div>
</section>

<section class="">
      <div class="container " style="padding-top: 30px !important;padding-bottom: 30px!important;">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
             <p style="text-align: center; "><span style="color: inherit; font-size: 36px; font-family: Philosopher, sans-serif !important;line-height: 1.2;">A BRIEF DESCRIPTION OF THE TYPES OF YOGA SERVICES</span><br></p>
             <h2 style="text-align: center;">|| तत्र स्थितौ यत्नोऽभ्यासः ||</h2>
         </div>
     </div>
      <div class="row">
            <p style="font-size: 14px;">Discover inner peace and vitality with our comprehensive yoga services. From beginner-friendly classes to advanced practices, we offer holistic guidance to enhance your mind, body, and spirit. Start your journey today.</p>
          </div>
      </div>
       <div class="section-content text-center">
              <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>uploads/home_visit_yoga.jpg" alt="TTC">
                    <h4 class="mb-5">Home Visit Yoga</h4>

                    <a href="<?php echo base_url(); ?>service/home-visit-yoga" class="btn btn-success">Visit Now</a>
                  </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>uploads/private_online_yoga.png" alt="Private Online Yoga">
                    <h4 class="mb-5">Private Online Yoga</h4>

                    <a href="<?php echo base_url(); ?>service/private-online-yoga" class="btn btn-success">Visit Now</a>
                  </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>uploads/group_online_yoga.jpg" alt="Group Online Yoga">
                    <h4 class="mb-5">Group Online Yoga</h4>
                    <a href="<?php echo base_url(); ?>service/group-online-yoga" class="btn btn-success">Visit Now</a>
                  </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>uploads/65057356cad36images-150x150.jpg" alt="Corporate Yoga">
                    <h4 class="mb-5">Corporate Yoga</h4>
                    <a href="<?php echo base_url(); ?>service/corporate-yoga" class="btn btn-success">Visit Now</a>
                  </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>uploads/yog_center.jpg" alt="Yoga Center">
                    <h4 class="mb-5">Yoga Center</h4>
                    <a href="<?php echo base_url(); ?>yoga_center" class="btn btn-success">Visit Now</a>
                  </div>
                     <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>uploads/ttc.png" alt="TTC">
                    <h4 class="mb-5">TTC</h4>
                    <a href="<?php echo base_url(); ?>teacher_training_course" class="btn btn-success">Visit Now</a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>assets/icon-thumb4-150x150.jpg" alt="Retreat">
                    <h4 class="mb-5">Retreat</h4>
                    <a href="<?php echo base_url(); ?>retreat" class="btn btn-success">Visit Now</a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft mt-20" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="img-circle img-thumbnail mb-0" src="<?php echo base_url(); ?>uploads/workshop.png" alt="Workshop">
                    <h4 class="mb-5">Workshop</h4>
                    <a href="<?php echo base_url(); ?>workshop" class="btn btn-success">Visit Now</a>
                  </div>
                </div>
            </div>
        </div>
    </section>

  <section class="divider " data-bg-img="<?php echo base_url(); ?>assets/bg-graphic-free-img-1.jpg">
      <div class="container pt-45 pb-20 section-padding-2" style="padding-top: 30px !important;padding-bottom: 30px!important;">
         <div class="section-title">
            <div class="row">
               <div class="col-md-4">
                  <img src="<?php echo base_url(); ?>assets/Square-Logo-with-Name-2-povy7zr4loqk9maa9hbtvdrc77dpfngjngf3wrmp40.png" alt= "yogintra"/>
               </div>
               <div class="col-md-8 text-xs-center">
                  <h2 class="mt-40 text-xs-center">About YogIntra:</h2>
                  <p class="text-size">Back In 2011, Started with a thought to make common people experience Yoga in their busy schedule, YogIntra is now nationally and internationally building community to help people stay healthy with a numerous Yoga Experts for all age group and gender. YogIntra comes from two words Yog and Intra, where yog comes from Sanskrit word “Yuj” Which Means connection between “Soul” (Aatma) and “God”(Parmatma) And Intra is an English Word Which Means Within. YogIntra is the connection between the soul and God within oneself.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
    <section class="about-section">
      <div class="container section-padding" style="padding-top: 30px !important;padding-bottom: 30px!important;">
         <div class="row">
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
               <div class="inner-column wow fadeInLeft">
                  <div class="author-desc">
                     <h2>Amit Pandey</h2>
                     <span>CEO & Founder of Yogintra</span>
                  </div>
                  <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img title="Amit Pandey" src="<?php echo base_url(); ?>assets/image0-1-e1652675710448-povumdsa83b7dajv3gfs2377ei7o24wz5y0tn7sz34.jpeg" alt="CEO & Founder of Yogintra Amit Pandey"></a></figure>
               </div>
            </div>
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 padding-top-media">
               <div class="inner-column">
                  <div class="sec-title">
                     <h2>About Founder:</h2>
                  </div>
                  <div class="text">
                     Mr. Amit Pandey started his journey of yoga back in 2005 as student in Yogic science and then he understood Yoga is the only way he would be able to help people bring smiles back on their faces in this struggling and fast life. He served few years Internationally as a Yoga trainer but coming back to India during his visit a few years back, a thought him hard “Charity begins at home.” And then he never went back thinking about people here need know about Yoga and Yoga Benefits.
                  </div>
                  <div class="btn-box">
                     <a href="<?php echo base_url(); ?>contact" class="theme-btn btn-style-one">Contact Us</a>
                  </div>
               </div>
            </div>
            <!-- Image Column -->
         </div>
      </div>
   </section>

<section class="">
      <div class="container pt-70 pb-70" style="padding-top: 30px !important;padding-bottom: 30px!important;">
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
                      <img class="img-fullwidth" style="height: 200px;width: auto"  alt="YogIntra trainers" src="<?php echo $api; ?>/<?php echo $trainner->profile_image?>">
                    </div>
                    <?php
                      $currentYear = date("Y");
                      $birthYear = date("Y", strtotime($trainner->dob));
                    ?>
                    <div class="team-details">
                      <div class="p-10 bg-theme-colored2">
                        <h4 class="text-uppercase mt-0 mb-0"><a href="#"><?php echo $trainner->name?></a></h4>
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

 <section>
     <div class="container pt-1" style="padding-top: 30px !important;padding-bottom: 30px!important;">
       <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <p style="text-align: center; "><span style="color: inherit; font-size: 36px; font-family: Philosopher, sans-serif !important;">Gallery</span><br></p>
             
         </div>
     </div>
      <div class="row">
            <p style="font-size: 14px;text-align: center;">Discover tranquility through our yoga gallery: poses and serenity captured in stillness.</p>
          </div>

     <div class="row"  style="margin-top: 15px;">
        <div class="col-xs-12 col-sm-6 col-md-4 sm-text-center mb-30 mb-sm-30">
             <div class="team-members text-center maxwidth400" onclick="open_modal(<?php echo $i; ?>)">
               <div class="team-thumb">
                 <img class="img-fullwidth" id="imageresource_<?php echo $i; ?>" style="height: 200px;width: auto" alt="yogintra" src="<?php echo base_url(); ?>uploads/yoga-pose1.jpeg">
               </div>
           </div>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-4 sm-text-center mb-30 mb-sm-30">
             <div class="team-members text-center maxwidth400" onclick="open_modal(<?php echo $i; ?>)">
               <div class="team-thumb">
                 <img class="img-fullwidth" id="imageresource_<?php echo $i; ?>" style="height: 200px;width: auto" alt="yogintra" src="<?php echo base_url(); ?>uploads/yoga-pose2.jpeg">
               </div>
           </div>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-4 sm-text-center mb-30 mb-sm-30">
             <div class="team-members text-center maxwidth400" onclick="open_modal(<?php echo $i; ?>)">
               <div class="team-thumb">
                 <img class="img-fullwidth" id="imageresource_<?php echo $i; ?>" style="height: 200px;width: auto" alt="yogintra" src="<?php echo base_url(); ?>uploads/yoga-pose3.jpeg">
               </div>
           </div>
       </div>
         <div class="text-center"><a href="<?php echo base_url(); ?>gallery" class="btn btn-success mt-15">View More Gallery <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
   </div>
</div>
</section>


<section class="">
    <div class="container">
        <div class="row">

   <div class='sk-ww-google-reviews' data-embed-id='25389280'></div><script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>

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
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
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
                        // var option = jQuery('');
                        var option = `<option value='${val.name}'>${val.name}</option>`;

                        // option.attr('value', val.name).text(val.name);
                        jQuery('.cities').append(option);
                    });
                }
                jQuery(".cities").prop("disabled",false);
        });
    };

    this.getStates = function(id = 101) {
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
        
        var defaultCountryName = 'India';
        
        call.send(data, url, method, function(data) {
        jQuery('.countries').find("option:eq(0)").html("Select Country");
    
            jQuery.each(data['result'], function(key, val) {
                var option = `<option value='${val.name}' countryid='${val.id}'>${val.name}</option>`;
    
                // Check if the current option is the default country
                if (val.name === defaultCountryName) {
                    option = `<option value='${val.name}' countryid='${val.id}' selected>${val.name}</option>`;
                }
    
                jQuery('.countries').append(option);
            });
        });
    };

}

jQuery(function() {
    var loc = new locationInfo();
    loc.getCountries();
    loc.getStates();
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
</script>
<style>
    .form-step {
        display: none;
    }
    .form-step.active {
        display: block;
    }
    .bg-black-333 {
        background-color: #01AEB7 !important;
      }
      .form-group label, .error-message
      {
        color: #fff;
      }
</style>