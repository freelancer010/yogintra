 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gallery</h1>
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
          <div class="col-sm-4">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add New Category</h3>
                
              </div>
              <!-- /.card-header -->
              <?php echo form_open(base_url().'/admin/main_page_setting/add_new_gallery_category'); ?>
              <div class="card-body">
                <div class="row">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Category Name English<span class="required">*</span></label>
                      <input type="text" name="gc_name" class="form-control" placeholder="Enter Category Name English" required="">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Category Name Hindi<span class="required">*</span></label>
                      <input type="text" name="gc_name_hindi" class="form-control" placeholder="Enter Category Name Hindi" required="">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <button class="btn btn-info" type="submit" style="float: right">Save</button>
                    </div>
                  </div>
                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
          
          <div class="col-sm-8">
            <div class="card card-default">
              <div class="card-header">
               <h3 class="card-title">View All Category</h3>
              </div>
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>id</th>
                      <th>Category English</th>
                      <th>Category Hindi</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; foreach ($all_category as $key => $category):?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $category->gc_name ?></td>
                      <td><?php echo $category->gc_name_hindi ?></td>
                      <td><a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#update-category<?php echo $category->gc_id ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>/admin/main_page_setting/delete_gallery_category/<?php echo $category->gc_id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <?php $i=1; foreach ($all_category as $key => $category):?> 
      <div class="modal fade" id="update-category<?php echo $category->gc_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open(base_url().'/admin/main_page_setting/update_gallery_category/'.$category->gc_id); ?>
                
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Category Name English:</label>
                  <input type="text" class="form-control" name="gc_name" value="<?php echo $category->gc_name ?>" required>
                </div>
                <div class="form-group">
                  <label>Category Name Hindi<span class="required">*</span></label>
                  <input type="text" name="gc_name_hindi" class="form-control" placeholder="Enter Category Name Hindi" required="" value="<?php echo $category->gc_name_hindi ?>">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>



    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">View All Gallery</h3>

            <div class="card-tools">
              <a href="<?php echo base_url()?>/admin/main_page_setting/add_gallery_item" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Gallery</a>
            </div>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Image / Video</th>
                  <th>Name</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($all_gallery as $key => $gallery):?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td>
                    <?php if($gallery->gallery_mode == 2): ?>
                      <img src="<?php echo base_url(); ?><?php echo $gallery->gallery_image ?>" width="50px;">
                    <?php else: ?>
                      <?php echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"120\" height=\"55\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$gallery->gallery_video);?>
                    <?php endif;?>
                  </td>
                  <td><?php echo $gallery->gallery_name ?></td>

                  <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="<?php echo base_url(); ?>/admin/main_page_setting/edit_gallery/<?php echo $gallery->gallery_id  ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>/admin/main_page_setting/delete_gallery/<?php echo $gallery->gallery_id  ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>

                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
       
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
