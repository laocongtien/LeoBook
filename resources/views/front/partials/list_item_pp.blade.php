<div class="prfath mxClrAft pagination">
					<div class="ava" style="background-image: url({{url('style/images/temp/athava.jpg')}})"></div>
					<div class="nava">
						<img src="{{ url('style/images/theme/logo-gray.png') }}" alt="">
					</div>
					<div class="prf">
						<div class="na">
							Gào
						</div>
						<div class="int">
							Tên thật:
							<span>
								Vũ Phương Thanh
							</span>
						</div>
						<div class="int">
							Tuổi:
							<span>
								27
							</span>
						</div>
						<div class="trig is-3r">
							Gọi Gào thôi là được rồi. Gọi là nhà văn có lẽ sẽ làm nhiều người tức giận. Hotgirl thì tôi không dám nhận và cũng chẳng thích nhận để làm gì!
						</div>
					</div>
				</div>
				<div class="listbook wrap">
					<div class="first_line">
						<a href="xemthem.php" class="list_title left">Sách của Gào</a>
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
											<a href="chitiet.php"><img src="{{ url('style/images/temp/book<?php echo $i; ?>.jpg') }}" alt="mybook"></a>
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
											<a href="chitiet.php"><img src="{{ url('style/images/temp/book<?php echo $i; ?>.jpg') }}" alt="mybook"></a>
										</div>
										<div href="chitiet.php" class="txtbook left">
											<a href="chitiet.php" class="title">
												Đã lâu không gặp
											</a>
											<div class="intt">
												Tác giả:
												<a href="">Kita</a>
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
											<div class="cartbox mxClrAft ost">
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
												<button class="over is-over-check">
													<span class="fa fa-bullhorn"></span>
													<span class="fa fa-check"></span>
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