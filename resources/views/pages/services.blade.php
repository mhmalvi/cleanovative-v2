@extends('layouts.app')

@section('title', 'Our Services | Cleanovative')

@section('content')
    @include('components.services.banner')

    @include('components.services.pricing')

    @include('components.services.our_services')

    @include('components.services.call_to_action')

@endsection
