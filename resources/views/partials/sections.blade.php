@section('additional-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/general-style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/project-style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive-style.css') }}" />
@endsection

@extends('layout') @section('content')
    <div class="section d-none">@include('partials.sections.home')</div>
    <div class="section d-none">@include('partials.sections.quotes')</div>
    <div class="section d-none">@include('partials.sections.who-are-we')</div>
    <div class="section d-none">@include('partials.sections.contact')</div>
@endsection

@section('additional-scripts')
    <!-- <script src="{{ asset('/js/script.js')}}"></script> -->
    <script src="{{ asset('/js/fullpage.js')}}"></script>
@endsection
