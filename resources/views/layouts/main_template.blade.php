<html lang="en">
<head>
   @include('includes.head')
   
</head>
<body>
    @include('includes.menu')
    <div style="padding-top:60px" class="container">
     @yield('content')
    </div>
   
    @include('includes.foot')
</body>
</html>