<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h4>Edit Service </h4>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Service</a></li>
                  <li class="breadcrumb-item active">Edit Service </li>
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
                <h3 class="card-title">Edit Service Data</h3>
              </div>
              <!-- /.card-header -->
              <?php echo form_open_multipart('admin/service/update_service/'.$service->service_id); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Name <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="text" name="service_name" class="form-control" placeholder="Enter  Service Name" required value="<?php echo $service->service_name; ?>">
                       </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Price <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="number" name="service_price" class="form-control" placeholder="Enter Service Price" required value="<?php echo $service->service_price; ?>">
                       </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Capacity <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="number" name="service_capacity" class="form-control" placeholder="Enter Service Capacity" required value="<?php echo $service->service_capacity; ?>">
                       </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Duration (Hrs) <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <input type="number" name="service_duration" class="form-control" placeholder="Enter Service Duration" required value="<?php echo $service->service_duration; ?>">
                       </div>
                    </div>
                  </div>


                 


                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Description</label>
                       <div class="col-sm-12">
                          <textarea name="service_description" class="text-editor" placeholder="Enter Service Duration" ><?php echo $service->service_description; ?></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Image </label>
                       <div class="col-sm-12">
                          <input type="file" name="service_image" class="form-control" placeholder="Enter Service Duration" >
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
                                <option <?php if($category->service_cat_id == $service->service_category){echo 'selected';}?> value="<?php echo $category->service_cat_id; ?>"><?php echo $category->service_cat_name; ?></option>
                             <?php endforeach; ?>
                          </select>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label"> Image <span class="required">*</span></label>
                       <div class="col-sm-12">
                          <img src="<?php echo base_url(); ?><?php echo $service->service_image; ?>" width="100px" alt="">
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
