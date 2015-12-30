@extends('front.layouts.base')

@section('head.title')
{{ $name_page or ''}}
@stop

@section('body.content')
	<div class="contain mxClrAft wrap is-box athp">
		<div class="authorlist left">
			<div class="title_author is-menu all" data-link="all" data-set='all' >
				Tất cả
			</div>

			<div class="athslider">
				<div class="slider">
					@foreach ($author_word as $value)
					<div class="nav">
			      <div class="author_word is-menu word" data-set="{{$value->alpha}}"data-link="word">
			      	{{$value->alpha}}
			      </div>
			      <div class="author_list">
				    <?php $author = DB::table($table_name)->where('name','LIKE',$value->alpha.'%')->orderBy('name','AESC')->get();?>
				    @foreach ($author as $item)
			        	<div class="author_name is-menu pp" data-set="{{ $item->id }}" data-link="pp" data-word="{{$value->alpha}}">
			        		{{$item->name}}
			        	</div>
		        	@endforeach
			      </div>
			    </div>
					@endforeach
				</div>
			</div>
		    <div class="scroll_word">
				@foreach ($author_word as $value)
				<div class="word is-menu"  data-set="{{ $value->alpha }}" data-link="word">
					{{ $value->alpha }}
				</div>
				@endforeach
		    </div>
		</div>
		<div class="authorbox right">
			<!--khung filter tất cả tác giả-->
			<div class="filterbox all">
				<div class="filterbar mxClrAft">
					<div class="namebox">
						Danh sách {{ $name_page or ''}}
					</div>
					<div class="fil slfilter right">
						<select name="TenDanhSach" class="is-sl" value="Sắp xếp">
							<option value="name_ASC">Sắp xếp theo: A - Z</option>
							<option value="name_DESC">Sắp xếp theo: Z - A</option>
						</select>
					</div>
				</div>
			</div>
			<!--Tất cả tác giả-->
			<div class="is-tab gridbook" data-link="all">
				{{-- load ajax trang list_book_all --}}
				@include('front.partials.list_item_all')
			</div>
			<!--Tác giả theo từ khóa #-->
			<div class="is-tab load" data-link="word">
				{{-- load ajax trang list_book_word --}}
			</div>
			<!--Từng tác giả-->
			<div class="is-tab load" data-link="pp">
				{{-- load ajax trang list_book_pp --}}
			</div>
		</div>
	</div>
@stop