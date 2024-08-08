<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h4>Edit Service Category</h4>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Service</a></li>
                  <li class="breadcrumb-item active">Edit Service Category</li>
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
                <h3 class="card-title">Update Service Category</h3>
              </div>
              <!-- /.card-header -->
              <?php echo form_open_multipart('admin/service/update_category/'.$category->service_cat_id); ?>
              <div class="card-body">
                <div class="row">
                    

                 
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Category Name <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="text" name="service_cat_name" class="form-control" placeholder="Enter Category Name" required value="<?php echo $category->service_cat_name ?>">
                       </div>
                    </div>
                  </div>
                  
                   <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Title</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  value="<?php echo $category->page_title; ?>" name="page_title" placeholder="Enter Page Title">
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Title</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $category->page_meta_title; ?>"  name="page_meta_title" placeholder="Enter Page Meta Title">
                        </div>
                     </div>
                  </div>

                  
          
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Slug</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $category->page_Slug; ?>" name="page_Slug" placeholder="Enter Page Slug">
                        </div>
                     </div>
                  </div>

       
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Keywords <small>(Saparate by Comma (,)) Ex. facebook, youtube, whatsapp</small></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_keywords" placeholder="Enter Page Meta Keywords" ><?php echo $category->page_keywords; ?></textarea>
                        </div>
                     </div>
                  </div>


                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Description</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_meta_description" placeholder="Enter Page Meta Description" ><?php echo $category->page_meta_description; ?></textarea>
                        </div>
                     </div>
                  </div>
                  
                   <div class="col-md-2">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Category Image</label>
                       <div class="col-sm-12">
                          <input type="file" name="service_cat_image" class="form-control" placeholder="Enter Category Name" >
                       </div>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                       <img src="<?php echo base_url(); ?><?php echo $category->service_cat_image; ?>" width="100px">
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
