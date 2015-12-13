<?php $qty = 1; ?>
<div class="cartbox mxClrAft {{($item->invent < 1) ? 'ost' : ''}} 
				@if (Cart::count() != 0)
				@foreach(Cart::content() as $cart)
				<?php 
				if ($cart->id == $item->id) {
					$qty = $cart->qty;
					echo 'ck';
					break;
				}else{ echo '';}
				?>
				@endforeach
				@endif
">
	<div class="num left">
		<input type="text" class="n left qty" value="{{$qty}}">
		<input type="hidden" class="b-id" value="{{ $item->id }}">
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
	<button class="over is-over-check">
		<span class="fa fa-bullhorn"></span>
		<span class="fa fa-check"></span>
		BÁO KHI CÓ HÀNG
	</button>
</div>