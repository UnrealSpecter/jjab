@section('css')
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}" />
@endsection

@extends('layout')
@section('content')

    <div class="section d-none">@include('partials.sections.home')</div>
    <div class="section d-none">@include('partials.sections.quotes')</div>
    <div class="section d-none">@include('partials.sections.home')</div>
    <div class="section d-none">@include('partials.sections.quotes')</div>

@endsection

@section('js')
    <!-- <script src="{{ asset('/js/script.js')}}"></script> -->
    <script src="{{ asset('/js/fullpage.js')}}"></script>
@endsection
