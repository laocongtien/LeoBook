@extends('front.layouts.base')

@section('head.title')
Chi tiết sách
@stop

@section('body.content')
<?php
$route_bestseller = 'home.bestseller';
$route_newbook    =	'home.newbook';
$route_comming    =	'home.comming';
$route_discount   =	'home.discount';
$route_combo      =	'home.combo';
$route_author     =	'home.author';
$route_publisher  =	'home.publisher';
$route_issuer     =	'home.issuer';
$route_search     =	'home.search';
$route_checkout   =	'home.checkout';
$route_customer   =	'home.customer';
$route_cate   =	'home.cate';
?>
	<div class="contain wrap mxClrAft chitietsach">
		<div class="little_detail">
			<div class="ava">
				<img src="{!!asset('')!!}style/images/temp/{{ $item->image}}.jpg" alt="">
			</div>
			<div class="dtb">
				<div class="name">
					{{ $item->name }}
				</div>
				<a href="tacgia.php" class="ath">
					{{ $item->author->name }}
				</a>
				<div class="sls">
					{{ number_format($item->price,0,',','.') }}đ
					<div>
						{{ number_format($item->price - $item->price * $item->discount /100,0,',','.') }}đ
					</div>
				</div>
			</div>
			<div class="btb">
				<div class="starbox is-ratebook mxClrAft" num="{{ $item->rate }}">
					<div class="nonestar bg left is-rate">
						<div class="star bg left is-percent"></div>
					</div>
					<div class="rate right is-numrate">
						{!! number_format($item->ratecount,0,',','.') !!}
					</div>
				</div>
				<button class="lkbook is-like mxClrAft">
					<div class="fa fa-heart left"></div>
					<div class="lkb left">
						<span class="lk">
							Thêm vào yêu thích
						</span>
						<span class="lked">
							Đã thêm vào yêu thích
						</span>
					</div>
				</button>
				@include('front.partials.cartbox')
			</div>
			<div class="detail">
				<div class="title">
					Thông tin xuất bản
				</div>
				<div class="dtl">
					<div class="dtr">
						Ngày xuất bản
						<span>
							{{ date('d/m/Y',strtotime($item->publishing_date)) }}
						</span>
					</div>
					<div class="dtr">
						Ngày cập nhật
						<span>
							{{ date('d/m/Y',strtotime($item->updated_at)) }}
						</span>
					</div>
					<div class="dtr">
						Công ty phát hành
						<span>
							{{ $item->issuer->name }}
						</span>
					</div>
					<div class="dtr">
						Nhà Xuất bản
						<span>
							{{ $item->publisher->name }}
						</span>
					</div>
					<div class="dtr">
						Thể loại
						<span>
							{{ $item->type->name }}
						</span>
					</div>
					<div class="dtr">
						Ngôn ngữ
						<span>
							{{ $item->language->value }}
						</span>
					</div>
					<div class="dtr"></div>
					<div class="dtr">
						Số trang
						<span>
							{{ $item->page }}
						</span>
					</div>
					<div class="dtr">
						Khổ sách
						<span>
							{{ $item->size }}
						</span>
					</div>
					<div class="dtr">
						Kiểu sách
						<span>
							{{ $item->cover->value }}
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="full_detail is-box">
			<div class="detail_bar mxClrAft">
				<div class="mndetail is-menu" data-link="gioithieu">
					Giới thiệu
				</div>
				<div class="mndetail is-menu" data-link="danhgia">
					Đánh giá
				</div>
				<div class="mndetail is-menu" data-link="lienquan">
					Liên quan
				</div>
			</div>
			<div class="is-tab tab tab1" data-link="gioithieu">
				<div class="txt_gioithieu">
					<div class="ndchinh">
						{!! $item->info !!}
					</div>
					<div class="seemore">
						Xem thêm
					</div>
				</div>
				<div class="listbook">
					<div class="first_line">
						<a href="xemthem.php" class="list_title left">
							Sách cùng thể loại
						</a>
						<a href="xemthem.php" class="more right">
							Xem tất cả
							<span class="fa fa-angle-double-right"></span>
						</a>
						<div class="clear"></div>
					</div>
					<div class="slide_book wait unselectable">
						<div class="book">
							@foreach ($cates as $item)
								@include('front.partials.book_item')
							@endforeach
						</div>
						<div class="ctrlslide">
							<div class="next fa fa-angle-right"  style="cursor: pointer;"></div>
							<div class="prev fa fa-angle-left"  style="cursor: pointer;"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="is-tab tab" data-link="danhgia">
				<div class="danhgia_nhanxet">
					<div class="box_danhgia cmt mxClrAft">
						<div class="danhgiasach left">
							<div class="dg_txt">
								Đánh giá của bạn
							</div>
							<div class="rating">
								<div class="star bg"></div>
								<div class="star bg"></div>
								<div class="star bg"></div>
								<div class="star bg"></div>
								<div class="star bg"></div>
							</div>
						</div>
						<button class="write right">
							Viết nhận xét của bạn
						</button>
					</div>
					<div class="comment none">
						<form action="" method="get" accept-charset="utf-8" class="cmt">
							<div class="dg_txt">Tiêu đề của nhận xét:</div>
							<textarea class="formnhap" type="text" name="1" placeholder="Viết tiêu đề" style="height: 30px;"></textarea>
						</form>
						<form action="" method="get" accept-charset="utf-8" class="cmt end">
							<div class="dg_txt">Viết nhận xét của bạn:</div>
							<textarea class="formnhap" type="text" name="1" placeholder="Viết nhận xét"></textarea>
						</form>
						<button class="sendcmt right">
							Gửi
						</button>
						<button class="hidecmt right">
							Ẩn
						</button>
						<div class="clear"></div>
					</div>
				</div>
				<div class="comment_box">
					<div class="cmt_item">
						<a href="#" class="prof_pic left" style="background-image: url(style/images/temp/prf.jpg"></a>
						<div class="cmt_item_txt right">
							<div class="ppname mxClrAft">
								<a href="#" class="name left">Kita</a>
								<div class="null_button left"></div>
								<div class="rtbar">
									<div class="fa fa-star"></div>
									<div class="fa fa-star"></div>
									<div class="fa fa-star"></div>
									<div class="fa fa-star-o"></div>
									<div class="fa fa-star-o"></div>
								</div>
								<div class="null_button left"></div>
								<div class="cmt_tt left">
									Tiêu đề comment
								</div>
							</div>
							<div class="cmt_txt">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis autem repellendus, culpa, eum harum aliquam adipisci quisquam ipsam quae ea.
							</div>
							<div class="time">Sep 25, 2013 at 1:17pm</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="cmt_item">
						<a href="#" class="prof_pic left" style="background-image: url(style/images/temp/prf.jpg"></a>
						<div class="cmt_item_txt right">
							<div class="ppname mxClrAft">
								<a href="#" class="name left">Kita</a>
								<div class="null_button left"></div>
								<div class="rtbar">
									<div class="fa fa-star"></div>
									<div class="fa fa-star"></div>
									<div class="fa fa-star"></div>
									<div class="fa fa-star-o"></div>
									<div class="fa fa-star-o"></div>
								</div>
								<div class="null_button left"></div>
								<div class="cmt_tt left">
									Tiêu đề comment
								</div>
							</div>
							<div class="cmt_txt">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis autem repellendus, culpa, eum harum aliquam adipisci quisquam ipsam quae ea.
							</div>
							<div class="time">Sep 25, 2013 at 1:17pm</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="cmt_more">
					Xem thêm
					<span class="fa fa-caret-down"></span>
				</div>
			</div>
			<div class="is-tab tab" data-link="lienquan">
				<div class="filterbox is-is-box">
					<div class="filterbar mxClrAft">
						<div class="boxmenu mxClrAft">
							<div class="mn is-is-menu" data-link="01">
								Sách cùng tác giả
							</div>
							<div class="mn is-is-menu" data-link="02">
								Người đọc đã mua
							</div>
							<div class="mn is-is-menu" data-link="03">
								Sách tại Tiểu thuyết
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
						<div class="is-is-tab gridbook" data-link="01">
							<div class="lbook grid mxClrAft">
								@foreach ($authors as $item)
									@include('front.partials.book_item_info')
								@endforeach
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
			      <div class="is-is-tab gridbook" data-link="02">
							<div class="lbook grid mxClrAft">
								<?php   for ($i = 6; $i < 10;$i++): ?>
									<div class="book_item">
										<div class="book_item_hover">
											<div class="book_cover">
												<a href="{{ route('home.detail' , $item->id) }}">
													<img src="style/images/temp/book<?php echo $i; ?>.jpg" alt="mybook">
												</a>
											</div>
											<div class="smdt">
												<div class="dt">
													<a href="{{ route('home.detail' , $item->id) }}" class="book_title is-2r">
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
			      <div class="is-is-tab gridbook" data-link="03">
							<div class="lbook grid mxClrAft">
								@foreach ($cates as $item)
									@include('front.partials.book_item_info')
								@endforeach
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
		</div>
	</div>
@stop