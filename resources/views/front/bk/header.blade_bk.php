<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="minimal-ui, width=1024, user-scalable=no">
 	<meta name="apple-mobile-web-app-capable" content="yes">
	<title> @yield('head.title')</title>
	<link rel="stylesheet" type="text/css" href="style/css/reset.css">
	<link rel="stylesheet" type="text/css" href="style/css/font.css">
	<link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/css/jquery.selectbox.css">
	<link rel="stylesheet" type="text/css" href="style/css/jquery.jscrollpane.css">
	<link rel="stylesheet" type="text/css" href="style/css/animate-animo.min.css">
	<link rel="stylesheet" type="text/css" href="style/css/main.css">
	<link rel="stylesheet" type="text/css" href="style/css/xemthem.css">
	<link rel="stylesheet" type="text/css" href="style/css/danhmuc.css">
	<link rel="stylesheet" type="text/css" href="style/css/tacgia.css">
	<link rel="stylesheet" type="text/css" href="style/css/chitiet.css">
	<link rel="stylesheet" type="text/css" href="style/css/trangcanhan.css">
	<link rel="stylesheet" type="text/css" href="style/css/thanhtoan.css">
</head>

<body class="unselectable">
	<div class="is-bg"></div>
	<div class="pop is-pop" data-pop="hoanthanh">
		<div class="head">
			Thông báo
			<a href="index.php" class="fa fa-close is-closepop"></a>
		</div>
		<div class="t">
			Đã hoàn tất giao dịch. Cảm ơn quý khách đã sử dụng dịch vụ của Leobook.com.
			<a href="index.php">
				Quay về trang chủ.
			</a>
		</div>
	</div>
	<div class="pop is-pop" data-pop="editadr">
		<div class="head">
			Thay đổi địa chỉ giao hàng
			<a class="fa fa-close is-closepop"></a>
		</div>
		<form class="bd">
			<div class="b">
				<div class="tt">
					Thông tin người nhận
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Họ tên
					</div>
					<input type="text" class="ri" placeholder="Điền họ tên người nhận">
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Số điện thoại
					</div>
					<input type="text" class="ri" placeholder="Điền số điện thoại người nhận">
				</div>
			</div>
			<div class="b">
				<div class="tt">
					Địa chỉ nhận hàng
				</div>
				<div class="adb mxClrAft">
					<div class="adr">
						<div class="le">
							Số nhà
						</div>
						<input type="text" class="ri" placeholder="Điền số nhà">
					</div>
					<div class="adr">
						<div class="le">
							Tên đường
						</div>
						<input type="text" class="ri" placeholder="Tên đường">
					</div>
				</div>
					<div class="adr big">
						<div class="le">
							Quốc Gia
						</div>
						<div class="ri">
							<select name="quocgia" class="is-sl" value="Quốc Gia">
								<option value="">Việt Nam</option>
								<option value="">Malaysia</option>
								<option value="">Singapore</option>
								<option value="">Trung Quốc</option>
							</select>
						</div>
					</div>
				<div class="adb mxClrAft">
					<div class="adr">
						<div class="le">
							Thành phố
						</div>
						<div class="ri">
							<select name="thanhpho" class="is-sl" value="Thành Phố">
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
							</select>
						</div>
					</div>
					<div class="adr">
						<div class="le">
							ZipCode
						</div>
						<input type="text" class="ri" value="7000">
					</div>
					<div class="adr">
						<div class="le">
							Quận/ Huyện
						</div>
						<div class="ri">
							<select name="quan" class="is-sl" value="Quận">
								<option value="">Bình Thạnh</option>
								<option value="">Bình Tân</option>
								<option value="">Tân Bình</option>
								<option value="">Tân Phú</option>
							</select>
						</div>
					</div>
					<div class="adr">
						<div class="le">
							Xã/ Phường
						</div>
						<div class="ri">
							<select name="xa" class="is-sl" value="xa">
								<option value="">Phường 1</option>
								<option value="">Phường 2</option>
								<option value="">Phường 3</option>
								<option value="">Phường 4</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="ctrl mxClrAft">
				<input type="submit" class="submit is-closepop right" value="Cập nhật">
				<div class="cancel is-closepop right">
					Hủy
				</div>
			</div>
		</form>
	</div>
	<div class="pop is-pop" data-pop="editprf">
		<div class="head">
			Chỉnh sửa thông tin liên hệ
			<a class="fa fa-close is-closepop"></a>
		</div>
		<form class="bd">
			<div class="b">
				<div class="tt">
					Thông tin người nhận
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Avatar
					</div>
					<div class="avb mxClrAft">
						<div class="av" style="background-image: url(style/images/temp/prf.jpg)"></div>
						<div class="btn">
							<div class="upload is-upload">
								Up ảnh từ máy tính
							</div>
							<div class="upload is-upload is-upload-link">
								Nhập link ảnh
							</div>
							<input type="text" class="up" placeholder="Nhập link ảnh">
						</div>
					</div>
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Họ tên
					</div>
					<input type="text" class="ri" placeholder="Điền họ tên">
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Số điện thoại
					</div>
					<input type="text" class="ri" placeholder="Điền số điện thoại">
				</div>
				<div class="r mxClrAft">
					<div class="le">
						Email
					</div>
					<input type="text" class="ri" placeholder="Điền email">
				</div>
			</div>
			<div class="ctrl mxClrAft">
				<input type="submit" class="submit is-closepop right" value="Cập nhật">
				<div class="cancel is-closepop right">
					Hủy
				</div>
			</div>
		</form>
	</div>
	<div class="pop is-pop" data-pop="addadress">
		<div class="head">
			Thêm địa chỉ giao hàng
			<a class="fa fa-close is-closepop"></a>
		</div>
		<form class="bd">
			<div class="b">
				<div class="tt">
					Địa chỉ nhận hàng
				</div>
				<div class="adb mxClrAft">
					<div class="adr">
						<div class="le">
							Số nhà
						</div>
						<input type="text" class="ri" placeholder="Điền số nhà">
					</div>
					<div class="adr">
						<div class="le">
							Tên đường
						</div>
						<input type="text" class="ri" placeholder="Tên đường">
					</div>
				</div>
					<div class="adr big">
						<div class="le">
							Quốc Gia
						</div>
						<div class="ri">
							<select name="quocgia" class="is-sl" value="Quốc Gia">
								<option value="">Việt Nam</option>
								<option value="">Malaysia</option>
								<option value="">Singapore</option>
								<option value="">Trung Quốc</option>
							</select>
						</div>
					</div>
				<div class="adb mxClrAft">
					<div class="adr">
						<div class="le">
							Thành phố
						</div>
						<div class="ri">
							<select name="thanhpho" class="is-sl" value="Thành Phố">
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
							</select>
						</div>
					</div>
					<div class="adr">
						<div class="le">
							ZipCode
						</div>
						<input type="text" class="ri" value="7000">
					</div>
					<div class="adr">
						<div class="le">
							Quận/ Huyện
						</div>
						<div class="ri">
							<select name="quan" class="is-sl" value="Quận">
								<option value="">Bình Thạnh</option>
								<option value="">Bình Tân</option>
								<option value="">Tân Bình</option>
								<option value="">Tân Phú</option>
							</select>
						</div>
					</div>
					<div class="adr">
						<div class="le">
							Xã/ Phường
						</div>
						<div class="ri">
							<select name="xa" class="is-sl" value="xa">
								<option value="">Phường 1</option>
								<option value="">Phường 2</option>
								<option value="">Phường 3</option>
								<option value="">Phường 4</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="ctrl mxClrAft">
				<input type="submit" class="submit is-closepop right" value="Thêm địa chỉ">
				<div class="cancel is-closepop right">
					Hủy
				</div>
			</div>
		</form>
	</div>
	<div class="pop is-pop" data-pop="edadress">
		<div class="head">
			Chỉnh sửa địa chỉ giao hàng
			<a class="fa fa-close is-closepop"></a>
		</div>
		<form class="bd">
			<div class="b">
				<div class="tt">
					Địa chỉ nhận hàng
				</div>
				<div class="adb mxClrAft">
					<div class="adr">
						<div class="le">
							Số nhà
						</div>
						<input type="text" class="ri" placeholder="Điền số nhà" value="Số 21">
					</div>
					<div class="adr">
						<div class="le">
							Tên đường
						</div>
						<input type="text" class="ri" placeholder="Tên đường" value="Hoa Cúc">
					</div>
				</div>
					<div class="adr big">
						<div class="le">
							Quốc Gia
						</div>
						<div class="ri">
							<select name="quocgia" class="is-sl" value="Quốc Gia">
								<option value="">Việt Nam</option>
								<option value="">Malaysia</option>
								<option value="">Singapore</option>
								<option value="">Trung Quốc</option>
							</select>
						</div>
					</div>
				<div class="adb mxClrAft">
					<div class="adr">
						<div class="le">
							Thành phố
						</div>
						<div class="ri">
							<select name="thanhpho" class="is-sl" value="Thành Phố">
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
								<option value="">TP. Hồ Chí Minh</option>
								<option value="">Hà Nội</option>
								<option value="">Đà nẵng</option>
								<option value="">Huế</option>
							</select>
						</div>
					</div>
					<div class="adr">
						<div class="le">
							ZipCode
						</div>
						<input type="text" class="ri" value="7000">
					</div>
					<div class="adr">
						<div class="le">
							Quận/ Huyện
						</div>
						<div class="ri">
							<select name="quan" class="is-sl" value="Quận">
								<option value="">Bình Thạnh</option>
								<option value="">Bình Tân</option>
								<option value="">Tân Bình</option>
								<option value="">Tân Phú</option>
							</select>
						</div>
					</div>
					<div class="adr">
						<div class="le">
							Xã/ Phường
						</div>
						<div class="ri">
							<select name="xa" class="is-sl" value="xa">
								<option value="">Phường 1</option>
								<option value="">Phường 2</option>
								<option value="">Phường 3</option>
								<option value="">Phường 4</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="ctrl mxClrAft">
				<input type="submit" class="submit is-closepop right" value="Cập nhật">
				<div class="cancel is-closepop right">
					Hủy
				</div>
			</div>
		</form>
	</div>
	<div class="header">
		<div class="head wrap">
			<div class="top_left left">
				<a href="{!!asset(' ')!!}" class="logo left">
					<img src="style/images/theme/log.png">
				</a>
				<div class="menu left">
					<div class="fa fa-bars"></div>
					<div class="arr"></div>
					<div class="menu_c1">
						<div sub="tt_1" class="title_c1 hs">
							<a href="xemthem.php" class="name_menu left">
								Bán chạy nhất
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div sub="tt_2" class="title_c1 hs">
							<a href="xemthem.php" class="name_menu left">
								Sách mới
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div sub="tt_3" class="title_c1 hs">
							<a href="xemthem.php" class="name_menu left">
								Sắp phát hành
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div sub="tt_4" class="title_c1 hs">
							<a href="xemthem.php" class="name_menu left">
								Sách giảm giá
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div class="title_c1">
							<a href="combo.php" class="name_menu left">
								Combo mới
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div class="title_c1">
							<a href="tacgia.php" class="name_menu left">
								Tác giả
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div class="title_c1">
							<a href="nxb.php" class="name_menu left">
								Nhà xuất bản
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
						<div class="title_c1">
							<a href="issuers.php" class="name_menu left">
								Nhà phát hành sách
							</a>
							<div class="arr_c1 bg right"></div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="menu_c2 hide">
						<div class="clone2" sub="tt_1">
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách tiếng anh
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách Văn học - Tiểu thuyết
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách kinh tế
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách kỹ năng sống
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách giáo khoa
								</a>
							</div>
						</div>
						<div class="clone2" sub="tt_2">
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách tiếng anh
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách Văn học - Tiểu thuyết
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách kinh tế
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách kỹ năng sống
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách giáo khoa
								</a>
							</div>
						</div>
						<div class="clone2" sub="tt_3">
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách tiếng anh
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách Văn học - Tiểu thuyết
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách kinh tế
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách kỹ năng sống
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách giáo khoa
								</a>
							</div>
						</div>
						<div class="clone2" sub="tt_4">
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách tiếng anh
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách Văn học - Tiểu thuyết
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách kinh tế
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách kỹ năng sống
								</a>
							</div>
							<div class="title_c2">
								<a href="danhmuc.php" class="name_menu">
									Sách giáo khoa
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="top_right right">
				<div class="search left">
					<form action="timkiem.php" method="get" name="frm_tim_kiem" onsubmit="return CheckSearch(this)" class="left sbox">
						<div class="fa fa-search"></div>
						<input type="submit" class="sicon right" value="">
						<input type="text" placeholder="Nội dung tìm kiếm" name="tim_kiem_tu_khoa" class="sip right" value=""> 
						<div class="clear"></div>
					</form>
				</div>
				<div class="cart left">
					<div class="fa fa-shopping-cart"></div>
					<div class="ab none">
						4
					</div>
					<div class="cab">
						<div class="cast">
							Giỏ hàng của bạn
						</div>
						<div class="lib">
							<?php   for ($i = 1; $i < 11;$i++): ?>
								<div class="lica mxClrAft">
									<div class="ttl left">
										<a href="chitiet.php" class="is-2r">
											Thương cho roi cho vọt, ghét cho ngọt cho bùi
										</a>
									</div>
									<div class="cartbox left">
										<div class="num left">
											<input type="text" class="n left" value="1">
											<div class="ctrlnum left">
												<div class="fa fa-angle-up is-up"></div>
												<div class="fa fa-angle-down is-down"></div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
									<div class="sls left">
										259.000đ
									</div>
									<div class="fa fa-trash-o right"></div>
								</div>
							<?php endfor; ?>
						</div>
						<div class="caend mxClrAft">
							<div class="total left">
								Tổng cộng: 
								<span>
									186.000đ
								</span>
							</div>
							<a href="checkout.php" class="pay right">
								<button>
									Thanh toán
								</button>
							</a>
						</div>
					</div>
				</div>
				<div class="prf left">
					<div class="fa fa-user" style="display: none"></div>
					<div class="pri"  style="background-image: url(style/images/temp/prf.jpg)"></div>
					<div class="log" style="display: none">
						<a href="signin" class="lg">
							Đăng Nhập
						</a>
						<a href="signup" class="lg">
							Đăng Ký
						</a>
					</div>
					<div class="log on">
						<a href="trangcanhan.php" ref="" class="lg">
							Tài khoản
						</a>
						<a href="trangcanhan.php" ref="fav" class="lg">
							Danh sách yêu thích
						</a>
						<a href="trangcanhan.php" ref="rated" class="lg">
							Danh sách đánh giá
						</a>
						<a href="trangcanhan.php" ref="order" class="lg">
							Đơn hàng
						</a>
						<a href="trangcanhan.php" ref="noti" class="lg">
							Thông báo
						</a>
						<a href="logout" class="lg">
							Đăng xuất
						</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear_header"></div>
	<div class="clearpage wrap">
		<div class="t">
			Đã hoàn tất giao dịch. Cảm ơn quý khách đã sử dụng dịch vụ của Leobook.com.
			<a href="index.php">
				Quay về trang chủ.
			</a>
		</div> 
	</div>