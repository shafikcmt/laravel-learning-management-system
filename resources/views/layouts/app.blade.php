<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('calender/css/fullcalendar.print.css')}}">
    <link rel="stylesheet" href="{{asset('calender/css/fullcalendar.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/stylelogin.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    @livewireStyles
</head>
<body>
    {{$slot}}

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
@livewireScripts

</body>
</html>