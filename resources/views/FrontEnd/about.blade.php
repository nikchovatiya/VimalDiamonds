@extends('FrontEnd\layout')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-4">Our Story</h1>
            <p class="fs-7 fw-600 text-justify wow animate__animated animate__fadeInUp animated"
                style="visibility: visible;">
                {{$data->companyname}} is one of the best leading companies of diamond industry. We are a family-owned
                diamond business. We offer consumers a beautiful, ethical, and affordable diamond. We have a team of
                experts for creating elegant diamonds with attractive shapes based on customer's vision and styles.
                Choose the diamonds from our exclusive collection.
            </p>
        </div>

    </div>
</div>

<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('FrontEnd/img/about.jpg')}}"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h1 class="mb-4" style="font-size:38px;">About {{$data->companyname}}</h1>
                    <p style="text-align: justify;">Diamonds are rare and one of the precious gifts of Mother Nature.
                        {{$data->companyname}} have established trust and served customers worldwide with high-quality
                        diamonds. Our experts make the perfect Shiny diamond for you. Expressing your love shouldn't
                        have to cost a fortune. We will be there with you every step of the way to educate you on how to
                        build the perfect ring for your loved one.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-4">Plan ideas and goals</h1>
            <p class="fs-7 fw-600 text-justify wow animate__animated animate__fadeInUp animated"
                style="visibility: visible;">
                {{$data->companyname}} is one of the best leading companies of diamond industry. We are a family-owned
                diamond business. We offer consumers a beautiful, ethical, and affordable diamond. We have a team of
                experts for creating elegant diamonds with attractive shapes based on customer's vision and styles.
                Choose the diamonds from our exclusive collection.
            </p>
        </div>

    </div>
</div>
@stop