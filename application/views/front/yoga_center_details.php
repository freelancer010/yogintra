<?php error_reporting(0)?>
<html dir="ltr" lang="en">
<head>


<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $center->page_meta_description; ?>" />
<meta name="keywords" content="<?php echo $center->page_keywords; ?>" />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title><?php echo $center->page_title; ?></title>

<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo front_css(); ?>images/bg/bg6.jpg"); background-position: 50% 45px;height: 300px;'>
    <div class="container pt-60 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title text-white"><?php echo mb_strimwidth($center->center_name, 0, 30, "..."); ?></h2>
            <ol class="breadcrumb text-center  mt-10">
              <li><a href="<?php echo base_url(); ?>" class="text-white">Home</a></li>
              <li><a href="#" class="text-white">Yoga Center</a></li>
              <li class="active text-gray"><?php echo mb_strimwidth($center->center_name, 0, 30, "..."); ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <ul>
              <div class="bg-light media border-bottom p-15 mb-20">
                <div class="media-left">
                  <i class="pe-7s-home text-theme-colored font-24 mt-5"></i>
                </div>
                <div class="media-body">
                  <h5 class="mt-0 mb-0">Location:</h5>
                  <p><?php echo $center->center_address ?>, <?php echo $center->center_city ?>, <?php echo $center->center_state ?>, 
                    <?php echo $center->center_country ?></p>
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
          <br/><br>
          <div class="bg-light media border-bottom p-15 mb-20">
                   <p>Email Address: <?php echo $center->email_address ?></p>
                   
                   <p>Mobile Number: <?php echo $center->mobile_number ?></p>
         
          </div>
               <div class="row mt-60">
        <div class="col-sm-12">
          
       
            <div >
              <p style="text-align:justify"><?php echo $center->center_description; ?></p>
            </div>
            
         
        </div>
      </div>
        </div>
        <div class="col-md-8">
          <img src="<?php echo base_url(); ?><?php echo $center->center_image; ?>" alt="<?php echo $center->center_name; ?>" width="100%">
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
        var amount = <?php echo $event->ticket_price_indian; ?>;
        $('#tpl').val(amount);
        $('#ttl_p').html(amount + totalAmountMain);
        $('#tplMainAmt').val(amount + totalAmountMain);
      } else {
        var amount = <?php echo $event->ticket_price_foreigner; ?>;
        $('#tpl').val(amount);
        $('#ttl_p').html(amount + totalAmountMain);
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
  <style>
    .form-step {
        display: none;
    }
    .form-step.active {
        display: block;
    }
</style>