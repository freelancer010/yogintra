<!-- Meta Tags -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="As YogIntra is one of the best Yoga Platforms, we are offering an opportunity to be a part of our organization." />
<meta property="og:title" content="Yoga Teacher Jobs and Vacancies" />
<meta property="og:description" content="As YogIntra is one of the best Yoga Platforms, we are offering an opportunity to be a part of our organization." />
<meta name="keywords" content="Yoga Teacher Training Jobs and Vacancies, Online Yoga Classes India, Yoga Class in India, Best Yoga Institute In India, Best Yoga Center in India, Personal Yoga Trainer at Home, Best Yoga Classes in Mumbai, Yoga Teacher Training Courses." />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title>Yoga Teacher Jobs and Vacancies</title>
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
              <h2 class="title text-white">Recruitment</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="<?php echo base_url(); ?>" class="text-white">Home</a></li>
                <li class="active text-gray">Recruitment</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- Section: Contact -->
    <section style='background-image: url("<?php echo front_css(); ?>images/pattern/p4.png");'> 
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="section-3-title"><span class="">Become A Trainer</div>
                <p>As YogIntra is one of the best Yoga Platform, we are offering a chance to be a part of our organization. You can show your interest by filling the form and Our Team will contact you after analyzing your eligibility.</p>
            </div>
          </div>
        </div>
        <div class="section-content">          
          <div class="row">
            <div class="col-md-5">
              <img src="<?php echo base_url(); ?>assets/coming_soon.png">
            </div>
            <div class="col-md-7">
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
                        <input type="text" class="form-control" id="phone" placeholder="+91" name="number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email ID:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Date of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <button class="btn btn-primary next" type="button">Next</button>
                </div>
                <!-- Step 2: Location -->
                <div class="form-step" id="step-2">
                    <div class="form-group">
                        <label for="certification">University of Certification :</label>
                        <input type="text" class="form-control" id="certification" name="education" required>
                    </div>
                    <div class="form-group">
                        <label for="year_certification">Year Of Certification:</label>
                        <input type="year" class="form-control" id="year_certification" name="certification" required>
                    </div>
                    <div class="form-group">
                        <label for="year_experience">Year Of Experience:</label>
                        <input type="number" class="form-control" id="year_experience" name="experience" required>
                    </div>
                    <div class="form-group">
                        <label for="youga_certificate">Other Yoga Certification ( If Any) :</label>
                        <textarea type="text" class="form-control" id="youga_certificate" name="Other_Certificate"></textarea>
                    </div>
                    <button class="btn btn-primary prev" type="button">Previous</button>
                    <button class="btn btn-primary next" type="button">Next</button>
                </div>
                <!-- Step 3: Service Information -->
                <div class="form-step" id="step-3">
                    <div class="form-group">
                        <label for="country">Select Country:</label>
                        <select class="form-control countries" id="country" name="country" required>
                            <option value="">Select A Country</option>
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
                    <div class="form-group">
                        <label for="city">Your Address :</label>
                        <textarea class="form-control" id="address" name="address" required></textarea>
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
        url: '<?php echo base_url(); ?>home/submit_trainer_form',
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
            var dob = $('#dob').val();
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
            if (!dob) {
                isValid = false;
                $("#dob").closest(".form-group").addClass("has-error");
                $("#dob").after('<div class="error-message">Please enter your Date of Birth.</div>');
            }
        } else if (step === 2) {
            // Step 2 Validation
            
        } else if (step === 3) {
            // Step 3 Validation
            var country = $("#country").val();
            var state = $("#state").val();
            var city = $("#city").val();
            var address = $('#address').val();
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
            if (!address) {
                isValid = false;
                $("#address").closest(".form-group").addClass("has-error");
                $("#address").after('<div class="error-message">Please select your Address.</div>');
            }
        }
        return isValid;
    }
    
});
</script>