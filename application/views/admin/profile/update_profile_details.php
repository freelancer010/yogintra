 <?php error_reporting(0); ?>
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
              <li class="breadcrumb-item active">Profile Details</li>

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
            <h3 class="card-title">Update Profile Details</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <?php echo form_open_multipart('admin/update_profile/update_profile_details_information'); ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">Name <span class="text-danger">*</span></label>
                   <div class="col-sm-12">
                      <input type="text" class="form-control"  name="user_name"  required="required" placeholder="Enter User Name" value="<?php echo $user->user_name ?>" >
                   </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">Mobile No <span class="text-danger">*</span></label>
                   <div class="col-sm-12">
                      <input type="number" class="form-control"  name="user_mobile"  required="required" placeholder="Enter Mobile No" value="<?php echo $user->user_mobile ?>">
                   </div>
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">User Name <span class="text-danger">*</span></label>
                   <div class="col-sm-12">
                      <input type="text" class="form-control"  name="user_email"  required="required" placeholder="Enter Email ID" value="<?php echo $user->user_email ?>">
                   </div>
                </div>
              </div>
              
                
              <!-- <div class="col-md-4">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">Select Opening Hour</label>
                   <div class="col-sm-12">
                      <select onchange="hours_mode(this.value)" class="form-control" name="user_atp_hrs_mode">
                          <option value="">-- Select Mode --</option>
                          <option <?php if($user->user_atp_hrs_mode == 1){echo 'selected';} ?> value="1">24 Hours</option>
                          <option <?php if($user->user_atp_hrs_mode == 2){echo 'selected';} ?> value="2">Selected Hours</option>
                        </select>

                   </div>
                </div>
              </div>
              <div class="col-md-4 hour_data">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">Opening Hour <span class="text-danger">*</span></label>
                   <div class="col-sm-12">
                      <select class="form-control hour_data_option"  name="user_atp_open_hrs">
                          <option value="">-- Select Hour --</option>
                          <?php
                          for ($hour = 0; $hour <= 23; $hour++) {
                              $hour_label = ($hour == 0 || $hour == 12) ? 12 : $hour % 12;
                              $ampm = $hour < 12 ? 'AM' : 'PM';
                              $selected = ($hour == $user->user_atp_open_hrs) ? 'selected' : '';
                              printf('<option value="%02d" %s>%d %s</option>', $hour, $selected, $hour_label, $ampm);
                          }
                          ?>
                        </select>

                   </div>
                </div>
              </div>
              <div class="col-md-4 hour_data">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">Closing Hour <span class="text-danger">*</span></label>
                   <div class="col-sm-12">
                      <select class="form-control hour_data_option" name="user_atp_closing_hrs">
                          <option value="">-- Select Hour --</option>
                          <?php
                          for ($hour = 0; $hour <= 23; $hour++) {
                              $hour_label = ($hour == 0 || $hour == 12) ? 12 : $hour % 12;
                              $ampm = $hour < 12 ? 'AM' : 'PM';
                              $selected = ($hour == $user->user_atp_closing_hrs) ? 'selected' : '';
                              printf('<option value="%02d" %s>%d %s</option>', $hour, $selected, $hour_label, $ampm);
                          }
                          ?>
                        </select>

                   </div>
                </div>
              </div> -->
              <div class="col-md-3">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">Upload Profile Photo (Image size 512 X 512 px)</label>
                   <div class="col-sm-12">
                      <input type="file" class="form-control"  name="user_photo"   id="logo_header">
                   </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                   <label for="inputEmail" class="col-sm-12 col-form-label">Preview Profile Photo</label>
                   <div class="col-sm-12">
                      <img id="header_logo" src="<?php echo base_url() ?><?php echo $user->user_photo ?>" width="100px" style="border:1px solid #333" >
                   </div>
                </div>
              </div>


              <div class="col-md-12">
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
<style type="text/css">
.hour_data
{
  display: none;
}
</style>
<script>
$( document ).ready(function() {
   hours_mode(<?php echo $user->user_atp_hrs_mode?>);
});
function hours_mode(e) 
{
  if(e == 1)
  {
    $('.hour_data').hide();
    $(".hour_data_option").prop('required',false);
  }
  else
  {
    $('.hour_data').show();
    $(".hour_data_option").prop('required',true);
  }
}
function logo_header(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#header_logo').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#logo_header").change(function() {
  logo_header(this);
});

function store_banner(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#inst_l_logo').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#inst_logo").change(function() {
  store_banner(this);
});
</script>