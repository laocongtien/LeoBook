@extends('front.layouts.base')

@section('head.title')
Danh mục sách
@stop

@section('body.content')
	<div class="contain danhmuc">
		<div class="ltbanner">
			Tiểu thuyết
		</div>
		<div class="filterbox wrap is-box">
			<div class="filterbar mxClrAft wrap">
				<div class="boxmenu mxClrAft">
					<div class="mn is-menu" data-link="01">
						Bán chạy nhất
					</div>
					<div class="mn is-menu" data-link="02">
						Sách mới
					</div>
					<div class="mn is-menu" data-link="03">
						Sắp phát hành
					</div>
					<div class="mn is-menu" data-link="04">
						Sách giảm giá
					</div>
				</div>
				<div class="fil slfilter right">
					<select name="TenDanhSach" class="is-sl" value="Sắp xếp">
						<option value="">Sách mới</option>
						<option value="">Sắp xếp theo: A - Z</option>
						<option value="">Sắp xếp theo: Z - A</option>
						<option value="">Giá: cao đến thấp</option>
						<option value="">Giá: thấp đến cao</option>
						<option value="">Giá giảm: cao đến thấp</option>
						<option value="">Giá giảm: thấp đến cao</option>
						<option value="">Bán chạy nhất</option>
					</select>
				</div>
				<div class="numbook slfilter right">
					<select name="Soluong" class="is-sl" value="Sắp xếp">
						<option value="5">Hiển thị: 5</option>
						<option value="10">Hiển thị: 10</option>
						<option value="20">Hiển thị: 20</option>
						<option value="">Hiển thị: Tất cả</option>
					</select>
				</div>
				<div class="viewmode right">
					<div class="fa fa-th atv"></div>
					<div class="fa fa-list"></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="tabbox">
				<div class="is-tab gridbook" data-link="01">
					<div class="lbook grid mxClrAft">
						<?php   for ($i = 1; $i < 6;$i++): ?>
							<div class="book_item">
								<div class="book_item_hover">
									<div class="book_cover">
										<a href="chitiet.php">
											<img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook">
										</a>
									</div>
									<div class="smdt">
										<div class="dt">
											<a href="chitiet.php" class="book_title is-2r">
												Cô đơn cũng không khóc
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
											<div class="sal">
												<div class="gri">
													<div class="old">
														103.000đ
													</div>
													<div class="new">
														95.000đ
													</div>
												</div>
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
											<div class="trig li wait">
													Tự tin lên nào! Đừng khóc nữa ... Là những câu thần chú của tuổi trẻ khi tôi lấy hết can đảm rời xa P. Chàng trai ấy vẫn sống mãi trong tâm khảm của tôi, bởi những gì dang dở không có kết thúc, thì mãi vẫn là thứ mà người ta thường nghĩ đến, lúc không còn nơi bấu víu! Tôi mãi coi P là người tri kỷ của mình, dù P đã là thiên sứ! P đã rời khỏi thế gian này, nhưng P vẫn ở trong lòng tôi, như một ký ức bất tử. Đúng là, những gì đẹp sẽ còn sống mãi! Với tôi, P còn lớn hơn tình yêu, bởi chúng tôi đã từng có nhiều năm là bạn thân dưới một mái trường! Bước qua tan vỡ với P thật sâu lắng, day dứt và cả sự biết ơn! Bởi nếu cuộc đời này không gặp P, tôi sẽ không thể nhận ra giá trị của mình và gìn giữ nó! Để một ngày trưởng thành hơn, tôi gặp M trong tâm trạng nhớ cố hương da diết. Thứ duy nhất ở M cứ ở lì trong tim tôi không chịu rời đi, chính là ánh mắt! Ấm áp và an yên vô cùng. M, P đều vẫn còn lại trong tôi, dù nhiều thứ đã bỏ tôi đi mãi...
											</div>
										</div>
										@include('front.partials.cartbox')	
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
		        	<div class="num numnext fa fa-angle-double-right"></div>
		        	<div class="clear"></div>
		        </div>
		      </div>
	      </div>
	      <div class="is-tab gridbook" data-link="02">
					<div class="lbook grid mxClrAft">
						<?php   for ($i = 6; $i < 11;$i++): ?>
							<div class="book_item">
								<div class="book_item_hover">
									<div class="book_cover">
										<a href="chitiet.php">
											<img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook">
										</a>
									</div>
									<div class="smdt">
										<div class="dt">
											<a href="chitiet.php" class="book_title is-2r">
												Cô đơn cũng không khóc
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
											<div class="sal">
												<div class="gri">
													<div class="old">
														103.000đ
													</div>
													<div class="new">
														95.000đ
													</div>
												</div>
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
											<div class="trig li wait">
													Tự tin lên nào! Đừng khóc nữa ... Là những câu thần chú của tuổi trẻ khi tôi lấy hết can đảm rời xa P. Chàng trai ấy vẫn sống mãi trong tâm khảm của tôi, bởi những gì dang dở không có kết thúc, thì mãi vẫn là thứ mà người ta thường nghĩ đến, lúc không còn nơi bấu víu! Tôi mãi coi P là người tri kỷ của mình, dù P đã là thiên sứ! P đã rời khỏi thế gian này, nhưng P vẫn ở trong lòng tôi, như một ký ức bất tử. Đúng là, những gì đẹp sẽ còn sống mãi! Với tôi, P còn lớn hơn tình yêu, bởi chúng tôi đã từng có nhiều năm là bạn thân dưới một mái trường! Bước qua tan vỡ với P thật sâu lắng, day dứt và cả sự biết ơn! Bởi nếu cuộc đời này không gặp P, tôi sẽ không thể nhận ra giá trị của mình và gìn giữ nó! Để một ngày trưởng thành hơn, tôi gặp M trong tâm trạng nhớ cố hương da diết. Thứ duy nhất ở M cứ ở lì trong tim tôi không chịu rời đi, chính là ánh mắt! Ấm áp và an yên vô cùng. M, P đều vẫn còn lại trong tôi, dù nhiều thứ đã bỏ tôi đi mãi...
											</div>
										</div>
										@include('front.partials.cartbox')	
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
		        	<div class="num numnext fa fa-angle-double-right"></div>
		        	<div class="clear"></div>
		        </div>
		      </div>
	      </div>
	      <div class="is-tab gridbook" data-link="03">
					<div class="lbook grid mxClrAft">
						<?php   for ($i = 8; $i < 13;$i++): ?>
							<div class="book_item">
								<div class="book_item_hover">
									<div class="book_cover">
										<a href="chitiet.php">
											<img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook">
										</a>
									</div>
									<div class="smdt">
										<div class="dt">
											<a href="chitiet.php" class="book_title is-2r">
												Cô đơn cũng không khóc
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
											<div class="sal">
												<div class="gri">
													<div class="old">
														103.000đ
													</div>
													<div class="new">
														95.000đ
													</div>
												</div>
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
											<div class="trig li wait">
													Tự tin lên nào! Đừng khóc nữa ... Là những câu thần chú của tuổi trẻ khi tôi lấy hết can đảm rời xa P. Chàng trai ấy vẫn sống mãi trong tâm khảm của tôi, bởi những gì dang dở không có kết thúc, thì mãi vẫn là thứ mà người ta thường nghĩ đến, lúc không còn nơi bấu víu! Tôi mãi coi P là người tri kỷ của mình, dù P đã là thiên sứ! P đã rời khỏi thế gian này, nhưng P vẫn ở trong lòng tôi, như một ký ức bất tử. Đúng là, những gì đẹp sẽ còn sống mãi! Với tôi, P còn lớn hơn tình yêu, bởi chúng tôi đã từng có nhiều năm là bạn thân dưới một mái trường! Bước qua tan vỡ với P thật sâu lắng, day dứt và cả sự biết ơn! Bởi nếu cuộc đời này không gặp P, tôi sẽ không thể nhận ra giá trị của mình và gìn giữ nó! Để một ngày trưởng thành hơn, tôi gặp M trong tâm trạng nhớ cố hương da diết. Thứ duy nhất ở M cứ ở lì trong tim tôi không chịu rời đi, chính là ánh mắt! Ấm áp và an yên vô cùng. M, P đều vẫn còn lại trong tôi, dù nhiều thứ đã bỏ tôi đi mãi...
											</div>
										</div>
										@include('front.partials.cartbox')	
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
		        	<div class="num numnext fa fa-angle-double-right"></div>
		        	<div class="clear"></div>
		        </div>
		      </div>
	      </div>
	      <div class="is-tab gridbook" data-link="04">
					<div class="lbook grid mxClrAft">
						<?php   for ($i = 3; $i < 8;$i++): ?>
							<div class="book_item">
								<div class="book_item_hover">
									<div class="book_cover">
										<a href="chitiet.php">
											<img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook">
										</a>
									</div>
									<div class="smdt">
										<div class="dt">
											<a href="chitiet.php" class="book_title is-2r">
												Cô đơn cũng không khóc
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
											<div class="sal">
												<div class="gri">
													<div class="old">
														103.000đ
													</div>
													<div class="new">
														95.000đ
													</div>
												</div>
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
											<div class="trig li wait">
													Tự tin lên nào! Đừng khóc nữa ... Là những câu thần chú của tuổi trẻ khi tôi lấy hết can đảm rời xa P. Chàng trai ấy vẫn sống mãi trong tâm khảm của tôi, bởi những gì dang dở không có kết thúc, thì mãi vẫn là thứ mà người ta thường nghĩ đến, lúc không còn nơi bấu víu! Tôi mãi coi P là người tri kỷ của mình, dù P đã là thiên sứ! P đã rời khỏi thế gian này, nhưng P vẫn ở trong lòng tôi, như một ký ức bất tử. Đúng là, những gì đẹp sẽ còn sống mãi! Với tôi, P còn lớn hơn tình yêu, bởi chúng tôi đã từng có nhiều năm là bạn thân dưới một mái trường! Bước qua tan vỡ với P thật sâu lắng, day dứt và cả sự biết ơn! Bởi nếu cuộc đời này không gặp P, tôi sẽ không thể nhận ra giá trị của mình và gìn giữ nó! Để một ngày trưởng thành hơn, tôi gặp M trong tâm trạng nhớ cố hương da diết. Thứ duy nhất ở M cứ ở lì trong tim tôi không chịu rời đi, chính là ánh mắt! Ấm áp và an yên vô cùng. M, P đều vẫn còn lại trong tôi, dù nhiều thứ đã bỏ tôi đi mãi...
											</div>
										</div>
										@include('front.partials.cartbox')	
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
		        	<div class="num numnext fa fa-angle-double-right"></div>
		        	<div class="clear"></div>
		        </div>
		      </div>
	      </div>
			</div>
		</div>
	</div>
@stop