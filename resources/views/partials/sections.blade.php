@section('additional-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/general-style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/project-style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/responsive-style.css') }}" />
@endsection

@extends('master') @section('content')
    <div class="section d-none">@include('partials.sections.home')</div>
    <div class="section d-none">@include('partials.sections.quotes')</div>
    <div class="section d-none">@include('partials.sections.who-are-we')</div>
    <div class="section d-none">@include('partials.sections.contact')</div>
@endsection

@section('additional-scripts')
@endsection
