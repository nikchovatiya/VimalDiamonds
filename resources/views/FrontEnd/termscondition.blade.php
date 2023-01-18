@extends('FrontEnd\layout')
@section('content')
<style>
     p
    {
        text-align: justify;
        
        
    }

    </style>
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" >
            <h1 class="my-4 py-4"> Terms & Conditions</h1>
            <h6 class="text-primary text-start">1. General Terms</h6>
            <p >
                This website www.viamldiamonds.in, is a copyrighted work belonging to the {{$data->companyname}} (referred to as "we," "us," and "our" going forward). The following terms of service (referred to as the "Terms") are a set of guidelines created to govern a visitor’s and user’s access to and use of the data, content and services available on this Site (referred to as the "Services").
            </p>
            <p>
                Users are requested to read these Terms carefully and abide by the same seriously. These terms are responsible for constituting a comprehensive and binding legal agreement between {{$data->companyname}} & the users. By using the site and its features, availing its services, you (the User) give your unconditional agreement to be bound by the Terms, exclusions and limitations mentioned below.
            </p>
            <p>
                You also confirm that you have complete authority, legal & otherwise to use the site and its related services. In case you do not agree to any part/s of this term, you may not & should not proceed with accessing and using the site or its services
            </p>


            <p>
                <span class="text-primary">{{$data->companyname}} </span>reserves all rights to modify or update these Terms & conditions at any point of time with or without prior notification. By using the site and its services, you also agree that every visit that you make to the site will be in accordance with the current terms and conditions published on the site.
            </p>

            <h6 class="text-primary text-start pt-3">2. Website Usage Terms</h6>
            <p>
                All users must be at least 18 years of age. By using this site, you confirm that you are 18+. This Site operates as a marketplace for diamond traders. Subject to these Terms, the {{$data->companyname}} grants you a personal, worldwide, non-transferable, non-exclusive, permit to access the Site. This permission must be used only in the manners approved by these Terms.
            </p>
            <p>
                By using {{$data->companyname}} Marketplace (the "Site"), you acknowledge your complete assent, without modification or limitation, to these Terms and Conditions. By using the Site and its services, you are agreeing to be bound by these Use Terms & Conditions and all applicable laws and regulations. You agree that you as the user are fully and solely responsible for compliance with any applicable local laws.
            </p>
            <h6 class="text-primary text-start pt-3">3. As a Buyer on {{$data->companyname}}, you agree to:</h6>
            <p>
                Provide honest information in your customer account. Try not to fake the process of buying any products. Multiple attempts at purchasing without the actual intention to go through the full buying process with the same or multiple sellers might flag your account for suspicious activity.
            </p>
            <p>
                At no point of time will you attempt to defraud a seller, doing so will lead to an instant ban from the marketplace. You will not use a stolen or unauthorized credit/debit card or another illegal mode of payment to purchase a product. Always ensure that the credit card used has the same shipping and billing address. Failure to do so may lead to order cancellation.
            </p>
            <p>
                If a product you purchased is lost or damaged during shipping, you will contact the seller or shipping directly to resolve the matter. {{$data->companyname}} shall try its best to resolve the issue in its capacity, but can NOT be held accountable for any such disputes. On receipt of a product, you will not claim a refund after intentionally or unintentionally damaging the product.
            </p>
            <p>
                It is advisable to record a complete unboxing video after you’ve received the product to avoid any hassle in the future.
            </p>
            <p>
                You will not contact a seller or any prospective seller to purchase or negotiate outside the scope of {{$data->companyname}}, doing so may lead to being barred from the site and charged a termination fee.
            </p>
            <h6 class="text-primary text-start pt-3 py-1">(Failure to abide by the aforementioned regulations may lead to legal action.)</h6>
        </div>

    </div>
</div>




@stop