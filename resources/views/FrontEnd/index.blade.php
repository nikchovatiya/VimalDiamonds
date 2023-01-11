@extends('FrontEnd\layout')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='FrontEnd/img/carousel-1.jpg'>">
            <img class="img-fluid" src="{{asset('FrontEnd/img/carousel-1.jpg')}}" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <!--  <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='FrontEnd/img/carousel-2.jpg'>">
            <img class="img-fluid" src="{{asset('FrontEnd/img/carousel-2.jpg')}}" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <!--                                 <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='FrontEnd/img/carousel-3.jpg'>">
            <img class="img-fluid" src="{{asset('FrontEnd/img/carousel-3.jpg')}}" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <!--   <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('FrontEnd/img/about.jpg')}}" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">About Us</h6>
                    <h1 class="mb-4" style="font-size:38px;">Welcome to {{$data->companyname}}</h1>
                    <p style="text-align: justify;">Transparency and Faith are gems-stone for our company from our customers. And we work on this trust of customers and stakeholders. {{$data->companyname}} objective is to establish itself firmly as a leader in the global jewellery market by manufacturing and marketing the finest quality diamonds to consumers across the world with customers faith.</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Natural Diamonds</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Lab Grown Diamonds</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Fancy Colored Diamonds</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">View Inventory</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <!--  <h6 class="text-primary">Our Inventory</h6> -->
            <h1 class="mb-4">Explore Shapes</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('FrontEnd/img/Round.svg')}}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <!--      <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div> -->
                        <br />
                        <h4 class="mb-3" style="text-align: center;">Round</h4>
                        <!--  <p style="text-align: justify;">The round cut is, by far, the most preferred diamond shape, the cut is also the most optically brilliant because of its 360-degree symmetrical shape. A round brilliant is a great choice if you want the most sparkle and the most enduring classic shape. The round silhouette works with almost every mounting, from classic solitaires to the most avant-garde designs.</p> -->
                        <a class="small fw-medium" href="{{url('/education')}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('FrontEnd/img/Cushion.svg')}}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <!--      <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div> -->
                        <br />
                        <h4 class="mb-3" style="text-align: center;">Cushion</h4>
                        <!-- <p style="text-align: justify;">The cushion brilliant cut is an elegantly shaped diamond that has recently gained popularity because of the heightened demand for vintage-styled jewelry. Combining the cut characteristics of both the round and the oval, the Cushion Cut's rounded corners and larger facets increase this special diamond's brilliance.</p> -->
                        <a class="small fw-medium" href="{{url('/education')}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('FrontEnd/img/Oval.svg')}}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <!--      <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div> -->
                        <br />
                        <h4 class="mb-3" style="text-align: center;">Oval</h4>
                        <!--  <p style="text-align: justify;">The shape of an oval diamond is recognizable, as its shape is defined by its name. The sparkle of the brilliant cut combined with the elongated shape of the oval makes it the perfect shape to accentuate long, slender fingers or at least give the appearance of longer, slender fingers.</p> -->
                        <a class="small fw-medium" href="{{url('/education')}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('FrontEnd/img/Radiant.svg')}}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <!--      <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div> -->
                        <br />
                        <h4 class="mb-3" style="text-align: center;">Radiant</h4>
                        <!--  <p style="text-align: justify;">The shape of an oval diamond is recognizable, as its shape is defined by its name. The sparkle of the brilliant cut combined with the elongated shape of the oval makes it the perfect shape to accentuate long, slender fingers or at least give the appearance of longer, slender fingers.</p> -->
                        <a class="small fw-medium" href="{{url('/education')}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('FrontEnd/img/Marquise.svg')}}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <!--      <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div> -->
                        <br />
                        <h4 class="mb-3" style="text-align: center;">Marquise</h4>
                        <!--  <p style="text-align: justify;">The shape of an oval diamond is recognizable, as its shape is defined by its name. The sparkle of the brilliant cut combined with the elongated shape of the oval makes it the perfect shape to accentuate long, slender fingers or at least give the appearance of longer, slender fingers.</p> -->
                        <a class="small fw-medium" href="{{url('/education')}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('FrontEnd/img/Pear.svg')}}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <!--      <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div> -->
                        <br />
                        <h4 class="mb-3" style="text-align: center;">Pear</h4>
                        <!--  <p style="text-align: justify;">The shape of an oval diamond is recognizable, as its shape is defined by its name. The sparkle of the brilliant cut combined with the elongated shape of the oval makes it the perfect shape to accentuate long, slender fingers or at least give the appearance of longer, slender fingers.</p> -->
                        <a class="small fw-medium" href="{{url('/education')}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Why Choose Us!</h6>
                    <h1 class="mb-4">Geard up your cherised Business!</h1>
                    <p class="mb-4 pb-2" style="text-align: justify;">Now you have the power to grow your business in international markets with {{$data->companyname}}. With together supercharge our businesses.</p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <!-- <p class="mb-0">Quality</p> -->
                                    <h5 class="mb-0">Unique Collection</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-user-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <!-- <p class="mb-0">Orders</p> -->
                                    <h5 class="mb-0">Quick Shipment</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-drafting-compass text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <!--  <p class="mb-0">Test</p> -->
                                    <h5 class="mb-0">Best Quality</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-headphones text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <!--  <p class="mb-0">Customer</p> -->
                                    <h5 class="mb-0">Customer Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('FrontEnd/img/feature.jpg')}}" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->







<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <!-- <h1 class="mb-0" data-toggle="counter-up">4234</h1> -->
                    <h1 class="mb-0" style="font-size:30px;">Look</h1>
                </div>
                <span>Colorless, flawless and ideal cut. <br /> Everytime.</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <!-- <h1 class="mb-0" data-toggle="counter-up">4234</h1> -->
                    <h1 class="mb-0" style="font-size:30px;">Cost</h1>
                </div>
                <span>Transparent pricing, Great value for money.</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <!-- <h1 class="mb-0" data-toggle="counter-up">4234</h1> -->
                    <h1 class="mb-0" style="font-size:30px;">Enviornment</h1>
                </div>
                <span>Conflict Free, No damage. Effortless.</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <!-- <h1 class="mb-0" data-toggle="counter-up">4234</h1> -->
                    <h1 class="mb-0" style="font-size:30px;">Quality</h1>
                </div>
                <span>Handcrafted to be passed down for generations.</span>
            </div>


        </div>
    </div>
</div>
<!-- Feature Start -->




<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Testimonial</h6>
            <h1 class="mb-4">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('FrontEnd/img/testimonial-1.jpg')}}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('FrontEnd/img/testimonial-2.jpg')}}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('FrontEnd/img/testimonial-3.jpg')}}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@stop