
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Blogs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active">All Blogs</li>

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
            <h3 class="card-title">View All Blogs</h3>
            <div class="card-tools">
              <a href="<?php echo base_url()?>/admin/blog/add_new_post" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add New Blog</a>
            </div>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Blog Title</th>
                    <th>Keywords</th>
                    <th>Category</th>
                    <th>View</th>
                    <th></th>
                 </tr>
                </thead>
                <tbody>
                <?php foreach ($get_all_blog as $key => $post):?>
                <?php $category = $this->blog_model->get_category_by_id($post->blog_category); ?>
                <tr>
                  <td><img src="<?php echo base_url() ?><?php echo $post->blog_image ?>" width="100px" alt="image"></td>
                  <td>
                    <?php echo $post->blog_title ?>
                    <?php if($post->blog_author): ?>
                      <br/>
                      <b>Auth :</b> <?php echo $post->blog_author; ?>
                    <?php endif; ?>
                  </td>
                  <td><?php echo $post->blog_meta_keywords ?></td>
                  <td><?php echo $category->category_name ?></td>
                  <td><?php echo $post->blog_view ?></td>
                  <td> 
                     <div class="input-group-prepend">
                       <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                         Action
                       </button>
                       <div class="dropdown-menu" style="">
                           <a class="dropdown-item" href="<?php echo base_url(); ?>admin/blog/edit_blog_post/<?php echo $post->blog_id  ?>"><i class="fa fa-edit" aria-hidden="true"></i>
                             &nbsp;Edit</a>
                       
                        <div class="dropdown-divider"></div>
                         <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>admin/blog/delete_blog_post/<?php echo $post->blog_id  ?>"><i class="fa fa-trash" aria-hidden="true"></i>
                          &nbsp;Delete</a>
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