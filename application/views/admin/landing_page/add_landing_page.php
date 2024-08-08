 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Landing Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Front Setting</a></li>
              <li class="breadcrumb-item active">Add Landing Page</li>

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
                <h3 class="card-title">Add Landing Page</h3>
              </div>
              <!-- /.card-header -->
               <?php echo form_open_multipart(base_url().'admin/Landing_page/add_new_landing_page');?>
              <div class="card-body">
                <div class="row">

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Name<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="page_name" placeholder="Enter Page Name" id="city_name" required>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Url</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  id="city_slug" name="page_title" placeholder="Enter Page Url" readonly/>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Description</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_meta_description" placeholder="Enter Page Meta Description" ></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Keywords <small>(Saparate by Comma (,)) Ex. facebook, youtube, whatsapp</small></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_keywords" placeholder="Enter Page Meta Keywords" ></textarea>
                        </div>
                     </div>
                  </div>

                <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Title</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="page_meta_title" placeholder="Enter Page Meta Title">
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Head Code </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_head_code" placeholder="Enter Page Head Code" ></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Heading<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="page_image_title" placeholder="Enter Page Heading" required>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Sub-Heading<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="page_image_description" placeholder="Enter Page sub-Heading" required>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Content</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="text-editor"  name="page_content" placeholder="Enter Page sub-Heading"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Image <span class="text-danger">*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="file" class="form-control"  name="page_image" placeholder="Enter Page sub-Heading" required>
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
  </div>
  <script>
document.getElementById("city_name").onkeyup = function() {myMethod()};
function myMethod() {

var cname = document.getElementById("city_name");
var slug = cname.value;
var base_url = window.location.origin;
var t = slug.replace(/\s+/g, '-').toLowerCase();
document.getElementById("city_slug").value = base_url+'/city/'+t;
}
  </script>
