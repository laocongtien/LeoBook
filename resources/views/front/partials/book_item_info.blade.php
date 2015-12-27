<div class="book_item">
	<div class="book_item_hover">
		<div class="book_cover">
			<a href="{{ route('home.detail' , $item->id) }}">
				<img src="{!!asset('')!!}style/images/temp/{{$item->image}}.jpg" alt="mybook">
			</a>
		</div>
		<div class="smdt">
			<div class="dt">
				<a href="{{ route('home.detail' , $item->id) }}" class="book_title ">
					{{ $item->name }}
				</a>
				<div class="book_author intt ">
					<a href="tacgia.php" class="" >
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