 <!-- JS here -->
 <script src="{{asset('frontend/js')}}/jquery.js"></script>
   <script src="{{asset('frontend/js')}}/bootstrap.bundle.min.js"></script>
   
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  


   <script src="{{asset('frontend/js')}}/gsap.js"></script>
   <script src="{{asset('frontend/js')}}/slick.min.js"></script>
   <script src="{{asset('frontend/js')}}/jarallax.js"></script>
   <script src="{{asset('frontend/js')}}/magnific-popup.js"></script>
   <script src="{{asset('frontend/js')}}/purecounter.js"></script>
   <script src="{{asset('frontend/js')}}/wow.js"></script>
   <script src="{{asset('frontend/js')}}/nice-select.js"></script>
   <script src="{{asset('frontend/js')}}/swiper-bundle.js"></script>
   <script src="{{asset('frontend/js')}}/isotope-pkgd.js"></script>
   <script src="{{asset('frontend/js')}}/imagesloaded-pkgd.js"></script>
   <script src="{{asset('frontend/js')}}/ajax-form.js"></script>
   <script src="{{asset('frontend/js')}}/main.js"></script>
   <script src="{{asset('frontend/js')}}/it-cursor.js"></script>
   
   
<script>
    $(document).ready(function(){
      $('.brand-slider-wrap').css('display', 'flex');
      
        $('.brand-slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1
        });
    });
</script>
