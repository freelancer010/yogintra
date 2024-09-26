<!-- Footer -->
<style>
  .horizontal-list {
    list-style-type: none;
    padding: 0;
    margin-left:30px ;
    display: flex;
    font-size:20px;
}

.horizontal-list li {
    margin-right: 10px; 
}

.horizontal-list li:last-child {
    margin-right: 0;
}

@media only screen and (min-width : 320px) {
        .city_loc{
          text-align: left !important;
        }
        
    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (min-width : 480px) {

       .city_loc{
            text-align: left !important;
       }
    }
  </style>
  
  <br>
<!--  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>-->
<!--<div class="elfsight-app-fba57de6-4614-4341-80ed-6d6b3504350a" data-elfsight-app-lazy></div>-->


 <footer id="footer" class="footer bg-black-111" style="background-color:#000!important;margin-top: -22px!important;">
       <div class="container pt-40 pb-10">
         <div class="row border-bottom-black">
           <div class="col-sm-6 col-md-3">
             <div class="widget dark mb-5">
               <img class="mt-10 mb-20" width="246" height="66" alt="YogIntra" src="https://yogintra.com/uploads/6522371db10e06501ab36d6f70Rectrangular-logo-2.png">
               <p>YogIntra helps promote a balanced development of the physical, mental, and spiritual being.</p>
               
             </div>
             <div class="widget dark">
               <ul class="styled-icons icon-dark icon-circled icon-sm">
                                      <li><a href="https://www.facebook.com/yogintra"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="https://www.instagram.com/yogintra"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="https://www.linkedin.com/in/yog-intra-410a09240"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="https://twitter.com/yogintra"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="https://www.youtube.com/channel/UC04qAXsiUicHix2WChFPFvA"><i class="fa fa-youtube"></i></a></li>
                                                   </ul>
             </div>
           </div>
           <div class="col-sm-6 col-md-3">
             <div class="widget dark">
               <h5 class="widget-title line-bottom">Useful Links</h5>
               <ul class="list-border">
                 
                 <li><a href="https://yogintra.com/about">About</a></li>
                 <li><a href="https://yogintra.com/gallery">Gallery</a></li>
                 <li><a href="https://yogintra.com/blog">Blog</a></li>
                 <li><a href="https://yogintra.com/contact">Contact</a></li>
               </ul>
             </div>
           </div>
           <div class="col-sm-6 col-md-3">
             <div class="widget dark">
               <h5 class="widget-title line-bottom">Our Service</h5>
               <ul class="list-border">
                                     <li><a href="https://yogintra.com/service/home-visit-yoga">Home Visit Yoga</a></li>
                                      <li><a href="https://yogintra.com/service/private-online-yoga">Private Online Yoga</a></li>
                                      <li><a href="https://yogintra.com/service/group-online-yoga">Group Online Yoga</a></li>
                                      <li><a href="https://yogintra.com/service/corporate-yoga">Corporate Yoga</a></li>
                                 </ul>
             </div>
           </div>
           <div class="col-sm-6 col-md-3">
             <div class="widget dark">
               <h5 class="widget-title line-bottom">Support</h5>
               <div class="opening-hours">
                 <ul class="list-border mt-5">
                   <li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-colored mr-5"></i> <a class="text-gray" href="#">D-408 Shivlila Apt Mumbra devi colony road Diva East Thane-400612</a> </li>
                   <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">+91-9867291573</a> </li>
                   <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">support@yogintra.com</a> </li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
       </div>
       

  <div class="footer-bottom" style="background-color: black;">
    <div class="container pt-10 pb-10">
        <div class="row">
            <div class="col-md-2">
                <h5 class="font-18 text-white-777 m-0 text-center pb-10 city_loc" style="color: white;font-family: 'Open Sans', sans-serif !important;font-size: 18px;
    font-weight: 500;">Locate Us :</h5>
            </div>
            <div class="col-md-10 text-center text-md-right city_loc">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <?php 
                    $all_landing_page = $this->db->get('new_landing_page')->result();
                    foreach ($all_landing_page as $key => $pages):?>
                         <!-- <li style="display: inline-block; margin-right: 10px;"><a href="<?php echo base_url() . 'landing_page/'.$pages->page_name; ?>"><?php echo $pages->page_name; ?> |</a></li>  -->
                        <li style="display: inline-block; margin-right: 10px;"><a href="<?php echo base_url() ."city/".$pages->page_slug; ?>"><?php echo $pages->page_name; ?> |</a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
       
       

       <div class="footer-bottom bg-black-222">
         <div class="container pt-12 pb-0">
           <div class="row">
             <div class="col-md-6">
               <p class="font-13 text-black-777 m-0 text-center pb-10">Copyright &copy;2024 YogIntra. All Rights Reserved</p>
             </div>
             <div class="col-md-6 text-center text-sm-right">
               <ul>
                   <li style="display:inline-block" class="pr-10"><a href="https://yogintra.com/terms_and_condition">Terms & Condition</a></li>
                   <li style="display:inline-block" class="pr-10">|</li>
                   <li style="display:inline-block" class="pr-10"><a href="https://yogintra.com/refund_policy">Refund Policy</a></li>
                   <li style="display:inline-block" class="pr-10">|</li>
                   <li style="display:inline-block" class="pr-10"><a href="https://yogintra.com/privacy_policy">Privacy Policy</a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
<script type="text/javascript">
$('form').submit(function() {
     $('button[type="submit"]').html('Processing....');
     $('button[type="submit"]').attr('disabled',true);
     $(".loader").show();
 });
</script>
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo front_css(); ?>js/custom.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<!-- <script type="text/javascript" src="<?php //echo front_css(); ?>js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php //echo front_css(); ?>js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php //echo front_css(); ?>js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php //echo front_css(); ?>js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php //echo front_css(); ?>js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php //echo front_css(); ?>js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php //echo front_css(); ?>js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php //echo front_css(); ?>js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php //echo front_css(); ?>js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script> -->


<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":"919867291573","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
          window.onload = () => {
            _waEmbed(wa_btnSetting);
          };
        </script>


</body>
</html>
<style>
.owl-carousel .owl-stage,
.owl-carousel.owl-drag .owl-item{
    -ms-touch-action: auto;
        touch-action: auto;
}
    .layer-overlay.overlay-dark-7::before {
  background-color: rgba(17, 17, 17, 0.1)!important;
}
.overlay-dark-7
{
  background-position: top!important;
  height: 300px;
  background-repeat: no-repeat;
  background-size: cover!important;
}

</style>