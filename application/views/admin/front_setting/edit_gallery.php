
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Gallery Item</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Main Page Setting</a></li>
              <li class="breadcrumb-item active">Gallery</li>

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
                <h3 class="card-title">Update Gallery Item</h3>

                <div class="card-tools">
                  <a href="<?php echo base_url()?>/admin/main_page_setting/gallery" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View Gallery Item</a>
                </div>
              </div>
              <!-- /.card-header -->
              <?php echo form_open_multipart('admin/main_page_setting/update_gallery_item/'.$gallery->gallery_id); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Gallery Category <span style="color:red">*</span></label>
                       <div class="col-sm-12">
                          <select class="form-control"  name="gallery_category" required>
                            <option value="">Select</option>
                            <?php foreach ($all_category as $category): ?>
                              <option <?php if($category->gc_id == $gallery->gallery_category){echo 'selected';}?> value="<?php echo $category->gc_id; ?>"><?php echo $category->gc_name; ?></option>
                            <?php endforeach ?>
                          </select>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Gallery Mode <span style="color:red">*</span></label>
                       <div class="col-sm-12">
                          <select class="form-control" id="mode" onchange="onchnage(this.value)"  name="gallery_mode" required>
                            <option value="">Select</option>
                            <option <?php if($gallery->gallery_mode == 1){echo 'selected';} ?> value="1">Video</option>
                            <option <?php if($gallery->gallery_mode == 2){echo 'selected';} ?> value="2">Image</option>
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
                  <div class="col-md-12" id="img_n">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Image Name <span style="color:red">*</span></label>
                       <div class="col-sm-12">
                          <input class="form-control" id="img_name" name="gallery_name" placeholder="Enter Image Name" value="<?php echo $gallery->gallery_name ?>">
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
        <?php if($gallery->gallery_mode == 1): ?>
          onchnage(1);
        <?php else:?>
          onchnage(2);
        <?php endif;?>
    });

    function onchnage(e) {
      if(e == 1)
      {
        $('#v_url').show();
        $('#add_btn').show();
        $('#img_n').hide();
        $('#img').hide();
        $('#pre_img').hide();
        $("#video").prop('required',true);
        $("#img_name").prop('required',false);
        $("#image").prop('required',false);
      }
      else
      {
        $('#img').show();
        $('#add_btn').show();
        $('#img_n').show();
        $('#pre_img').show();
        $('#v_url').hide();
        $("#video").prop('required',false);
        $("#img_name").prop('required',true);
      }
    }
  </script>