<!-- Meta Tags -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $event->description; ?>" />
<meta property="og:title" content="<?php echo $event->title; ?>" />
<meta property="og:description" content="<?php echo $event->description; ?>" />

<meta name="keywords" content="<?php echo $event->keyword; ?>" />
<meta name="author" content="YogIntra" />
<link rel="icon" href="<?php echo $event->image; ?>" type="image/png" />
	
<!-- Page Title -->
<title><?php echo $event->title; ?></title>
</head>
<body>
  <?php include('include/navbar.php'); ?>

<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: url("<?php echo front_css(); ?>images/bg/bg6.jpg"); background-position: 50% 45px;height: 300px;'>
    <div class="container pt-60 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title text-white"><?php echo mb_strimwidth($event->title, 0, 30, "..."); ?></h2>
            <ol class="breadcrumb text-center  mt-10">
              <li><a href="<?php echo base_url(); ?>" class="text-white">Home</a></li>
              <li><a href="#" class="text-white"><?php echo $event->category; ?></a></li>
              <li class="active text-gray"><?php echo mb_strimwidth($event->title, 0, 30, "..."); ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-theme-colored">
    <div class="container pt-40 pb-40">
      <div class="row text-center">
        <div class="col-md-12">
          <h2 id="basic-coupon-clock" class="text-white"></h2>
          <!-- Final Countdown Timer Script -->
          <script type="text/javascript">
            $(document).ready(function() {
              $('#basic-coupon-clock').countdown('<?php echo date('Y/m/d h:i A', strtotime($event->date_time)); ?>', function(event) {
                $(this).html(event.strftime('%D days %H:%M:%S'));
              });
            });
          </script>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <ul>
            <li>
              <div class="bg-light media border-bottom p-15 mb-20">
                <div class="media-left">
                  <i class="pe-7s-pen text-theme-colored font-24 mt-5"></i>
                </div>
                <div class="media-body">
                  <h5 class="mt-0 mb-0">Topics:</h5>
                  <p><?php echo $event->title; ?></p>
                </div>
              </div>
            </li>
            <li>
              <div class="bg-light media border-bottom p-15 mb-20">
                <div class="media-left">
                  <i class="pe-7s-users text-theme-colored font-24 mt-5"></i>
                </div>
                <div class="media-body">
                  <h5 class="mt-0 mb-0">Host:</h5>
                  <p><?php echo $event->event_host_by; ?></p>
                </div>
              </div>
            </li>
            <li>
              <div class="bg-light media border-bottom p-15 mb-20">
                <div class="media-left">
                  <i class="pe-7s-home text-theme-colored font-24 mt-5"></i>
                </div>
                <div class="media-body">
                  <h5 class="mt-0 mb-0">Location:</h5>
                  <p><?php echo $event->event_location; ?>, <?php echo $event->city; ?>, <?php echo $event->state; ?>, <?php echo $event->country; ?> - <?php echo $event->pin_code; ?></p>
                </div>
              </div>
            </li>
            <li>
              <div class="bg-light media border-bottom p-15 mb-20">
                <div class="media-left">
                  <i class="pe-7s-date text-theme-colored font-24 mt-5"></i>
                </div>
                <div class="media-body">
                  <h5 class="mt-0 mb-0">Event Date:</h5>
                  <p><?php echo date('M d, Y h:i A', strtotime($event->date_time)); ?> to <?php echo date('M d, Y h:i A', strtotime($event->end_date_time)); ?></p>
                </div>
              </div>
            </li>
            <li>
              <h5>Share:</h5>
              <div class="styled-icons icon-sm icon-gray icon-circled">
                          <a href="https://www.facebook.com/yogintra"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/yogintra"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/yogintra"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/yogintra/"><i class="fa fa-linkedin"></i></a>

                     
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <img src="<?php echo base_url(); ?><?php echo $event->image; ?>" alt="<?php echo $event->title; ?>" width="100%">
        </div>
      </div>
      <div class="row mt-60">
        <div class="col-md-4 ">
          <div class="form_booking">
            <form id="booking-form" name="booking-form" action="#" method="post" enctype="multipart/form-data">
              <h3 class="title text-theme-colored text-center">Registration Form</h3>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Name" name="register_name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Email" name="register_email" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Phone" name="register_phone" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                         <select type="text" id="reg_ticket" onchange="get_price(this.value)" placeholder="Enter Phone" name="register_ticket" class="form-control" required="">
                      <option value="">Select Ticket</option>
                      <?php if($event->Indian_stu_checkbox=='1'):?>
                      <option value="1">Indian Student</option>
                      <?php endif ?>
                      <?php if($event->Foreign_stu_checkbox=='1'):?>
                      <option value="2">Foreigner Student</option>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="country">Select Country:</label>
                    <select class="form-control countries" id="country" name="register_country" required>
                      <option value="">Select A Country</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="state">Select State:</label>
                    <select class="form-control states" id="state" name="register_state" required>
                      <option value="">Select your Country First</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="city">Select City:</label>
                    <select class="form-control cities" id="city" name="register_city" required>
                      <option value="">Select your state first</option>
                    </select>
                  </div>
                </div>
             
                <?php if ($event->addon_name): ?>
                  <?php 
                  $addon_checked = false; // Flag to check if any addon is checked
                  foreach (json_decode($event->addon_name) as $key => $addon) :
                      foreach (json_decode($event->Extra_addon_checkbox) as $checkbox_key => $addon_checkbox) : 
                          if ($checkbox_key == $key && $addon_checkbox == 'checked'):
                              $addon_checked = true; // Set flag to true if addon is checked
                          endif; 
                      endforeach; 
                  endforeach; 
                  ?>
                  <?php if ($addon_checked): ?> <!-- Check if any addon is checked -->
                      <div class="col-sm-12">
                          <div class="form-group">
                              <label>Extra Addon</label>
                          </div>
                      </div>
                <div class="col-sm-12">
                      <?php
                      foreach (json_decode($event->addon_name) as $key => $addon) :
                          foreach (json_decode($event->Extra_addon_checkbox) as $checkbox_key => $addon_checkbox) : 
                              if ($checkbox_key == $key && $addon_checkbox == 'checked'): // Check if checkbox is checked for current addon
                      ?>     
                      <div class="form-group mb-0">
                        <input type="checkbox" class="addon-checkbox" placeholder="Enter Phone" name="register_addon[]" value="<?php echo $key; ?>" data-price="<?php echo json_decode($event->addon_price)[$key] ?>">
                        <label><?php echo $addon; ?> | &#x20B9; <?php echo json_decode($event->addon_price)[$key] ?></label>
                      </div>
                      <?php 
                            endif; 
                        endforeach; 
                    endforeach; 
                
                    ?>
                </div>
                <?php endif; ?>
