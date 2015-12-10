@extends('front.layouts.base')

@section('head.title')
Trang chủ Website bán Sách
@stop

@section('body.content')
	<div class="contain">
		<div class="slidebar wait unselectable">
			<div class='iosslider' >
				<div class='slider' >
					<a href="sachchitiet.php" class='slide'>
						<img src="style/images/temp/slide1.jpg" alt="pic1"/>
					</a>
					<a href="sachchitiet.php" class='slide'>
						<img src="style/images/temp/slide2.png" alt="pic1"/>
					</a>
					<a href="sachchitiet.php" class='slide'>
						<img src="style/images/temp/slide3.jpg" alt="pic1"/>
					</a>
					<a href="sachchitiet.php" class='slide'>
						<img src="style/images/temp/slide3.jpg" alt="pic1"/>
					</a>
				</div>
			</div>
			<div class="next bg"  style="cursor: pointer;"></div>
			<div class="prev bg"  style="cursor: pointer;"></div>
		</div><!--slidebar-->
		<div class="body_contain">
			<div class="listbook wrap">
				<div class="first_line">
					<a href="xemthem.php" class="list_title left">Bán chạy nhất</a>
					<a href="xemthem.php" class="more right">
						Xem tất cả
						<span class="fa fa-angle-double-right"></span>
					</a>
					<div class="clear"></div>
				</div>
				<div class="slide_book wait unselectable">
					<div class="book">
						<?php   for ($i = 1; $i < 13;$i++): ?>
							<div class="book_item">
								<div class="book_item_hover">
									<div class="book_cover">
										<a href="chitiet.php"><img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook"></a>
									</div>
									<div class="smdt">
										<a href="chitiet.php" class="book_title is-2r">
											Gần nhau lắm cắn nhau đau
										</a>
										<a href="#" class="book_author">Kita Leo</a>
									</div>
								</div>
								<div class="book_item_detail">
									<div class="cver left">
										<a href="chitiet.php"><img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook"></a>
									</div>
									<div href="chitiet.php" class="txtbook left">
										<a href="chitiet.php" class="title">
											Đã lâu không gặp
										</a>
										<div class="intt">
											Tác giả:
											<a href="tacgia.php">Kita Leo</a>
										</div>
										<div class="intt">
											NXB: 
												<a href="nxb.php">Bách Việt book</a>
										</div>
										<div class="old intt">
											Giá bìa: 
												<span>
													103.000đ
												</span>
										</div>
										<div class="new intt">
											Giá bán: 
												<span>
													98.000đ
												</span>
										</div>
										<div class="sls intt">
											Giảm giá: 
												<span>
													5%
												</span>
										</div>
										<div class="cartbox mxClrAft">
											<div class="num left">
												<input type="text" class="n left" value="1">
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
											<button class="over">
												<span class="fa fa-bullhorn"></span>
												BÁO KHI CÓ HÀNG
											</button>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<div class="ctrlslide">
						<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
						<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
					</div>
				</div>
			</div>
			<div class="listbook wrap">
				<div class="first_line">
					<a href="xemthem.php" class="list_title left">
						Sách mới
					</a>
					<a href="xemthem.php" class="more right">
						Xem tất cả
						<span class="fa fa-angle-double-right"></span>
					</a>
					<div class="clear"></div>
				</div>
				<div class="slide_book wait unselectable">
					<div class="book">
						<?php   for ($i = 1; $i < 13;$i++): ?>
							<div class="book_item">
								<div class="book_item_hover">
									<div class="book_cover">
										<a href="chitiet.php"><img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook"></a>
									</div>
									<div class="smdt">
										<a href="chitiet.php" class="book_title is-2r">
											Gần nhau lắm cắn nhau đau
										</a>
										<a href="#" class="book_author">Kita Leo</a>
									</div>
								</div>
								<div class="book_item_detail">
									<div class="cver left">
										<a href="chitiet.php"><img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook"></a>
									</div>
									<div href="chitiet.php" class="txtbook left">
										<a href="chitiet.php" class="title">
											Đã lâu không gặp
										</a>
										<div class="intt">
											Tác giả:
											<a href="tacgia.php">Kita Leo</a>
										</div>
										<div class="intt">
											NXB: 
												<a href="nxb.php">Bách Việt book</a>
										</div>
										<div class="old intt">
											Giá bìa: 
												<span>
													103.000đ
												</span>
										</div>
										<div class="new intt">
											Giá bán: 
												<span>
													98.000đ
												</span>
										</div>
										<div class="sls intt">
											Giảm giá: 
												<span>
													5%
												</span>
										</div>
										<div class="cartbox mxClrAft">
											<div class="num left">
												<input type="text" class="n left" value="1">
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
											<button class="over">
												<span class="fa fa-bullhorn"></span>
												BÁO KHI CÓ HÀNG
											</button>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<div class="ctrlslide">
						<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
						<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
					</div>
				</div>
			</div>
			<div class="listbook wrap">
				<div class="first_line">
					<a href="xemthem.php" class="list_title left">
						Sắp phát hành
					</a>
					<a href="xemthem.php" class="more right">
						Xem tất cả
						<span class="fa fa-angle-double-right"></span>
					</a>
					<div class="clear"></div>
				</div>
				<div class="slide_book wait unselectable">
					<div class="book">
						<?php   for ($i = 1; $i < 13;$i++): ?>
							<div class="book_item">
								<div class="book_item_hover">
									<div class="book_cover">
										<a href="chitiet.php"><img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook"></a>
									</div>
									<div class="smdt">
										<a href="chitiet.php" class="book_title is-2r">
											Gần nhau lắm cắn nhau đau
										</a>
										<a href="#" class="book_author">Kita Leo</a>
									</div>
								</div>
								<div class="book_item_detail">
									<div class="cver left">
										<a href="chitiet.php"><img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook"></a>
									</div>
									<div href="chitiet.php" class="txtbook left">
										<a href="chitiet.php" class="title">
											Đã lâu không gặp
										</a>
										<div class="intt">
											Tác giả:
											<a href="tacgia.php">Kita Leo</a>
										</div>
										<div class="intt">
											NXB: 
												<a href="nxb.php">Bách Việt book</a>
										</div>
										<div class="old intt">
											Giá bìa: 
												<span>
													103.000đ
												</span>
										</div>
										<div class="new intt">
											Giá bán: 
												<span>
													98.000đ
												</span>
										</div>
										<div class="sls intt">
											Giảm giá: 
												<span>
													5%
												</span>
										</div>
										<div class="cartbox mxClrAft">
											<div class="num left">
												<input type="text" class="n left" value="1">
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
											<button class="over">
												<span class="fa fa-bullhorn"></span>
												BÁO KHI CÓ HÀNG
											</button>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<div class="ctrlslide">
						<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
						<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
					</div>
				</div>
			</div>
			<div class="listbook wrap">
				<div class="first_line">
					<a href="xemthem.php" class="list_title left">
						Sách Giảm giá
					</a>
					<a href="xemthem.php" class="more right">
						Xem tất cả
						<span class="fa fa-angle-double-right"></span>
					</a>
					<div class="clear"></div>
				</div>
				<div class="slide_book wait unselectable">
					<div class="book">
						<?php   for ($i = 1; $i < 13;$i++): ?>
							<div class="book_item">
								<div class="book_item_hover">
									<div class="book_cover">
										<a href="chitiet.php"><img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook"></a>
									</div>
									<div class="smdt">
										<a href="chitiet.php" class="book_title is-2r">
											Gần nhau lắm cắn nhau đau
										</a>
										<a href="#" class="book_author">Kita Leo</a>
									</div>
								</div>
								<div class="book_item_detail">
									<div class="cver left">
										<a href="chitiet.php"><img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook"></a>
									</div>
									<div href="chitiet.php" class="txtbook left">
										<a href="chitiet.php" class="title">
											Đã lâu không gặp
										</a>
										<div class="intt">
											Tác giả:
											<a href="tacgia.php">Kita Leo</a>
										</div>
										<div class="intt">
											NXB: 
												<a href="nxb.php">Bách Việt book</a>
										</div>
										<div class="old intt">
											Giá bìa: 
												<span>
													103.000đ
												</span>
										</div>
										<div class="new intt">
											Giá bán: 
												<span>
													98.000đ
												</span>
										</div>
										<div class="sls intt">
											Giảm giá: 
												<span>
													5%
												</span>
										</div>
										<div class="cartbox mxClrAft">
											<div class="num left">
												<input type="text" class="n left" value="1">
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
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<div class="ctrlslide">
						<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
						<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
					</div>
				</div>
			</div>
			<div class="lineother wrap">
				<div class="combobox left">
					<div class="firstline">
						<a href="trangchu-xemthem.php" class="list_title">
							Combo mới
						</a>
					</div>
					<div class="combo">
						<div class="slider">
							<div class="slide mxClrAft">
								<div class="cbb" style="background-image: url(style/images/temp/cb1.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="chitiet.php" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
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
												<button class="over">
													<span class="fa fa-bullhorn"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url(style/images/temp/cb2.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="chitiet.php" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
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
												<button class="over">
													<span class="fa fa-bullhorn"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url(style/images/temp/cb3.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="chitiet.php" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
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
												<button class="over">
													<span class="fa fa-bullhorn"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url(style/images/temp/cb4.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="chitiet.php" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
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
												<button class="over">
													<span class="fa fa-bullhorn"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="slide mxClrAft">
								<div class="cbb" style="background-image: url(style/images/temp/cb1.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="chitiet.php" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
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
												<button class="over">
													<span class="fa fa-bullhorn"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url(style/images/temp/cb2.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="chitiet.php" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
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
												<button class="over">
													<span class="fa fa-bullhorn"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url(style/images/temp/cb3.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="chitiet.php" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
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
												<button class="over">
													<span class="fa fa-bullhorn"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="cbb" style="background-image: url(style/images/temp/cb4.jpg)">
									<div class="hvcombo">
										<div class="set">
											<a href="chitiet.php" class="more">
												XEM CHI TIẾT
												<span class="fa fa-angle-double-right"></span>
											</a>
											<div class="cartbox mxClrAft">
												<div class="num left">
													<input type="text" class="n left" value="1">
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
												<button class="over">
													<span class="fa fa-bullhorn"></span>
													BÁO KHI CÓ HÀNG
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="ctrlslide">
							<div class="fa fa-angle-left"></div>
							<div class="fa fa-angle-right"></div>
						</div>
					</div>
				</div>
				<div class="authorbox right">
					<div class="firstline">
						<a href="tacgia.php" class="list_title">
							Tác giả tiêu biểu
						</a>
					</div>
					<div class="ath">
						<div class="slider">
							<div class="slide">
								<a href="tacgia.php" class="athimg" style="background-image: url(style/images/temp/athava.jpg)"></a>
								<div class="athtxt">
									<a href="tacgia.php" class="name">
										Ploy
									</a>
								</div>
							</div>
							<div class="slide">
								<a href="tacgia.php" class="athimg" style="background-image: url(style/images/temp/athava2.jpg)"></a>
								<div class="athtxt">
									<a href="tacgia.php" class="name">
										Minh Nhật
									</a>
								</div>
							</div>
							<div class="slide">
								<a href="tacgia.php" class="athimg" style="background-image: url(style/images/temp/athava.jpg)"></a>
								<div class="athtxt">
									<a href="tacgia.php" class="name">
										Ploy
									</a>
								</div>
							</div>
							<div class="slide">
								<a href="tacgia.php" class="athimg" style="background-image: url(style/images/temp/athava2.jpg)"></a>
								<div class="athtxt">
									<a href="tacgia.php" class="name">
										Minh Nhật
									</a>
								</div>
							</div>
							<div class="slide">
								<a href="tacgia.php" class="athimg" style="background-image: url(style/images/temp/athava.jpg)"></a>
								<div class="athtxt">
									<a href="tacgia.php" class="name">
										Ploy
									</a>
								</div>
							</div>
							<div class="slide">
								<a href="tacgia.php" class="athimg" style="background-image: url(style/images/temp/athava2.jpg)"></a>
								<div class="athtxt">
									<a href="tacgia.php" class="name">
										Minh Nhật
									</a>
								</div>
							</div>
							<div class="slide">
								<a href="tacgia.php" class="athimg" style="background-image: url(style/images/temp/athava.jpg)"></a>
								<div class="athtxt">
									<a href="tacgia.php" class="name">
										Ploy
									</a>
								</div>
							</div>
							<div class="slide">
								<a href="tacgia.php" class="athimg" style="background-image: url(style/images/temp/athava2.jpg)"></a>
								<div class="athtxt">
									<a href="tacgia.php" class="name">
										Minh Nhật
									</a>
								</div>
							</div>
						</div>
						<div class="ctrlslide">
							<div class="fa fa-angle-left"></div>
							<div class="fa fa-angle-right"></div>
						</div>
					</div>
					<div class="smath">
						<div class="fa fa-angle-left"></div>
						<div class="fa fa-angle-right"></div>
						<div class="iosslider">
							<div class="slider">
								<div class="slide atv" style="background-image: url(style/images/temp/athava.jpg)"></div>
								<div class="slide" style="background-image: url(style/images/temp/athava2.jpg)"></div>
								<div class="slide" style="background-image: url(style/images/temp/athava.jpg)"></div>
								<div class="slide" style="background-image: url(style/images/temp/athava2.jpg)"></div>
								<div class="slide" style="background-image: url(style/images/temp/athava.jpg)"></div>
								<div class="slide" style="background-image: url(style/images/temp/athava2.jpg)"></div>
								<div class="slide" style="background-image: url(style/images/temp/athava.jpg)"></div>
								<div class="slide" style="background-image: url(style/images/temp/athava2.jpg)"></div>
							</div>
							<div class="prev"></div>
							<div class="next"></div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
@stop