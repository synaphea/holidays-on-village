@extends('vendor.dashboard')

@section('title', $village['name'])

@section('content')
    @include('vendor.dashboard.header')
    @include('vendor.dashboard.left')
    
    @include('poi.village.content')

@stop
@section('scripts')
    <script src="/assets/js/region/app.js" type="text/javascript"></script>
@stop