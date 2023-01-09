   <!-- Spinner Start -->
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
       <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
           <span class="sr-only">Loading...</span>
       </div>
   </div>
   <!-- Spinner End -->


   <!-- Topbar Start -->
   <div class="container-fluid bg-dark p-0">
       <div class="row gx-0 d-none d-lg-flex">
           <div class="col-lg-7 px-5 text-start">
               <div class="h-100 d-inline-flex align-items-center me-4">
                   <small class="fa fa-map-marker-alt text-primary me-2"></small>
                   <small>{{$data->address}}</small>
               </div>
               <!--     <div class="h-100 d-inline-flex align-items-center">
                   <small class="far fa-clock text-primary me-2"></small>
                   <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
               </div> -->
           </div>
           <div class="col-lg-5 px-5 text-end">
               <div class="h-100 d-inline-flex align-items-center me-4">
                   <small class="fa fa-phone-alt text-primary me-2"></small>
                   <small>{{$data->mobile}}</small>
               </div>
               <div class="h-100 d-inline-flex align-items-center mx-n2">
                   <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                   <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                   <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                   <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
               </div>
           </div>
       </div>
   </div>
   <!-- Topbar End -->

   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
       <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
           <img src="{{asset('FrontEnd/img/logo.svg')}}" alt="..." height="36">
       </a>
       <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
           <div class="navbar-nav ms-auto p-4 p-lg-0">
               <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
               <a href="#" class="nav-item nav-link">About Us</a>
               <div class="nav-item dropdown">
                   <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Inventory</a>
                   <div class="dropdown-menu bg-light m-0">
                       <a href="#" class="dropdown-item">Round</a>
                       <a href="#" class="dropdown-item">Cushion</a>
                       <a href="#" class="dropdown-item">Emerald</a>
                       <a href="#" class="dropdown-item">Oval</a>
                       <a href="#" class="dropdown-item">Radiant</a>
                   </div>
               </div>

               <a href="#" class="nav-item nav-link">Education</a>
               <a href="#" class="nav-item nav-link">Contact</a>
           </div>
           <a href="{{url('/login')}}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
       </div>
   </nav>
   <!-- Navbar End -->