@extends('FrontEnd\layout')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">




<div class="container-xxl py-5">
    <div class="container">



    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                  <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h1 class="mb-4" style="font-size:38px;">Diamond Shapes</h1>
</div>
                    <div class="row de-row">
                <p class="fs-7 fw-600 text-justify wow animate__animated animate__fadeInUp">Diamonds have been around for billions of years, but only a few hundred years ago did man discover that an uncut diamond can be transformed into a faceted gem, and by doing so more light and beauty could be unleashed. This discovery lead to more diamond and shapes and cuts.</p>
                <p class="fs-7 fw-600 text-justify wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">Diamond shapes refer to the form or general outline of a diamond. It is not uncommon to confuse the ‘shape’ and ‘cut’ of a diamond, as they are considered to be synonyms, which is understandable because diamond “names” include the word cut, such as princess cut or emerald cut. However, there is a significant difference between the shape and cut of a diamond. Shape describes a diamond's form, symmetry and proportions (e.g. round, square, triangle) whereas cut refers to the specifications (e.g. ideal, excellent, very good) of a diamond.</p>
                <p class="fs-7 fw-600 text-justify wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">The shape of a diamond is a customer’s first priority when selecting a diamond for an engagement ring, wedding band or piece of jewelry, whether that is a pendant, bracelet or a pair of earrings.</p>
            </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>






        <div class="row g-5">
        <div class="row align-items-center justify-content-center  border-bottom border-secondary ds-row r_a k_a"  style="padding:2%;" id="Round-Brilliant">
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInLeft">
                    <img src="{{asset('FrontEnd/img/Round.svg')}}" alt="Round" class="img w-100">
                </div>
                <div class="col-12 col-md-9 text-md-st text-ce py-md-0 py-3 wow animate__animated animate__bounceInRight">
                    <h3 class="text-dark fw-600 fs-4 fonti">Round Brilliant</h3>
                    <p class="fs-7 fw-600 text-justify">The round cut is, by far, the most preferred diamond shape, the cut is also the most optically brilliant because of its 360-degree symmetrical shape. A round brilliant is a great choice if you want the most sparkle and the most enduring classic shape. The round silhouette works with almost every mounting, from classic solitaires to the most avant-garde designs.</p>
   
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center  border-bottom border-secondary ds-row r_a k_a" style="padding:2%;" id="Princess">
                <div  style="padding:2%" class="col-12 col-md-9 text-md-ed text-ce py-md-0 py-3 wow animate__animated animate__bounceInLeft" >
                    <h3 class="text-dark fw-600 fs-4 fonti">Princess</h3>
                    <p class="fs-7 fw-600 text-justify">The Princess Cut combines the liveliness of a Round diamond and the contemporary shape of an Emerald or Square cut to create one of the most brilliant fancy shapes of all. The princess cut is a modern classic with clean, square lines and beautiful sparkle. The shape of the Princess is distinguishable by its sharp right-angle corners and it is second most popular shape, after the round brilliant.</p>
                    
                </div>
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInRight">
                    <img src="{{asset('FrontEnd/img/Princess.svg')}}" alt="Princess" class="img w-100">
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center border-bottom border-secondary ds-row r_a k_a" style="padding:2%;" id="Cushion">
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInLeft">
                    <img src="{{asset('FrontEnd/img/Cushion.svg')}}" alt="Cushion" class="img w-100">
                </div>
                <div class="col-12 col-md-9 text-md-st text-ce py-md-0 py-3 wow animate__animated animate__bounceInRight">
                    <h3 class="text-dark fw-600 fs-4 fonti">Cushion</h3>
                    <p class="fs-7 fw-600 text-justify">The Cushion Cut is an elegantly shaped diamond that has recently gained popularity because of the heightened demand for vintage-styled jewelry. Combining the cut characteristics of both the round and the oval, the Cushion Cut's rounded corners and larger facets increase this special diamond's brilliance.</p>
                    
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center  border-bottom border-secondary ds-row r_a k_a" style="padding:2%;" id="Emerald">
                <div class="col-12 col-md-9 text-md-ed text-ce py-md-0 py-3 wow animate__animated animate__bounceInLeft">
                    <h3 class="text-dark fw-600 fs-4 fonti">Emerald</h3>
                    <p class="fs-7 fw-600 text-justify">The emerald-cut is defined by its special facet arrangement, which is cut with parallel facets to create a unique optical appearance. The top (the table) is large and open, and the special “step-like” cut highlights the clarity of a diamond. The emerald shape is traditionally rectangular, but the length-to-width ratio can vary.</p>
                    
                </div>
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInRight">
                    <img src="{{asset('FrontEnd/img/Emerald.svg')}}" alt="Emerald" class="img w-100">
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center  border-bottom border-secondary ds-row r_a k_a" style="padding:2%;" id="Radiant">
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInLeft">
                    <img src="{{asset('FrontEnd/img/Radiant.svg')}}" alt="Radiant" class="img w-100">
                </div>
                <div class="col-12 col-md-9 text-md-st text-ce py-md-0 py-3 wow animate__animated animate__bounceInRight">
                    <h3 class="text-dark fw-600 fs-4 fonti">Radiant</h3>
                    <p class="fs-7 fw-600 text-justify">A radiant cut combines the outline of an emerald with the brilliance of a round. The faceting pattern is quite similar to a round brilliant, though the outline is either square or rectangular, with the corners cut. Similar to a princess cut, radiants carry more weight in the depth of the diamond and have higher color concentration than other shapes.</p>
                    <
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center  border-bottom border-secondary ds-row r_a k_a" style="padding:2%;" id="Oval">
                <div class="col-12 col-md-9 text-md-ed text-ce py-md-0 py-3 wow animate__animated animate__bounceInLeft">
                    <h3 class="text-dark fw-600 fs-4 fonti">Oval</h3>
                    <p class="fs-7 fw-600 text-justify">The shape of an oval diamond is recognizable, as its shape is defined by its name. The sparkle of the brilliant cut combined with the elongated shape of the oval makes it the perfect shape to accentuate long, slender fingers or at least give the appearance of longer, slender fingers. The length-to-width ratio of the oval’s dimensions will determine the outline, or what it the diamond will look like when viewed from the top. A ratio of 1.33 to 1.66 is the traditional range of oval shaped diamonds.</p>
                    
                </div>
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInRight">
                    <img src="{{asset('FrontEnd/img/Oval.svg')}}" alt="Oval" class="img w-100">
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center  border-bottom border-secondary ds-row r_a k_a" style="padding:2%;" id="Asscher">
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInLeft">
                    <img src="{{asset('FrontEnd/img/Asscher.svg')}}" alt="Asscher" class="img w-100">
                </div>
                <div class="col-12 col-md-9 text-md-st text-ce py-md-0 py-3 wow animate__animated animate__bounceInRight">
                    <h3 class="text-dark fw-600 fs-4 fonti">Asscher</h3>
                    <p class="fs-7 fw-600 text-justify">Introduced in 1902 by renowned diamond cutter Joseph Asscher, this diamond shape utilizes many of the same cutting techniques as the emerald cut. What sets asscher diamonds apart are their uniquely angled and cropped corners creating a timeless look. The most famous Asscher cut is the Cullinan diamond. An Asscher cut diamond is technically known as a ‘square emerald cut’. The ideal length to width ratio is between 1.00 and 1.05:1.</p>
                    
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center  border-bottom border-secondary ds-row r_a k_a" style="padding:2%;" id="Pear">
                <div class="col-12 col-md-9 text-md-ed text-ce py-md-0 py-3 wow animate__animated animate__bounceInLeft">
                    <h3 class="text-dark fw-600 fs-4 fonti">Pear</h3>
                    <p class="fs-7 fw-600 text-justify">The Pear shape is a unique hybrid cut, shaped like a tear drop and combining the best of the marquise and round brilliant cut. Well proportioned, it gives a depth of scintillation to the point of the diamond. Pear shapes are extremely popular in rings, earrings and pendants. Pear shapes are typically polished with 58 facets, and the optimal length-to-width ratio is between 1.50 and 1.75:1.</p>
                    
                </div>
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInRight">
                    <img src="{{asset('FrontEnd/img/Pear.svg')}}" alt="Pear" class="img w-100">
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center  border-bottom border-secondary ds-row r_a k_a" style="padding:2%;" id="Marquise">
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInLeft">
                    <img src="{{asset('FrontEnd/img/Marquise.svg')}}" alt="Marquise" class="img w-100">
                </div>
                <div class="col-12 col-md-9 text-md-st text-ce py-md-0 py-3 wow animate__animated animate__bounceInRight">
                    <h3 class="text-dark fw-600 fs-4 fonti">Marquise</h3>
                    <p class="fs-7 fw-600 text-justify">The Marquise has a slender shape characterised by two sharp points on either end. Like the Oval, the Marquise accentuates long, slender fingers and has a large surface area. The standard number of facets on a Marquise cut is 58.</p>
                    <p class="fs-7 fw-600 text-justify">The Marquise Cut was inspired by the fetching smile of the Marquise de Pompadour and commissioned by King Louis XIV, who wanted a diamond to match the smile. The optimal ratio of length-to-width is 2:1, although a range between 1.75 and 2.25:1 is also acceptable.</p>
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center  border-bottom border-secondary ds-row r_a k_a" style="padding:2%;" id="Heart-Shape">
                <div class="col-12 col-md-9 text-md-ed text-ce py-md-0 py-3 wow animate__animated animate__bounceInLeft">
                    <h3 class="text-dark fw-600 fs-4 fonti">Heart Shape</h3>
                    <p class="fs-7 fw-600 text-justify">Living up to its name, the heart cut diamond has become synonymous with love and affection, making it an excellent choice for an anniversary or engagement ring. One of the most demanding diamond cuts to create, a heart shaped stone requires great skill and dexterity from the diamond cutter.</p>
                    
                </div>
                <div class="col-12 col-md-3 wow animate__animated animate__bounceInRight">
                    <img src="{{asset('FrontEnd/img/Heart.svg')}}" alt="Heart" class="img w-100">
                </div>
            </div>

        </div>
    </div>
</div>


            
            
            

    
</div>
<!-- Carousel End -->


@stop