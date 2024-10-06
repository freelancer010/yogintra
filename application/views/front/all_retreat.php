<!-- Meta Tags -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="YogIntra is the leading center for Best Yoga Retreats In India. We have a wide variety of online yoga classes." />
<meta property="og:title" content="Best Yoga Retreats In India - YogIntra" />
<meta property="og:description" content="YogIntra is the leading center for Best Yoga Retreats In India. We have a wide variety of online yoga classes." />
<meta name="keywords" content="Best Yoga Retreats In India, Online Yoga Classes India, Yoga Class in India, Best Yoga Institute In India, Best Yoga Center in India, Personal Yoga Trainer at Home, Best Yoga Classes in Mumbai, Yoga Teacher Training Courses." />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title>Best Yoga Retreats In India - YogIntra</title>
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
              <h2 class="title text-white">Retreat</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="<?php echo base_url(); ?>" class="text-white">Home</a></li>
                <li class="active text-gray">Retreat</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php if($all_event): ?>
    <!-- Section: Upcoming Events -->
    <section id="upcoming-events" class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg;">
      <div class="container pb-0 pt-80">
        <div class="section-content">
          <div class="row">
            <?php foreach ($all_event as $key => $event):?>
              <div class="col-xs-12 col-sm-6 col-md-6 sm-text-center mb-30 mb-sm-30">
                  <div class="schedule-box bg-light  mb-30 event-card-ag">
                    <div class="thumb">
                    <img class="img-fullwidth" alt="<?php echo $event->title; ?> Image" src="<?php echo base_url(); ?><?php echo $event->image; ?>" style="height:300px;">                    
                    <div class="overlay">
                      <a href="<?php echo base_url(); ?>event/<?php echo $event->link; ?>"><i class="fa fa-calendar mr-5"></i></a>
                    </div>
                  </div>
                    <div class="schedule-details clearfix p-15 pt-10" style="border-bottom: none!important;">
                  <!-- <div class="schedule-details clearfix p-15 pt-10"> -->
                    <h5 class="font-16 title"><a href="<?php echo base_url(); ?>event/<?php echo $event->link; ?>"><?php echo $event->title; ?></a></h5>
                    <ul class="list-inline font-11 mb-20">
                      <li><i class="fa fa-calendar mr-5"></i> <?php echo date('d-m-Y h:i A', strtotime($event->date_time)); ?></li>
                      <li><i class="fa fa-map-marker mr-5"></i> <?php echo $event->event_location; ?></li>
                    </ul>
                    <p class="elipse-text"><?php echo $event->short_content; ?></p>
                    <div class="mt-10">
                     <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="<?php echo base_url(); ?>event/<?php echo $event->link; ?>">Register</a>
                     <a href="<?php echo base_url(); ?>event/<?php echo $event->link; ?>" class="btn btn-dark btn-sm mt-10">Details</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <section style='background-image: url("<?php echo front_css(); ?>images/pattern/p4.png");'> 
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              
            </div>
          </div>
        </div>
        <div class="section-content">          
          <div class="row">
            <div class="col-md-5">
              <img src="<?php echo base_url(); ?>assets/coming_soon.png">
            </div>
            <div class="col-md-7">
              <div class="mb-40">
                <h1 class="text-uppercase text-center font-38 mt-0"><span class="text-theme-colored">MORE retreat</span> COMING SOON</h1>
              </div>
              <!-- Contact Form -->
              <form id="multi-step-form" name="contact_form" class="contact-form-transparent"  method="post">
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
          </div>
        </div>
      </div>
    </section>
    <style>
    .form-step {
        display: none;
    }
    .form-step.active {
        display: block;
    }
</style>
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
  <!-- end main-content -->
  <!-- end main-content -->