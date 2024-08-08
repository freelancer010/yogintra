 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Events</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Event</a></li>
              <li class="breadcrumb-item active">All Events</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-sm-12">
            <div class="card card-default">
              <div class="card-header">
               <h3 class="card-title">View All Events</h3>
                <div class="card-tools">
                  <a href="<?php echo base_url()?>/admin/event/add_new_event" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add New Event</a>
                </div>
              </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>id</th>
                      <th>Title</th>
                      <th>Slug</th>
                      <th>Date & Time</th>
                      <th>On/Off</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; foreach ($get_all_event as $key => $event):?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $event->title ?></td>
                      <td><a href="<?php echo base_url() ?>event/<?php echo $event->link ?>">Go to Event</a></td>
                      <td>
                        <?php echo date('d-m-Y h:i A', strtotime($event->date_time)); ?> 
                      </td>
                      <td >
                        <a href="<?php echo base_url() ?>admin/event/event_status/<?php echo $event->id ?>/<?php echo ($event->status === 'On') ? 'Off' : 'On'; ?>" class="btn btn-sm <?php echo ($event->status === 'On') ? 'btn-success' : 'btn-danger'; ?>"><span style="color:white"><?php echo $event->status; ?></span></a>
                    
                      </td>
                      <td>
                        <a href="<?php echo base_url() ?>admin/event/edit_event/<?php echo $event->id ?>" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/event/delete_event/<?php echo $event->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>


