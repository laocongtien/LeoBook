@extends('front.layouts.base')

@section('head.title')
Đăng ký tài khoản
@stop

@section('body.content')
	<form class="contain formlog">
		<div class="ltbanner">
			Đăng ký tài khoản mới
		</div>
		<div class="rgbox wrap mxClrAft">
			<div class="tt">
				<div>
					Thông tin liên hệ
				</div>
			</div>
			<div class="rb birb">
				<div class="lb">
					Họ và tên
				</div>
				<input type="text" class="ip" placeholder="Nhập họ tên của bạn">
			</div>
			<div class="rb">
				<div class="lb">
					Số điện thoại
				</div>
				<input type="text" class="ip" placeholder="Nhập số điện thoại">
			</div>
			<div class="rb">
				<div class="lb">
					Email
				</div>
				<input type="text" class="ip" placeholder="Nhập email">
			</div>
		</div>
		<div class="rgbox wrap">
			<div class="tt">
				<div>
					Địa chỉ liên hệ
				</div>
			</div>
			<div class="adb mxClrAft">
				<div class="adr">
					<div class="le">
						Số nhà
					</div>
					<input type="text" class="ip" placeholder="Điền số nhà">
				</div>
				<div class="adr">
					<div class="le">
						Tên đường
					</div>
					<input type="text" class="ip" placeholder="Tên đường">
				</div>
			</div>
			<div class="adr big">
				<div class="le">
					Thành phố
				</div>
				<div class="ri">
					<select name="thanhpho" class="is-sl" value="Thành Phố">
						<option value="">TP. Hồ Chí Minh</option>
						<option value="">Hà Nội</option>
						<option value="">Đà nẵng</option>
						<option value="">Huế</option>
						<option value="">TP. Hồ Chí Minh</option>
						<option value="">Hà Nội</option>
						<option value="">Đà nẵng</option>
						<option value="">Huế</option>
						<option value="">TP. Hồ Chí Minh</option>
						<option value="">Hà Nội</option>
						<option value="">Đà nẵng</option>
						<option value="">Huế</option>
						<option value="">TP. Hồ Chí Minh</option>
						<option value="">Hà Nội</option>
						<option value="">Đà nẵng</option>
						<option value="">Huế</option>
					</select>
				</div>
			</div>
			<div class="adb mxClrAft">
				<div class="adr">
					<div class="le">
						Quận/ Huyện
					</div>
					<div class="ri">
						<select name="quan" class="is-sl" value="Quận">
							<option value="">Bình Thạnh</option>
							<option value="">Bình Tân</option>
							<option value="">Tân Bình</option>
							<option value="">Tân Phú</option>
						</select>
					</div>
				</div>
				<div class="adr">
					<div class="le">
						Xã/ Phường
					</div>
					<div class="ri">
						<select name="xa" class="is-sl" value="xa">
							<option value="">Phường 1</option>
							<option value="">Phường 2</option>
							<option value="">Phường 3</option>
							<option value="">Phường 4</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="ldt wrap">
			<div class="fa fa-square-o"></div>
			Nhận email thông báo về các chương trình khuyến mãi.
		</div>
		<div class="ldt wrap">
			<div class="fa fa-check-square-o"></div>
			Tôi đồng ý với <a href="">điều khoản sử dụng của Leobook.com</a>
		</div>
		<div class="ctrl wrap">
			<button class="submit">
				Đăng ký
			</button>
		</div>
	</form>
@stop