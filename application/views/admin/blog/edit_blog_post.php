 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active">Edit Blog</li>

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
                <h3 class="card-title">Edit Blog</h3>
                <div class="card-tools">
                  <a href="<?php echo base_url()?>admin/blog/view_all_post" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View All Blog</a>
                </div>
              </div>
              <!-- /.card-header -->
              <?php echo form_open_multipart('admin/blog/update_blog_post/'.$blog->blog_id); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Title <span style="color: red;">*</span></span></label>
                       <div class="col-sm-12">
                          <input type="text" name="blog_title" class="form-control"  placeholder="Enter Post Title" required="required" value="<?php echo $blog->blog_title ?>">
                       </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Author Name </label>
                       <div class="col-sm-12">
                          <input type="text" name="blog_author" class="form-control" placeholder="Enter Blog Author" value="<?php echo $blog->blog_author ?>">
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Short Description</label>
                       <div class="col-sm-12">
                          <textarea type="text" class="form-control" placeholder="Enter Blog Short Description" name="blog_short_description"><?php echo $blog->blog_short_description ?></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Meta Keywords</label>
                       <div class="col-sm-12">
                          <textarea type="text" class="form-control" placeholder="Enter Blog Meta keywords" name="blog_meta_keywords" ><?php echo $blog->blog_meta_keywords ?></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Meta Description </label>
                       <div class="col-sm-12">
                          <textarea type="text" class="form-control" placeholder="Enter Post Meta Description" name="blog_meta_description" ><?php echo $blog->blog_meta_description ?></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Content</label>
                       <div class="col-sm-12">
                          <textarea type="text" class="form-control text-editor" placeholder="Enter Post keywords" name="blog_content" ><?php echo $blog->blog_content ?></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Select Category</label>
                       <div class="col-sm-12">
                          <select name="blog_category" class="form-control" required="required">
                            <option value="">Select Category</option>
                            <?php foreach ($get_all_blog_category as $key => $category):?>
                            <option <?php if($blog->blog_category == $category->id){echo 'selected'; }?> value="<?php echo $category->id ?>"><?php echo $category->category_name ?></option>
                            <?php endforeach; ?>
                          </select>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Blog Image</label>
                       <div class="col-sm-12">
                           <input type="file" name="blog_image" class="form-control" >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Preview Blog Image </label>
                       <div class="col-sm-12">
                           <img src="<?php echo base_url() ?><?php echo $blog->blog_image ?>" width="100px">
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
