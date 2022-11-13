<!--====== SERVICE DETAILS PART START ======-->
<section class="service-details-wrap pt-130 pb-130">
    <div class="container">
        <div class="row">
            @include('components.service_details._sidebar')

            @include('components.service_details._info', ['data' => $data])
        </div>
    </div>
</section>
<!--====== SERVICE AREA STOP ======-->
