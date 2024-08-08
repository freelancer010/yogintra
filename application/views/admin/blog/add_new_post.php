 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active">Add Blog</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add New Blog</h3>
                <div class="card-tools">
                  <a href="<?php echo base_url()?>admin/blog/view_all_post" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View All Blog</a>
                </div>
              </div>
              <!-- /.card-header -->
              <?php echo form_open_multipart('admin/blog/add_new_blog_post'); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Title <span style="color: red;">*</span> <span style="font-size: 13px;">  (Title should be kept between 130-150 characters for good result)</span></label>
                       <div class="col-sm-12">
                          <input type="text" name="blog_title" class="form-control" id="title"  placeholder="Enter Post Title" required="required">
                       </div>
                       <div class="col-sm-12">
                         Characters Leanth : <span id="title-characters"></span>&nbsp;<span id="title-characterss"></span>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Author Name </label>
                       <div class="col-sm-12">
                          <input type="text" name="blog_author" class="form-control" placeholder="Enter Blog Author" >
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Short Description</label>
                       <div class="col-sm-12">
                          <textarea type="text" class="form-control" placeholder="Enter Blog Short Description" name="blog_short_description"></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Meta Keywords</label>
                       <div class="col-sm-12">
                          <textarea type="text" class="form-control" placeholder="Enter Blog Meta keywords" name="blog_meta_keywords" ></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Meta Description <span style="font-size: 13px;">  (Description should be kept between 155-160 characters for good result)</span></label>
                       <div class="col-sm-12">
                          <textarea type="text" class="form-control" id="textarea" placeholder="Enter Post Meta Description" name="blog_meta_description" ></textarea>
                       </div>
                       <div class="col-sm-12">
                         Characters Leanth : <span id="characters"></span>&nbsp;<span id="characterss"></span>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Content</label>
                       <div class="col-sm-12">
                          <textarea type="text" class="form-control text-editor" placeholder="Enter Post keywords" name="blog_content" ></textarea>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Select Category</label>
                       <div class="col-sm-12">
                          <select name="blog_category" class="form-control" required="required">
                            <option value="">Select Category</option>
                            <?php foreach ($get_all_blog_category as $key => $category):?>
                            <option value="<?php echo $category->id ?>"><?php echo $category->category_name ?></option>
                            <?php endforeach; ?>
                          </select>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Blog Image <span style="color:red">*</span> (Image size 690 X 460 px)</label>
                       <div class="col-sm-12">
                           <input type="file" name="blog_image" class="form-control" id="inputName"  required="required">
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                       <button name="form1" style="float: right" type="submit" class="btn btn-success">Add</button>
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
  </div>
<script type="text/javascript">
$('#textarea').keyup(updateCount_textarea);
 $('#textarea').keydown(updateCount_textarea);

 function updateCount_textarea() {
     var cs = $(this).val().length;
     $('#characters').text(cs);

     if(cs >= 161)
     {
       document.getElementById("textarea").style.borderColor= "red";
        $('#characterss').text("(Alart)");
       document.getElementById("characterss").style.color= "red";
     }
     else if(cs >= 71 && cs <= 160)
     {
       document.getElementById("textarea").style.borderColor= "green";
       $('#characterss').text("(Good)");
       document.getElementById("characterss").style.color= "green";
     }
     else
     {
       document.getElementById("textarea").style.borderColor= "#b48a0a";
       $('#characterss').text("(Poor)");
       document.getElementById("characterss").style.color= "#b48a0a";
     }
 }

   $('#title').keyup(updateCount);
   $('#title').keydown(updateCount);

   function updateCount() {
       var cs = $(this).val().length;
       $('#title-characters').text(cs);

       if(cs >= 151)
       {
         document.getElementById("title").style.borderColor= "red";
          $('#title-characterss').text("(Alart)");
         document.getElementById("title-characterss").style.color= "red";
       }
       else if(cs >= 71 && cs <= 150)
       {
         document.getElementById("title").style.borderColor= "green";
         $('#title-characterss').text("(Good)");
         document.getElementById("title-characterss").style.color= "green";
       }
       else
       {
         document.getElementById("title").style.borderColor= "#b48a0a";
         $('#title-characterss').text("(Poor)");
         document.getElementById("title-characterss").style.color= "#b48a0a";
       }
   }
</script>