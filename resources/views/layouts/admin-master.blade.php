<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
   <header>
       @include('includes.admin-header')
   </header>
   <div id="main">
           @yield('content')
   </div>
   <footer>
       @include('includes.footer')
   </footer>
        @include('includes.foot')
</body>
</html>
