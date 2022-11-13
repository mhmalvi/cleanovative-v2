@extends('layouts.app')

@section('title', 'FAQ | Cleanovative')

@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.webp') }});">
        <div class="container">
            <div class="breadcrumb-text text-center">
                <h1 class="page-title text-dark">FAQ</h1>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== FAQ PART START ======-->
    <section class="faq-wapper pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-wrap">
                        <div class="section-title left-border mb-30">
                            <h2>Freequently Ask Questions</h2>
                        </div>

                        <div class="mb-100">
                            <h3 class="mb-25 text-theme-light">General Enquiries</h3>
                            <div class="faq-accordion accordion" id="faqAccordion">
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faqOne">
                                            Are We Covered by Insurance?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faqOne" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            Absolutely, as professional cleaning service providers, we are insured.
                                            For proof of insurance or any other legal documents please email us at
                                            <a href="mailto:info@cleanovative.com.au">info@cleanovative.com.au</a>
                                            and we will gladly forward you our business documents.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse"
                                            data-target="#faqTwo">
                                            What do we mean my “100% Satisfaction Guaranteed”?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faqTwo" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p>
                                                Our team’s commitment to the job and making sure your requirements are met to your
                                                liking and bringing a smile on your face is the sole representation of our 100
                                                Satisfaction Guaranteed. Should you have concerns with our service, we will make it right.
                                            </p>

                                            <h4>For escalation</h4>
                                            <ul>
                                                <li>
                                                    - You will have 24 hours to call us on 1800 xxx xxx and provide us with feedback and detail of your concerns or issues.
                                                </li>
                                                <li>
                                                    - A 48 hour flexible period will be provided for Move-in/Move-out services.
                                                </li>
                                                <li>
                                                    - A re-schedule cleaning will be appointed to you to address your concerns on the following business days.
                                                </li>
                                                <li>
                                                    - After our second appointment with you, should you have concerns, we will escalate the issue to our management, and if we fail to address your concerns, we will provide you with credit or a refund.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faqThree">
                                            Is it required for me to enter my payment details on booking?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faqThree" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            Yes, but we do not deduct credits from your account on booking, prior
                                            to scheduling we will place a hold on your account. Only after our job
                                            is complete, payment charges will be deducted from your account.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faqFour">
                                            Is our team pet friendly?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faqFour" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            Absolutely, our team loves animals, and through our training program,
                                            they are well trained on how to deal with cats, dogs or any other pets.
                                            We are a pet-friendly cleaning service provider and our team knows how
                                            to love, respect and care for all animals.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faqFive">
                                            Are there any late cancellation fees?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faqFive" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            At Cleanovative.com.au we want to make sure that all appointments are
                                            dealt with timely and by a professional team. This is why we provide a
                                            24 hour notice for any cancellation. Unfortunately, there will be a $50
                                            charge if cancellations are made on the day of your appointment.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faqSix">
                                            What if I am not satisfied with the cleaning?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faqSix" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            We stand by our satisfaction guarantee, a grace period of 24 hours will be provided
                                            to raise any concerns/issues. Should you have a concern about our service, please
                                            contact us within business hours and we will make an arrangement to rectify the situation.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faqSeven">
                                            Property Damage or Loss Policy?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faqSeven" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            If our team has made any mistake which results in your property damage or loss,
                                            please call us at +61450007982 or email us at info@cleanovative.com.au within
                                            24 hours after your service. Once we are updated on the issue, we will ask you
                                            to fill out a form. Please note that you will be given 14 days to resubmit the
                                            form after the date your property loss or damage ticket has been issued.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faqEight">
                                            Hazardous Working Condition?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faqEight" class="collapse" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            If our job site is deemed as a hazardous working condition where
                                            it is beyond our service packages, our team has the right to refuse
                                            to work and exit the premises. Due to such circumstances, you will
                                            be charged a $50 booking fee for holding our booking system.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-100">
                            <h3 class="mb-25 text-theme-light">Questions About our Cleaning services</h3>
                            <div class="faq-accordion accordion" id="faqAccordion2">
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faq2One">
                                            How long would it take to clean my house?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faq2One" class="collapse" data-parent="#faqAccordion2">
                                        <div class="card-body">
                                            Every job duration varies differently, for example a 3 bedroom deep-clean requires 3 hours.
                                            Depending on how many rooms and other spaces to clean, our time duration varies, to find an
                                            accurate timing, use our booking system to find out how long it would take us to finish the
                                            job.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse"
                                            data-target="#faq2Two">
                                            How many people will be coming to clean my house?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faq2Two" class="collapse" data-parent="#faqAccordion2">
                                        <div class="card-body">
                                            <p>
                                                A minimum of 2 people per job site is required to do a basic job, but depending on how big the job is, more can be needed to do the job in time. Unless some jobs site such as: studio apartment cleaning, 2 bedroom cleaning or even touch up cleaning only 1 person is enough.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faq2Three">
                                            Is your cleaner background checked for my safety and security?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faq2Three" class="collapse" data-parent="#faqAccordion2">
                                        <div class="card-body">
                                            Absolutely 100%, at Cleanovative we make sure all our staff members are background checked and have a safe police clearance. Before joining Cleanovative, we make sure most of our team is previously experienced and have a one-on-one interview with our management and undergo rigorous training which covers customer service, professional etiquettes and safety procedures. You can feel relieved that our team is safe, secure and professional.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faq2Four">
                                            Do we provide our own cleaning products, or do I have to?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faq2Four" class="collapse" data-parent="#faqAccordion2">
                                        <div class="card-body">
                                            Yes, Cleanovative will provide our own cleaning supplies and tools. Depending on circumstances you can inform us after your booking to use specialised chemicals on sensitive/fragile places.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faq2Five">
                                            What services do we provide?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faq2Five" class="collapse" data-parent="#faqAccordion2">
                                        <div class="card-body">
                                            We offer a variety of services, starting from daily, weekly, fortnightly or even monthly. We also provide move-in & move-out cleaning services. Cleanovative cleaning services covers everything that has to do with residential, commercial, Strata, construction, party/event and other platforms such as school or banks and many more.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faq2Six">
                                            What do you mean by deep cleaning?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faq2Six" class="collapse" data-parent="#faqAccordion2">
                                        <div class="card-body">
                                            If you haven’t had your house professionally cleaned for more than 3 months you need a deep clean. Deep cleaning is thoroughly cleaning and disinfecting every single spot, top or bottom which aims to remove dirt & grime. It’s about taking a step further and deep into how we clean. It also includes a sweep, vacuum, mop, disinfecting and deodorising to kill bacteria and germs.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-100">
                            <h3 class="mb-25 text-theme-light">Booking a Schedule</h3>
                            <div class="faq-accordion accordion" id="faqAccordion3">
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faq3One">
                                            Can I book for the same day?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faq3One" class="collapse" data-parent="#faqAccordion3">
                                        <div class="card-body">
                                            We cannot guarantee that it is possible, but feel free to book us in. If it's possible we will send our team through.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse"
                                            data-target="#faq3Two">
                                            Do you need someone to come and inspect my place before booking?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faq3Two" class="collapse" data-parent="#faqAccordion3">
                                        <div class="card-body">
                                            <p>
                                                Nope, not at all. When you book you will be able to tell us what type of job you are aiming at and that is enough. Should you have concerns after your book, please feel free to call us at +61450007982 and let us know.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#faq3Three">
                                            Is your cleaner punctual, will he get here as per booking time?
                                            <span class="open-icon"><i class="flaticon-add"></i></span>
                                            <span class="close-icon"><i class="flaticon-add"></i></span>
                                        </button>
                                    </div>
                                    <div id="faq3Three" class="collapse" data-parent="#faqAccordion3">
                                        <div class="card-body">
                                            Yes, most cleaners of  Cleanovative are quite punctual, but just to be on the safe side, after making a booking we do inform our customers that there is a one hour arrival window, due to traffic or any other unfortunate circumstances. In case our team is late on arrival, the customer will be contacted and will be informed about the ETA.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FAQ PART END ======-->

@endsection
