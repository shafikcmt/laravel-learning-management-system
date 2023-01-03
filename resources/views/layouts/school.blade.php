<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
   <header>
       @include('includes.schoolheader')
   </header>
   @section('sidebar')
   @include('includes.school-sidebar')
   @show
   <div id="main" class="main-wrapper">
   <div class="app" id="app">
           @yield('content')
   </div>
   </div>
   <footer>
       @include('includes.footer')
   </footer>
        @include('includes.foot')
</body>
</html>
