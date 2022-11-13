@extends('layouts.app')

@section('title', 'Cleanovative')

@section('content')

    @include('components.home.slider')

    @include('components.home.why_choose_us')

    @include('components.home.services')

    @include('components.booking_steps')

    @include('components.booking-banner')

    @include('components.home.about_section')

    @include('components.home.statistics')

    @include('components.service-area')

    @include('components.testimonials')

    @include('components.home.call_to_action')

    @include('components.home.appointment')

@endsection
