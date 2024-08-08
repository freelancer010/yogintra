<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h4>Service Category</h4>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Service</a></li>
                  <li class="breadcrumb-item active">Service Category</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">View All Category</h3>
            <div class="card-tools">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>
            </div>
          </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th></th>
               </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($all_category as $category):?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><img src="<?php echo base_url(); ?><?php echo $category->service_cat_image ?>" width="50px"></td>
                  <td><?php echo $category->service_cat_name ?></td>
                  <td><?php echo $category->service_cat_slug ?></td>
                  <td>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo base_url(); ?>admin/service/edit_service_category/<?php echo $category->service_cat_id ?>"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>admin/service/delete_category/<?php echo $category->service_cat_id ?>"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart(base_url().'admin/service/add_new_category');?>
      <div class="modal-body">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="recipient-name" name="service_cat_name" required placeholder="Enter Category Name">
        </div>
        
         <div class="form-group">
             <div class="item form-group">
                <label class="col-md-12 col-sm-12 col-xs-12">Page Title</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <input type="text" class="form-control"  name="page_title" placeholder="Enter Page Title">
                </div>
             </div>
          </div>

        <div class="form-group">
             <div class="item form-group">
                <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Title</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <input type="text" class="form-control"  name="page_meta_title" placeholder="Enter Page Meta Title">
                </div>
             </div>
          </div>

          
  
        <div class="form-group">
             <div class="item form-group">
                <label class="col-md-12 col-sm-12 col-xs-12">Page Slug</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <input type="text" class="form-control"  name="page_Slug" placeholder="Enter Page Slug">
                </div>
             </div>
          </div>


        <div class="form-group">
             <div class="item form-group">
                <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Keywords <small>(Saparate by Comma (,)) Ex. facebook, youtube, whatsapp</small></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <textarea type="text" class="form-control"  name="page_keywords" placeholder="Enter Page Meta Keywords" ></textarea>
                </div>
             </div>
          </div>


        <div class="form-group">
             <div class="item form-group">
                <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Description</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <textarea type="text" class="form-control"  name="page_meta_description" placeholder="Enter Page Meta Description" ></textarea>
                </div>
             </div>
          </div>
                  
                  
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Image <span class="text-danger">*</span></label>
          <input type="file" class="form-control" id="recipient-name" name="service_cat_image" required placeholder="Enter Category Name">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>