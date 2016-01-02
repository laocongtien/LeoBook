<?php $i = 1; ?>
@foreach($location as $item)
	<div class="linacc mxClrAft {{ $item->default==1 ? 'def' : '' }}" data-set="{{ $item->id }}">
		<div class="left tt">
			Địa chỉ {{ $i++ }}:
		</div>
		<div class="left dt">
		<?php 
			$full_location = $item->house_number.' '.$item->street.', '.$item->ward->name.', '.$item->district->name.', '.$item->province->type.' '.$item->province->name;
		?>
		{{ $full_location }}
			
		</div>
		<div class="ed right">

			<div class="fa fa-check-square-o is-addr">
				<div class="p">
					Đã đặt làm địa chỉ mặc định
				</div>
			</div>
			<div class="fa fa-square-o is-addr">
				<div class="p">
					Đặt làm địa chỉ mặc định
				</div>
			</div>
			<div class="fa fa-pencil-square-o is-openpop" data-pop="edadress">
				<div class="p">
					Chỉnh sửa địa chỉ
				</div>
			</div>
			<div class="fa fa-trash-o is-rmadr">
				<div class="p">
					Xóa địa chỉ này
				</div>
			</div>
		</div>
	</div>
@endforeach