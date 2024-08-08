 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Front Setting</a></li>
              <li class="breadcrumb-item active">All Slider</li>

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
            <h3 class="card-title">View All Slider</h3>

            <div class="card-tools">
              <a href="<?php echo base_url()?>/admin/front_setting/add_new_slider" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Slider</a>
            </div>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Background Image</th>
                  <th>Details</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($all_slider as $key => $slider):?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><img src="<?php echo base_url(); ?><?php echo $slider->slider_image ?>" width="50px;"></td>
                  <td>
                    H. : <b><?php echo $slider->slider_heading ?></b><br/>
                    S.H. : <b><?php echo $slider->slider_sub_heading  ?></b><br/>
                    B. Name : <b><?php echo $slider->slider_btn_name ?></b><br/>
                    B. Link : <b><?php echo $slider->slider_btn_link ?></b><br/>
                  </td>

                  <td class="text-right py-0 align-middle">

                      <div class=" btn-group-sm">

                        <a href="<?php echo base_url(); ?>/admin/front_setting/edit_slider/<?php echo $slider->slider_id  ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>

                        <a onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>/admin/front_setting/delete_slider/<?php echo $slider->slider_id  ?>" class="btn btn-danger mt-3"><i class="fas fa-trash"></i></a>

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
