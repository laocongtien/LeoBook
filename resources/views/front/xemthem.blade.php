@extends('front.layouts.base')

@section('head.title')
{{ $name or '' }} - LeoBook
@stop

@section('body.content')
<?php
	//$data = $datas->book;
	$route_detail = 'home.detail';
	$route_bestseller = 'home.bestseller';
	$route_newbook	=	'home.newbook';
	$route_comming	=	'home.comming';
	$route_discount	=	'home.discount';
	$route_author     =	'home.author';
	$route_publisher  =	'home.publisher';
?>
	<div class="contain detai">
		<!--Này là thống kê lúc click xem thêm-->
		<div class="ltbanner">
			{{ $name or '' }}
		</div>
		<div class="filterbox wrap is-box">
			<div class="filterbar mxClrAft wrap">
				<div class="link left">
					<div class="listlink">
						<a href="{!!asset('')!!}" class="cat">
							Trang chủ
							<span class="fa fa-angle-double-right"></span>
						</a>
						@if (isset($filter))
						<a  href="{{ route($route) }}" class="cat">
							{{ $filter }}
							<span class="fa fa-angle-double-right"></span>
						</a>
						@endif
						<a 
						@if($data->count() > 0)
							herf="{{ url('danh-muc/'.$data->first()->cate_id) }}"
						@endif
						 class="cat">
							{{ $name or '' }}
							<span class="fa fa-angle-double-right"></span>
						</a>
					</div>
					<div class="clear"></div>
				</div>
				@if ($data->count() > 0)
				<div class="fil slfilter right">
					<select name="TenDanhSach" class="is-sl" value="sap_xep" >
						<option value="new">Sách mới</option>
						<option value="name_ASC">Sắp xếp theo: A - Z</option>
						<option value="name_DESC">Sắp xếp theo: Z - A</option>
						<option value="price_DESC">Giá: cao đến thấp</option>
						<option value="price_ASC">Giá: thấp đến cao</option>
						<option value="discount_DESC">Giá giảm: cao đến thấp</option>
						<option value="discount_ASC">Giá giảm: thấp đến cao</option>
						<option value="best">Bán chạy nhất</option>
					</select>
				</div>
				<div class="numbook slfilter right">
					<select name="Soluong" class="is-sl" value="num">
						<option value="5">Hiển thị: 5</option>
						<option value="10">Hiển thị: 10</option>
						<option value="20">Hiển thị: 20</option>
						<option value="50">Hiển thị: 50</option>
						<option value="100">Hiển thị: 100</option>
					</select>
				</div>
				<div class="viewmode right">
					<div class="fa fa-th atv"></div>
					<div class="fa fa-list"></div>
					<div class="clear"></div>
				</div>
				@endif
			</div>
			@if ($data->count() > 0)
			<div class="gridbook wrap">
				@include('front.partials.list_book_item_info_page')
			</div>
			@endif
		</div>
	</div>
@stop