@extends('pages.service_details')

@section('banner')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb5.webp') }});">
        <div class="container">
            <div class="breadcrumb-text text-center col-md-8 mx-auto">
                <h1 class="page-title text-dark">
                    Strata Cleaning
                </h1>
                <div class="service-banner-content">
                    <p>
                        Strata is one of the major maintenance industries for real-estate. At Cleanovative, we make sure our professional
                        team keeps your housing clean and spotless, making a safe and hygienic environment for all tenants in the building.
                        We work with the construction & building committee and site managers to keep all pub areas and amenities clean and hygienic.
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

@section('service_title', 'Strata Cleaning')

@section('service_content')
<div class="pt-100 pb-50"></div>
@endsection

@section('checklist')
    <div class="container mt-30 mb-70">
        <h2 class="sub-title text-md-center mb-85">
            What is included in our strata cleaning service?
        </h2>
        <ul class="nav nav-pills service-nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link service-nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Standard</a>
            </li>
        </ul>

        <p class="text-center mt-25 mb-25">
            Our strata cleaning service is perfect for preparing the homes for new tenants/owners, homes needing extra care, or getting your bond money back.
        </p>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row mt-100">
                    <div class="col-md-6">
                        <h6 class="text-uppercase mb-3">Internal common areas</h6>

                        <ul class="service-checklist">
                            <li><span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Remove Loose Rubbish.<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Sweep & Mop Fire Stairs.<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Sweep & Mop Common Area Stairs.<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Wall Scuff Marks Cleaned<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Cobwebs Removed<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Picture Frames Dusted<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Window Sills & Windows Dusted & Cleaned<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Stairwell Balustrade Dusted & Cleaned<br>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0 order-first order-md-last d-flex align-items-center">
                        <img src="{{ asset('images/services/strata-1.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <div class="row mt-100">
                    <div class="col-md-6 mb-5 mb-md-0 d-flex align-items-center">
                        <img src="{{ asset('images/services/strata-2.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-uppercase mb-3">External common areas</h6>

                        <ul class="service-checklist">
                            <li>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Refill of biodegradable toilet paper, soap dispenser and paper towel.<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Remove Loose Rubbish<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Mailboxes Cleaned<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Take In / Out Bins<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Remove Cobwebs<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Clean Bins<br>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-100">
                    <div class="col-md-6">
                        <h6 class="text-uppercase mb-3">Foyers</h6>

                        <ul class="service-checklist">
                            <li>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Vacuum / Mop Floors<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Clean Light Switches<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Remove Loose Rubbish<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Remove Cobwebs<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Clean Windows & Window Sills<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Cleaning & Dusting Furniture<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Glass Door & Mirrors Cleaned<br>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0 order-first order-md-last d-flex align-items-center">
                        <img src="{{ asset('images/services/strata-3.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <div class="row mt-100">
                    <div class="col-md-6 mb-5 mb-md-0 d-flex align-items-center">
                        <img src="{{ asset('images/services/strata-4.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-uppercase mb-3">Additional services</h6>

                        <ul class="service-checklist">
                            <li>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Carpet Steam Cleaning<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Pressure Washing<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Car Park / Basement Cleaning<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Remove Cobwebs<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Clean Windows & Window Sills<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Cleaning & Dusting Furniture<br>
                                <span class="correct"><i class="bi bi-check2-circle mr-2"></i></span>Glass Door & Mirrors Cleaned<br>
                            </li>
                        </ul>
                        We can cater to most strata cleaning demands, give us a call to learn more.
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
