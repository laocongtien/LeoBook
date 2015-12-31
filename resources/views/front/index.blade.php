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
	<div class="contain index">
		<div class="slidebar wait unselectable">
			<div class='iosslider' >
				<div class='slider' >
					<a href="sachchitiet.php" class='slide'>
						<img src="{!!asset('')!!}style/images/temp/slide1.jpg" alt="pic1"/>
					</a>
					<a href="sachchitiet.php" class='slide'>
						<img src="{!!asset('')!!}style/images/temp/slide2.png" alt="pic1"/>
					</a>
					<a href="sachchitiet.php" class='slide'>
						<img src="{!!asset('')!!}style/images/temp/slide3.jpg" alt="pic1"/>
					</a>
					<a href="sachchitiet.php" class='slide'>
						<img src="{!!asset('')!!}style/images/temp/slide3.jpg" alt="pic1"/>
					</a>
				</div>
			</div>
			<div class="next bg"  style="cursor: pointer;"></div>
			<div class="prev bg"  style="cursor: pointer;"></div>
		</div><!--slidebar-->
		<div class="body_contain">
			<div class="listbook wrap">
				<div class="first_line">
					<a href="{!! route($route_bestseller) !!}" class="list_title left">Bán chạy nhất</a>
					<a href="{!! route($route_bestseller) !!}" class="more right">
						Xem tất cả
						<span class="fa fa-angle-double-right"></span>
					</a>
					<div class="clear"></div>
				</div>
				<div class="slide_book wait unselectable">
					<div class="book">
						@foreach($bestseller as $item)
							@include('front.partials.book_item')
						@endforeach
					</div>
					<div class="ctrlslide">
						<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
						<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
					</div>
				</div>
			</div>
			<div class="listbook wrap">
				<div class="first_line">
					<a href="{!! route($route_newbook) !!}" class="list_title left">
						Sách mới
					</a>
					<a href="{!! route($route_newbook) !!}" class="more right">
						Xem tất cả
						<span class="fa fa-angle-double-right"></span>
					</a>
					<div class="clear"></div>
				</div>
				<div class="slide_book wait unselectable">
					<div class="book">
						@foreach($newests as $item)
							@include('front.partials.book_item')
						@endforeach
					</div>
					<div class="ctrlslide">
						<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
						<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
					</div>
				</div>
			</div>
			<div class="listbook wrap">
				<div class="first_line">
					<a href="{!! route($route_comming) !!}" class="list_title left">
						Sắp phát hành
					</a>
					<a href="{!! route($route_comming) !!}" class="more right">
						Xem tất cả
						<span class="fa fa-angle-double-right"></span>
					</a>
					<div class="clear"></div>
				</div>
				<div class="slide_book wait unselectable">
					<div class="book">
						@foreach($comings as $item)
							@include('front.partials.book_item')
						@endforeach
					</div>
					<div class="ctrlslide">
						<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
						<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
					</div>
				</div>
			</div>
			<div class="listbook wrap">
				<div class="first_line">
					<a href="{!! route($route_discount) !!}" class="list_title left">
						Sách Giảm giá
					</a>
					<a href="{!! route($route_discount) !!}" class="more right">
						Xem tất cả
						<span class="fa fa-angle-double-right"></span>
					</a>
					<div class="clear"></div>
				</div>
				<div class="slide_book wait unselectable">
					<div class="book">
						@foreach($counts as $item)
							@include('front.partials.book_item')
						@endforeach
					</div>
					<div class="ctrlslide">
						<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
						<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
					</div>
				</div>
			</div>
			<div class="lineother wrap">
				<div class="combobox left">
					<div class="firstline">
						<a href="trangchu-xemthem.php" class="list_title">
							Combo mới
						</a>
					</div>
					<div class="combo">
						<div class="slider">
							<div class="slide mxClrAft">
								<div class="cbb" style="background-image: url({!!asset('')!!}style/images/temp/cb1.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="{{ route('home.combo') }}" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
													<div class="ctrlnum left">
														<div class="fa fa-angle-up is-up"></div>
														<div class="fa fa-angle-down is-down"></div>
													</div>
													<div class="clear"></div>
												</div>
												<button class="addcart left">
													<span class="fa fa-opencart"></span>
													<span class="fa fa-check"></span>
													THÊM VÀO GIỎ
												</button>
												<button class="over is-over-check">
													<span class="fa fa-bullhorn"></span>
													<span class="fa fa-check"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url({!!asset('')!!}style/images/temp/cb2.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="{{ route('home.combo') }}" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
													<div class="ctrlnum left">
														<div class="fa fa-angle-up is-up"></div>
														<div class="fa fa-angle-down is-down"></div>
													</div>
													<div class="clear"></div>
												</div>
												<button class="addcart left">
													<span class="fa fa-opencart"></span>
													<span class="fa fa-check"></span>
													THÊM VÀO GIỎ
												</button>
												<button class="over is-over-check">
													<span class="fa fa-bullhorn"></span>
													<span class="fa fa-check"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url({!!asset('')!!}style/images/temp/cb3.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="{{ route('home.combo') }}" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
													<div class="ctrlnum left">
														<div class="fa fa-angle-up is-up"></div>
														<div class="fa fa-angle-down is-down"></div>
													</div>
													<div class="clear"></div>
												</div>
												<button class="addcart left">
													<span class="fa fa-opencart"></span>
													<span class="fa fa-check"></span>
													THÊM VÀO GIỎ
												</button>
												<button class="over is-over-check">
													<span class="fa fa-bullhorn"></span>
													<span class="fa fa-check"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url({!!asset('')!!}style/images/temp/cb4.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="{{ route('home.detail' , $item->id) }}" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
													<div class="ctrlnum left">
														<div class="fa fa-angle-up is-up"></div>
														<div class="fa fa-angle-down is-down"></div>
													</div>
													<div class="clear"></div>
												</div>
												<button class="addcart left">
													<span class="fa fa-opencart"></span>
													<span class="fa fa-check"></span>
													THÊM VÀO GIỎ
												</button>
												<button class="over is-over-check">
													<span class="fa fa-bullhorn"></span>
													<span class="fa fa-check"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="slide mxClrAft">
								<div class="cbb" style="background-image: url({!!asset('')!!}style/images/temp/cb1.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="{{ route('home.combo') }}" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
													<div class="ctrlnum left">
														<div class="fa fa-angle-up is-up"></div>
														<div class="fa fa-angle-down is-down"></div>
													</div>
													<div class="clear"></div>
												</div>
												<button class="addcart left">
													<span class="fa fa-opencart"></span>
													<span class="fa fa-check"></span>
													THÊM VÀO GIỎ
												</button>
												<button class="over is-over-check">
													<span class="fa fa-bullhorn"></span>
													<span class="fa fa-check"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url({!!asset('')!!}style/images/temp/cb2.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="{{ route('home.combo') }}" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
													<div class="ctrlnum left">
														<div class="fa fa-angle-up is-up"></div>
														<div class="fa fa-angle-down is-down"></div>
													</div>
													<div class="clear"></div>
												</div>
												<button class="addcart left">
													<span class="fa fa-opencart"></span>
													<span class="fa fa-check"></span>
													THÊM VÀO GIỎ
												</button>
												<button class="over is-over-check">
													<span class="fa fa-bullhorn"></span>
													<span class="fa fa-check"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url({!!asset('')!!}style/images/temp/cb3.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="{{ route('home.detail' , $item->id) }}" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
													<div class="ctrlnum left">
														<div class="fa fa-angle-up is-up"></div>
														<div class="fa fa-angle-down is-down"></div>
													</div>
													<div class="clear"></div>
												</div>
												<button class="addcart left">
													<span class="fa fa-opencart"></span>
													<span class="fa fa-check"></span>
													THÊM VÀO GIỎ
												</button>
												<button class="over is-over-check">
													<span class="fa fa-bullhorn"></span>
													<span class="fa fa-check"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url({!!asset('')!!}style/images/temp/cb4.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="{{ route('home.combo') }}" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
													<div class="ctrlnum left">
														<div class="fa fa-angle-up is-up"></div>
														<div class="fa fa-angle-down is-down"></div>
													</div>
													<div class="clear"></div>
												</div>
												<button class="addcart left">
													<span class="fa fa-opencart"></span>
													<span class="fa fa-check"></span>
													THÊM VÀO GIỎ
												</button>
												<button class="over is-over-check">
													<span class="fa fa-bullhorn"></span>
													<span class="fa fa-check"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="ctrlslide">
							<div class="fa fa-angle-left"></div>
							<div class="fa fa-angle-right"></div>
						</div>
					</div>
				</div>
				<div class="authorbox right">
					<div class="firstline">
						<a href="{!! route($route_author) !!}" class="list_title">
							Tác giả tiêu biểu
						</a>
					</div>
					<div class="ath">
						<div class="slider">
							@foreach($author as $item)
								<div class="slide">
									<a href="{!! route($route_author).'#'.$item->id !!}" class="athimg" style="background-image: url({!!asset($item->avatar)!!})"></a>
									<div class="athtxt">
										<a href="{!! route($route_author).'#'.$item->id !!}" class="name">
											{{$item->name}}
										</a>
									</div>
								</div>
							@endforeach
						</div>
						<div class="ctrlslide">
							<div class="fa fa-angle-left"></div>
							<div class="fa fa-angle-right"></div>
						</div>
					</div>
					<div class="smath">
						<div class="fa fa-angle-left"></div>
						<div class="fa fa-angle-right"></div>
						<div class="iosslider">
							<div class="slider">
								@foreach($author as $item)
								<div class="slide" style="background-image: url({!!asset($item->avatar)!!})"></div>
								@endforeach
							</div>
							<div class="prev"></div>
							<div class="next"></div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
@stop