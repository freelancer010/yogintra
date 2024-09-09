<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="This blog is about my yoga journey. It started decades ago and has no end." />
<meta name="keywords" content="Online Yoga Classes India, Yoga Class in India, Best Yoga Institute In India, Best Yoga Center in India, Personal Yoga Trainer at Home, Best Yoga Classes in Mumbai." />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title>Blogs - YogIntra</title>

  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo front_css(); ?>images/bg/bg6.jpg"); background-position: 50% 45px;height: 300px;'>
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Blog</h2>
              <ol class="breadcrumb text-center mt-10">
                <li class="text-white"><a class="text-white" href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active text-gray">All Blog</li>
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
                      <a href="<?php echo base_url(); ?>blog/<?php echo $all_blog->blog_slug; ?>"><img style="height:150px" src="<?php echo base_url(); ?><?php echo $all_blog->blog_image; ?>" alt="<?php echo $all_blog->blog_title; ?>" class="img-responsive img-fullwidth"></a> 
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border entry-meta-flex">
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 font-weight-600" style="color:blue"><?php echo date('d', strtotime($all_blog->created_at)); ?></li>
                          <li class="font-12 text-uppercase" style="color:blue"><?php echo date('M', strtotime($all_blog->created_at)); ?></li>
                        </ul>
                      </div>
                      <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                          <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="<?php echo base_url(); ?>blog/<?php echo $all_blog->blog_slug; ?>"><?php echo  mb_strimwidth($all_blog->blog_title, 0, 50, "..."); ?></a></h4>
                        </div>
                      </div>
                    </div>
                    <p class="mt-10 elipse-text"><?= $all_blog->blog_short_description ?></p>
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
  

  <!-- end main-content -->
