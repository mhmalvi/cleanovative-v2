<!--====== FOOTER PART START ======-->
<footer>
    <div class="footer-widget-area pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="footer-logo mb-40">
                        <img data-src="{{asset('images/logos/logo02.webp')}}" alt="Cleanovative" class="lazyload">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget about-company mb-40">
                        <h3 class="widget-title">About Company</h3>
                        <p>
                            Our focus is keep listening to our customers, understanding
                            their needs and providing a unique residential and commercial
                            cleaning service.
                        </p>
                        <ul class="social-link">
                            <li> 
                                <a href="https://www.facebook.com/cleanovative">
                                    <img src="{{asset('images/icons/facebook.png')}}" alt="fb" width="28" height="28">
                                </a> 
                            </li>
                            <li>
                                <a href="https://www.instagram.com/cleanovative/">
                                    <img src="{{asset('images/icons/instagram.png')}}" alt="instaa" width="28" height="28">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget nav-widget d-lg-flex justify-content-lg-center mb-40">
                        <div>
                            <h3 class="widget-title">Quick Links</h3>
                            <ul>
                                <li><a href="{{route('about_us')}}">
                                    <i class="bi bi-arrow-right-short"></i>About us</a>
                                </li>
                                <li><a href="{{route('gift_cards')}}">
                                    <i class="bi bi-arrow-right-short"></i>Gift Cards</a></li>
                                <li><a href="{{route('faq')}}">
                                    <i class="bi bi-arrow-right-short"></i>FAQ</a></li>
                                <li><a href="{{route('terms_and_conditions')}}">
                                    <i class="bi bi-arrow-right-short"></i>Terms & Conditions</a></li>
                                <li>
                                    <a href="{{route('privacy_policy')}}">
                                        <i class="bi bi-arrow-right-short"></i>Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget contact-widget mb-40">
                        <h3 class="widget-title">Conatct Us</h3>
                        <div class="contact-info">
                            <h4 class="mb-4">Don’t Hesitate To <br> Contact Us</h4>
                            <ul>
                                <li>
                                    <i class="bi bi-headset"></i>
                                    <a href="tel:+61450007982">+61450007982</a></li>
                                <li>
                                    <i class="bi bi-envelope"></i>info@cleanovative.com.au
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-form">
        <div class="container">
            <div class="subs-inner">
                <newsletter-form-component />
            </div>
        </div>
    </div>
    <div class="copyright-area text-center pt-40 pb-40">
        <div class="row">
            <div class="col-md-6">
                <p>
                    Copyright © 2021 All Rights Reserved - 
                    <a href="{{route('terms_and_conditions')}}" target="_blank">Terms & Conditions</a>
                    -
                    <a href="{{route('privacy_policy')}}" target="_blank">Privacy Policy</a>
                </p>
            </div>
            <div class="col-md-6">
                <p>Design & Developed by <a href="https://quadque.tech">Quadque Technologies ltd</a></p>
            </div>
        </div>
    </div>
</footer>
<!--====== FOOTER PART END ======-->
