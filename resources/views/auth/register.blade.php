@extends('vendor.base')
@section('classes', ' black modal-open')

@section('content')
<div id="page-container">
	<ul class="cb-slideshow">
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
	</ul>
</div>
<div style="display: block;" class="modal fade in" id="signup" role="dialog" aria-labelledby="signupLabel" aria-hidden="false">
	<div class="modal-dialog modal-sm">
		<div class="signLogo osLight"><img src="/img/logo-small.png" /></div>
		<div class="modal-content">
			<div class="modal-body">
				<form role="form" method="POST" action="/auth/register">
					{!! csrf_field() !!}
					<div class="form-group">
						<div class="btn-group-justified">
							<a href="/social/redirect/facebook" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Εγγραφή με Facebook</a>
						</div>
					</div>
					<div class="form-group">
						<div class="btn-group-justified">
							<a href="/social/redirect/google" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Εγγραφή με Google</a>
						</div>
					</div>
					<div class="signOr">Η</div>
					<div class="form-group">
						<input placeholder="Όνομα" class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<input placeholder="Email Address" class="form-control" type="text" name="email">
					</div>
					<div class="form-group">
						<input placeholder="Password" class="form-control" type="password" name="password">
					</div>
					<div class="form-group">
						<input placeholder="Confirm Password" class="form-control" type="password" name="password_confirmation">
					</div>
					<div class="form-group">
						<button class="btn btn-lg btn-block btn-green isThemeBtn btn-red">ΕΓΓΡΑΦΗ</button>
					</div>
					<p class="help-block">Ήδη μέλος? <a href="/auth/login" class="text-green isThemeText text-red">Σύνδεση</a></p>
				</form>
			</div>
		</div>
		<div class="signFooter">Διακοπές στο Χωριό<br>© 2015</div>
	</div>
</div>
@stop