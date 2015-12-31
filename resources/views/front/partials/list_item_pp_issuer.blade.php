<div class="prfath mxClrAft pagination {{($data->logo == '') ? 'noav' : ''}}" data-set="{{ $data->id}}">
		<div class="ava" style="background-image: url({{url($data->logo)}})"></div>
		<div class="nava">
			<img src="{{ url('style/images/theme/logo-gray.png') }}" alt="">
		</div>
		<div class="prf ">
			<div class="na">
				{{ $data->name }}
			</div>
			<div class="int">
				Trụ sở chính:
				<span>
					{{ $data->location }}
				</span>
			</div>
			<div class="int">
				Số điện thoại: 
				<span>
					{{ $data->phone }}
				</span>
			</div>
			<div class="int">
				Fax:
				<span>
					{{ $data->fax }}
				</span>
			</div>
			<div class="int">
				Email:
				<span>
					 {{ $data->email }}
				</span>
			</div>
			<div class="int">
				Website:
				<span>
					{{ $data->website }}
				</span>
			</div>
		</div>
	
</div>
<div class="listbook wrap">
	<div class="first_line">
		<a href="{{route('author.detail.book',$data->id)}}" class="list_title left">Sách của {{ $data->name }}</a>
		<a href="{{route('author.detail.book',$data->id)}}" class="more right">
			Xem tất cả
			<span class="fa fa-angle-double-right"></span>
		</a>
		<div class="clear"></div>
	</div>
	<div class="slide_book wait unselectable">
		<div class="book">
			
			@foreach($author_book as $item)
				@include('front.partials.book_item')
			@endforeach
		</div>
		<div class="ctrlslide">
			<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
			<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
		</div>
	</div>
</div>