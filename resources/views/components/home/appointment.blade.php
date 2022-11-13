<!--====== APPOINTMENT PART START ======-->
<section class="appointment-section pt-90 pb-130">
    <div class="container">
        <div class="contact-info-boxes">
            <div class="row">
                <div class="col-md-4">
                    <!-- Single Boxes -->
                    <div class="card pt-25 pb-25 text-center mt-25 bg-theme-extra-light shadow-sm border-second-color">
                        <div class="card-body">
                            <span class="icon h2">
                                <img src="{{ asset('images/icons/contact.webp') }}" alt="phone">
                            </span>
                            <h6 class="title py-2">Phone Number</h6>
                            <p class="info"><a href="tel:+61450007982">+61450007982</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Single Boxes -->
                    <div class="card pt-25 pb-25 text-center mt-25 bg-theme-extra-light shadow-sm border-second-color">
                        <div class="card-body">
                        <span class="icon h2">
                            <img src="{{ asset('images/icons/mail.webp') }}" alt="email">
                        </span>
                        <h6 class="title py-2">Email Address</h6>
                        <p class="info">
                            <a href="mailto:info@cleanovative.com.au">
                                info@cleanovative.com.au
                            </a>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Single Boxes -->
                    <div class="card pt-25 pb-25 text-center mt-25 bg-theme-extra-light shadow-sm border-second-color">
                        <div class="card-body">
                        <span class="icon h2">
                            <img src="{{ asset('images/icons/location.webp') }}" alt="address">
                        </span>
                            <h6 class="title py-2">Address</h6>
                            <p class="info">
                                111/2 Macquarie Road Auburn NSW 2144
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-60 pt-5">
            <div class="col-md-6 pt-50 pb-5">
                <div class="section-title left-border mb-30">
                    <h2 class="pt-0">Say Hello</h2>
                    <p class="title-tag">Leave A Message</p>
                </div>

                <contact-us-form-component />
            </div>
            <div class="col-md-6 pt-50 pb-15 order-first order-md-last">
                <img src="{{asset('images/contact-us.webp')}}" alt="contact us" class="img-thumbnail">
            </div>
        </div>
    </div>
</section>
<!--====== APPOINTMENT PART END ======-->
