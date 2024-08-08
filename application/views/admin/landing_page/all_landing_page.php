
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Landing Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Frontend Setting</a></li>
              <li class="breadcrumb-item active">All Landing Page</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">View All Landing Page</h3>
            <div class="card-tools">
              <a href="<?php echo base_url()?>/admin/Landing_page/add_landing_page" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Landing Page</a>
            </div>



          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Page Name</th>
                  <th>Page Slug</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($all_page as $page):?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><img src="<?php echo base_url(); ?><?php echo $page->page_image ?>" width="70px"></td>
                  <td><b><?php echo $page->page_name ?></td>
                  <td><a href="<?php echo base_url(); ?>city/<?php echo $page->page_slug ?>">Go To Page</a></td>
                  <td>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo base_url(); ?>/admin/Landing_page/edit_landing_page/<?php echo $page->page_id ?>"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                          <div class="dropdown-divider d-none"></div>
                          <a class="dropdown-item d-none" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>/admin/Landing_page/delete_landing_page/<?php echo $page->page_id ?>"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
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
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
