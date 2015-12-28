@extends('front.layouts.base')

@section('head.title')
Tác giả
@stop

@section('body.content')
	<div class="contain mxClrAft wrap is-box athp">
		<div class="authorlist left">
			<div class="title_author is-menu" data-link="all">
				Tất cả
			</div>

			<div class="athslider">
				<div class="slider">
					@foreach ($author_word as $value)
					<div class="nav">
			      <div class="author_word is-menu" data-set="{{$value->alpha}}"data-link="word">
			      	{{$value->alpha}}
			      </div>
			      <div class="author_list">
				    <?php $author = DB::table('authors')->where(DB::raw('substr(name,1,1)'),$value->alpha)->get();?>
				    @foreach ($author as $item)
			        	<div class="author_name is-menu" data-set="{{ $item->id }}"data-link="pp">
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
			<!--Tất cả tác giả-->
			<div class="filterbox all">
				<div class="filterbar mxClrAft">
					<div class="namebox">
						Danh sách tác giả
					</div>
					<div class="fil slfilter right">
						<select name="TenDanhSach" class="is-sl" value="Sắp xếp">
							<option value="name_ASC">Sắp xếp theo: A - Z</option>
							<option value="name_DESC">Sắp xếp theo: Z - A</option>
						</select>
					</div>
				</div>
			</div>
			<div class="is-tab gridbook" data-link="all">
				@include('front.partials.list_item_all')
			</div>
			<!--Tác giả theo từ khóa #-->
			<div class="is-tab load" data-link="word">
				
			</div>
			<!--Từng tác giả-->
			<div class="is-tab load" data-link="pp">
				
			</div>
		</div>
	</div>
@stop