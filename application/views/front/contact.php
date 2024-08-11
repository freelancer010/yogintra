<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Contact us directly or get a phone number and email address for a Yoga Class in India. Our YogIntra team is available for guidance to answer any questions!" />
<meta name="keywords" content="Contact Us, Online Yoga Classes India, Yoga Class in India, Best Yoga Institute In India, Best Yoga Center in India, Personal Yoga Trainer at Home, Yoga Teacher Training Courses, Best Yoga Classes in Mumbai."/>       

<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title>Contact Us - YogIntra</title>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo base_url(); ?>assets/front/images/bg/bg6.jpg"); background-position: 50% 45px;height: 300px;'>
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Contact</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="<?php echo base_url(); ?>" class="text-white">Home</a></li>
                <li class="active text-gray">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Have Any Question -->
    <section class="divider">
      <div class="container pt-60 pb-60">
        <div class="section-title mb-60">
          <div class="row">
            <div class="col-md-12">
              <div class="esc-heading small-border text-center">
                <h3>Have any Questions?</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray">Phone: <?php echo $app_setting->app_mobile; ?></h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                <h4>Address</h4>
                <h6 class="text-gray"><?php echo $app_setting->app_address; ?></h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                <h4>Email</h4>
                <h6 class="text-gray"><?php echo $app_setting->app_email; ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider bg-lighter">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
            
            <form id="multi-step-form" method="post">
              <!-- Step 1: Personal Information -->
              <div class="form-step active" id="step-1">
                  <div class="form-group">
                      <label for="name">Your Name:</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                      <label for="phone">Phone Number:</label>
                      <input type="text" class="form-control" id="phone" name="number" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email ID:</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <button class="btn btn-primary next" type="button">Next</button>
              </div>
              <!-- Step 2: Location -->
              <div class="form-step" id="step-2">
                  <div class="form-group">
                      <label for="country">Select Country:</label>
                      <select class="form-control countries" id="country" name="country" required>
                          <option value="" >Select A Country</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="state">Select State:</label>
                      <select class="form-control states" id="state" name="state" required>
                          <option value="" >Select your Country First</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="city">Select City:</label>
                      <select class="form-control cities" id="city" name="city" required>
                          <option value="" >Select your state first</option>
                      </select>
                  </div>
                  <button class="btn btn-primary prev" type="button">Previous</button>
                  <button class="btn btn-primary next" type="button">Next</button>
              </div>
              <!-- Step 3: Service Information -->
              <div class="form-step" id="step-3">
                  <div class="form-group">
                      <label for="city">Service Menu:</label>
                      <select class="form-control" id="city" name="class" required>
                        <?php 
                          $all_service = $this->db->get('service_category')->result();
                          foreach ($all_service as $key => $service):?>
                            <option value="<?php echo $service->service_cat_name; ?>"><?php echo $service->service_cat_name; ?></option>
                          <?php endforeach; ?>
                          <option value="Yoga Center">Yoga Center</option>
                            <option value="TTC">TTC</option>
                            <option value="Retreat">Retreat</option>
                            <option value="Workshop">Workshop</option>
                      </select>
                  </div>
                  <div class="form-group d-none">
                      <label for="call-time">Call Request Time From:</label>
                      <input type="time" class="form-control" id="call-time" name="call-from" >
                  </div>
                  <div class="form-group d-none">
                      <label for="call-time">To:</label>
                      <input type="time" class="form-control" id="call-time-2" name="call-to" >
                  </div>
                  <div class="form-group">
                      <label for="message">Message:</label>
                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                  </div>
                  <button class="btn btn-primary prev" type="button">Previous</button>
                  <button type="submit" class="btn btn-success">Submit</button>
              </div>
          </form>

          </div>
          <div class="col-md-5">

            <!-- Google Map HTML Codes -->
              
              <?php echo $app_setting->map_iframe; ?>

          </div>
        </div>
      </div>
    </section>
<script type="text/javascript">
$("#multi-step-form").submit(function(e) {
    e.preventDefault(); 
    var form = $(this);
    $.ajax({
        type: "POST",
        url: '<?php echo base_url(); ?>home/submit_contact_form',
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
          console.log(data);
          if(data == 1)
          {
            window.location = "<?php echo base_url(); ?>thank_you";
          }
          else
          {
            alert('Data Submitted Failed')
          }
        }
    });
    
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

$(document).ready(function () {

    var currentStep = 1;

    $(".next").click(function () {
        if (validateStep(currentStep)) {
            $("#step-" + currentStep).removeClass("active");
            currentStep++;
            $("#step-" + currentStep).addClass("active");
        }
    });

    $(".prev").click(function () {
        $("#step-" + currentStep).removeClass("active");
        currentStep--;
        $("#step-" + currentStep).addClass("active");
    });

    function validateStep(step) {
        var isValid = true;

        // Reset previous error messages and styles
        $(".form-group").removeClass("has-error");
        $(".error-message").remove();

        if (step === 1) {
            // Step 1 Validation
            var name = $("#name").val();
            var phone = $("#phone").val();
            var email = $("#email").val();

            if (!name) {
                isValid = false;
                $("#name").closest(".form-group").addClass("has-error");
                $("#name").after('<div class="error-message">Please enter your name.</div>');
            }
            if (!phone) {
                isValid = false;
                $("#phone").closest(".form-group").addClass("has-error");
                $("#phone").after('<div class="error-message">Please enter your phone number.</div>');
            }
            if (!email) {
                isValid = false;
                $("#email").closest(".form-group").addClass("has-error");
                $("#email").after('<div class="error-message">Please enter your email address.</div>');
            }
        } else if (step === 2) {
            // Step 2 Validation
            var country = $("#country").val();
            var state = $("#state").val();
            var city = $("#city").val();

            if (!country) {
                isValid = false;
                $("#country").closest(".form-group").addClass("has-error");
                $("#country").after('<div class="error-message">Please select your country.</div>');
            }
            if (!state) {
                isValid = false;
                $("#state").closest(".form-group").addClass("has-error");
                $("#state").after('<div class="error-message">Please select your state.</div>');
            }
            if (!city) {
                isValid = false;
                $("#city").closest(".form-group").addClass("has-error");
                $("#city").after('<div class="error-message">Please select your city.</div>');
            }
        } else if (step === 3) {
            // Step 3 Validation
            var callTime = $("#call-time").val();
            var callTime_2 = $("#call-time-2").val();
            var message = $("#message").val();

            // if (!callTime) {
            //     isValid = false;
            //     $("#call-time").closest(".form-group").addClass("has-error");
            //     $("#call-time").after('<div class="error-message">Please enter your call request time.</div>');
            // }
            // if (!callTime_2) {
            //     isValid = false;
            //     $("#call-time-2").closest(".form-group").addClass("has-error");
            //     $("#call-time-2").after('<div class="error-message">Please enter your call To time.</div>');
            // }
            if (!message) {
                isValid = false;
                $("#message").closest(".form-group").addClass("has-error");
                $("#message").after('<div class="error-message">Please enter a message.</div>');
            }
        }
        return isValid;
    }
});
</script>
<style>
    .form-step {
        display: none;
    }
    .form-step.active {
        display: block;
    }
</style>