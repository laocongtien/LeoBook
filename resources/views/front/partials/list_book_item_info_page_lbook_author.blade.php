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
<div class="lbook grid mxClrAft {{$list or ''}} pagination">
	@foreach($data as $items)
    <?php $item = DB::table('books')->where('author_id', $items->id)->First(); ?>
		<div class="book_item">
            <div class="book_item_hover">
                <div class="book_cover">
                    <a href="{{ route('home.detail' , $item->id) }}">
                        <img src="{!!asset($item->image)!!}" alt="mybook">
                    </a>
                </div>
                <div class="smdt">
                    <div class="dt">
                        <a href="{{ route('home.detail' , $item->id) }}" class="book_title ">
                            {{ $item->name }}
                        </a>
                        <div class="book_author intt ">
                            <a href="{{route('home.author').'#'.$item->author_id}}" class="" >
                                {{ $items->name }}
                            </a>
                        </div>
                        <div class="intt li">
                            NXB:
                                <a href="{!! route($route_publisher) !!}">{!! $item->name!!}</a>
                        </div>
                        <div class="sal">
                            <div class="gri">
                                <div class="old">
                                    {{ number_format($item->price,0,',','.') }}đ
                                </div>
                                <div class="new">
                                    {{ number_format($item->price - $item->price * $item->discount /100,0,',','.') }}đ
                                </div>
                            </div>
                            <div class="li">
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
                            </div>
                        </div>
                        <div class="trig li wait">
                                {{ $item->info }}
                        </div>
                    </div>
                    @include('front.partials.cartbox')          
                </div>
            </div>
        </div>
	@endforeach
</div>
@if ($data->lastPage() > 1)
<div class="page_number">
    <div class="page_num">
    	<div class="num numprev fa fa-angle-double-left {{$data->currentPage() == 1 ? 'hide' : '' }}" href="{{ $data->url($data->currentPage() - 1)}}"></div>
    	@for ($i = 1; $i <= $data->lastPage(); $i = $i + 1)
    	<div class="num numpage {{$data->currentPage() == $i ? 'atv' : '' }}" href="{!! $data->url($i) !!}">
    		{{ $i }}
    	</div>
    	@endfor
    	<div class="num numnext fa fa-angle-double-right {{$data->currentPage() == $data->lastPage() ? 'hide' : '' }}" href="{{ $data->url($data->currentPage() + 1)}}"></div>
    	<div class="clear"></div>
    </div>
</div>
@endif