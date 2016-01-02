@extends('front.layouts.base')

@section('head.title')
Trang cá nhân
@stop

@section('body.content')
	<div class="contain wrap mxClrAft accpage is-box">
		<div class="left acctitle">
			<div class="ttlb mxClrAft">
				<div class="left img" style="background-image: url('style/images/temp/prf.jpg')"></div>
				<div class="left tt user-info" data-set="{{ Auth::user()->id }}">
					{{Auth::user()->fullname}}
				</div>
			</div>
			<div class="liacc is-menu" data-link="profile">
				<div class="fa fa-angle-double-right"></div>
				Thông tin tài khoản
			</div>
			<div class="liacc is-menu" data-link="wallet">
				<div class="fa fa-angle-double-right"></div>
				Ví điện tử
			</div>
			<div class="liacc is-menu" data-link="noti">
				<div class="fa fa-angle-double-right"></div>
				Thông báo của tôi
			</div>
			<div class="liacc is-menu" data-link="order">
				<div class="fa fa-angle-double-right"></div>
				Đơn hàng của tôi
			</div>
			<div class="liacc is-menu" data-link="fav">
				<div class="fa fa-angle-double-right"></div>
				Danh sách yêu thích
			</div>
			<div class="liacc is-menu" data-link="rated">
				<div class="fa fa-angle-double-right"></div>
				Danh sách đánh giá
			</div>
		</div>
		<div class="accbox right">
			<div class="is-tab customer" data-link="profile">
			</div>
			<div class="is-tab is-tbl customer" data-link="wallet">
			</div>
			<div class="is-tab is-tbl customer" data-link="noti">
			</div>
			<div class="is-tab is-tbl customer" data-link="order">
			</div> 
			<div class="is-tab customer" data-link="fav">
			</div>
			<div class="is-tab is-tbl customer" data-link="rated">
			</div>
		</div>
	</div>
@stop