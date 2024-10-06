<!-- Meta Tags -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="We are constantly raising awareness of detoxifying the mind and body from within. We guide you to improve your inner beauty and personality through yoga." />
<meta property="og:title" content="Gallery  | YogIntra" />
<meta property="og:description" content="We are constantly raising awareness of detoxifying the mind and body from within. We guide you to improve your inner beauty and personality through yoga." />
<meta name="keywords" content="Online Yoga Classes India, Yoga Class in India, Best Yoga Institute In India, Best Yoga Center in India, Personal Yoga Trainer at Home, Best Yoga Classes in Mumbai, Yoga Teacher Training Courses." />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title>Gallery  | YogIntra</title>
</head>
<body>
  <?php include('include/navbar.php'); ?>

<!-- Start main-content -->
<div class="main-content">

  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: url("<?php echo front_css(); ?>images/bg/bg6.jpg"); background-position: 50% 55px;height: 300px;'>
    <div class="container pt-60 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title text-white">Gallery</h2>
            <ol class="breadcrumb text-center text-black mt-10">
              <li><a href="<?php echo base_url(); ?>" class="text-white">Home</a></li>
              <li class="active text-gray">Gallery</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Grid 3 -->
  <section>
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <!-- Portfolio Filter -->
            <div class="portfolio-filter">
              <a href="#" class="active" data-filter="*">All</a>
              <?php foreach ($all_category as $key => $category) : ?>
                <a href="#<?php echo $category->g_cat_name; ?>" class="" data-filter=".<?php echo $category->g_cat_name; ?>"><?php echo $category->g_cat_name; ?></a>
              <?php endforeach; ?>

            </div>
            <!-- End Portfolio Filter -->

            <!-- Portfolio Gallery Grid -->
            <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">
              <!-- Portfolio Item Start -->
              <?php foreach ($all_gallery as $key => $gallery) :
                if ($gallery->gallery_is_video_or_image == 1) : ?>
                  <div class="gallery-item <?php echo $gallery->g_cat_name; ?>">
                    <div class="thumb">
                      <img style="height: 200px;" class="img-fullwidth" src="<?php echo base_url(); ?><?php echo $gallery->gallery_image; ?>" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a data-lightbox="image" href="<?php echo base_url(); ?><?php echo $gallery->gallery_image; ?>"><i class="fa fa-plus"></i></a>
                          </div>
                        </div>
                      </div>
                      <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?><?php echo $gallery->gallery_image; ?>">View more</a>
                    </div>
                  </div>
                <?php else : 
                  $video_image = explode("?v=", $gallery->gallery_video);
                  $video_image = $video_image[1];
                  $image_video = "https://img.youtube.com/vi/".$video_image."/maxresdefault.jpg";
                  ?>
                  <div class="gallery-item <?php echo $gallery->g_cat_name; ?>">
                    <div class="thumb">
                      <img style="height: 200px;" class="img-fullwidth" src="<?php echo $image_video; ?>" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a class="popup-youtube" href="<?php echo $gallery->gallery_video; ?>"><i class="fa fa-youtube-play"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end main-content -->
  <script type="text/javascript">
    // function() {
    var $document = $(document);
    var $document_body = $(document.body);
    var $portfolio_gallery = $(".gallery-isotope");
    var portfolio_filter = ".portfolio-filter a";
    var $portfolio_filter_first_child = $(".portfolio-filter a:eq(0)");
    var $portfolio_flex_slider = $(".portfolio-slider");

    if ($portfolio_gallery.length > 0) {
      $portfolio_gallery.imagesLoaded(function() {
        if ($portfolio_gallery.hasClass("masonry")) {
          $portfolio_gallery.isotope({
            itemSelector: '.gallery-item',
            layoutMode: "masonry",
            masonry: {
              columnWidth: '.gallery-item-sizer'
            },
            filter: "*"
          });
        } else {
          $portfolio_gallery.isotope({
            itemSelector: '.gallery-item',
            layoutMode: "fitRows",
            filter: "*"
          });
        }
      });
    }

    $document_body.on('click', portfolio_filter, function(e) {
      $(portfolio_filter).removeClass("active");
      $(this).addClass("active");
      var fselector = $(this).data('filter');
      if ($portfolio_gallery.hasClass("masonry")) {
        $portfolio_gallery.isotope({
          itemSelector: '.gallery-item',
          layoutMode: "masonry",
          masonry: {
            columnWidth: '.gallery-item-sizer'
          },
          filter: fselector
        });
      } else {
        $portfolio_gallery.isotope({
          itemSelector: '.gallery-item',
          layoutMode: "fitRows",
          filter: fselector
        });
      }
      return false;
    });
    // }
  </script>
  <style type="text/css">
    .styled-icons .fa {
      line-height: 2.5;
    }
  </style>