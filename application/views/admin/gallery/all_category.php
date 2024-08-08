<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Gallery Category</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Gallery</a></li>
            <li class="breadcrumb-item active">Gallery Category</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">View All Category</h3>
          <div class="card-tools">
            <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Gallery</a>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;
              foreach ($all_category as $category) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $category->g_cat_name ?></td>
                  <td>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal_<?php echo $category->g_cat_id ?>"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>admin/gallery/delete_category/<?php echo $category->g_cat_id ?>"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
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

<?php foreach ($all_category as $category) : ?>
  <div class="modal fade" id="exampleModal_<?php echo $category->g_cat_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Categoy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo
      form_open('admin/gallery/update_category/'.$category->g_cat_id);
      ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Category Name <span class="text-danger">*</span></label>
          <input value="<?php echo $category->g_cat_name; ?>" type="text" class="form-control" required placeholder="Enter Category Name" name="g_cat_name">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      <?php echo
      form_close();
      ?>
    </div>
  </div>
</div>

<?php endforeach; ?>   

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Categoy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo
      form_open('admin/gallery/add_category');
      ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Category Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" required placeholder="Enter Category Name" name="g_cat_name">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      <?php echo
      form_close();
      ?>
    </div>
  </div>
</div>
