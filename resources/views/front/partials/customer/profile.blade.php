<div class="titlebar loaded">
	Tài khoản của bạn
</div>
<div class="cnt">
	<div class="smbo">
		<div class="ttb">
			Thông tin liên hệ
			<div class="is-openpop ipop" data-pop="editprf">
				Chỉnh sửa
			</div>
		</div>
		<div class="linacc mxClrAft">
			<div class="tt left">
				Họ và Tên:
			</div>
			<div class="left dt">
				{{ Auth::user()->fullname }}
			</div>
		</div>
		<div class="linacc mxClrAft">
			<div class="tt left">
				Số điện thoại: 
			</div>
			<div class="left dt">
				{{ Auth::user()->phone }}
			</div>
		</div>
		<div class="linacc mxClrAft">
			<div class="tt left">
				Email:
			</div>
			<div class="left dt">
				{{ Auth::user()->email }}
			</div>
		</div>
	</div>
	<div class="smbo">
		<div class="ttb">
			Địa chỉ giao hàng 
			<div class="is-openpop ipop" data-pop="addadress">
				Thêm địa chỉ
			</div>
		</div>
		@include ('front.partials.customer.address_list')
	</div>
</div>