@extends('front.layouts.base')

@section('head.title')
Đăng nhập
@stop

@section('body.content')
<form action="{{ route('home.login')}}" method="POST" accept-charset="utf-8">
{{csrf_field()}}
	<div class="contain formlog">
		<div class="ltbanner">
			Đăng nhập vào tài khoản
		</div>
		<div class="rgbox wrap mxClrAft">
			<div class="tt">
				<div>
					Nhập thông tin đăng nhập
				</div>
			</div>
			@if ($errors->count())
			<div>
				<ul class="er">
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="rb birb">
				<div class="lb">
					Email
				</div>
				<input name="email" type="text" class="ip" placeholder="Nhập email của bạn" value="{{ old('email') }}">
			</div>
			<div class="rb birb">
				<div class="lb">
					Mật khẩu
				</div>
				<input name="password" type="password" class="ip" placeholder="Nhập mật khẩu">
			</div>
		</div>
		<div class="ldt wrap">
			<div class="fa fa-square-o"></div>
			<input type="checkbox" name="remember">
			Nhớ mật khẩu, tự động đăng nhập vào lần sau
		</div>
		<div class="ldt wrap">
			<a href="forgotpass.php">
				Quên mật khẩu
			</a>
		</div>
		<div class="ctrl wrap">
			<button class="submit">
				Đăng nhập
			</button>
		</div>
	</div>
</form>
@stop