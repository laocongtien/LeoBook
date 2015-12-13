@extends('front.layouts.base')

@section('head.title')
Trang chủ Website bán Sách
@stop

@section('body.content')
<?php
$route_bestseller = 'home.bestseller';
$route_newbook    =	'home.newbook';
$route_comming    =	'home.comming';
$route_discount   =	'home.discount';
$route_combo      =	'home.combo';
$route_author     =	'home.author';
$route_publisher  =	'home.publisher';
$route_issuer     =	'home.issuer';
$route_search     =	'home.search';
$route_checkout   =	'home.checkout';
$route_customer   =	'home.customer';
$route_cate   =	'home.cate';
?>
<div class="cart left {{ (Cart::count() != 0) ? '' : 'empty'}}">
	<div class="fa fa-shopping-cart"></div>
	<div class="ab none">
		4
	</div>
	<div class="cab">
		<div class="cast">
			Giỏ hàng của bạn
		</div>
		<div class="lib">
			@if (Cart::count() != 0)
				@foreach(Cart::content() as $item)
					<div class="lica mxClrAft">
						<div class="ttl left" >
							<a href="{{ route('home.detail' , $item->id) }}" class="is-2r">
								{{ $item->name }}
							</a>
						</div>
						<div class="cartbox left" >
							<div class="num left" >
								<input type="text" class="n left qty" value="{{ $item->qty }}">
								<div class="ctrlnum left">
									<div class="fa fa-angle-up is-up"></div>
									<div class="fa fa-angle-down is-down"></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="sls left">
							<input type="hidden" class="price" value="{{ $item->price }}" />
							{{ number_format($item->price,0,',','.') }}đ
						</div>
						<div class="fa fa-trash-o right"></div>
					</div>
				@endforeach
			@endif
		</div>
		<div class="caend mxClrAft ">
			<div class="total left">
				Tổng cộng: 
				<span>
					{{ number_format(Cart::total(),0,',','.') }}đ
				</span>
			</div>
			<a href="{!! route($route_checkout) !!}" class="pay right">
				<button>
					Thanh toán
				</button>
			</a>
		</div>
	</div>
</div>
@stop