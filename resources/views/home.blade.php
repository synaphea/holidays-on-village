@extends('vendor.base')

@section('title', 'Αρχική')

@section('content')
@include('vendor.landing.hero')
<div class="home-wrapper">
	<div class="home-content">
		@include('vendor.landing.services')
		@include('vendor.landing.poi')
		@include('vendor.landing.agents')
		@include('vendor.landing.testimonials')
	</div>
</div>
@include('vendor.landing.footer')
@stop

@section('scripts')
	@include('vendor.landing.signin')
	@include('vendor.landing.signup')
    
    <script src="/assets/js/home.js"></script>
@stop