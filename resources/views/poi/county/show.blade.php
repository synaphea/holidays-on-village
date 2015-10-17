@extends('vendor.dashboard')

@section('title', $county['name'])

@section('content')
    @include('vendor.dashboard.header')
    @include('vendor.dashboard.left')
    
    @include('poi.county.content')

@stop
@section('scripts')
    <script src="/assets/js/region/app.js" type="text/javascript"></script>
@stop