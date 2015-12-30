<div class="filterbox"  >
	<div class="filterbar mxClrAft">
		<div class="namebox">
			Danh sách {{ $name_page or ''}} 
			<span>
				#{{$word or ''}}
			</span>
		</div>
	</div>
</div>
@include ('front.partials.list_item_all')