<div class="col-lg-8 order-1 order-lg-2">
    <div class="details-content">
        <h1 class="title"> {{ $data['title'] }} </h1>
        <p>
            {!! $data['content'] !!}
        </p>
        <img class="main-thumb" src="{{ asset('images/service-details.webp') }}" alt="Image">
        <h2 class="sub-title">Why Choose Our Services</h2>
        <ul class="service-list">
            <li class="d-flex align-items-center">
                <span class="icon"><i class="far fa-check"></i></span>
                <p>
                    Satisfaction guaranteed – If you are unhappy with the clean, simply contact us within 48 hours and we will re-do it. If your still unhappy we will provide a refund.
                </p>
            </li>
            <li class="d-flex align-items-center">
                <span class="icon"><i class="far fa-check"></i></span>
                <p>
                    We are insured, so your always covered!
                </p>
            </li>
            <li class="d-flex align-items-center">
                <span class="icon"><i class="far fa-check"></i></span>
                <p>
                    We are simple, and so is our booking system.
                </p>
            </li>
            <li class="d-flex align-items-center">
                <span class="icon"><i class="far fa-check"></i></span>
                <p>
                    We are honest and straightforward. The price quoted is our final price. There are no hidden charges.
                </p>
            </li>
            <li class="d-flex align-items-center">
                <span class="icon"><i class="far fa-check"></i></span>
                <p>
                    We care about the satisfaction and happiness of everyone involved with our service.
                </p>
            </li>
        </ul>
        <div class="srevice-gallery">
            <div class="row">
                <div class="col-sm-6">
                    <div class="gallery-img">
                        <img src="{{ asset('images/service-gallery-2.webp') }}" alt="Image">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="gallery-img video">
                        <img src="{{ asset('images/service-gallery.webp') }}" alt="Image">
                        <div class="video-wrap">
                            <a href="https://www.youtube.com/watch?v=JP-PTke2x8w"
                                class="popup-video"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
