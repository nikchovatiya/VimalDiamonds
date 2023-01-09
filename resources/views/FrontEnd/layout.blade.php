<!DOCTYPE html>
<html lang="en">

<head>
   @include('FrontEnd\Head')
</head>

<body >
 @include('FrontEnd\menu')
 @yield('content')
 @include('FrontEnd\footer')
 @include('FrontEnd\script')
</body>

</html>