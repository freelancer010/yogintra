<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6 col-12">
               <h1 class="m-0">Dashboard</h1>
            </div>
         </div>
      </div>
   </div>

   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-3 col-6">
               <div class="small-box bg-info">
                  <div class="inner">
                     <h3>
                        <?php echo $this->db->get('event')->num_rows();?>
                     </h3>
                     <p>Total Events</p>
                  </div>
                  <div class="icon">
                     <i class="fa fa-calendar"></i>
                  </div>
                  <a href="<?php echo base_url() ?>/admin/event/view_all_event" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-6">
               <div class="small-box bg-primary">
                  <div class="inner">
                     <h3>
                        <?php echo $this->db->get('service')->num_rows();?>
                     </h3>
                     <p>Total Service</p>
                  </div>
                  <div class="icon">
                     <i class="fa fa-wrench"></i>
                  </div>
                  <a href="<?php echo base_url() ?>/admin/service/all_service" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-6">
               <div class="small-box bg-warning">
                  <div class="inner">
                     <h3>
                        <?php echo $this->db->get('yoga_center')->num_rows();?>
                     </h3>
                     <p>Total Yoga Center</p>
                  </div>
                  <div class="icon">
                     <i class="fa fa-building"></i>
                  </div>
                  <a href="<?php echo base_url() ?>/admin/yoga_center/view_all_yoga_center" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-6">
               <div class="small-box bg-success">
                  <div class="inner">
                     <h3>
                        <?php echo $this->db->get('blog')->num_rows();?>
                     </h3>
                     <p>Total Blog</p>
                  </div>
                  <div class="icon">
                     <i class="fab fa-blogger"></i>
                  </div>
                  <a href="<?php echo base_url() ?>/admin/blog/view_all_post" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>