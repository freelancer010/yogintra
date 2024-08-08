 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Front Setting</a></li>
              <li class="breadcrumb-item active">Add Slider</li>

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
                <h3 class="card-title">Add New Slider</h3>

                <div class="card-tools">
                  <a href="<?php echo base_url()?>/admin/front_setting/all_slider" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View Slider</a>
                </div>
              </div>
              <!-- /.card-header -->
              <?php echo form_open_multipart('admin/front_setting/new_slider_add'); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Slider Heading</label>
                       <div class="col-sm-12">
                          <input class="form-control"  name="slider_heading" placeholder="Enter Slider Heading">
                       </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Slider Sub Heading </label>
                       <div class="col-sm-12">
                          <input class="form-control"  name="slider_sub_heading" placeholder="Enter Slider Sub Heading" >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Slider Button Name </label>
                       <div class="col-sm-12">
                          <input class="form-control"  name="slider_btn_name" placeholder="Enter Slider Button Name" >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Slider Button Link </label>
                       <div class="col-sm-12">
                          <input class="form-control"  name="slider_btn_link" placeholder="Enter Slider Button Link" >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Slider Background Image <span class="required">*</span> (Size 1920px X 1280px)</label>
                       <div class="col-sm-12">
                          <input type="file" class="form-control"  name="slider_image" required>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Slider Text Direction <span class="required">*</span> </label>
                       <div class="col-sm-12">
                          <select class="form-control"  name="slider_text_direction" required>
                            <option value="left">Left</option>
                            <option value="right">Right</option>
                            <option value="center">Center</option>
                          </select>
                       </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                       <button name="submit" style="float: right" type="submit" class="btn btn-success">Add</button>
                    </div>
                  </div>
                   <?php echo form_close() ?>
                </div>
              </div>
            </div>
          </div>
        </div>
            <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->