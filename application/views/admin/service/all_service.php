<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h4>All Service</h4>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Service</a></li>
                  <li class="breadcrumb-item active">All Service</li>
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
            <h3 class="card-title">View All Service</h3>
            <div class="card-tools">
              <a href="<?php echo base_url(); ?>admin/service/add_service" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Service</a>
            </div>
          </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Capacity</th>
                  <th>Duration (Hrs.)</th>
                  <th>Category</th>
                  <th>Descrption</th>
                  <th></th>
               </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($all_service as $service):?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><img src="<?php echo base_url(); ?><?php echo $service->service_image ?>" width="50px"></td>
                  <td><?php echo $service->service_name ?></td>
                  <td>Rs. <?php echo $service->service_price ?></td>
                  <td><?php echo $service->service_capacity ?></td>
                  <td><?php echo $service->service_duration ?></td>
                  <td><?php echo $service->service_cat_name ?></td>
                  <td><?php echo $service->service_description ?></td>
                  <td>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo base_url(); ?>admin/service/edit_service/<?php echo $service->service_id ?>"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>admin/service/delete_service/<?php echo $service->service_id ?>"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
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
      <?php echo form_open_multipart(base_url().'admin/service/add_new_service');?>
      <div class="modal-body">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="recipient-name" name="service_cat_name" required placeholder="Enter Category Name">
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