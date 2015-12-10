<div class="book_item">
	<div class="book_item_hover">
		<div class="book_cover">
			<a href="{{ route($route_detail , $item->id) }}">
				<img src="{!!asset('')!!}style/images/temp/{{$item->image}}.jpg" alt="mybook">
			</a>
		</div>
		<div class="smdt">
			<div class="dt">
				<a href="{{ route($route_detail , $item->id) }}" class="book_title is-1r">
					{{ $item->name }}
				</a>
				<div class="book_author intt is-1r">
					Tác giả: 
					<a href="{!! route($route_author) !!}" >
						{{ $item->author->name }}
					</a>
				</div>
				<div class="intt li">
					NXB: 
						<a href="{!! route($route_publisher) !!}">{!! $item->publisher->name!!}</a>
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
								{!! $item->price !!}đ
							</span>
						</div>
						<div class="new intt">
							Giá bán: 
								<span>
									{!! $item->price - $item->price * $item->discount /100 !!}đ
								</span>
						</div>
					</div>
				</div>
				<div class="trig li wait">
						{{ $item->info }}
				</div>
			</div>
			<div class="cartbox mxClrAft {{($item->invent < 1) ? 'ost' : ''}}">
				<div class="num">
					<input type="text" class="n left" value="1">
					<div class="ctrlnum left">
						<div class="fa fa-angle-up is-up"></div>
						<div class="fa fa-angle-down is-down"></div>
					</div>
					<div class="clear"></div>
				</div>
				<button class="addcart">
					<span class="fa fa-opencart"></span>
					<span class="fa fa-check"></span>
					THÊM VÀO GIỎ
				</button>
				<button class="over">
					<span class="fa fa-bullhorn"></span>
					BÁO KHI CÓ HÀNG
				</button>
			</div>
		</div>
	</div>
</div>