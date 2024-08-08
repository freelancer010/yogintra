 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Profile</a></li>
              <li class="breadcrumb-item active">Profile Password</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Update Profile Password</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <?php echo form_open('admin/update_profile/update_profile_details_password'); ?>
          <div class="card-body">
            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">Current Password</label>
                   <div class="col-sm-12">
                      <div class="input-group mb-3">
                        <input type="password" class="form-control" id="current_password" name="current_password"  required="required" placeholder="Enter Current Password" >
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <a href="#" onclick="current_password(this);"><span class="fas fa-eye"></span></a>
                          </div>
                        </div>
                      </div>
                      <div id="result"></div>
                   </div>
                </div>
              </div>

              <div class="col-md-12 new_password">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">New Password</label>
                   <div class="col-sm-12">
                     <div class="input-group mb-3">
                      <input type="password" class="form-control" id="new_current_password" placeholder="Enter New Password" required="" name="new_password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <a href="#" onclick="show_new_password(this);"><span class="fas fa-eye"></span></a>
                        </div>
                      </div>
                    </div>
                   </div>
                </div>
              </div>

              <div class="col-md-12 new_password">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">Confirm New Password</label>
                   <div class="col-sm-12">
                      <div class="input-group mb-3">
                        <input type="password" class="form-control" id="confirm_new_password" name="confirm_password" placeholder="Enter Confirm New Password" required="">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <a href="#" onclick="show_new_confirm_password(this);"><span class="fas fa-eye"></span></a>
                          </div>
                        </div>
                      </div>
                       <div id="password_result"></div>
                   </div>
                </div>
              </div>

             
              <div class="col-md-12" id="submit_button">
                <div class="form-group">
                   <button name="submit" style="float: right" type="submit" class="btn btn-success">Update</button>
                </div>
              </div>

               <?php echo form_close() ?>
               

              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
            <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<style type="text/css">
  .new_password
  {
    display: none;
  }
  #submit_button
  {
    display: none;
  }
</style>