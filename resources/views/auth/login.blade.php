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
<div style="display: block;" class="modal fade in" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="false">
<div class="modal-dialog modal-sm">
<div class="signLogo osLight"><img src="/img/logo-small.png" /></div>
<div class="modal-content">
	<div class="modal-body">
		<form role="form" method="POST" action="/auth/login">
			{!! csrf_field() !!}
			<div class="form-group">
				<div class="btn-group-justified">
					<a href="/social/redirect/facebook" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Σύνδεση με Facebook</a>
				</div>
			</div>
			<div class="form-group">
				<div class="btn-group-justified">
					<a href="/social/redirect/google" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Σύνδεση με Google</a>
				</div>
			</div>
			<div class="signOr">Η</div>
			<div class="form-group">
				<input placeholder="Email Address" class="form-control" type="text" name="email">
			</div>
			<div class="form-group">
				<input placeholder="Password" class="form-control" type="password" name="password">
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-6">
						<div class="checkbox custom-checkbox">
							<label>
								<input type="checkbox"  name="remember">
								<span class="fa fa-check"></span> Remember me
							</label>
						</div>
					</div>
					<div class="col-xs-6 align-right">
						<p class="help-block"><a href="#" class="text-green isThemeText text-red">Ξέχασες password?</a></p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<button class="btn btn-lg btn-block btn-green isThemeBtn btn-red">ΣΥΝΔΕΣΗ</button>
			</div>
			<p class="help-block">Δεν έχεις λογαριασμό? <a href="/auth/register" class="text-green isThemeText text-red">Εγγραφή</a></p>
		</form>
	</div>
</div>
<div class="signFooter">Διακοπές στο Χωριό<br>© 2015</div>
</div>
</div>
@stop