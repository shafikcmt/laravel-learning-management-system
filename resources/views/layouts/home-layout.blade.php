<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
   <header>
       @include('includes.homeheader')
   </header>
  
   <div id="main">
           @yield('content')
   </div>
   
   <footer>
       @include('includes.homefooter')
   </footer>
        @include('includes.foot')
</body>
</html>
