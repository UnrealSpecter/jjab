@section('css')
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}" />
@endsection

@extends('layout')
@section('content')

    @include('partials.sections.home')

@endsection

@section('js')
    <script src="{{ asset('/js/script.js')}}"></script>
    <!-- <script src="{{ asset('/js/fullpage.js')}}"></script> -->
@endsection
