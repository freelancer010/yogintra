<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h4>Add Service </h4>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Service</a></li>
                  <li class="breadcrumb-item active">Add Service </li>
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
                <h3 class="card-title">Add Service Data</h3>
              </div>
              <!-- /.card-header -->
              <?php echo form_open_multipart('admin/service/add_new_service'); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Name <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="text" name="service_name" class="form-control" placeholder="Enter  Service Name" required >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Price <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="number" name="service_price" class="form-control" placeholder="Enter Service Price" required >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Capacity <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="number" name="service_capacity" class="form-control" placeholder="Enter Service Capacity" required >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Duration (Hrs) <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="number" name="service_duration" class="form-control" placeholder="Enter Service Duration" required >
                       </div>
                    </div>
                  </div>


                  


 


                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Description</label>
                       <div class="col-sm-12">
                          <textarea name="service_description" class="text-editor" placeholder="Enter Service Duration" ></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Image <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="file" name="service_image" class="form-control" placeholder="Enter Service Duration" required >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Category <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <select type="file" name="service_category" class="form-control" placeholder="Enter Service Duration" required >
                             <option value="">Select A Category</option>
                             <?php foreach ($all_category as $key => $category):?>
                                <option value="<?php echo $category->service_cat_id; ?>"><?php echo $category->service_cat_name; ?></option>
                             <?php endforeach; ?>
                          </select>
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
