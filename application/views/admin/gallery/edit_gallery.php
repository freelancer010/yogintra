
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Gallery</a></li>
              <li class="breadcrumb-item active">Update Gallery</li>

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
                <h3 class="card-title">Update Gallery</h3>

                <div class="card-tools">
                  <a href="<?php echo base_url()?>/admin/gallery/view_all_gallery" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View Gallery Item</a>
                </div>
              </div>
              <!-- /.card-header -->
              <?php echo form_open_multipart('admin/gallery/update_gallery/'.$gallery->gallery_id); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Gallery Category <span style="color:red">*</span></label>
                       <div class="col-sm-12">
                          <select class="form-control"  name="gallery_category" required>
                            <option value="">Select</option>
                            <?php foreach ($all_category as $category): ?>
                              <option <?php if($category->g_cat_id == $gallery->gallery_category){echo 'selected';}?> value="<?php echo $category->g_cat_id; ?>"><?php echo $category->g_cat_name; ?></option>
                            <?php endforeach ?>
                          </select>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Gallery Mode <span style="color:red">*</span></label>
                       <div class="col-sm-12">
                          <select class="form-control" id="mode" onchange="onchnage(this.value)"  name="gallery_is_video_or_image" required>
                            <option value="">Select</option>
                            <option <?php if($gallery->gallery_is_video_or_image == 2){echo 'selected';} ?> value="2">Video</option>
                            <option <?php if($gallery->gallery_is_video_or_image == 1){echo 'selected';} ?> value="1">Image</option>
                          </select>
                       </div>
                    </div>
                  </div>

                  <style type="text/css">
                    #img, #img_n, #v_url, #add_btn
                    {
                      display: none;
                    }
                  </style>

                  <div class="col-md-12" id="img">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Upload Image </label>
                       <div class="col-sm-12">
                          <input class="form-control" type="file"  name="gallery_image" id="image" placeholder="Enter Description" >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12" id="pre_img">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Preview Upload Image </label>
                       <div class="col-sm-12">
                          <img src="<?php echo base_url() ?><?php echo $gallery->gallery_image ?>" width="100px">
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12" id="v_url">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Youtube Video URL <span style="color:red">*</span></label>
                       <div class="col-sm-12">
                          <textarea class="form-control"  name="gallery_video" placeholder="Enter Youtube Video URL" id="video"><?php echo $gallery->gallery_video ?></textarea>
                       </div>
                    </div>
                  </div>

                  <div class="col-md-12" id="add_btn">
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
          </div>
        </div>
            <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
    $( document ).ready(function() {
        <?php if($gallery->gallery_is_video_or_image == 1): ?>
          onchnage(1);
        <?php else:?>
          onchnage(2);
        <?php endif;?>
    });

    function onchnage(e) {
      if(e == 1)
      {
        $('#v_url').hide();
        $('#add_btn').show();
        $('#img').show();
        $('#pre_img').show();
        $("#video").prop('required',false);
      }
      else
      {
        $('#img').hide();
        $('#add_btn').show();
        $('#pre_img').hide();
        $('#v_url').show();
        $("#video").prop('required',true);
        $("#image").prop('required',false);
      }
    }
  </script>