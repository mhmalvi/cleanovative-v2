@extends('pages.service_details')

@section('banner')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb6.webp') }});">
        <div class="container">
            <div class="breadcrumb-text text-center col-md-8 mx-auto">
                <h1 class="page-title text-dark">
                    Other Commercial Cleaning
                </h1>
                <div class="service-banner-content">
                    <p>
                        Apart from the specialist industry-based cleaning, Cleanovative can also provide generalist building cleaning services for all types of Sydney businesses.
                        We can clean Schools, Childcare, Offices, Industrial, Warehouses, Restaurants/cafes, Leisure/sport centres, Gyms, Hotels, Retreats, Showrooms & Retail outlets ,
                        Stadium, bank branches and many more
                    </p>
                </div>
                <div class="mt-40">
                    <a class="main-btn main-btn-2 mt-10 mb-0" href="tel:+61450007982">
                        Call us now
                        <i class="fas fa-headset"></i>
                    </a>
                </div>
                <div class="mt-10">
                    <a class="main-btn main-btn-3 mt-10 mb-0" href="#commercialBookingForm">
                        Request a quote
                        <i class="fal fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
@endsection

@section('service_title', 'Other Commercial Cleaning')

@section('service_content')
    <div class="pt-100 pb-100">
        <div class="d-flex justify-content-center">
            <img src="{{asset('images/services/other.webp')}}" alt="">
        </div>
    </div>
@endsection

@section('custom_form')
    @include('components.service_details.commercial_booking_form')
@endsection
