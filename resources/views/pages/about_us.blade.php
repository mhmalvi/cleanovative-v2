@extends('layouts.app')

@section('title', "About Us | Cleanovative")

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.webp') }});">
        <div class="container">
            <div class="breadcrumb-text text-center">
                <h1 class="page-title text-dark">About Us</h1>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->

    <!--====== ABOUT PART START ======-->
    @include('components.about.about-part')
    <!--====== ABOUT PART END ======-->


    <!--====== EXPERIENCE PART START ======-->
    @include('components.about.why')
    <!--====== EXPERIENCE PART END ======-->  

    <!--====== MISSION PART START ======-->
    @include('components.about.mission')
    <!--====== MISSION PART END ======-->

    <!--====== ABOUT PART START ======-->
    @include('components.about.guaratees')
    <!--====== ABOUT PART END ======-->

    @include('components.home.statistics') 

    @include('components.testimonials')

    @include('components.home.call_to_action')

@endsection
