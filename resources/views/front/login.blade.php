@extends('front.layouts.base')

@section('head.title')
Đăng nhập
@stop

@section('body.content')
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
			<div class="rb birb">
				<div class="lb">
					Email
				</div>
				<input type="text" class="ip" placeholder="Nhập email của bạn">
			</div>
			<div class="rb birb">
				<div class="lb">
					Mật khẩu
				</div>
				<input type="password" class="ip" placeholder="Nhập mật khẩu">
			</div>
		</div>
		<div class="ldt wrap">
			<div class="fa fa-square-o"></div>
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
@stop