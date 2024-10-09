    <meta name="description" content="Yogintra service details" />
    <meta name="keywords" content="" />
    <meta name="author" content="YogIntra" />
    <title>Yogintra Service details</title>
</head>

<body>
  <?php include('include/navbar.php'); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: url("<?php echo front_css(); ?>images/bg/bg8.jpg"); background-position: 50% -47px;height: 300px;'>
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white"><?php echo mb_strimwidth($service->service_name, 0, 50, "..."); ?></h2>
              <ol class="breadcrumb text-center mt-10">
                <li><a class="text-white" href="<?php echo base_url(); ?>">Home</a></li>
                <li><a class="text-white" href="<?php echo base_url(); ?>service/<?php echo $service->service_cat_slug; ?>"><?php echo $service->service_cat_name; ?></a></li>
                <li class="active text-gray"><?php echo $service->service_name; ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div >
        <div class="container">
            <div class="section-title text-center pb-0 pt-50">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <p class="mt-0 line-height-3 text-center">YogIntra provides One of the Best <span class="text-theme-colored2"><?php echo $service->service_cat_name; ?> </span> in India with our expertise, professional and experienced team of Trainers.
                      </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div >
        <div class="container">
            <div class="section-title pb-0 pt-0">
                <div class="row">
                    <div class="am-service-gallery"></div>
                    <div class="am-service">
                        <div class="row">
                            <div class="am-service-header">
                                <div class="am-service-image">
                                    <img class="" src="<?php echo base_url(); ?><?php echo $service->service_image; ?>" alt="">
                                </div>
                                <div class="am-service-data">
                                    <h2 class="text-theme-colored line-bottom text-theme-colored mb-5"><?php echo $service->service_name; ?></h2>
                                    <div>
                                        <div class="mt-0"><span class="text-theme-colored2">Capacity :</span>  <?php echo $service->service_capacity; ?> | <span class="text-theme-colored2">Duration :</span>  <?php echo $service->service_duration; ?>hr </div>
                                    </div>
                                </div>
                                <div class="am-service-price">
                                    INR<?php echo $service->service_price; ?>.00
                                </div>

                            </div>
                            <div class="text-center mb-50">
                                <?php echo $service->service_description; ?>
                            </div>
                            <div>
                                <table class="table borderless" border="0">
                                    <tr>
                                        <td width="30%">Category : </td>
                                        <td><?php echo $service->service_cat_name; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Duration : </td>
                                        <td><?php echo $service->service_duration; ?>hr</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Capacity : </td>
                                        <td><?php echo $service->service_capacity; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 mt-10 text-center">
                                <button class="btn btn-success"  onclick="booking_modal()">Book Now</button>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style type="text/css">
.borderless td, .borderless th {
    border: none;
}
</style>

<div class="modal fade" id="booking_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
                <input type="hidden" value="<?php echo $service->service_name?>">
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
          if(data == 1)
          {
            $('#booking_modal').modal('hide');
             window.location = "<?php echo base_url(); ?>thank_you";
          }
          else
          {
            $('#booking_modal').modal('hide');
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
  <!-- end main-content -->
  <style type="text/css">
#conti_btn
{
  display: none;
}
.calendar-frame {
    border: 2px solid #ccc; 
    padding: 20px; 
    border-radius: 10px; 
    background-color: #fff; 
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}
    .sss {
    display: flex;
    justify-content: center;
    align-items: center;
  
}
.calendar {
    text-align: center;
    margin: 20px;
}

.date-picker {
    margin-bottom: 20px;
}

.time-slot {
    display: inline-block;
    padding: 1px 10px;
    margin: 5px;
    border: 1px solid #ccc;
    cursor: pointer;
    color:#000;
}

.selected {
    background-color: #007bff;
    color: #fff;
}
.date-picker input
{
  display: none;
}

  </style>

<script type="text/javascript">
$(function() {
    $(".date-picker").datepicker({
        onSelect: function(dateText, instance) {
            console.log("Selected date: " + dateText);
        }
    });
});

function booking_modal() {
  $('#booking_modal').modal('show');
}
  
function loadTimeSlots(e) {

    const dateInput = document.getElementById('date');
    const timeSlotsContainer = document.getElementById('time-slots');
    
    const selectedDate = dateInput.value;


    timeSlotsContainer.innerHTML = '';

    const openingTime = 7; 
    const closingTime = 19; 

    for (let hour = openingTime; hour <= closingTime; hour++) {
        const startTime = (hour % 12 === 0) ? 12 : hour % 12; // Convert to 12-hour format
        const amPm = (hour < 12) ? 'AM' : 'PM';
        const endTime = ((hour + 1) % 12 === 0) ? 12 : (hour + 1) % 12; // Convert to 12-hour format
        const timeSlot = document.createElement('div');
        timeSlot.className = 'time-slot';
        timeSlot.textContent = `${startTime} ${amPm} - ${endTime} ${amPm}`;
        
        timeSlot.addEventListener('click', () => selectTimeSlot(timeSlot));
        
        timeSlotsContainer.appendChild(timeSlot);
    }
}

function selectTimeSlot(selectedTimeSlot) {
    const timeSlots = document.querySelectorAll('.time-slot');
    timeSlots.forEach(slot => slot.classList.remove('selected'));

    selectedTimeSlot.classList.add('selected');
     $('#conti_btn').show();
}

  </script>
  <style type="text/css">
.am-service-gallery{
  min-height: 256px;
  background-image: linear-gradient(90deg, rgba(219, 164, 53, 0.65) 0%, #dba435 100%);
}
.am-service-header {
  position: relative;
  margin-bottom: 48px;
  display: flex;
  align-items: flex-start;
  justify-content: space-around;
}
.am-service-image {
  display: inline-block;
  vertical-align: middle;
  border-radius: 50%;
  width: 100px;
  height: 100px;
  max-width: 100px;
}
.am-service-data
{
    display: inline-block;
    vertical-align: middle;
    padding: 0 16px;
    flex: 1;
}
.am-service-image img
{
    width: 100%;
  border-radius: 50%;
  height: 100%;
}
.am-service {
  background: #fff;
    background-color: rgb(255, 255, 255);
  margin: -60px 5% 0;
  position: relative;
  padding: 24px;
  z-index: 3;
}
.am-service-price {
  display: inline-block;
  position: absolute;
  top: 0;
  right: 0;
  padding: 16px 24px;
  border-radius: 30px;
  background-color: #dba435;
  color: #5c420e;
  font-size: 24px;
  line-height: 1.2;
}
@media only screen and (max-width: 600px) {
  .am-service-header
    {
        flex-direction: column;
    }
}
</style>