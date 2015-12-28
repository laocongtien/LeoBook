@extends('front.layouts.base')

@section('head.title')
Danh mục sách
@stop

@section('body.content')
	<div class="contain danhmuc">
		<div class="ltbanner">
			{{ $name or '' }}
		</div>
		<div class="filterbox wrap is-box">
			<div class="filterbar mxClrAft wrap">
				<div class="boxmenu mxClrAft">
					<div class="mn is-menu" data-link="01">
						Bán chạy nhất
					</div>
					<div class="mn is-menu" data-link="02">
						Sách mới
					</div>
					<div class="mn is-menu" data-link="03">
						Sắp phát hành
					</div>
					<div class="mn is-menu" data-link="04">
						Sách giảm giá
					</div>
				</div>
				<div class="fil slfilter right">
					<select name="TenDanhSach" class="is-sl-sort" value="Sắp xếp">
						<option value="default">Chọn cách lọc</option>
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
					<select name="Soluong" class="is-sl" value="Sắp xếp">
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
			</div>
			<div class="tabbox">
				<div class="is-tab gridbook" data-link="01">
					@include('front.partials.list_book_item_info_page_lbook')
	      </div>
	      <div class="is-tab gridbook" data-link="02">
				{{-- chừa để add bằng ajax --}}
	      </div>
	      <div class="is-tab gridbook" data-link="03">
				{{-- chừa để add bằng ajax --}}
	      </div>
	      <div class="is-tab gridbook" data-link="04">
				{{-- chừa để add bằng ajax --}}
	      </div>
			</div>
		</div>
	</div>
@stop