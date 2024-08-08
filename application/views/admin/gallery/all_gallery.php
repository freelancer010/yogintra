<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>All Gallery</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                        <li class="breadcrumb-item active">All Gallery</li>
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
                    <h3 class="card-title">View All Gallery</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Gallery</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image / Video</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($all_data as $data) : ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <?php if($data->gallery_is_video_or_image == 1): ?>
                                            <img src="<?php echo base_url(); ?><?php echo $data->gallery_image; ?>" width="70px">
                                        <?php else: ?>
                                            <?php echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"70\" height=\"40\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$data->gallery_video);?>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $data->g_cat_name ?></td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="<?php echo base_url(); ?>admin/gallery/edit_gallery/<?php echo $data->gallery_id; ?>"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>admin/gallery/delete_gallery/<?php echo $data->gallery_id ?>"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add New Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo
            form_open_multipart('admin/gallery/add_gallery');
            ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Select A Mode<span class="text-danger">*</span></label>
                    <select onchange="get_mode(this.value)" class="form-control" placeholder="Enter Category Name" name="gallery_is_video_or_image" required>
                        <option value="">Select</option>
                        <option value="1">Image</option>
                        <option value="2">Video</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Select A Category<span class="text-danger">*</span></label>
                    <select class="form-control" placeholder="Enter Category Name" name="gallery_category" required>
                        <option value="">Select</option>
                        <?php foreach ($all_category as $key => $category) : ?>
                            <option value="<?php echo $category->g_cat_id; ?>"><?php echo $category->g_cat_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group" id="image_section">
                    <label for="recipient-name" class="col-form-label">Upload Image <span class="text-danger">*</span></label>
                    <input id="image_filed" type="file" class="form-control" placeholder="Enter Category Name" name="gallery_image">
                </div>
                <div class="form-group" id="video_section">
                    <label for="recipient-name" class="col-form-label">Youtube Url <span class="text-danger">*</span></label>
                    <input id="image_video" type="text" class="form-control" required placeholder="Enter Youtube Url" name="gallery_video">
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
<script>
    function get_mode(e)
    {
        if(e == 1)
        {
            $('#image_section').show();
            $('#image_filed').attr('required', true);

            $('#video_section').hide();
            $('#image_video').attr('required', false);
        }
        else
        {
            $('#image_section').hide();
            $('#image_filed').attr('required', false);

            $('#video_section').show();
            $('#image_video').attr('required', true);
        }
    }
</script>
<style>
    #image_section, #image_section
    {
        display: none;
    }
</style>