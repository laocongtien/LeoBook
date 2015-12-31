
	<div class="athl mxClrAft pagination" data-set="{{ str_split($data->first()->name,1)[0] }}">
		@foreach ($data as $item)
		<div class="athitem {{($item->avatar == '' && $item->logo == '') ? 'noav' : ''}}" data-set="{{ $item->id }}">
			<?php 
			if ($item->avatar) {
				$link = $item->avatar;
			}elseif($item->logo){
				$link = $item->logo;
			}else $link ='';
			?>
			<div class="ava" style="background-image: url({{$link}})"></div>
			<img src="{{ url('style/images/theme/logo-gray.png') }}" alt="" class="nava">
			<div class="athn">
				<div>
					{{ $item->name }}

				</div>
			</div>
		</div>
		@endforeach
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

