@extends('FrontEnd\layout')
@section('content')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">Our Story</h1>
                <p class="fs-7 fw-600 text-justify wow animate__animated animate__fadeInUp animated"
                    style="visibility: visible;">
                    {{ $data->companyname }} is one of the best leading companies of diamond industry. We are a family-owned
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
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('FrontEnd/img/about.jpg') }}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h1 class="mb-4" style="font-size:38px;">About {{ $data->companyname }}</h1>
                        <p style="text-align: justify;">Diamonds are rare and one of the precious gifts of Mother Nature.
                            {{ $data->companyname }} have established trust and served customers worldwide with high-quality
                            diamonds. Our experts make the perfect Shiny diamond for you. Expressing your love shouldn't
                            have to cost a fortune. We will be there with you every step of the way to educate you on how to
                            build the perfect ring for your loved one.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Solitaire Begin -->
    <style>
        .grid {
            position: relative;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1800px;
            list-style: none;
            text-align: center;
        }

        /* Common style */
        .grid figure {
            position: relative;
            float: left;
            overflow: hidden;
            margin: 10px 1%;
            min-width: 320px;
            max-width: 480px;
            max-height: 360px;
            width: 23%;
            background: #3085a3;
            text-align: center;
            cursor: pointer;
        }

        .grid figure img {
            position: relative;
            display: block;
            min-height: 100%;
            max-width: 100%;
            opacity: 0.8;
        }

        .grid figure figcaption {
            padding: 2em;
            color: #fff;
            text-transform: uppercase;
            font-size: 1.25em;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .grid figure figcaption::before,
        .grid figure figcaption::after {
            pointer-events: none;
        }

        .grid figure figcaption,
        .grid figure figcaption>a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Anchor will cover the whole item by default */
        /* For some effects it will show as a button */
        .grid figure figcaption>a {
            z-index: 1000;
            text-indent: 200%;
            white-space: nowrap;
            font-size: 0;
            opacity: 0;
        }

        .grid figure h2 {
            word-spacing: -0.15em;
            font-weight: 300;
        }

        .grid figure h2 span {
            font-weight: 800;
        }

        .grid figure h2,
        .grid figure p {
            margin: 0;
        }

        .grid figure p {
            letter-spacing: 1px;
            font-size: 48%;
        }


        /*---------------*/
        /***** Marley *****/
        /*---------------*/
        .effect-marley{
            height: 300px;
        
        }
        figure.effect-marley figcaption {
            text-align: right;
        }

        figure.effect-marley h2,
        figure.effect-marley p {
            position: absolute;
            right: 30px;
            color:#fff;
            left: 30px;
            padding: 10px 0;
        }


        figure.effect-marley p {
            bottom: 30px;
            line-height: 1.5;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        figure.effect-marley h2 {
            top: 30px;
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0);
        }

        figure.effect-marley:hover h2 {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        figure.effect-marley h2::after {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 4px;
            background: #fff;
            content: '';
            -webkit-transform: translate3d(0, 40px, 0);
            transform: translate3d(0, 40px, 0);
        }

        figure.effect-marley h2::after,
        figure.effect-marley p {
            opacity: 0;
            -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
            transition: opacity 0.35s, transform 0.35s;
        }

        figure.effect-marley:hover h2::after,
        figure.effect-marley:hover p {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }


     
        .icon-eye::before {
            content: '\e000';
        }

        .icon-paper-clip::before {
            content: '\e001';
        }

        .icon-heart::before {
            content: '\e024';
        }

        figure.effect-zoe h2 {
            display: inline-block;
        }

        figure.effect-zoe:hover p.description {
            opacity: 1;
        }

        figure.effect-zoe:hover figcaption,
        figure.effect-zoe:hover h2,
        figure.effect-zoe:hover p.icon-links a {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        figure.effect-zoe:hover h2 {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
        }

        figure.effect-zoe:hover p.icon-links a:nth-child(3) {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        figure.effect-zoe:hover p.icon-links a:nth-child(2) {
            -webkit-transition-delay: 0.15s;
            transition-delay: 0.15s;
        }

        figure.effect-zoe:hover p.icon-links a:first-child {
            -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }


        @media screen and (max-width: 50em) {
            .content {
                padding: 0 10px;
                text-align: center;
            }

            .grid figure {
                display: inline-block;
                float: none;
                margin: 10px auto;
                width: 100%;
            }
        }

        *,
        *:after,
        *:before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .clearfix:before,
        .clearfix:after {
            display: table;
            content: '';
        }

        .clearfix:after {
            clear: both;
        }


        a {
            outline: none;
            color: #3498db;
            text-decoration: none;
        }

        a:hover,
        a:focus {
            color: #528cb3;
        }

        section {
            padding: 1em;
            text-align: center;
        }

        .content {
            padding-top: 2%;
            margin: 0 auto;
            max-width: 1600px;
            height: auto;
        }

        .content>h2 {
            clear: both;
            margin: 0;
            padding: 4em 1% 0;
            color: #484B54;
            font-weight: 800;
            font-size: 1.5em;
            text-align: center;
        }

        .content>h2:first-child {
            padding-top: 0em;
        }

        /* Header */
        .codrops-header {
            margin: 0 auto;
            padding: 4em 1em;
            text-align: center;
        }

        .codrops-header h1 {
            margin: 0;
            font-weight: 800;
            font-size: 4em;
            line-height: 1.3;
        }

        .codrops-header h1 span {
            display: block;
            padding: 0 0 0.6em 0.1em;
            color: #74777b;
            font-weight: 300;
            font-size: 45%;
        }

        /* Demo links */
        .codrops-demos {
            clear: both;
            padding: 1em 0 0;
            text-align: center;
        }

        .content+.codrops-demos {
            padding-top: 5em;
        }

        .codrops-demos a {
            display: inline-block;
            margin: 0 5px;
            padding: 1em 1.5em;
            text-transform: uppercase;
            font-weight: bold;
        }

        .codrops-demos a:hover,
        .codrops-demos a:focus,
        .codrops-demos a.current-demo {
            background: #3c414a;
            color: #fff;
        }

        /* To Navigation Style */
        .codrops-top {
            width: 100%;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 0.69em;
            line-height: 2.2;
        }

        .codrops-top a {
            display: inline-block;
            padding: 1em 2em;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .codrops-top span.right {
            float: right;
        }

        .codrops-top span.right a {
            display: block;
            float: left;
        }

        .codrops-icon:before {
            margin: 0 4px;
            text-transform: none;
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            font-family: 'codropsicons';
            line-height: 1;
            speak: none;
            -webkit-font-smoothing: antialiased;
        }

        .codrops-icon-drop:before {
            content: "\e001";
        }

        .codrops-icon-prev:before {
            content: "\e004";
        }

        /* Related demos */
        .related {
            clear: both;
            padding: 6em 1em;
            font-size: 120%;
        }

        .related>a {
            display: inline-block;
            margin: 20px 10px;
            padding: 25px;
            border: 1px solid #4f7f90;
            text-align: center;
        }

        .related a:hover {
            border-color: #39545e;
        }

        .related a img {
            max-width: 100%;
            opacity: 0.8;
        }

        .related a:hover img,
        .related a:active img {
            opacity: 1;
        }

        .related a h3 {
            margin: 0;
            padding: 0.5em 0 0.3em;
            max-width: 300px;
            text-align: left;
        }



        @media screen and (max-width: 25em) {
            .codrops-header {
                font-size: 75%;
            }

            .codrops-icon span {
                display: none;
            }
        }
    </style>

    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-sm">
                  
                    <div class="content" >

                        <h2>Plans Ideas and Goals</h2>
                        <div class="grid">
                            <figure class="effect-marley">
                                <img src="{{asset('FrontEnd/img/technology-bg-img.webp')}}" alt="img11" />
                                <figcaption>
                                    <h2>Technology</h2>
                                    <p>In case of technology for diamonds, {{$data->companyname}} import diamond equipment from numerous parts of the world and consumers with the newest technologies so that the machinery they need can be upgraded. {{$data->companyname}} produce various features from different countries as each nation is a specialist in each component to provide our customers with the best diamond machinery.</p>
                                   
                                </figcaption>
                            </figure>
                            <figure class="effect-marley">
                                <img src="{{asset('FrontEnd/img/vision-bg-img.webp')}}" alt="img12" />
                                <figcaption>
                                    <h2>{{$data->companyname}}</h2>
                                    <p>We are a family-owned diamond business. {{$data->companyname}} is one of the leading diamond cutters and importers in India and fine gem designers in India.

                                        Our offices have been opened to private clients to provide direct access to an excellent range of diamonds and an exclusive array of more than 2,500 styles, which are typically only accessible to the top wholesalers and retailers globally. Much of this is available for wholesalers buying at the same amount.</p>
                                    
                                </figcaption>
                            </figure>
                            <figure class="effect-marley">
                                <img src="{{asset('FrontEnd/img/conflict-bg-img.webp')}}" alt="img12" />
                                <figcaption>
                                    <h2>Conflict Free</h2>
                                    <p>We are conducted with the notion that it is enjoyable to purchase diamonds. This is a unique and stunning investment, and {{$data->companyname}} is here to help you pick the best diamond at the right price.</p>
                                    
                                </figcaption>
                            </figure>
                            <figure class="effect-marley">
                                <img src="{{asset('FrontEnd/img/eco-bg-img.webp')}}" alt="img12" />
                                <figcaption>
                                    <h2>Eco Friendly</h2>
                                    <p>We work Eco-friendly i.e. {{$data->companyname}} first assess the nature and the weight of a consumer and then give a full variety of solutions. Looking at loose diamonds is incredibly necessary. The color of a setting can influence the diamond color, and a set may mask inclusions that you can see only when you are loose. Of course, if it has an environment, there is no way to decide proper diamond carat weight correctly.</p>
                                    
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Solitaire End -->
@stop
