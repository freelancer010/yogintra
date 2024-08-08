<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Edit Events</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="#">Event</a></li>
                  <li class="breadcrumb-item active">Edit Events</li>
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
           <h3 class="card-title">Edit Event</h3>
           <div class="card-tools">
              <a href="<?php echo base_url()?>/admin/event/view_all_event" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View All Event</a>
           </div>
        </div>
          <!-- /.card-header -->
        <div class="card-body">
           <div class="row">
              <div class="col-md-12">
                 <?php echo form_open_multipart(base_url().'admin/event/update_event/'.$event->id);?>
                    <div class="row">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label for="title">Category <span class="required">*</span></label>
                              <select type="text" class="form-control" name="category" placeholder="Enter Event Title" required>
                                 <option value="">Select A Category</option>
                                 <option <?php if($event->category == 'TTC'){echo 'selected';}?> value="TTC">TTC</option>
                                 <option <?php if($event->category == 'Retreat'){echo 'selected';}?> value="Retreat">Retreat</option>
                                 <option <?php if($event->category == 'Workshop'){echo 'selected';}?> value="Workshop">Workshop</option>
                              </select>
                           </div>
                        </div>
                       <div class="col-md-5">
                          <div class="form-group">
                             <label for="title">Title <span class="required">*</span></label>
                             <input type="text" class="form-control" id="title" name="title" placeholder="Enter Event Title" required value="<?php echo $event->title;?>">
                          </div>
                       </div>
                       <div class="col-md-4">
                          <div class="form-group">
                             <label for="link">Slug <span class="required">*</span></label>
                             <input type="text" class="form-control" id="link" name="link" placeholder="Enter Event Slug" required value="<?php echo $event->link;?>">
                          </div>
                       </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="keyword">Event Meta Keyword</label>
                               <textarea type="text" class="form-control" id="keyword" name="keyword" placeholder="Enter Event Keywords"><?php echo $event->keyword?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="description">Event Meta Description</label>
                               <textarea class="form-control" id="description" name="description" placeholder="Enter Event Meta Description"><?php echo $event->description?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="description">Event Short Description</label>
                               <textarea class="form-control" name="short_content" placeholder="Enter Event Short Description"><?php echo $event->short_content?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="description">Event Description</label>
                               <textarea class="text-editor" name="content" placeholder="Enter Event Description"><?php echo $event->content?></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                             <label for="title">Front Image </label>
                             <input type="file" class="form-control" name="image">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                             <label for="link">Event Date & Time <span class="required">*</span></label>
                             <input type="datetime-local" class="form-control" name="date_time" required value="<?php echo $event->date_time; ?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="link">Event End Date & Time <span class="required">*</span></label>
                              <input type="datetime-local" class="form-control" name="end_date_time" required value="<?php echo $event->end_date_time; ?>">
                           </div>
                         </div>
                        <div class="col-md-12">
                          <div class="form-group">
                             <img src="<?php echo base_url(); ?><?php echo $event->image?>" style="width: 140px;">
                          </div>
                        </div>
                       <div class="col-md-8">
                          <div class="form-group">
                             <label for="description">Host By</label>
                             <input class="form-control" name="event_host_by" placeholder="Enter Host By Name" value="<?php echo $event->event_host_by;?>">
                          </div>
                       </div>
                       <div class="col-md-4">
                          <div class="form-group">
                             <label for="description">Event Mode</label>
                             <select class="form-control" id="event_mode" name="event_mode">
                                <option>Select Mode</option>
                                <option <?php if($event->event_mode == 1){echo 'selected';}?> value="1">Free Event</option>
                                <option <?php if($event->event_mode == 2){echo 'selected';}?> value="2">Paid Event</option>
                             </select>
                          </div>
                       </div>
                       <div class="col-md-6 event_price">
                          <div class="form-group">
                             <label for="title">Enter Main Price<span class="required">*</span></label>
                             <input type="number" class="form-control" name="main_price" id="main_price" placeholder="Enter Event Main Price" value="<?php echo $event->main_price;?>">
                          </div>
                       </div>
                       <div class="col-md-6 event_price">
                          <div class="form-group">
                             <label for="title">Enter Discount Price <span class="required">*</span></label>
                             <input type="number" class="form-control" name="discount_price" id="discount_price" placeholder="Enter Event Discount Price" required value="<?php echo $event->discount_price; ?>">
                          </div>
                       </div>
                       <div class="col-md-3 ">
                           <div class="form-group">
                              <label for="title">Select Country <span class="required">*</span></label>
                              <select class="form-control countries" id="country" name="country" required>
                                   <option value="<?php echo $event->country; ?>"><?php echo $event->country; ?></option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 ">
                           <div class="form-group">
                              <label for="title">Select State <span class="required">*</span></label>
                              <select class="form-control states" id="state" name="state" required>
                                   <option value="<?php echo $event->state; ?>" ><?php echo $event->state; ?></option>
                               </select>
                           </div>
                        </div>
                        <div class="col-md-3 ">
                           <div class="form-group">
                              <label for="title">Select City <span class="required">*</span></label>
                              <select class="form-control cities" id="city" name="city" required>
                                   <option value="<?php echo $event->city; ?>" ><?php echo $event->city; ?></option>
                               </select>
                           </div>
                        </div>
                        <div class="col-md-3 ">
                           <div class="form-group">
                              <label for="title">Pin Code <span class="required">*</span></label>
                              <input class="form-control" name="pin_code" required placeholder="Enter Pin Code" value="<?php echo $event->pin_code; ?>">
                           </div>
                        </div>
                    </div>
                    <div class="form-group">
                       <label for="description">Event Location <span class="required">*</span></label>
                       <input class="form-control" name="event_location" placeholder="Enter Event Location" required value="<?php echo $event->event_location;?>">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                           <div class="table-responsive children">
                              <table id="input-table" class="table table-bordered">
                                 <tbody>
                                    <tr>
                                       <th width="15%">Checkbox</th>
                                       <th width="15%">Ticket</th>
                                       <th width="35%">Short Des.</th>
                                       <th width="10%">Price <span class="text-danger">*</span></th>
                                       <th width="10%">Capacity <span class="text-danger">*</span></th>
                                       <th width="10%">Default Qty. <span class="text-danger">*</span></th>
                                       <th width="10%">Reserve Qty. <span class="text-danger">*</span></th>
                                    </tr>

                                    <?php 
                                       
                                        $checked1 = ($event->Indian_stu_checkbox == '1') ? 'checked' : '';
                                    ?>

                                    <tr>
                                       <td><input type="checkbox"  class="form-control" <?php echo $checked1; ?> readonly="" value="checked" name="Indian_stu_checkbox"></td> 
                                       <td><input class="form-control" value="Indian Student" readonly="" name="ticket_indian"></td>
                                       <td><input class="form-control" name="ticket_short_des_indian" value="<?php echo $event->ticket_short_des_indian;?>"></td>
                                       <td><input class="form-control" required type="number" name="ticket_price_indian" value="<?php echo $event->ticket_price_indian;?>"></td>
                                       <td><input class="form-control" required type="number" name="ticket_capacity_indian" value="<?php echo $event->ticket_capacity_indian;?>"></td>
                                       <td><input class="form-control" required type="number" name="ticket_d_qnty_indian" value="<?php echo $event->ticket_d_qnty_indian;?>"></td>
                                       <td><input class="form-control" required type="number" name="ticket_r_qnty_indian" value="<?php echo $event->ticket_r_qnty_indian;?>"></td>
                                    </tr>
                                    <?php 
                                       
                                        $checked2 = ($event->Foreign_stu_checkbox == '1') ? 'checked' : '';
                                    ?>
                                    <tr>
                                       <td><input type="checkbox"  class="form-control" value="checked" <?php echo $checked2; ?> readonly="" name="Foreign_stu_checkbox"></td> 
                                       <td><input class="form-control" value="Foreigner Student" readonly="" name="ticket_foreigner"></td>
                                       <td><input class="form-control" name="ticket_short_des_foreigner" value="<?php echo $event->ticket_short_des_foreigner;?>"></td>
                                       <td><input class="form-control" required type="number" name="ticket_price_foreigner" value="<?php echo $event->ticket_price_foreigner;?>"></td>
                                       <td><input class="form-control" required type="number" name="ticket_capacity_foreigner" value="<?php echo $event->ticket_capacity_foreigner;?>"></td>
                                       <td><input class="form-control" required type="number" name="ticket_d_qnty_foreigner" value="<?php echo $event->ticket_d_qnty_foreigner;?>"></td>
                                       <td><input class="form-control" required type="number" name="ticket_r_qnty_foreigner" value="<?php echo $event->ticket_r_qnty_foreigner;?>"></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                           <label for="description">Extra Addon </label>
                           <div id="addon-container">
                                <!-- Initial addon fields -->
                                
                                 <?php if (count(json_decode($event->addon_name)) > 0): ?>
                                    <?php
                                    $counter = 0;
                                    foreach (json_decode($event->addon_name) as $key => $addon):?>
                                    <?php if ($counter == 0):
                                       $counter++; ?>
                                       <div class="addon-field">
                                          <div class="row">

                                          <div class="col-sm-2">
                                             <?php
                                              $checkbox_values = json_decode($event->Extra_addon_checkbox, true);
                                            
                                              $checked = isset($checkbox_values[$key]) && $checkbox_values[$key] === 'checked' ? 'checked' : '';
                                          
                                             ?>
                                                <input type="hidden" name="Extra_addon_checkbox[<?php echo $key; ?>]" value=""> <!-- Hidden input for unchecked value -->
                                                <input type="checkbox" class="form-control" value="checked" name="Extra_addon_checkbox[<?php echo $key; ?>]" <?php echo $checked ? 'checked' : ''; ?>>
                                             </div>

                                             <div class="col-sm-6">
                                                <input type="text" class="form-control"  name="addon_name[]" placeholder="Addon Name" value="<?php echo $addon; ?>">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control"  name="addon_price[]" placeholder="Addon Price" value="<?php echo json_decode($event->addon_price)[$key]; ?>">
                                             </div>
                                             <div class="col-sm-1">
                                                <button type="button" id="add-addon" class="btn btn-success btn-sm">+</button>
                                             </div>
                                          </div>
                                       </div>
                                    <?php else: ?>
                                       <div class="addon-field">
                                          <div class="row mt-3">

                                          <div class="col-sm-2">
                                             <?php
                                              $checkbox_values = json_decode($event->Extra_addon_checkbox, true);
                                         
                                              $checked = isset($checkbox_values[$key]) && $checkbox_values[$key] === 'checked' ? 'checked' : '';
                                          
                                             ?>
                                              <input type="hidden" name="Extra_addon_checkbox[<?php echo $key; ?>]" value=""> <!-- Hidden input for unchecked value -->
                                             <input type="checkbox" class="form-control" value="checked" name="Extra_addon_checkbox[<?php echo $key; ?>]" <?php echo $checked ? 'checked' : ''; ?>>
                                             </div>
                                             
                                             <div class="col-sm-6">
                                                <input type="text" class="form-control"  name="addon_name[]" placeholder="Addon Name" value="<?php echo $addon; ?>">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control"  name="addon_price[]" placeholder="Addon Price" value="<?php echo json_decode($event->addon_price)[$key]; ?>">
                                             </div>
                                             <div class="col-sm-1">
                                                <button type="button" class="remove-addon btn btn-danger btn-sm">X</button>
                                             </div>
                                          </div>
                                       </div>
                                       <?php endif; ?>
                                    <?php endforeach; ?>
                                 <?php else: ?>
                                    <div class="addon-field">
                                    <?php 
                                       $checked = (isset($_POST['Extra_addon_checkbox']) && in_array('checked', $_POST['Extra_addon_checkbox'])) ? 1 : 0;
                                       ?>
                                       <div class="row">
                                          <div class="col-sm-2">
                                             <input type="checkbox" class="form-control" value="checked" name="Extra_addon_checkbox[]" <?php echo ($checked == 1) ? 'checked' : ''; ?>>
                                          </div>

                                          <div class="col-sm-6">
                                             <input type="text" class="form-control"  name="addon_name[]" placeholder="Addon Name">
                                          </div>
                                          <div class="col-sm-5">
                                             <input type="text" class="form-control"  name="addon_price[]" placeholder="Addon Price">
                                          </div>
                                          <div class="col-sm-1">
                                             <button type="button" id="add-addon" class="btn btn-success btn-sm">+</button>
                                          </div>
                                       </div>
                                    </div>
                                 <?php endif; ?>
                          
                            </div>
                        </div>
                        
                    <div class="form-group">
                       <label for="description">Event Header Code</label>
                       <textarea class="form-control" name="head_code" placeholder="Enter Head Code"><?php echo $event->head_code?></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                 </form>
              </div>
           </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
    
  </div>
  <script>
  // Function to add a new addon field
  function addAddonField() {
      var container = document.getElementById("addon-container");
      var newAddonField = document.createElement("div");
      newAddonField.className = "addon-field";
      newAddonField.innerHTML = `<div class="row mt-3">
                             
                                    <div class="col-sm-2">
                                       <input type="checkbox" class="form-control" value="checked" name="Extra_addon_checkbox[]" <?php echo ($checked == 1) ? 'checked' : ''; ?>>
                                    </div>
                                    <div class="col-sm-6">
                                       <input type="text" class="form-control"  name="addon_name[]" placeholder="Addon Name">
                                    </div>
                                    <div class="col-sm-3">
                                       <input type="text" class="form-control"  name="addon_price[]" placeholder="Addon Price">
                                    </div>
                                    <div class="col-sm-1">
                                       <button type="button" class="remove-addon btn btn-danger btn-sm">X</button>
                                    </div>
                              </div>`;
      container.appendChild(newAddonField);
  }

  // Function to remove an addon field
  function removeAddonField(event) {
      var container = document.getElementById("addon-container");
      var field = event.target.closest(".addon-field");
      container.removeChild(field);
  }

  // Add event listeners
  document.getElementById("add-addon").addEventListener("click", addAddonField);
  document.addEventListener("click", function (event) {
      if (event.target.classList.contains("remove-addon")) {
          removeAddonField(event);
      }
  });
