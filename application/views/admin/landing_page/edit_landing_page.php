 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Landing Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Front Setting</a></li>
              <li class="breadcrumb-item active">Edit Landing Page</li>

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
                <h3 class="card-title">Update Landing Page</h3>
              </div>
              <!-- /.card-header -->
               <?php echo form_open_multipart(base_url().'admin/Landing_page/update_landing_page/'.$page->page_id);?>
              <div class="card-body">
                <div class="row">

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Name<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="page_name" placeholder="Enter Page Name" required  value="<?php echo $page->page_name; ?>">
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Url</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="page_title" placeholder="Enter Page Title" required  value="<?php echo $page->page_title; ?>">
                        </div>
                     </div>
                  </div>

      
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Description</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_meta_description" placeholder="Enter Page Meta Title" ><?php echo $page->page_meta_description; ?></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Keywords <small>(Saparate by Comma (,)) Ex. facebook, youtube, whatsapp</small></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_keywords" placeholder="Enter Page Meta Title" ><?php echo $page->page_keywords; ?></textarea>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Title</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="page_meta_title" placeholder="Enter Page Meta Title" value="<?php echo $page->page_meta_title; ?>">
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Head Code </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_head_code" placeholder="Enter Page Meta Title" ><?php echo $page->page_head_code; ?></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Heading<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="page_image_title" placeholder="Enter Page Heading" required value="<?php echo $page->page_image_title; ?>">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Sub-Heading<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="page_image_description" placeholder="Enter Page sub-Heading" required value="<?php echo $page->page_image_description; ?>">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Content</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="text-editor"  name="page_content" placeholder="Enter Page sub-Heading"><?php echo $page->page_content; ?></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Image </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="file" class="form-control"  name="page_image" placeholder="Enter Page sub-Heading">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Image Perview</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <img src="<?php echo base_url(); ?><?php echo $page->page_image; ?>" width="70px">
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
