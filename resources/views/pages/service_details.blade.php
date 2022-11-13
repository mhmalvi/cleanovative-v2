@extends('layouts.app')

@section('title', 'Service Details | Cleanovative')

@section('content')

    @yield('banner')

    @yield('pricing')

    <!--====== SERVICE DETAILS PART START ======-->
    <section class="service-details-wrap pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    @yield('service_content')
                </div>
            </div>
        </div>

        @yield('checklist')

        @yield('extras')

        @include('components.booking-banner')

        @include('components.home.about_section')

        @include('components.home.statistics')

        @include('components.service-area')

        @include('components.testimonials')

        @include('components.home.call_to_action')

        @yield('custom_form')

    </section>
    <!--====== SERVICE AREA STOP ======-->
@endsection
