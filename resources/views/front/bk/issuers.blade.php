@extends('front.layouts.base')

@section('head.title')
Công ty phát hành 
@stop

@section('body.content')
	<div class="contain mxClrAft wrap is-box athp">
		<div class="authorlist left">
			<div class="title_author is-menu" data-link="all">
				Tất cả
			</div>

			<div class="athslider">
				<div class="slider">
					<?php
						$author_word = array("a", "b", "c", "d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
						foreach ($author_word as $value) :
					?>
					<div class="nav">
			      <div class="author_word is-menu" data-set="<?php echo $value; ?>"data-link="word">
			      	<?php echo $value; ?>
			      </div>
			      <div class="author_list">
		        	<div class="author_name is-menu" data-link="pp">
		        		Công Ty TNHH AMVN
		        	</div>
		        	<div class="author_name is-menu" data-link="pp">
		        		Bách Việt Book
		        	</div>
		        	<div class="author_name is-menu" data-link="pp">
		        		Cổ Nguyệt Books
		        	</div>
			      </div>
			    </div>
					<?php endforeach; ?>
				</div>
			</div>
		    <div class="scroll_word">
				<?php
					$word = array("a", "b", "c", "d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
					foreach ($word as $value) :
				?>
				<div class="word is-menu"  data-set="<?php echo $value; ?>" data-link="word">
					<?php echo $value; ?>
				</div>
				<?php endforeach; ?>
		    </div>
		</div>
		<div class="authorbox right">
			<!--Tất cả tác giả-->
			<div class="is-tab" data-link="all">
				<div class="filterbox">
					<div class="filterbar mxClrAft">
						<div class="namebox">
							Danh sách Công ty phát hành
						</div>
						<div class="fil slfilter right">
							<select name="TenDanhSach" class="is-sl" value="Sắp xếp">
								<option value="">Sắp xếp theo: A - Z</option>
								<option value="">Sắp xếp theo: Z - A</option>
							</select>
						</div>
					</div>
					<div class="athl mxClrAft">
						<div class="athitem noav">
							<div class="ava" style="background-image: url()"></div>
							<img src="style/images/theme/logo-gray.png" alt="" class="nava">
							<div class="athn">
								<div>
									Công Ty TNHH AMVN
								</div>
							</div>
						</div>
						<?php   for ($i = 1; $i < 9;$i++): ?>
								<div class="athitem">
									<div class="log">
										<img src="style/images/temp/cty/cty<?php echo $i; ?>.png" alt="mybook">
									</div>
									<img src="style/images/theme/logo-gray.png" alt="" class="nava">
									<div class="athn lo">
										<div>
											Công Ty TNHH AMVN
										</div>
									</div>
								</div>
						<?php endfor ?>
					</div>
					<div class="page_number">
		        <div class="page_num">
		        	<div class="num numprev fa fa-angle-double-left hide"></div>
		        	<div class="num numpage atv">1</div>
		        	<div class="num numpage">2</div>
		        	<div class="num numpage">3</div>
		        	<div class="num numpage">4</div>
		        	<div class="num numpage">5</div>
		        	<div class="num numpage">6</div>
		        	<div class="num numnext fa fa-angle-double-right"></div>
		        	<div class="clear"></div>
		        </div>
		      </div>
				</div>
			</div>
			<!--Tác giả theo từ khóa #-->
			<div class="is-tab" data-link="word">
				<div class="filterbox">
					<div class="filterbar mxClrAft">
						<div class="namebox">
							Danh sách Công ty phát hành
							<span>
								#A
							</span>
						</div>
					</div>
				</div>
				<div class="athl mxClrAft">
					<?php for ($i = 1; $i < 10;$i++): ?>
						<div class="athitem noav">
							<div class="ava" style="background-image: url()"></div>
							<img src="style/images/theme/logo-gray.png" alt="" class="nava">
							<div class="athn">
								<div>
									Công Ty TNHH AMVN
								</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>
				<div class="page_number">
		        <div class="page_num">
		        	<div class="num numprev fa fa-angle-double-left hide"></div>
		        	<div class="num numpage atv">1</div>
		        	<div class="num numpage">2</div>
		        	<div class="num numpage">3</div>
		        	<div class="num numpage">4</div>
		        	<div class="num numpage">5</div>
		        	<div class="num numpage">6</div>
		        	<div class="num numnext fa fa-angle-double-right"></div>
		        	<div class="clear"></div>
		        </div>
		      </div>
			</div>
			<!--Từng tác giả-->
			<div class="is-tab" data-link="pp">
				<div class="prfath mxClrAft">
					<div class="log">
						<img src="style/images/temp/cty/cty1.png">
					</div>
					<div class="nava">
						<img src="style/images/theme/logo-gray.png" alt="">
					</div>
					<div class="prf">
						<div class="na">
							Công Ty TNHH AMVN
						</div>
						<div class="int">
							Trụ sở chính:
							<span>
								Tầng 21, Capital Tower, 109 Trần Hưng Đạo, Q. Hoàn Kiếm,Hà Nội
							</span>
						</div>
						<div class="int">
							Số điện thoại: 
							<span>
								(04) 38789800
							</span>
						</div>
						<div class="int">
							Fax:
							<span>
								(04) 36340781
							</span>
						</div>
						<div class="int">
							Email:
							<span>
								 sales@amvietnam.com
							</span>
						</div>
						<div class="int">
							Website:
							<span>
								http://amvietnam.com
							</span>
						</div>
					</div>
				</div>
				<div class="listbook wrap">
					<div class="first_line">
						<a href="xemthem.php" class="list_title left">Sách của AMVN</a>
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
			</div>
		</div>
	</div>
@stop