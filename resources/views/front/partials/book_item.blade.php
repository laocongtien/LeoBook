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
<div class="book_item">
	<div class="book_item_hover">
		<div class="book_cover">
			<a href="{{ route('home.detail' , $item->id) }}"><img src="{!!asset('')!!}style/images/temp/{!! $item->image!!}.jpg" alt="mybook"></a>
		</div>
		<div class="smdt">
			<a href="{{ route('home.detail' , $item->id) }}" class="book_title">
				{!! $item->name !!}
			</a>
			<a href="#" class="book_author">{!! $item->author->name!!}</a>
		</div>
	</div>
	<div class="book_item_detail">
		<div class="cver left">
			<a href="{{ route('home.detail' , $item->id) }} "><img src="{!!asset('')!!}style/images/temp/{!! $item->image!!}.jpg" alt="mybook"></a>
		</div>
		<div href="{{ route('home.detail' , $item->id) }}" class="txtbook left">
			<a href="{{ route('home.detail' , $item->id) }}" class="title">
				{!! $item->name !!}
			</a>
			<div class="intt">
				Tác giả:
				<a href="{!! route($route_author) !!}">{!! $item->author->name!!}</a>
			</div>
			<div class="intt">
				NXB: 
					<a href="{!! route($route_publisher) !!}">{!! $item->publisher->name!!}</a>
			</div>
			<div class="old intt">
				Giá bìa: 
					<span>
						{{ number_format($item->price,0,',','.') }}đ
					</span>
			</div>
			<div class="new intt">
				Giá bán: 
					<span>
						{{ number_format($item->price - $item->price * $item->discount /100,0,',','.') }}đ
					</span>
			</div>
			<div class="sls intt">
				Giảm giá: 
					<span>
						{!! $item->discount !!}%
					</span>
			</div>
			@include('front.partials.cartbox')
		</div>
		<div class="clear"></div>
	</div>
</div>