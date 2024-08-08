
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Section 2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Front Setting</a></li>
              <li class="breadcrumb-item active">Section 2</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Head Section</h3>
              </div>
              <!-- /.card-header -->
               <?php echo form_open_multipart(base_url().'admin/front_setting/update_our_service_image_section');?>
              <div class="card-body">
                <div class="row">

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12"> Heading<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="os_image_heading" placeholder="Enter Heading" required value="<?php echo $service_heading->os_image_heading; ?>">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12"> Sub-Heading<span>*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="os_image_sub_heading" placeholder="Enter Sub-Heading" required value="<?php echo $service_heading->os_image_sub_heading; ?>">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12"> Description<span>*</span> <small>(If You Want to Break Paragraph. Please Add <b>&lt;/br&gt;</b>)</small></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="os_image_description" placeholder="Enter Description" required ><?php echo $service_heading->os_image_description; ?></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Image </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="file" class="form-control"  name="os_image_image" placeholder="Enter Sub-Heading">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Image Preview</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <img src="<?php echo base_url() ?><?php echo $service_heading->os_image_image ?>" width="100px">
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

    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">View All Content</h3>
            <div class="card-tools">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#imageModal" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Content</a>
            </div>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Heading</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($all_service as $service):?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><img src="<?php echo base_url(); ?><?php echo $service->os_image ?>" width="70px"></td>
                  <td><?php echo $service->os_heading ?></td>
                  <td>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo base_url(); ?>/admin/front_setting/edit_our_service/<?php echo $service->os_id ?>"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>/admin/front_setting/delete_our_service/<?php echo $service->os_id ?>"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
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

<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart(base_url().'admin/front_setting/add_new_service');?>
        <div class="modal-body">
          <div class="form-group">
            <label class="col-form-label">Heading <span>*</span></label>
            <input type="text" class="form-control" placeholder="Enter Heading" name="os_heading" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Image <span>*</span></label>
            <input class="form-control" name="os_image" type="file" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>