</script>
  <style type="text/css">
    <?php if($event->event_mode =='1'):?>
    .event_price
    {
      display: none;
    }
    <?php endif; ?>
    
  </style>
  <script>
    $(document).ready(function(){
      $('#event_mode').on('change', function() {
        if ( this.value == '2')
        //.....................^.......
        {
          $(".event_price").show();
          document.getElementById("main_price").required = true;
          document.getElementById("discount_price").required = true;
        }
        else
        {
          $(".event_price").hide();
          document.getElementById("main_price").required = false;
          document.getElementById("discount_price").required = false;
        }
      });
    });

    $(document).ready(function(){
      $('#event_type').on('change', function() {
        if ( this.value == '1')
        //.....................^.......
        {
          $(".location").show();
          document.getElementById("location").required = true;
        }
        else
        {
          $(".location").hide();
          document.getElementById("location").required = false;
        }
      });
    });
  $(function () {
     $("#title").keyup(function () {
          var Text = $(this).val();
          Text = Text.toLowerCase();
          Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
          $("#link").val(Text);
     }).keyup();
  });
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
        var url = rootUrl+'?type=getCities&countryId='+ '&stateId=' + id;
        var method = "post";
        var data = {};
        jQuery('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.cities').find("option:eq(0)").html("Select City");
                var listlen = Object.keys(data['result']).length;
                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {
                        // var option = jQuery('');
                        var option = `<option value='${val.name}'>${val.name}</option>`;

                        // option.attr('value', val.name).text(val.name);
                        jQuery('.cities').append(option);
                    });
                }
                jQuery(".cities").prop("disabled",false);
        });
    };

    this.getStates = function(id) {
        jQuery(".states option:gt(0)").remove();
        jQuery(".cities option:gt(0)").remove();
        var stateClasses = jQuery('#stateId').attr('class');

        
        var url = rootUrl+'?type=getStates&countryId=' + id;
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
                jQuery(".states").prop("disabled",false);
            
        });
    };

    this.getCountries = function() {
        var url = rootUrl+'?type=getCountries';
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
        if(countryId != ''){
            loc.getStates(countryId);
        }
        else{
            jQuery(".states option:gt(0)").remove();
        }
    });
    jQuery(".states").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities option:gt(0)").remove();
        }
    });
});
</script>