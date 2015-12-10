<div class="book_item">
	<div class="book_item_hover">
		<div class="book_cover">
			<a href="{{ route('home.detail' , $item->id) }}"><img src="{!!asset('')!!}style/images/temp/{!! $item->image!!}.jpg" alt="mybook"></a>
		</div>
		<div class="smdt">
			<a href="{{ route('home.detail' , $item->id) }}" class="book_title is-2r">
				{!! $item->name !!}
			</a>
			<a href="#" class="book_author">{!! $item->author->name!!}</a>
		</div>
	</div>
	<div class="book_item_detail">
		<div class="cver left">
			<a href="{{ route('home.detail' , $item->id) }}"><img src="{!!asset('')!!}style/images/temp/{!! $item->image!!}.jpg" alt="mybook"></a>
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
						{!! $item->price !!}
					</span>
			</div>
			<div class="new intt">
				Giá bán: 
					<span>
						{!! $item->price - $item->price * $item->discount /100 !!}
					</span>
			</div>
			<div class="sls intt">
				Giảm giá: 
					<span>
						{!! $item->discount !!}%
					</span>
			</div>
			<div class="cartbox mxClrAft {{($item->invent < 1) ? 'ost' : ''}}">
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
				<button class="over">
					<span class="fa fa-bullhorn"></span>
					BÁO KHI CÓ HÀNG
				</button>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>