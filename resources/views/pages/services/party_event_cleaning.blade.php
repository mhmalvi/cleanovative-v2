@extends('pages.service_details')

@section('banner')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb3.webp') }});">
        <div class="container">
            <div class="breadcrumb-text text-center col-md-8 mx-auto">
                <h1 class="page-title text-dark">
                    Party-Event Cleaning
                </h1>
                <div class="service-banner-content">
                    <p>
                        Planning on having a party or an event? Worried about the mess after? At Cleanovative we cater for every after party cleaning services.
                        While you grab a coffee and enjoy the memories of your crazy night, our experienced team will help you clean your entire house or event with
                        quality products and make it spotless. Our areas of focus are pool, lounge, back deck and other areas where the fun happens.
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

@section('service_title', 'Party-Event Cleaning')

@section('service_content')
<div class="pt-100 pb-50"></div>
@endsection

@section('checklist')
    <div class="container mt-100 mb-50">
        <h2 class="sub-title text-md-center mb-85">
            What is included in our party cleaning service?
        </h2>
        <ul class="nav nav-pills service-nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link service-nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Standard</a>
            </li>
        </ul>

        <p class="text-center mt-25 mb-25">
            Our office cleaning service is perfect for preparing the homes for new tenants/owners, homes needing extra care, or getting your bond money back.
        </p>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row mt-100">
                    <div class="col-md-6">
                        <h6 class="text-uppercase mb-3">Standard Services</h6>

                        <ul class="service-checklist">
                            <li>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Round up garbage<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Pack leftovers<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Load the dishwasher<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Load the washer<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Wipe up spills<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Check for strains on carpet/rugs<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Wipe down kitchen counters<br>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6 mb-5 mb-md-0 order-first order-md-last d-flex align-items-center">
                        <img src="{{ asset('images/services/party1.webp') }}" class="img-fluid rounded">
                    </div>
                </div>

                <div class="row mt-100">
                    <div class="col-md-6 mb-5 mb-md-0 d-flex align-items-center">
                        <img src="{{ asset('images/services/party2.webp') }}" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-uppercase mb-3">Optional Services</h6>

                        <ul class="service-checklist">
                            <li>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Run the dishwaher<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Put away decor pieces<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Clean kitchen areas<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Tidy up<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Wipe the furniture<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Vacuum the floor<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Mop the floor<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Clean bathroom surfaces<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Clean outdoor areas<br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-85">
            <a class="main-btn booking-btn main-btn-3" href="{{ route('book_now') }}" target="_blank">
                Book Now
                <i class="fal fa-plus"></i>
            </a>
        </div>
    </div>
@endsection

@section('custom_form')
    @include('components.service_details.commercial_booking_form')
@endsection
