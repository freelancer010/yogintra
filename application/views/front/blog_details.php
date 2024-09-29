<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $blog->blog_meta_description; ?>" />
<meta name="keywords" content="<?php echo $blog->blog_meta_keywords; ?>" />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title><?php echo $blog->blog_title; ?></title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>

<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css" />

  <!-- Start main-content -->
  <div class="main-content">
  
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: url("<?php echo base_url(); ?><?php echo $blog->blog_image?>"); background-position: 50% 55px;height: 300px;'>
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white"><?php echo mb_strimwidth($blog->blog_title, 0, 100, "...")?></h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="<?php echo base_url(); ?>" class="text-white">Home</a></li>
                <li><a href="<?php echo base_url(); ?>blog_category/<?php echo $blog->category_slug; ?>" class="text-white"><?php echo $blog->category_name; ?></a></li>
                <li class="active text-gray"><?php echo mb_strimwidth($blog->blog_title, 0, 100, "...")?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="<?php echo base_url(); ?><?php echo $blog->blog_image; ?>" alt="<?php echo $blog->blog_title; ?>" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 text-primary"><?php echo date('d', strtotime($blog->created_at)); ?></li>
                        <li class="font-12 text-white text-uppercase text-primary"><?php echo date('M', strtotime($blog->created_at)); ?></li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="#"><?php echo $blog->blog_title; ?></a></h3>
                        <?php if($blog->blog_author): ?>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-user mr-5 text-theme-colored"></i> Author : <?php echo $blog->blog_author; ?></span>                
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <p><?php echo $blog->blog_content; ?></p>
                  
                </div>
              </article>
                <div id="share"></div> 
                <script>
                    $("#share").jsSocials({
                        shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
                    });
                </script>
            </div>
          </div>
          <!-- <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
             
              <div class="widget">
                <h4 class="widget-title">Categories</h4>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                    <?php foreach ($get_all_blog_category as $key => $category):?>
                    <li><a href="<?php echo base_url(); ?>blog_category/<?php echo $category->category_slug; ?>"><?php echo $category->category_name; ?></a></li>
                  <?php endforeach; ?>
                  </ul>
                </div>
              </div>

            </div>
          </div> -->
        </div>
      </div>
    </section> 
  </div>  <style>
 .post p a
 {
     color:blue!important;
 }
.jssocials-share-link {
  color: #fff!important;
}
  </style>
  <!-- end main-content -->
