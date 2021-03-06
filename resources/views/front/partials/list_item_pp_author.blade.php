<div class="prfath mxClrAft pagination {{($data->avatar == '') ? 'noav' : ''}}" data-set="{{ $data->id}}">
		<div class="ava" style="background-image: url({{url($data->avatar)}})"></div>
		<div class="nava">
			<img src="{{ url('style/images/theme/logo-gray.png') }}" alt="">
		</div>
		<div class="prf ">
			<div class="na">
				{{ $data->name }}
			</div>
			<div class="int">
				Tên thật:
				<span>
					{{ $data->real_name }}
				</span>
			</div>
			<div class="int">
				Tuổi:
				<span>
					{{ (int)(date('Y'))-$data->years}}
				</span>
			</div>
			<div class="trig is-5r">
				{{ $data->info }}
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