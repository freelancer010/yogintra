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
              <?php echo form_open_multipart('admin/blog/add_new_blog_category'); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Category Name <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name" required>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Category Meta Keywords</label>
                       <div class="col-sm-12">
                          <textarea type="text" name="category_keyword" class="form-control" placeholder="Enter Meta Keywords" ></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Category Meta Description</label>
                       <div class="col-sm-12">
                          <textarea type="text" name="category_description" class="form-control" placeholder="Enter Meta Description" ></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <button name="form1" style="float: right" type="submit" class="btn btn-success">Add</button>
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
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">View All Category</h3>
          </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Keywords</th>
                  <th>Description</th>
                  <th></th>
               </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($get_all_blog_category as $category):?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $category->category_name ?></td>
                  <td><?php echo $category->category_slug ?></td>
                  <td><?php echo $category->category_keyword ?></td>
                  <td><?php echo $category->category_description ?></td>
                  <td>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo base_url(); ?>admin/blog/edit_blog_category/<?php echo $category->id ?>"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>admin/blog/delete_blog_category/<?php echo $category->id ?>"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
                        </div>
                      </div>
                    </div>
                  </td>
               </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
         </div>
      </div>
    </section>
 </div>
