
<div class="filterbox">
	<div class="filterbar mxClrAft">
		<div class="namebox">
			Danh sách tác giả 
			<span>
				#A
			</span>
		</div>
	</div>
</div>
<div class="gridauthor" >
	<div class="athl mxClrAft pagination">
		@foreach ($data as $item)
		<div class="athitem {{($item->avatar == '') ? 'noav' : ''}}">
			<div class="ava" style="background-image: url({{($item->avatar == '') ? '' : url($item->avatar)}})"></div>
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
</div>