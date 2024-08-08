<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h4>Edit Yoga Center </h4>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Yoga Center</a></li>
                  <li class="breadcrumb-item active">Edit Yoga Center </li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <section class="content">
      <div class="container-fluid">

         <div class="row">
            <div class="col-sm-12">
               <div class="card card-default">
                  <div class="card-header">
                     <h3 class="card-title">Edit Yoga Center</h3>
                  </div>
                  <!-- /.card-header -->
                  <?php echo form_open_multipart('admin/yoga_center/update_new_center/'.$center->center_id); ?>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="inputEmail" class="col-sm-12 col-form-label"> Name <span class="required">*</span></label>
                              <div class="col-sm-12">
                                 <input value="<?php echo $center->center_name; ?>" type="text" name="center_name" class="form-control" placeholder="Enter Center Name" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 ">
                           <div class="form-group">
                              <label for="title">Select Country <span class="required">*</span></label>
                              <select class="form-control countries" id="country" name="center_country" required>
                                 <option value="<?php echo $center->center_country; ?>"><?php echo $center->center_country; ?></option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 ">
                           <div class="form-group">
                              <label for="title">Select State <span class="required">*</span></label>
                              <select class="form-control states" id="state" name="center_state" required>
                                 <option value="<?php echo $center->center_state; ?>"><?php echo $center->center_state; ?></option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 ">
                           <div class="form-group">
                              <label for="title">Select City <span class="required">*</span></label>
                              <select class="form-control cities" id="city" name="center_city" required>
                                 <option value="<?php echo $center->center_city; ?>"><?php echo $center->center_city; ?></option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 ">
                           <div class="form-group">
                              <label for="title">Address <span class="required">*</span></label>
                              <input value="<?php echo $center->center_address; ?>" class="form-control cities" id="city" name="center_address" required placeholder="Enter Address">
                                 
                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="item form-group">
                              <label class="col-md-12 col-sm-12 col-xs-12">Add Map Link <small>(Add Map Link into iframe tag)</small></label>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                 <textarea type="text" class="form-control"  name="map_link" placeholder="Enter Map Link" ><?php echo $center->map_link; ?></textarea>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Title</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  value="<?php echo $center->page_title; ?>" name="page_title" placeholder="Enter Page Title">
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Title</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $center->page_meta_title; ?>"  name="page_meta_title" placeholder="Enter Page Meta Title">
                        </div>
                     </div>
                  </div>

                  
          
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Slug</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $center->page_Slug; ?>" name="page_Slug" placeholder="Enter Page Slug">
                        </div>
                     </div>
                  </div>

       
                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Keywords <small>(Saparate by Comma (,)) Ex. facebook, youtube, whatsapp</small></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_keywords" placeholder="Enter Page Meta Keywords" ><?php echo $center->page_keywords; ?></textarea>
                        </div>
                     </div>
                  </div>


                  <div class="col-md-12">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Page Meta Description</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea type="text" class="form-control"  name="page_meta_description" placeholder="Enter Page Meta Description" ><?php echo $center->page_meta_description; ?></textarea>
                        </div>
                     </div>
                  </div>


                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Mobile Number</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="mobile_number" placeholder="Enter Mobile Number" value="<?php echo $center->mobile_number; ?>">
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Email Address</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="text" class="form-control"  name="email_address" placeholder="Enter Page Email Address" value="<?php echo $center->email_address; ?>">
                        </div>
                     </div>
                  </div>


                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="inputEmail" class="col-sm-12 col-form-label"> Description</label>
                              <div class="col-sm-12">
                                 <textarea name="center_description" class="text-editor" placeholder="Enter Service Duration"><?php echo $center->center_description; ?></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="inputEmail" class="col-sm-12 col-form-label"> Center Image </label>
                              <div class="col-sm-12">
                                 <input type="file" name="center_image" class="form-control" placeholder="Enter Service Duration">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 d-none">
                           <div class="form-group">
                              <label for="inputEmail" class="col-sm-12 col-form-label"> Schedule PDF </label>
                              <div class="col-sm-12">
                                 <input type="file" name="center_sec_pdf" class="form-control" placeholder="Enter Service Duration">
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
</div>
<script>
   function ajaxCall() {
      this.send = function(data, url, method, success, type) {
         type = 'json';
         var successRes = function(data) {
            success(data);
         }
         var errorRes = function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
         }
         jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
         });
      }
   }

   function locationInfo() {
      var rootUrl = "https://geodata.phplift.net/api/index.php";
      var call = new ajaxCall();
      this.getCities = function(id) {
         jQuery(".cities option:gt(0)").remove();
         var url = rootUrl + '?type=getCities&countryId=' + '&stateId=' + id;
         var method = "post";
         var data = {};
         jQuery('.cities').find("option:eq(0)").html("Please wait..");
         call.send(data, url, method, function(data) {
            jQuery('.cities').find("option:eq(0)").html("Select City");
            var listlen = Object.keys(data['result']).length;
            if (listlen > 0) {
               jQuery.each(data['result'], function(key, val) {
                  // var option = jQuery('');
                  var option = `<option value='${val.name}'>${val.name}</option>`;

                  // option.attr('value', val.name).text(val.name);
                  jQuery('.cities').append(option);
               });
            }
            jQuery(".cities").prop("disabled", false);
         });
      };

      this.getStates = function(id) {
         jQuery(".states option:gt(0)").remove();
         jQuery(".cities option:gt(0)").remove();
         var stateClasses = jQuery('#stateId').attr('class');


         var url = rootUrl + '?type=getStates&countryId=' + id;
         var method = "post";
         var data = {};
         jQuery('.states').find("option:eq(0)").html("Please wait..");
         call.send(data, url, method, function(data) {
            jQuery('.states').find("option:eq(0)").html("Select State");

            jQuery.each(data['result'], function(key, val) {
               // var option = jQuery('');
               var option = `<option value='${val.name}' stateid='${val.id}'>${val.name}</option>`;
               // option.attr('value', val.name).text(val.name);
               // option.attr('stateid', val.id);
               jQuery('.states').append(option);
            });
            jQuery(".states").prop("disabled", false);

         });
      };

      this.getCountries = function() {
         var url = rootUrl + '?type=getCountries';
         var method = "post";
         var data = {};
         jQuery('.countries').find("option:eq(0)").html("Please wait..");
         call.send(data, url, method, function(data) {
            jQuery('.countries').find("option:eq(0)").html("Select Country");
            jQuery.each(data['result'], function(key, val) {
               var option = `<option value='${val.name}' countryid='${val.id}'>${val.name}</option>`;
               // option.attr('value', val.name).text(val.name);
               // option.attr('countryid', val.id);
               jQuery('.countries').append(option);
            });
            // jQuery(".countries").prop("disabled",false);

         });
      };

   }

   jQuery(function() {
      var loc = new locationInfo();
      loc.getCountries();
      jQuery(".countries").on("change", function(ev) {
         var countryId = jQuery("option:selected", this).attr('countryid');
         if (countryId != '') {
            loc.getStates(countryId);
         } else {
            jQuery(".states option:gt(0)").remove();
         }
      });
      jQuery(".states").on("change", function(ev) {
         var stateId = jQuery("option:selected", this).attr('stateid');
         if (stateId != '') {
            loc.getCities(stateId);
         } else {
            jQuery(".cities option:gt(0)").remove();
         }
      });
   });
</script>