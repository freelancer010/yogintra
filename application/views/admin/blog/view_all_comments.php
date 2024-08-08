
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Blog Comments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active">All Blog Comments</li>

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
            <h3 class="card-title">View All Comments</h3>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Comment</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Post Title</th>
                  <th>Status</th>
                  <th>IP</th>
                  <th>Date</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($get_all_comment as $key => $comment):?>
                   <?php $post = $this->blog_model->get_all_blog_by_id($comment->post_id); ?>
                  <tr>
                     <td><?php echo $comment->comment ?></td>
                     <td><?php echo $comment->name ?></td>
                     <td><?php echo $comment->email ?></td>
                     <td><?php echo $post->blog_title ?></td>
                     <td><?php if($comment->status == 1){echo '<span class="badge badge-success">Active</span>';}else{ echo '<span class="badge badge-danger">Pending</span>';} ?></td>
                     <td><?php echo $comment->ip ?></td>
                     <td><?php echo $comment->date ?></td>
                     <td> <div class="input-group-prepend">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu" style="">
                             <?php if($comment->status == 0): ?>
                              <a class="dropdown-item" href="<?php echo base_url(); ?>admin/blog/approve_comment/<?php echo $comment->id ?>"><i class="fa fa-edit" aria-hidden="true"></i>
                                &nbsp;Active</a>
                              <?php else: ?>
                              <a class="dropdown-item" href="<?php echo base_url(); ?>admin/blog/disapprove_comment/<?php echo $comment->id ?>"><i class="fa fa-edit" aria-hidden="true"></i>
                                &nbsp;Deactive</a>
                             <?php endif; ?>
                          
                           <div class="dropdown-divider"></div>
                            <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>admin/blog/delete_blog_comment/<?php echo $comment->id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
                             &nbsp;Delete</a>
                          </div>
                       </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
         </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
