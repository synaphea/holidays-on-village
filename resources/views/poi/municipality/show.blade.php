@extends('vendor.dashboard')

@section('title', $municipality['name'])

@section('content')
    @include('vendor.dashboard.header')
    @include('vendor.dashboard.left')
    
    @include('poi.municipality.content')

@stop
@section('scripts')
    <script src="/assets/js/region/app.js" type="text/javascript"></script>
@stop