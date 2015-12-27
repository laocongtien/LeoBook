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