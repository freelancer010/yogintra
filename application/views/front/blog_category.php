<!-- Meta Tags -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title>your website</title>
</head>
<body>
  <?php include('include/navbar.php'); ?>
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: url("<?php echo front_css(); ?>images/bg/bg6.jpg"); background-position: 50% 45px;height: 300px;'>
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title"><?php echo $category->category_name; ?></h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active text-theme-colored"><?php echo $category->category_name; ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
          <div class="blog-posts">
            <?php foreach ($get_all_blog as $key => $all_blog):?>
              <div class="col-md-4">
                <article class="post clearfix mb-30 bg-lighter">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="<?php echo base_url(); ?><?php echo $all_blog->blog_image; ?>" alt="<?php echo $all_blog->blog_title; ?>" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border">
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600"><?php echo date('d', strtotime($all_blog->created_at)); ?></li>
                          <li class="font-12 text-white text-uppercase"><?php echo date('M', strtotime($all_blog->created_at)); ?></li>
                        </ul>
                      </div>
                      <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                          <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="<?php echo base_url(); ?>blog/<?php echo $all_blog->blog_slug; ?>"><?php echo $all_blog->blog_title; ?></a></h4>
                        </div>
                      </div>
                    </div>
                    <p class="mt-10"><?php echo $all_blog->blog_short_description; ?></p>
                    <a href="<?php echo base_url(); ?>blog/<?php echo $all_blog->blog_slug; ?>" class="btn-read-more">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->
