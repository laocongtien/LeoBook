<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="minimal-ui, width=1024, user-scalable=no">
 	<meta name="apple-mobile-web-app-capable" content="yes">
	<title> @yield('head.title')</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/reset.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/font.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/font-awesome.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/jquery.selectbox.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/jquery.jscrollpane.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/animate-animo.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/main.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/xemthem.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/danhmuc.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/tacgia.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/chitiet.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/trangcanhan.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/thanhtoan.css') !!}">
</head>
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
$route_cate       =	'home.cate';
$route_login      =	'home.login';
$route_register     =	'home.register';

?>
<body class="unselectable">
@if (Auth::check())
	<div class="is-bg"></div>
	<div class="pop is-pop" data-pop="hoanthanh">
		<div class="head">
			Thông báo
			<a href="{!!asset('')!!}" class="fa fa-close is-closepop"></a>
		</div>
		<div class="t">
			Đã hoàn tất giao dịch. Cảm ơn quý khách đã sử dụng dịch vụ của Leobook.com.
			<a href="{!!asset('')!!}">
				Quay về trang chủ.
			</a>
		</div>
	</div>
	<div class="pop is-pop" data-pop="editadr">
		<div class="head">
			Thay đổi địa chỉ giao hàng
			<div class="fa fa-close is-closepop"></div>
		</div>
		<form class="bd">
			<div class="b">
				<div class="tt">
					Thông tin người nhận
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Họ tên
					</div>
					<input type="text" class="ri" placeholder="Điền họ tên người nhận">
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Số điện thoại
					</div>
					<input type="text" class="ri" placeholder="Điền số điện thoại người nhận">
				</div>
			</div>
			<div class="b">
				<div class="tt">
					Địa chỉ nhận hàng
				</div>
				<div class="adb mxClrAft">
					<div class="adr">
						<div class="le">
							Số nhà
						</div>
						<input type="text" class="ri" placeholder="Điền số nhà">
					</div>
					<div class="adr">
						<div class="le">
							Tên đường
						</div>
						<input type="text" class="ri" placeholder="Tên đường">
					</div>
				</div>
					<div class="adr big">
						<div class="le">
							Thành phố
						</div>
						<div class="ri">
							<select name="thanhpho" class="is-sl" value="Thành Phố">
								<option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
								<option value="Hà Nội">Hà Nội</option>
								<option value="Đà nẵng">Đà nẵng</option>
								<option value="Huế">Huế</option>
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
								<option value="Bình Thạnh">Bình Thạnh</option>
								<option value="Bình Tân">Bình Tân</option>
								<option value="Tân Bình">Tân Bình</option>
								<option value="Tân Phú">Tân Phú</option>
							</select>
						</div>
					</div>
					<div class="adr">
						<div class="le">
							Xã/ Phường
						</div>
						<div class="ri">
							<select name="xa" class="is-sl" value="xa">
								<option value="Phường 1">Phường 1</option>
								<option value="Phường 2">Phường 2</option>
								<option value="Phường 3">Phường 3</option>
								<option value="Phường 4">Phường 4</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="ctrl mxClrAft">
				<button class="submit is-closepop right">
					Cập nhật
				</button>
				<div class="cancel is-closepop right">
					Hủy
				</div>
			</div>
		</form>
	</div>
	<div class="pop is-pop" data-pop="editprf">
		<div class="head">
			Chỉnh sửa thông tin liên hệ
			<div class="fa fa-close is-closepop"></div>
		</div>
		<form class="bd">
			<div class="b">
				<div class="tt">
					Thông tin người nhận
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Avatar
					</div>
					<div class="avb mxClrAft">
						<div class="av" style="background-image: url({!!asset('')!!}style/images/temp/prf.jpg)"></div>
						<div class="btn">
							<div class="upload is-upload">
								Up ảnh từ máy tính
							</div>
							<div class="upload is-upload is-upload-link">
								Nhập link ảnh
							</div>
							<input type="text" class="up" placeholder="Nhập link ảnh">
						</div>
					</div>
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Họ tên
					</div>
					<input type="text" class="ri" placeholder="Điền họ tên">
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Số điện thoại
					</div>
					<input type="text" class="ri" placeholder="Điền số điện thoại">
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Email
					</div>
					<input type="text" class="ri" placeholder="Điền email">
				</div>
			</div>
			<div class="ctrl mxClrAft">
				<button class="submit is-closepop right">
					Cập nhật
				</button>
				<div class="cancel is-closepop right">
					Hủy
				</div>
			</div>
		</form>
	</div>
	<div class="pop is-pop" data-pop="addadress">
		<div class="head">
			Thêm địa chỉ giao hàng
			<div class="fa fa-close is-closepop"></div>
		</div>
		<form class="bd">
			<div class="b">
				<div class="tt">
					Địa chỉ nhận hàng
				</div>
				<div class="adb mxClrAft">
					<div class="adr">
						<div class="le">
							Số nhà
						</div>
						<input type="text" class="ri" placeholder="Điền số nhà">
					</div>
					<div class="adr">
						<div class="le">
							Tên đường
						</div>
						<input type="text" class="ri" placeholder="Tên đường">
					</div>
				</div>
					<div class="adr big">
						<div class="le">
							Thành phố
						</div>
						<div class="ri">
							<select name="thanhpho" class="is-sl" value="Thành Phố">
								<option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
								<option value="Hà Nội">Hà Nội</option>
								<option value="Đà nẵng">Đà nẵng</option>
								<option value="Huế">Huế</option>
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
								<option value="Bình Thạnh">Bình Thạnh</option>
								<option value="Bình Tân">Bình Tân</option>
								<option value="Tân Bình">Tân Bình</option>
								<option value="Tân Phú">Tân Phú</option>
							</select>
						</div>
					</div>
					<div class="adr">
						<div class="le">
							Xã/ Phường
						</div>
						<div class="ri">
							<select name="xa" class="is-sl" value="xa">
								<option value="Phường 1">Phường 1</option>
								<option value="Phường 2">Phường 2</option>
								<option value="Phường 3">Phường 3</option>
								<option value="Phường 4">Phường 4</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="ctrl mxClrAft">
				<button class="submit is-closepop right">
					Thêm địa chỉ
				</button>
				<div class="cancel is-closepop right">
					Hủy
				</div>
			</div>
		</form>
	</div>
	<div class="pop is-pop" data-pop="edadress">
		<div class="head">
			Chỉnh sửa địa chỉ giao hàng
			<div class="fa fa-close is-closepop"></div>
		</div>
		<form class="bd">
			<div class="b">
				<div class="tt">
					Địa chỉ nhận hàng
				</div>
				<div class="adb mxClrAft">
					<div class="adr">
						<div class="le">
							Số nhà
						</div>
						<input type="text" class="ri" placeholder="Điền số nhà" value="Số 21">
					</div>
					<div class="adr">
						<div class="le">
							Tên đường
						</div>
						<input type="text" class="ri" placeholder="Tên đường" value="Hoa Cúc">
					</div>
				</div>
					<div class="adr big">
						<div class="le">
							Thành phố
						</div>
						<div class="ri">
							<select name="thanhpho" class="is-sl" value="Thành Phố">
								<option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
								<option value="Hà Nội">Hà Nội</option>
								<option value="Đà nẵng">Đà nẵng</option>
								<option value="Huế">Huế</option>
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
								<option value="Bình Thạnh">Bình Thạnh</option>
								<option value="Bình Tân">Bình Tân</option>
								<option value="Tân Bình">Tân Bình</option>
								<option value="Tân Phú">Tân Phú</option>
							</select>
						</div>
					</div>
					<div class="adr">
						<div class="le">
							Xã/ Phường
						</div>
						<div class="ri">
							<select name="xa" class="is-sl" value="xa">
								<option value="Phường 1">Phường 1</option>
								<option value="Phường 2">Phường 2</option>
								<option value="Phường 3">Phường 3</option>
								<option value="Phường 4">Phường 4</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="ctrl mxClrAft">
				<button class="submit is-closepop right">
					Cập nhật
				</button>
				<div class="cancel is-closepop right">
					Hủy
				</div>
			</div>
		</form>
	</div>
