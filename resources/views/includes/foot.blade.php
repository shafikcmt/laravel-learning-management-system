<script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- <script src="{{asset('calender/js/jquery-1.10.2.js')}}"></script> -->
    <!-- <script src="{{asset('calender/js/jquery-ui.custom.min.js')}}"></script> -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- <script src="{{asset('calender/js/fullcalendar.js')}}"></script> -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/vendor.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:true
        }
    }
})

</script>
<script type="text/javascript"> 
      $(function(){
       $('#alertMessage').delay(2000).fadeOut();
      });
</script>