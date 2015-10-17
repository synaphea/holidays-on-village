@extends('vendor.dashboard')

@section('title', 'Αναζήτηση')

@section('content')
    @include('vendor.dashboard.header')
    @include('vendor.dashboard.left')
    @include('vendor.dashboard.content')
@stop
@section('scripts')
    <script src="/assets/js/dashboard/app.js" type="text/javascript"></script>
@stop