<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h4>Blog Category</h4>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Blog</a></li>
                  <li class="breadcrumb-item active">Blog Category</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Blog Category</h3>
              </div>
              <!-- /.card-header -->
              <?php echo form_open_multipart('admin/blog/update_blog_category/'.$category->id); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Category Name <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name" required value="<?php echo $category->category_name ?>">
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Category Meta Keywords</label>
                       <div class="col-sm-12">
                          <textarea type="text" name="category_keyword" class="form-control" placeholder="Enter Meta Keywords" ><?php echo $category->category_keyword ?></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Category Meta Description</label>
                       <div class="col-sm-12">
                          <textarea type="text" name="category_description" class="form-control" placeholder="Enter Meta Description" ><?php echo $category->category_description ?></textarea>
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
