 <?php
  $currentYear = date("Y");
  ?>
  <html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Amit Pandey is an amazing yoga teacher! The classes are very diverse, each session is a unique experience. he is the Best Yoga Trainer in India." />
<meta name="keywords" content="Best Yoga Trainer in India, Online Yoga Classes India, Yoga Class in India, Best Yoga Institute In India, Best Yoga Center in India, Personal Yoga Trainer at Home, Best Yoga Classes in Mumbai." />
<meta name="author" content="YogIntra" />

<!-- Page Title -->
<title>Best Yoga Trainers in India </title>

 <!-- Start main-content -->
 <div class="main-content">

   <!-- Section: inner-header -->
   <section class="inner-header divider parallax layer-overlay overlay-dark-7" style='background-image: url("<?php echo front_css(); ?>images/bg/bg8.jpg"); background-position: 50% 55px;height: 300px;'>
     <div class="container pt-60 pb-60">
       <!-- Section Content -->
       <div class="section-content">
         <div class="row">
           <div class="col-md-12 text-center">
             <h2 class="title text-white">PERSONAL YOGA TRAINERS</h2>
             <ol class="breadcrumb text-center mt-10">
               <li><a class="text-white" href="<?php echo base_url(); ?>">Home</a></li>
               <li class="active text-gray">PERSONAL YOGA TRAINERS</li>
             </ol>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- Section: Team -->
   <section class="bg-lighter">
     <div class="container pt-1">
       <div class="row">
         <div class="col-md-6 col-md-offset-3">
           <div class="form-group">

             <input onkeyup="get_data(this.value)" placeholder="<?php echo strtoupper('Search Your Trainer By Name or Location ...')?>" type="text" class="form-control" id="name" name="name" required>
           </div>
         </div>
       </div>
       <div class="row mtli-row-clearfix" id="content_data">
        <div class="row">
   
          <!--<iframe class="full-screen-preview__frame" src="https://crm.yogintra.com/all-trainers" name="preview-frame" frameborder="0" noresize="noresize" data-view="fullScreenPreview" allow="geolocation 'self'; autoplay 'self'" style="height: 750px;
width: 100%" >-->
        
        </div>
         <?php
          $i = 1;
          foreach ($all_trainer as $key => $trainner) :
          ?>
           <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
             <div class="team-members text-center maxwidth400" onclick="open_modal(<?php echo $i; ?>)">
               <div class="team-thumb">
                 <img class="img-fullwidth" id="imageresource_<?php echo $i; ?>" style="height: 200px;width: auto" alt="YogIntra" src="<?php echo $api; ?>/<?php echo $trainner->profile_image ?>">
               </div>
               <div class="team-details">
                 <div class="p-10 " style="background-color: #01AEB7 ;">
                   <h4 class="team-title text-uppercase mt-0 mb-0"><a href="#"><?php echo $trainner->name ?></a></h4>
                   <?php
                    $birthYear = date("Y", strtotime($trainner->dob));
                    ?>
                   <p class="team-subtitle mt-0 mb-0">Age - <?php echo $currentYear - $birthYear; ?></p>
                 </div>
                 <div class="p-20 bg-white d-none">
                   <div class="opening-hours text-left mb-30">
                     <ul class="list-unstyled">

                       <input type="hidden" value="<?php echo $trainner->Education; ?>" id="Education_<?php echo $i; ?>">
                       <input type="hidden" value="<?php echo $trainner->experience; ?>" id="experience_<?php echo $i; ?>">
                       <input type="hidden" value="<?php echo $trainner->city; ?>, <?php echo $trainner->state; ?>" id="address_<?php echo $i; ?>">
                       <input type="hidden" value="<?php echo $trainner->name ?>" id="name_<?php echo $i; ?>">
                       <input type="hidden" value="<?php echo $currentYear - $birthYear; ?>" id="age_<?php echo $i; ?>">
                       <input type="hidden" value="<?php echo $trainner->package; ?>" id="package_<?php echo $i; ?>">
                     </ul>
                   </div>

                 </div>
               </div>
             </div>
           </div>
         <?php $i++;
          endforeach; ?>
       </div>
     </div>
   </section>

   <script type="text/javascript">
     function open_modal(id) {
       // $('#imagepreview').attr('src', $('#imageresource_'+id).attr('src'));
       var imageUrl = $('#imageresource_' + id).attr('src');
       $('#imagepreview').css('background-image', 'url(' + imageUrl + ')');
       console.log($('#name_' + id).val());
       $('#imagemodal').modal('show');
       $('#main_name').html($('#name_' + id).val());
       $('#age').html($('#age_' + id).val());
       $('#address').html($('#address_' + id).val());
       $('#experience').html($('#experience_' + id).val());
       $('#education').html($('#Education_' + id).val());
       $('#package').html($('#package_' + id).val());
     }
   </script>
   <style>
     @media (min-width: 768px) {
       .modal-dialog {
         width: 400px;
         margin: 30px auto;
       }
     }
   </style>
   <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-md">
       <div class="modal-content">
         <div class="modal-body text-center p-0">

           <div id="imagepreview">
             <div style="height: 60vh;"></div>
           </div>

           <div class="p-20 pb-10 pt-10">
             <h3>
               <b id="main_name"></b>
             </h3>
             <h5>
               <b>Age </b> - <span id="age"></span>
             </h5>
             <h6>
               <b>Education </b> - <span id="education"></span>
             </h6>
             <h6>
               <b>Experience </b> - <span id="experience"></span>
             </h6>
             <h5>
               <b>Package </b> - <span id="package"></span>
             </h5>
           </div>
         </div>
         <div class="modal-footer" style="text-align:center!important;background: #dcd8d8;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
            <h3 class="pt-1 pb-0">
               <div><i class="fa fa-map-marker" aria-hidden="true"></i> <span id="address"></span></div>
             </h3>
        </div>
       </div>
     </div>
   </div>
   <style>
     #imagemodal {
       z-index: 9999;
     }

     .modal-backdrop {
       z-index: 9991;
     }

     #imagepreview {

       border-top-left-radius: 12px !important;
       border-top-right-radius: 12px !important;
       padding: 0;
       text-align: center;
       background-repeat: no-repeat;
       background-size: cover;
       background-position: center;
     }
   </style>
   <script>
     function get_data(data) {
       $.ajax({
         type: "POST",
         url: '<?php echo base_url(); ?>home/get_data_for_trainer',
         data: {
           data: data
         }, // serializes the form's elements.
         success: function(data) {
           $('#content_data').html(data);
         }
       });


     };
   </script>