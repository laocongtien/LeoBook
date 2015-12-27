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
<div class="grid mxClrAft {{ $list or '' }} pagination">
	@include('front.partials.list_book_item_info')
</div>
@if ($data->lastPage() > 1)
<div class="page_number">
    <div class="page_num">
    	<div class="num numprev fa fa-angle-double-left {{$data->currentPage() == 1 ? 'hide' : '' }}"></div>
    	@for ($i = 1; $i <= $data->lastPage(); $i = $i + 1)
    	<div class="num numpage {{$data->currentPage() == $i ? 'atv' : '' }}" href="{!! $data->url($i) !!}">
    		{{ $i }}
    	</div>
    	@endfor
    	<div class="num numnext fa fa-angle-double-right {{$data->currentPage() == $data->lastPage() ? 'hide' : '' }}"></div>
    	<div class="clear"></div>
    </div>
	</div>
@endif