<?php endif; ?>
                <div class="col-sm-12">
                    <h4>Main Price :&#x20B9;<b id="ttl_p1">0</b></h4>
                     <h4>Discount Price :&#x20B9;<b id="ttl_p2">0</b></h4>
                  <h4>Total Price : &#x20B9;<b id="ttl_p">0</b></h4>
                  <input type="hidden" id="tpl">
                  <input type="hidden" id="tplMainAmt" name="ttl_amt">
                  <input type="hidden" name="event_id" value="<?php echo $event->id; ?>">
                  <input type="hidden" name="event_category" value="<?php echo $event->category; ?>">
                  <input type="hidden" name="event_name" value="<?php echo $event->title; ?>">
                </div>
                <div class="col-sm-12">
                  <div class="form-group text-center">
                    <button class="btn btn-dark btn-theme-colored btn-sm btn-block mt-20 pt-10 pb-10" type="submit">Register now</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-8">
          <h4 class="line-bottom mt-20 mb-20 text-theme-colored">All Details</h4>
          <ul id="myTab" class="nav nav-tabs boot-tabs">
            <li class="active"><a href="#small" data-toggle="tab">Description</a></li>
            <li><a href="#medium" data-toggle="tab">Pricing Details</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="small">
              <?php echo $event->content; ?>
            </div>
            <div class="tab-pane fade" id="medium">
              <table class="table table-bordered">
                <tr>
                  <td class="text-center font-16 font-weight-600 bg-theme-colored2 text-white" colspan="6">Prices For All Student</td>
                </tr>
                <tr>
                  <th>Ticket</th>
                  <th>Price </th>
                  <th>Capacity </th>
                  <th>Default Qty</th>
                  <th>Reserve Qty</th>
                </tr>
                <tbody>
                  <?php 
                  if($event->Indian_stu_checkbox==1):?>
                  <tr>
                    <td><?php echo $event->ticket_indian; ?></td>
                    <td>&#x20B9;<?php echo $event->ticket_price_indian; ?></td>
                    <td><?php echo $event->ticket_capacity_indian; ?></td>
                    <td><?php echo $event->ticket_d_qnty_indian; ?></td>
                    <td><?php echo $event->ticket_r_qnty_indian; ?></td>
                  </tr>
                  <?php endif; ?>
                  <?php 
                  if($event->Foreign_stu_checkbox==1):?>
                  <tr>
                    <td><?php echo $event->ticket_foreigner; ?></td>
                    <td>&#x20B9;<?php echo $event->ticket_price_foreigner; ?></td>
                    <td><?php echo $event->ticket_capacity_foreigner; ?></td>
                    <td><?php echo $event->ticket_d_qnty_foreigner; ?></td>
                    <td><?php echo $event->ticket_r_qnty_foreigner; ?></td>
                  </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    // Activate the tab functionality
    $(document).ready(function() {
      $('#myTab a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
      });
    });
  </script>

  <script type="text/javascript">
    $("#booking-form").submit(function(e) {
      e.preventDefault();
      var form = $(this);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>home/submit_event_form",
        data: form.serialize(),
        success: function(data) {
          window.location.href = '<?php echo base_url(); ?>payment_for_event';

          // swal('Done!', 'Form Submit Successfully', 'success');
          // window.location = "<?php echo base_url(); ?>become_a_digital_educator?p="+$('#u_course').val();
        }
      });
    });
    let totalAmountMain = 0;
    $(document).ready(function() {

      const checkboxes = document.querySelectorAll('.addon-checkbox');
      checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
          calculateTotalAmount();
        });
      });
    });

    function calculateTotalAmount() {
      let totalAmount = 0;
      const checkboxes = document.querySelectorAll('.addon-checkbox');
      checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
          totalAmount += parseFloat(checkbox.getAttribute('data-price'));
        }
        totalAmountMain = totalAmount;

        var ticket_amt = $('#tpl').val();
        ticket_amt = parseFloat(ticket_amt);
        if (ticket_amt) {
          ticket_amt = ticket_amt;
        } else {
          ticket_amt = 0;
        }
        var sum = totalAmount + ticket_amt;
        $('#ttl_p').html(sum);
        $('#tplMainAmt').val(sum);
      });
    }

    function get_price(e) {
      if (e == 1) {
        var main = <?php echo $event->main_price; ?>;
        var discount = <?php echo $event->discount_price; ?>;
        var amount = <?php echo $event->ticket_price_indian; ?>;
        $('#tpl').val(amount);
        $('#ttl_p').html(amount + totalAmountMain);
        $('#ttl_p1').html(main);
        $('#ttl_p2').html(discount);
        $('#tplMainAmt').val(amount + totalAmountMain);
      } else {
        var amount = <?php echo $event->ticket_price_foreigner; ?>;
        $('#tpl').val(amount);
        $('#ttl_p').html(amount + totalAmountMain);
        $('#ttl_p1').html(main);
        $('#ttl_p2').html(discount);
        $('#tplMainAmt').val(amount + totalAmountMain);
      }
    }
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

  <style type="text/css">
    .styled-icons a .fa {
      line-height: 2.2;
    }

    .form_booking {
      background-color: #efefef;
      padding: 20px;
    }
  </style>