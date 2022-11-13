<header class="header-area">
    <div class="top-bar">
        <div class="container">
            <div class="welome-text">
                <ul class="top-list">
                    <li>
                        <i class="bi bi-headset mr-2"></i>
                        <span class="infos">
                            <a href="tel:0401396554">+61450007982</a>
                        </span>
                    </li>
                    <li>
                        <i class="bi bi-calendar2-check mr-2"></i>
                        <span class="infos">
                            07.00 am - 07.00 pm
                        </span>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="https://www.facebook.com/cleanovative" target="_blank">
                            <img src="{{asset('images/icons/facebook.png')}}" alt="fb" width="16" height="16">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/cleanovative/" target="_blank">
                            <img src="{{asset('images/icons/instagram.png')}}" alt="instaa" width="16" height="16">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo-mt-neg main-logo" href="{{ URL::to('/') }}">
                                <img src="{{ asset('images/logos/logo_300.webp') }}" alt="cleanovative" />
                            </a>
                            <a class="navbar-brand sticky-logo" href="{{ URL::to('/') }}">
                                <img src="{{ asset('images/logos/logo_300.webp') }}" alt="cleanovative">
                            </a>
                            <!-- logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <!-- navbar toggler -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('home') }}">
                                            Home
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about_us') }}">
                                            About Us
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">
                                            Services & Pricing
                                            <i class="bi bi-arrow-down-short"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('service.house_cleaning') }}">Home Cleaning</a>
                                                <a href="{{ route('service.deep_cleaning') }}">Deep Cleaning</a>
                                                <a href="{{ route('service.end_of_lease_cleaning') }}">End of Lease Cleaning</a>
                                                <a href="{{ route('service.office_cleaning') }}">Office Cleaning</a>
                                                <a href="{{ route('service.party_event_cleaning') }}">Party-Event Cleaning</a>
                                                <a href="{{ route('service.construction_cleaning') }}">Construction Cleaning</a>
                                                <a href="{{ route('service.strata_cleaning') }}">Strata Cleaning</a>
                                                <a href="{{ route('service.other_cleaning') }}">Other Cleaning</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('gift_cards') }}" target="_blank">
                                            Gift Cards
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">
                                            More
                                            <i class="bi bi-arrow-down-short"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('contact') }}">
                                                    Contact us
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('faq') }}">
                                                    FAQ
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('terms_and_conditions') }}">
                                                    Terms & Conditions
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('privacy_policy') }}">
                                                    Privacy Policy
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item d-sm-none d-xs-block">
                                        <a class="nav-link" href="{{ route('signin') }}" target="_blank">
                                            Sign in
                                        </a>
                                    </li>
                                    <li class="nav-item d-sm-none d-xs-block">
                                        <a class="nav-link" href="{{ route('book_now') }}" target="_blank">
                                            Book Now
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- navbar collapse -->
                            <div class="navbar-btn d-none d-sm-block">
                                <a class="main-btn main-btn-2 btn-sm signin-btn" href="{{ route('signin') }}" target="_blank">
                                    Sign in
                                </a>
                                <a class="main-btn btn-sm booking-btn" href="{{ route('book_now') }}" target="_blank">
                                    Book Now
                                </a>
                            </div>
                        </nav>
                    </div>
                    <!-- navigation -->
                </div>
            </div>
        </div>
    </div>
</header>
