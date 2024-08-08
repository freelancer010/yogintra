 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Testmonial</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Front Setting</a></li>
              <li class="breadcrumb-item active">Edit Testmonial</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Edit Testmonial</h3>
              </div>
              <!-- /.card-header -->
               <?php echo form_open_multipart(base_url().'admin/front_setting/update_testimonials/'.$testimonial->test_id);?>
              <div class="card-body">
                <div class="row">

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">User Name<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="test_name" placeholder="Enter User Name" required value="<?php echo $testimonial->test_name ?>">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">User Position<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="test_position" placeholder="Enter User Position" required value="<?php echo $testimonial->test_position ?>">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Review Description<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="test_description" placeholder="Enter User Position" required><?php echo $testimonial->test_description ?></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">User Image<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="file" class="form-control"  name="test_image" placeholder="Enter Slider Sub-Heading">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 d-none">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Rating<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <select type="file" class="form-control"  name="test_review" placeholder="Enter Slider Sub-Heading" required>
                              <option value="">Select</option>
                              <option <?php if($testimonial->test_review == 1){echo 'selected';} ?> value="1">1</option>
                              <option <?php if($testimonial->test_review == 2){echo 'selected';} ?> value="2">2</option>
                              <option <?php if($testimonial->test_review == 3){echo 'selected';} ?> value="3">3</option>
                              <option <?php if($testimonial->test_review == 4){echo 'selected';} ?> value="4">4</option>
                              <option <?php if($testimonial->test_review == 5){echo 'selected';} ?> value="5">5</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">User Image Preview</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <img src="<?php echo base_url() ?><?php echo $testimonial->test_image ?>" width="100px">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <button name="form1" style="float: right" type="submit" class="btn btn-success">Update</button>
                    </div>
                  </div>
                  <?php echo form_close() ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
