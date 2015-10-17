@extends('vendor.dashboard')

@section('title', $region['name'])

@section('content')
    @include('vendor.dashboard.header')
    @include('vendor.dashboard.left')
    
    @include('poi.region.content')

@stop
@section('scripts')
    <script src="/assets/js/region/app.js" type="text/javascript"></script>
	<script src="/assets/js/controllers/api.js" type="text/javascript"></script>    
@stop