<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h4><?php echo htmlspecialchars($title) ?></h4>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active"><?php echo htmlspecialchars($title) ?></li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>

   <?php
    $errors = $this->session->userdata('errors');
    if (isset($errors)) {
        ?>
        <script>
            swal ( "Oops" ,  "<?php echo $errors ?>" ,  "error" )
        </script>
        <?php echo $errors ?>
        <?php
        $this->session->unset_userdata('errors');
    }
    $error = $this->session->userdata('error');
    if (isset($error)) {
        ?>
         <script>
            swal ( "Oops" ,  "<?php echo $error ?>" ,  "error" )
        </script>
        <?php
        $this->session->unset_userdata('error');
    }
    $success = $this->session->userdata('success');
    if (isset($success)) {
        ?>
         <script>
            swal({
          title: "Done!",
          text: "<?php echo $success ?>",
          icon: "success",
        });
        </script>
        <?php
        $this->session->unset_userdata('success');
    }
    ?>
   <section class="content">
      <div class="container">
         <div class="row"> 
            <div class="col-md-12 col-lg-12">
               <div class="container-fluid">
                  <?php echo form_open_multipart('admin/blog/add_widget'); ?>
                  <div class="card card-default">
                     <div class="card-header">
                     <h3 class="card-title">Add Widget</h3>
                  </div>
                     <div class="card-body">

                        <div class="tab-content">

                           <!--Application Details-->
                           <div class="tab-pane active" id="general_setting">
                              <div class="form-group row">
                                 <label for="inputName" class="col-sm-12 col-form-label">Add Title</label>
                                 <div class="col-sm-12">
                                    <input type="text" name="title" class="form-control" id="inputName" placeholder="Enter Widget Title" required="required">
                                 </div>
                              </div>
                              
                              <div class="form-group row">
                                 <label for="inputEmail" class="col-sm-12 col-form-label">Content</label>
                                 <div class="col-sm-12">
                                    <textarea type="text" class="form-control ckeditor" placeholder="Enter Widget Content" name="content" required="required"></textarea>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputName" class="col-sm-12 col-form-label">Showing Order</label>
                                 <div class="col-sm-12">
                                    <input type="number" name="widget_order" class="form-control" id="inputName" placeholder="Enter Order" required="required" min="1">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="offset-sm-2 col-sm-10">
                                    <button style="float: right;" type="submit" class="btn btn-success setting-submit" name="submit">Save</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <?php echo form_close(); ?>
                  </div>
               </div>
            </div>
           </div>
            <div class="col-md-12 col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">All Widget List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table width="100%" id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Title</th>
                              <th>Order</th>
                              <th></th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($get_all_widget as $key => $widget):?>
                           <tr>
                              <td><?php echo $widget->title ?></td>
                              <td><?php echo $widget->widget_order ?></td>
                              <td><button class="btn btn-primary" data-toggle="modal" data-target="#modal-info<?php echo $widget->id ?>">Update</button></td>
                              <td>
                                <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>admin/blog/delete_widget/<?php echo $widget->id ?>"><button class="btn btn-danger">Delete</button></a>
                              </td>
                           </tr>
                             <div class="modal fade" id="modal-info<?php echo $widget->id ?>">
                             <div class="modal-dialog">
                               <div class="modal-content bg-info">
                                 <div class="modal-header">
                                   <h4 class="modal-title">Update Widget</h4>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span></button>
                                 </div>
                                 <?php echo form_open_multipart('admin/blog/update_widget'); ?>
                                 <div class="modal-body">
                                   <div class="form-group row">
                                      <label for="inputName" class="col-sm-12 col-form-label">Title</label>
                                      <div class="col-sm-12">
                                         <input type="text" name="title" class="form-control" id="inputName" placeholder="Enter Widget Title" required="required" value="<?php echo $widget->title;?>">
                                      </div>
                                   </div>
                                   <input type="hidden" name="widget_id" value="<?php echo $widget->id ?>">
                                   <div class="form-group row">
                                      <label for="inputName" class="col-sm-12 col-form-label">Slider Title</label>
                                      <div class="col-sm-12">
                                         <textarea type="text" name="content" class="text-editor" id="inputName" placeholder="Enter Slider Title" required="required"><?php echo $widget->content;?></textarea>
                                      </div>
                                   </div>
                                   <div class="form-group row">
                                      <label for="inputName" class="col-sm-12 col-form-label">Order</label>
                                      <div class="col-sm-12">
                                         <input type="text" name="widget_order" class="form-control" id="inputName" placeholder="Enter Widget Title" required="required" value="<?php echo $widget->widget_order;?>">
                                      </div>
                                   </div>
                                   
                                 <div class="modal-footer justify-content-between">
                                   <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                   <button type="submit" class="btn btn-outline-light">Save changes</button>
                                 </div>
                               </div>
                               <?php echo form_close() ?>
                               <!-- /.modal-content -->
                             </div>
                             <!-- /.modal-dialog -->
                           </div>
                        <?php endforeach; ?>
                        </tbody>
                     </table>
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </div>
         </div>
      </div>
   </div>
   
</section>
</div>
<!-- /.content-wrapper -->

