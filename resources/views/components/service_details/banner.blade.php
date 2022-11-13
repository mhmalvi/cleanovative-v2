<!--====== BREADCRUMB PART START ======-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.webp') }});">
    <div class="container">
        <div class="breadcrumb-text text-center col-md-8 mx-auto">
            <h1 class="page-title text-dark">
                {{ isset($banner_title) ? $banner_title : "Service Details" }}
            </h1>
            <div class="service-banner-content">
                {!! $content !!}
            </div>
            <div class="mt-40">
                <a class="main-btn main-btn-3 mt-10 mb-0" href="{{ route('book_now') }}" target="_blank">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
