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
<div class="filterbox loaded">
	<div class="filterbar mxClrAft">
		<div class="title">
			Danh sách yêu thích
		</div>
		<div class="fil slfilter right">
			<select name="TenDanhSach" class="is-sl" value="Sắp xếp">
				<option value="">Sách mới</option>
				<option value="">Sắp xếp theo: A - Z</option>
				<option value="">Sắp xếp theo: Z - A</option>
				<option value="">Giá: cao đến thấp</option>
				<option value="">Giá: thấp đến cao</option>
				<option value="">Giá giảm: cao đến thấp</option>
				<option value="">Giá giảm: thấp đến cao</option>
				<option value="">Bán chạy nhất</option>
			</select>
		</div>
		<div class="numbook slfilter right">
			<select name="Soluong" class="is-sl" value="Sắp xếp">
				<option value="5">Hiển thị: 5</option>
				<option value="10">Hiển thị: 10</option>
				<option value="20">Hiển thị: 20</option>
				<option value="">Hiển thị: Tất cả</option>
			</select>
		</div>
		<div class="viewmode right">
			<div class="fa fa-th atv"></div>
			<div class="fa fa-list"></div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="tabbox">
		<div class="gridbook">
			<div class="lbook grid mxClrAft">

				@foreach ($data as $item)
					<div class="book_item">
						<div class="book_item_hover">
							<div class="book_cover">
								<a href="{{ route('home.detail' , $item->book->id) }}">
									<img src="{!!asset($item->book->image)!!}" alt="mybook">
								</a>
							</div>
							<div class="smdt">
								<div class="dt">
									<a href="{{ route('home.detail' , $item->book->id) }}" class="book_title ">
										{{ $item->book->name }}
									</a>
									<div class="book_author intt ">
										<a href="{{route('home.author').'#'.$item->book->author_id}}" class="" >
											{{ $item->book->author->name }}
										</a>
									</div>
									<div class="intt li">
										NXB:
											<a href="{!! route($route_publisher) !!}">{!! $item->book->publisher->name!!}</a>
									</div>
									<div class="sal">
										<div class="gri">
											<div class="old">
												{{ number_format($item->book->price,0,',','.') }}đ
											</div>
											<div class="new">
												{{ number_format($item->book->price - $item->book->price * $item->book->discount /100,0,',','.') }}đ
											</div>
										</div>
										<div class="li">
											<div class="old intt">
												Giá bìa: 
												<span>
													{{ number_format($item->book->price,0,',','.') }}đ
												</span>
											</div>
											<div class="new intt">
												Giá bán: 
													<span>
														{{ number_format($item->book->price - $item->book->price * $item->book->discount /100,0,',','.') }}đ
													</span>
											</div>
										</div>
									</div>
									<div class="trig li wait">
											{{ $item->book->info }}
									</div>
								</div>
								@include('front.partials.cartbox')			
							</div>
						</div>
					</div>
				@endforeach
			</div>
			@include('front.partials.page_num')
  		</div>
	</div>
</div>