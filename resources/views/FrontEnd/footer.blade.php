
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$data->address}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$data->mobile}}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$data->email}}</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="{{url('/about')}}">About Us</a>                    
                    <a class="btn btn-link" href="{{url('/education')}}">Education</a>
                    <a class="btn btn-link" href="{{url('/contact')}}">Contact Us</a>
                    <a class="btn btn-link" href="{{url('/termscondition')}}">Terms & Condition</a>
               
                </div>
<!--                 <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Project Gallery</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('FrontEnd/img/gallery-1.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('FrontEnd/img/gallery-2.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('FrontEnd/img/gallery-3.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('FrontEnd/img/gallery-4.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('FrontEnd/img/gallery-5.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('FrontEnd/img/gallery-6.jpg')}}" alt="">
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <!-- <p>Write to us</p> -->
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">{{$data->companyname}}</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="#">Vimal Techologies</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


