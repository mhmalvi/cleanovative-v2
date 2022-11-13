<section class="appointment-section pt-80 pb-80" id="commercialBookingForm">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div
                class="appointment-text bg-cover"
                style="background-image: url({{ asset('images/appointment-bg.webp') }})"
                >
                    <div class="appointment-content">
                        <div class="section-title left-border mb-40">
                            <h2>Contact Us Today For A Free Quote</h2>
                            <p class="title-tag">Contact Us</p>
                        </div>
                        <p>Starting with us is easy:</p>
                        <ol class="list-style-type-square pl-3">
                            <li>Contact us and organise a free quotation</li>
                            <li>
                                One of our friendly managers will come to your space and
                                will do a walk through with you and indentify what you
                                require.
                            </li>
                            <li>We then draw up and send our quotation to you.</li>
                            <li>
                                Once you accept our quotation we organise a start date that
                                suits you.
                            </li>
                        </ol>
                        <div class="read-more-btn">
                            <a href="#">Start experiencing clean today!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <!-- appointment form -->
                <div class="appointment-form">
                    <div
                    class="form-title bg-cover"
                    style="background-image: url({{ asset('images/form-title-bg.webp') }})"
                    >
                        <h2>Request A Quote</h2>
                    </div>
                    <commercial-booking-form-component />
                </div>
            </div>
        </div>
    </div>
</section>
