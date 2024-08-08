
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Our Features</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Frontend Setting</a></li>
              <li class="breadcrumb-item active">Our Features</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Edit Section</h3>
              </div>
              <!-- /.card-header -->
               <?php echo form_open_multipart(base_url().'admin/front_setting/update_our_features/'.$features->of_id);?>
              <div class="card-body">
                <div class="row">

                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12"> Heading<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="of_heading" placeholder="Enter Heading" required value="<?php echo $features->of_heading; ?>">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12"> Description<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="of_description" placeholder="Enter Sub-Heading" required><?php echo $features->of_description; ?></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Image </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="file" class="form-control"  name="of_image" placeholder="Enter Sub-Heading">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Image Preview</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <img src="<?php echo base_url() ?><?php echo $features->of_image ?>" width="100px">
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