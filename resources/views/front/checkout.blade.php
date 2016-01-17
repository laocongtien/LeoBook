@extends('front.layouts.base')

@section('head.title')
Giỏ hàng của bạn
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
	<form name="checkout" class="contain paypage mxClrAft">
		<div class="ltbanner">
			Thanh toán đơn hàng
		</div>
		<div class="wrap mxClrAft">
			<div class="left bk">
				<div class="titlebar">
					Sản phẩm trong giỏ hàng (5)
				</div>
				<div class="bl">
					@foreach($content as $item)
						<div class="cart-item mxClrAft">
							<a href="{{ route('home.detail' , $item->id) }}" class="cv left" id="{{ $item->rowid }}">
								<img src="{{ $item['options']['image'] }}" alt="mybook">
							</a>
							<div class="dtb left">
								<a href="{{ route('home.detail' , $item->id) }}" class="ttb">
									{{ $item->name }}
								</a>
								<div class="is-rm rm">
									Xóa sản phẩm
								</div>
							</div>
							
								<div class="cartbox mxClrAft left chout 
												
								">
									<div class="num left">
										@if (Cart::count() != 0)
										@foreach(Cart::content() as $cart)
										<?php
										if ($cart->id == $item->id) 
											{
											$qty = $cart->qty;
											break;
											}										
										?>										
										@endforeach
										@endif
										<input type="text" class="n left qty" value="{{$qty}}">
										<input type="hidden" class="b-id" value="{{ $item->id }}">
										<div class="ctrlnum left">
											<div class="fa fa-angle-up is-up"></div>
											<div class="fa fa-angle-down is-down"></div>
										</div>
										<div class="clear"></div>
									</div>
								</div>	
							<div class="br right">
								{{ number_format($item->price,0,',','.') }}đ
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<div class="left bk">
				<div class="titlebar">
					Thông tin giao hàng
				</div>
				<div class="bl">
					<div class="r">
						Người nhận:
						<span>
							Phạm Diễm
						</span>
					</div>
					<div class="r">
						SĐT:
						<span>
							01234.567.890
						</span>
					</div>
					<div class="r">
						<span>
							KTX ĐHQG, KP6, P. Linh Trung, Thủ Đức, TP. Hồ Chí Minh<br>Viet Nam
						</span>
					</div>
					<div class="mk">
						*Giao hàng trực tiếp
					</div>
					<div class="ed is-openpop" data-pop="editadr">
						Thay đổi địa chỉ giao hàng
					</div>
					<div class="nt">
						<div class="t">
							Ghi chú
						</div>
						<textarea name="" class="notebox" placeholder="Viết ghi chú"></textarea>
					</div>
				</div>
			</div>
			<div class="left bk">
				<div class="bib">
					<div class="titlebar">
						Thông tin giảm giá
					</div>
					<div class="prib">
						<div class="tt is-op">
							Sử dụng mã giảm giá
						</div>
						<div class="is-sh">
							<div class="code mxClrAft">
								<input type="text" class="ip is-ipcode is-ip-code" placeholder="Nhập mã giảm giá">
								<div class="txtcode">
									Dùng mã giảm 20.000 đ
								</div>
								<div class="sp is-ckcode">
									Đồng ý
								</div>
								<div class="sp is-cancelcode">
									Hủy
								</div>
							</div>
						</div>
					</div>
					<div class="prib">
						<div class="tt is-op">
							Sử dụng Xu để giảm giá
						</div>
						<div class="is-sh">
							<div class="code mxClrAft">
								<div class="t">
									Số lượng Xu có thể sử dụng:
								</div>
								<input type="text" class="ip is-ipcode is-ip-xu" placeholder="Nhập số lượng xu">
								<div class="txtcode">
									Dùng xu giảm 10.000đ
								</div>
								<div class="sp is-ckcode">
									Đồng ý
								</div>
								<div class="sp is-cancelcode">
									Hủy
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bib">
					<div class="titlebar">
						Hình thức thanh toán
					</div>
					<div class="cb">
						<div class="bt is-pay atv">
							Thanh toán khi nhận hàng
						</div>
						<div class="bt is-pay">
							Thanh toán qua thẻ ATM
						</div>
						<div class="bt is-pay">
							Thanh toán bằng VISA/ MasterCard
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="total wrap mxClrAft">
			<a href="index.php" class="back">
				<span class="fa fa-angle-double-left"></span>
				TRỞ LẠI MUA HÀNG
			</a>
			<div class="ttl mxClrAft">
				<div class="r">
					Tạm tính:
					<span>
						518.000đ
					</span>
				</div>
				<div class="r">
					Giảm giá:
					<span>
						0đ
					</span>
				</div>
				<div class="r">
					Phí vận chuyển
					<span>
						25.000đ
					</span>
				</div>
				<div class="r">
					Xu được tặng:
					<span>
						300 Xu
					</span>
				</div>
				<div class="r">
					Thành tiền
					<span>
						543.000đ
					</span>
				</div>
			</div>
			<div class="payend is-openpop is-clrp" data-pop="hoanthanh">
				Hoàn thành thanh toán
			</div>
		</div>
	</form>
@stop