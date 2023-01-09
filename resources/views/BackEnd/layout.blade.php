<!DOCTYPE html>
<html lang="en">

<head>
   @include('BackEnd\Head')
</head>

<body>
   @include('BackEnd\header')
   @include('BackEnd\sidebar')
   <main id="main" class="main">
      <section class="section dashboard">
         @yield('content')
      </section>
   </main><!-- End #main -->
   @include('BackEnd\footer')
</body>

</html>