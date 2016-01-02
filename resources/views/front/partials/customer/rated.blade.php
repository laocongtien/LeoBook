<div class="titlebar loaded">
	Danh sách đánh giá
	<div class="right ctrl mxClrAft">
		<div class="slfilter left">
			<select name="Soluong" class="is-sl" value="Số lượng">
				<option value="">Xem: 5</option>
				<option value="">Xem: 10</option>
				<option value="">Xem: 20</option>
			</select>
		</div>
		<div class="is-noti-filter btnoti left">
			Chọn
			<div class="fa fa-angle-double-down"></div>
			<div class="is-noti-filter-pop popnoti">
				<div class="is-noti-filter-row notirow" data-link="all">
					Tất cả
				</div>
				<div class="is-noti-filter-row notirow" data-link="none">
					Bỏ chọn tất cả
				</div>
				<div class="is-noti-filter-row notirow" data-link="like">
					Yêu thích
				</div>
				<div class="is-noti-filter-row notirow" data-link="unlike">
					Chưa yêu thích
				</div>
			</div>
		</div>
		<div class="is-noti-todo btnoti left">
			Tác vụ
			<div class="fa fa-angle-double-down"></div>
			<div class="is-noti-todo-pop popnoti">
				<div class="is-noti-todo-row notirow" data-link="like">
					Thêm yêu thích
				</div>
				<div class="is-noti-todo-row notirow" data-link="unlike">
					Bỏ yêu thích
				</div>
				<div class="is-noti-todo-row notirow" data-link="remove">
					Xóa
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tbrate">
	<div class="r mxClrAft fr">
		<div class="cl1">
			<span class="fa fa-square-o is-ckall"></span>
			<span class="fa fa-heart-o is-favall"></span>
		</div>
		<div class="cl2">
			<div class="tt">
				Tựa sách
			</div>
		</div>
		<div class="cl3">
			<div class="tt">
				Tác giả
			</div>
		</div>
		<div class="cl4">
			<div class="tt">
				Đánh giá
			</div>
		</div>
		<div class="cl5">
			<div class="tt">
				Thời gian
			</div>
		</div>
	</div>
	<?php   for ($i = 1; $i < 6;$i++): ?>
		<div class="r mxClrAft is-r" data-link="<?php echo $i; ?>">
			<div class="cl1">
				<span class="fa fa-square-o is-ck"></span>
				<span class="fa fa-heart-o is-fav"></span>
			</div>
			<div class="cl2">
				<div class="dt">
					Sống một đời bình thường
				</div>
			</div>
			<div class="cl3">
				<div class="dt is-1r">
					Nguyễn Phong Việt
				</div>
			</div>
			<div class="cl4">
				<div class="rtbar">
					<div class="fa fa-star"></div>
					<div class="fa fa-star"></div>
					<div class="fa fa-star"></div>
					<div class="fa fa-star-o"></div>
					<div class="fa fa-star-o"></div>
				</div>
			</div>
			<div class="cl5">
				<div class="dt">
					Dec 25
				</div>
			</div>
		</div>
		<div class="is-mail ratebox" data-link="<?php echo $i; ?>">
			<div class="mail mxClrAft">
				<div class="book_cover">
					<a href="chitiet.php">
						<img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook">
					</a>
				</div>
				<div class="smdt">
					<div class="dtbox">
						<div class="dt">
							<a href="chitiet.php" class="book_title is-2r">
								Sống một đời bình thường
							</a>
							<div class="book_author intt">
								Tác giả: 
								<a href="tacgia.php" >
									Kita Leo
								</a>
							</div>
							<div class="intt li">
								NXB: 
									<a href="nxb.php">Bách Việt book</a>
							</div>
							<div class="intt li">
								Đánh giá: 
								<span class="rtbar">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star-o"></span>
									<span class="fa fa-star-o"></span>
								</span>
							</div>
							<div class="sal">
								<div class="li">
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
								</div>
							</div>
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
							<button class="over is-over-check">
								<span class="fa fa-bullhorn"></span>
								<span class="fa fa-check"></span>
								BÁO KHI CÓ HÀNG
							</button>
						</div>
					</div>
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