@endif
	<div class="header">
		<div class="head wrap">
			<div class="top_left left">
				<a href="{!!asset('')!!}" class="logo left">
					<img src="{!!asset('')!!}style/images/theme/log.png">
				</a>
				<div class="menu left">
					<div class="fa fa-bars"></div>
					<div class="arr"></div>
					<div class="menu_c1">
						<div sub="tt_1" class="title_c1 hs">
							<a href="{!! route($route_bestseller) !!}" class="name_menu left">
								Bán chạy nhất
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div sub="tt_2" class="title_c1 hs">
							<a href="{!! route($route_newbook) !!}" class="name_menu left">
								Sách mới
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div sub="tt_3" class="title_c1 hs">
							<a href="{!! route($route_comming) !!}" class="name_menu left">
								Sắp phát hành
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div sub="tt_4" class="title_c1 hs">
							<a href="{!! route($route_discount) !!}" class="name_menu left">
								Sách giảm giá
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>						
						<div class="title_c1">
							<a href="{!! route($route_author) !!}" class="name_menu left">
								Tác giả
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div class="title_c1">
							<a href="{!! route($route_publisher) !!}" class="name_menu left">
								Nhà xuất bản
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div class="title_c1">
							<a href="{!! route($route_issuer) !!}" class="name_menu left">
								Nhà phát hành sách
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="menu_c2 hide">
						<div class="clone2" sub="tt_1">
							<?php $cates = DB::table('cates')->get(); ?>
							@foreach ($cates as $cate)
								<div class="title_c2">
									<a href="{!! route('bestseller.cate',$cate->id) !!}" class="name_menu">
										{!! $cate->name !!}
									</a>
								</div>
							@endforeach							
						</div>
						<div class="clone2" sub="tt_2">
							@foreach ($cates as $cate)
								<div class="title_c2">
									<a href="{!! route('newbook.cate',$cate->id)!!}" class="name_menu">
										{!! $cate->name !!}
									</a>
								</div>
							@endforeach
						</div>
						<div class="clone2" sub="tt_3">
							@foreach ($cates as $cate)
								<div class="title_c2">
									<a href="{!! route('comming.cate',$cate->id) !!}" class="name_menu">
										{!! $cate->name !!}
									</a>
								</div>
							@endforeach
						</div>
						<div class="clone2" sub="tt_4">
							@foreach ($cates as $cate)
								<div class="title_c2">
									<a href="{!! route('discount.cate',$cate->id) !!}" class="name_menu">
										{!! $cate->name !!}
									</a>
								</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="top_right right">
				<div class="search left">
					<form action="{!! route($route_search) !!}" method="get" name="frm_tim_kiem" onsubmit="return CheckSearch(this)" class="left sbox">
						<div class="fa fa-search"></div>
						<input type="submit" class="sicon right" value="">
						<input type="text" placeholder="Nội dung tìm kiếm" name="tim_kiem_tu_khoa" class="sip right" value=""> 
						<div class="clear"></div>
					</form>
				</div>
				<div class="cart left {{ (Cart::count() != 0) ? '' : 'empty'}}">
					<div class="fa fa-shopping-cart"></div>
					<div class="ab">
						{{ Cart::count(false) }}
					</div>
					<div class="cab">
						<div class="cast">
							Giỏ hàng của bạn
						</div>
						<div class="lib">
							@if (Cart::count() != 0)
								@foreach(Cart::content() as $item)
									<div class="lica mxClrAft" id="{{ $item->rowid }}">
										<div class="ttl left">
											<a href="{{ route('home.detail' , $item->id) }}" class="is-2r">
												{{ $item->name }}
											</a>
										</div>
										<div class="cartbox left">
											<div class="num left">
												<input type="text" class="n left qty" value="{{ $item->qty }}">
												<div class="ctrlnum left">
													<div class="fa fa-angle-up is-up up-cart"></div>
													<div class="fa fa-angle-down is-down down-cart"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										<div class="sls left" value="{{ $item->price }}">
											<input type="hidden" class="price" value="{{ $item->price }}" />
											{{ number_format($item->price,0,',','.') }}đ
										</div>
										<div class="fa fa-trash-o right" ></div>
									</div>
								@endforeach
							@endif
						</div>
						<div class="caend mxClrAft">
							<div class="total left">
								Tổng cộng: 
								<input type="hidden" class="total-price" value="{{ Cart::total() }}" />
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
						<a href="{!!asset('')!!}" class="etc">
							<span class="fa fa-shopping-basket"></span>
							Bạn chưa mua hàng
						</a>
					</div>
				</div>
				<div class="prf left">
					@if (Auth::check())
					<div class="pri"  style="background-image: url({!!asset('')!!}style/images/temp/prf.jpg)"></div>
					<div class="log on ">
						<a href="{!! route($route_customer).'#profile' !!}" ref="" class="lg">
							Tài khoản
						</a>
						<a href="{!! route($route_customer).'#fav'  !!}" ref="fav" class="lg">
							Danh sách yêu thích
						</a>
						<a href="{!! route($route_customer).'#rated'  !!}" ref="rated" class="lg">
							Danh sách đánh giá
						</a>
						<a href="{!! route($route_customer).'#order'  !!}" ref="order" class="lg">
							Đơn hàng
						</a>
						<a href="{!! route($route_customer).'#noti'  !!}" ref="noti" class="lg">
							Thông báo
						</a>
						<a href="{{ route('home.logout') }}" class="lg">
							Đăng xuất
						</a>
					</div>
					@else
					<div class="fa fa-user unlog"></div>
					<div class="log ">
						<a href="{!! route($route_login) !!}" class="lg">
							Đăng Nhập
						</a>
						<a href="{!! route($route_register) !!}" class="lg">
							Đăng Ký
						</a>
					</div>
					@endif
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear_header"></div>
	<div class="clearpage wrap">
		<div class="t">
			Đã hoàn tất giao dịch. Cảm ơn quý khách đã sử dụng dịch vụ của Leobook.com.
			<a href="{!!asset('')!!}">
				Quay về trang chủ.
			</a>
		</div> 
	</div>