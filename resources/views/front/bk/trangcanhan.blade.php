@extends('front.layouts.base')

@section('head.title')
Trang cá nhân
@stop

@section('body.content')
	<div class="contain wrap mxClrAft accpage is-box">
		<div class="left acctitle">
			<div class="ttlb mxClrAft">
				<div class="left img" style="background-image: url('style/images/temp/prf.jpg')"></div>
				<div class="left tt">
					Phạm Diễm
				</div>
			</div>
			<div class="liacc is-menu" data-link="def">
				<div class="fa fa-angle-double-right"></div>
				Thông tin tài khoản
			</div>
			<div class="liacc is-menu" data-link="ins">
				<div class="fa fa-angle-double-right"></div>
				Ví điện tử
			</div>
			<div class="liacc is-menu" data-link="noti">
				<div class="fa fa-angle-double-right"></div>
				Thông báo của tôi
			</div>
			<div class="liacc is-menu" data-link="oder">
				<div class="fa fa-angle-double-right"></div>
				Đơn hàng của tôi
			</div>
			<div class="liacc is-menu" data-link="fav">
				<div class="fa fa-angle-double-right"></div>
				Danh sách yêu thích
			</div>
			<div class="liacc is-menu" data-link="rated">
				<div class="fa fa-angle-double-right"></div>
				Danh sách đánh giá
			</div>
		</div>
		<div class="accbox right">
			<div class="is-tab" data-link="def">
				<div class="titlebar">
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
								Phạm Diễm
							</div>
						</div>
						<div class="linacc mxClrAft">
							<div class="tt left">
								Số điện thoại:
							</div>
							<div class="left dt">
								01234.567.890
							</div>
						</div>
						<div class="linacc mxClrAft">
							<div class="tt left">
								Email:
							</div>
							<div class="left dt">
								abc@gmail.com
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
						<div class="linacc mxClrAft def">
							<div class="left tt">
								Địa chỉ 1:
							</div>
							<div class="left dt">
								KTX ĐHQG TP. Hồ Chí Minh, KP6. P. Linh Trung, Q. Thủ Đức
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
						<div class="linacc mxClrAft">
							<div class="left tt">
								Địa chỉ 2:
							</div>
							<div class="left dt">
								KTX ĐHQG TP. Hồ Chí Minh, KP6. P. Linh Trung, Q. Thủ Đức
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
					</div>
				</div>
			</div>
			<div class="is-tab" data-link="ins">
				<div class="titlebar">
					Ví điện tử
				</div>
				<div class="cnt">
					<div class="smbo">
						<div class="ttb">
							Thông tin xu
						</div>
						<div class="linacc mxClrAft">
							<div class="tt left">
								Số xu trong tài khoản:
							</div>
							<div class="left dt">
								2700 Xu
							</div>
						</div>
						<div class="linacc mxClrAft">
							<div class="tt left">
								Số xu đang chờ xét:
							</div>
							<div class="left dt">
								400 Xu
							</div>
						</div>
					</div>
					<div class="smbo">
						<div class="ttb">
							Lịch sử nhận xu
						</div>
						<div class="tbx">
							<div class="r fr mxClrAft">
								<div class="cl1 cl">
									<div class="tt">
										Thời gian
									</div>
								</div>
								<div class="cl2 cl">
									<div class="tt">
										Xu tích lũy
									</div>
								</div>
								<div class="cl3 cl">
									<div class="tt">
										Mô tả
									</div>
								</div>
								<div class="cl4 cl">
									<div class="tt">
										Trạng thái
									</div>
								</div>
							</div>
							<?php for ($i = 1; $i < 6;$i++): ?>
								<div class="r mxClrAft">
									<div class="cl1 cl">
										<div class="t">
											07:07 25/12.2015
										</div>
									</div>
									<div class="cl2 cl">
										<div class="t">
											+300
										</div>
									</div>
									<div class="cl3 cl">
										<div class="t">
											Nhận xu từ đơn hàng 
											<span>
												#ABC123
											</span>
										</div>
									</div>
									<div class="cl4 cl">
										<div class="t">
											Đã nhận
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
			</div>
			<div class="is-tab is-tbl" data-link="noti">
				<div class="titlebar">
					Thông báo của bạn
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
								<div class="is-noti-filter-row notirow" data-link="read">
									Đã đọc
								</div>
								<div class="is-noti-filter-row notirow" data-link="unread">
									Chưa đọc
								</div>
								<div class="is-noti-filter-row notirow" data-link="star">
									Thư gắn dấu sao
								</div>
								<div class="is-noti-filter-row notirow" data-link="unstar">
									Thư không có dấu sao
								</div>
							</div>
						</div>
						<div class="is-noti-todo btnoti left">
							Tác vụ
							<div class="fa fa-angle-double-down"></div>
							<div class="is-noti-todo-pop popnoti">
								<div class="is-noti-todo-row notirow" data-link="read">
									Đánh dấu là đã đọc
								</div>
								<div class="is-noti-todo-row notirow" data-link="unread">
									Đánh dấu là chưa đọc
								</div>
								<div class="is-noti-todo-row notirow" data-link="star">
									Thêm dấu sao
								</div>
								<div class="is-noti-todo-row notirow" data-link="unstar">
									Bỏ dấu sao
								</div>
								<div class="is-noti-todo-row notirow" data-link="remove">
									Xóa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tbl">
					<div class="r mxClrAft fr">
						<div class="cl1">
							<span class="fa fa-square-o is-ckall"></span>
							<span class="fa fa-star-o is-stall"></span>
						</div>
						<div class="cl2">
							<div class="tt">
								Người gửi
							</div>
						</div>
						<div class="cl3">
							<div class="tt">
								Tiêu đề
							</div>
						</div>
						<div class="cl4">
							<div class="tt">
								Nội dung
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
								<span class="fa fa-star-o is-st"></span>
							</div>
							<div class="cl2">
								<div class="dt">
									Hệ Thống
								</div>
							</div>
							<div class="cl3">
								<div class="dt is-1r">
									Thông báo mua hàng
								</div>
							</div>
							<div class="cl4">
								<div class="dt is-1r">
									<div class="mail">
										<div style="
											display: block;
											background-color: #00a651;
											height: 50px;
											width: calc(100% - 2px);
											margin: 0 auto;
										">
											<a href="index.php" style="
												display: inline-block;
												height: 30px;
												padding: 10px 20px;
											">
												<img src="style/images/theme/log.png" alt="Leobook.com" style="
													height: 30px;
												">
											</a>
										</div>
										<div style="
											display: block;
											padding: 15px 32px 30px;
										">
											<div style="
												display: block;
												line-height: 30px;
												font-size: 16px;
												font-family: 'HelveticaNeue-Medium';
												color: rgba(0,0,0,0.86);
											">
												Chào Phạm Diễm
											</div>
											<div style="
												display: block;
												line-height: 20px;
												font-family: 'HelveticaNeue-Light';
												font-size: 14px;
												padding-top: 5px;
											">
												<a href="index.php" style="
													color: #00a651;
													font-family: 'HelveticaNeue-Medium'
												">
													Leobook.com
												</a>
												xin thông báo trạng thái đơn hàng của bạn.
											</div>
											<div style="
												display: block;
												padding: 15px 0;
											">
												<div style="
													display: block;
													color: #00a651;
													border-bottom: 2px solid rgba(0,0,0,0.24);
													font-size: 14px;
													font-family: 'HelveticaNeue-Medium';
													line-height: 24px;
												">
													TRẠNG THÁI ĐƠN HÀNG
												</div>
												<div style="
													display: block;
													padding-top: 10px;
												">
													<div style="
														display: inline-block;
														width: 100px;
														font-size: 14px;
														font-family: 'HelveticaNeue-Medium';
														color: rgba(0,0,0,0.64);
													">
														Đơn hàng:
													</div>
													<div style="
														display: inline-block;
														font-size: 14px;
														font-family: 'HelveticaNeue-Medium';
														color: #00a651;
													">
														#ABC123
													</div>
												</div>
												<div style="
													display: block;
												">
													<div style="
														display: inline-block;
														width: 100px;
														font-size: 14px;
														font-family: 'HelveticaNeue-Medium';
														color: rgba(0,0,0,0.64);
													">
														Trạng thái:
													</div>
													<div style="
														display: inline-block;
														font-size: 14px;
														font-family: 'HelveticaNeue-Medium';
														color: #00a651;
													">
														Hoàn thành
													</div>
												</div>
												<div style="
														display: block;
														font-size: 14px;
														font-family: 'HelveticaNeue-Medium';
														color: rgba(0,0,0,0.86);
														padding-top: 5px;
													">
													Cảm ơn bạn đã mua sách với 
													<a href="index.php" style="
														color: #00a651;
														font-family: 'HelveticaNeue-Medium'
													">
														Leobook.com
													</a>
												</div>
											</div>
											<div style="
												display: block;
												line-height: 20px;
												font-family: 'HelveticaNeue-Light';
												font-size: 14px;
												padding-top: 5px;
											">
												Mọi thắc mắc và góp ý xin vui lòng liên hệ chúng tôi qua email:
												<span style="
													color: #00a651;
													font-family: 'HelveticaNeue-Medium'
												">
													hotro.readwithme@gmail.com
												</span>
												hoặc số điện thoại
												<span style="
													color: #00a651;
													font-family: 'HelveticaNeue-Medium'
												">
													01234.567.890
												</span>
											</div>
											<div style="
												display: block;
												padding-top: 30px;
											">
												<div style="
													display: block;
													line-height: 20px;
													font-family: 'HelveticaNeue-Light';
													font-size: 14px;
												">
													Trân trọng!
												</div>
												<div style="
													display: block;
													line-height: 20px;
													font-family: 'HelveticaNeue-Medium';
													font-size: 14px;
												">
													Leobook.com
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cl5">
								<div class="dt">
									Dec 25
								</div>
							</div>
						</div>
						<div class="is-mail mailbox" data-link="<?php echo $i; ?>">
							<div class="mail">
								<div style="
									display: block;
									background-color: #00a651;
									height: 50px;
									width: calc(100% - 2px);
									margin: 0 auto;
								">
									<a href="index.php" style="
										display: inline-block;
										height: 30px;
										padding: 10px 20px;
									">
										<img src="style/images/theme/log.png" alt="Leobook.com" style="
											height: 30px;
										">
									</a>
								</div>
								<div style="
									display: block;
									padding: 15px 32px 30px;
								">
									<div style="
										display: block;
										line-height: 30px;
										font-size: 16px;
										font-family: 'HelveticaNeue-Medium';
										color: rgba(0,0,0,0.86);
									">
										Chào Phạm Diễm
									</div>
									<div style="
										display: block;
										line-height: 20px;
										font-family: 'HelveticaNeue-Light';
										font-size: 14px;
										padding-top: 5px;
									">
										<a href="index.php" style="
											color: #00a651;
											font-family: 'HelveticaNeue-Medium'
										">
											Leobook.com
										</a>
										xin thông báo trạng thái đơn hàng của bạn.
									</div>
									<div style="
										display: block;
										padding: 15px 0;
									">
										<div style="
											display: block;
											color: #00a651;
											border-bottom: 2px solid rgba(0,0,0,0.24);
											font-size: 14px;
											font-family: 'HelveticaNeue-Medium';
											line-height: 24px;
										">
											TRẠNG THÁI ĐƠN HÀNG
										</div>
										<div style="
											display: block;
											padding-top: 10px;
										">
											<div style="
												display: inline-block;
												width: 100px;
												font-size: 14px;
												font-family: 'HelveticaNeue-Medium';
												color: rgba(0,0,0,0.64);
											">
												Đơn hàng:
											</div>
											<div style="
												display: inline-block;
												font-size: 14px;
												font-family: 'HelveticaNeue-Medium';
												color: #00a651;
											">
												#ABC123
											</div>
										</div>
										<div style="
											display: block;
										">
											<div style="
												display: inline-block;
												width: 100px;
												font-size: 14px;
												font-family: 'HelveticaNeue-Medium';
												color: rgba(0,0,0,0.64);
											">
												Trạng thái:
											</div>
											<div style="
												display: inline-block;
												font-size: 14px;
												font-family: 'HelveticaNeue-Medium';
												color: #00a651;
											">
												Hoàn thành
											</div>
										</div>
										<div style="
												display: block;
												font-size: 14px;
												font-family: 'HelveticaNeue-Medium';
												color: rgba(0,0,0,0.86);
												padding-top: 5px;
											">
											Cảm ơn bạn đã mua sách với 
											<a href="index.php" style="
												color: #00a651;
												font-family: 'HelveticaNeue-Medium'
											">
												Leobook.com
											</a>
										</div>
									</div>
									<div style="
										display: block;
										line-height: 20px;
										font-family: 'HelveticaNeue-Light';
										font-size: 14px;
										padding-top: 5px;
									">
										Mọi thắc mắc và góp ý xin vui lòng liên hệ chúng tôi qua email:
										<span style="
											color: #00a651;
											font-family: 'HelveticaNeue-Medium'
										">
											hotro.readwithme@gmail.com
										</span>
										hoặc số điện thoại
										<span style="
											color: #00a651;
											font-family: 'HelveticaNeue-Medium'
										">
											01234.567.890
										</span>
									</div>
									<div style="
										display: block;
										padding-top: 30px;
									">
										<div style="
											display: block;
											line-height: 20px;
											font-family: 'HelveticaNeue-Light';
											font-size: 14px;
										">
											Trân trọng!
										</div>
										<div style="
											display: block;
											line-height: 20px;
											font-family: 'HelveticaNeue-Medium';
											font-size: 14px;
										">
											Leobook.com
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
			</div>
			<div class="is-tab is-tbl" data-link="oder">
				<div class="titlebar">
					Đơn hàng của bạn
					<div class="right ctrl">
						<div class="slfilter">
							<select name="Soluong" class="is-sl" value="Số lượng">
								<option value="">Xem: 5</option>
								<option value="">Xem: 10</option>
								<option value="">Xem: 20</option>
							</select>
						</div>
					</div>
				</div>
				<div class="tboder">
					<div class="r mxClrAft fr">
						<div class="cl1 cl">
							<div class="tt">
								Mã đơn hàng
							</div>
						</div>
						<div class="cl2 cl">
							<div class="tt">
								Thời gian
							</div>
						</div>
						<div class="cl3 cl">
							<div class="tt">
								Sản phẩm
							</div>
						</div>
						<div class="cl4 cl">
							<div class="tt">
								Tổng tiền
							</div>
						</div>
						<div class="cl5 cl">
							<div class="tt">
								Trạng thái
							</div>
						</div>
					</div>
					<?php   for ($i = 1; $i < 6;$i++): ?>
						<div class="r mxClrAft is-r" data-link="<?php echo $i; ?>">
							<div class="cl1 cl">
								<div class="dt">
									#abc123
								</div>
							</div>
							<div class="cl2 cl">
								<div class="dt">
									Dec 25
								</div>
							</div>
							<div class="cl3 cl">
								<div class="dt is-1r">
									Nghìn lẻ một ngày và 2 sản phẩm khác
								</div>
							</div>
							<div class="cl4 cl">
								<div class="dt">
									180.000đ
								</div>
							</div>
							<div class="cl5 cl">
								<div class="dt">
									Thành công
								</div>
							</div>
						</div>
						<div class="is-mail oder" data-link="<?php echo $i; ?>">
							<div class="mail">
								<div class="dtmail">
									<div class="tt">
										Đơn hàng #ABC123
										<span>
											- Giao hàng thành công
										</span>
									</div>
									<div class="smdt">
										Ngày đặt hàng: 
										<span>
											25/12/2015
										</span>
									</div>
								</div>
								<div class="box">
									<div class="tt">
										Địa chỉ người nhận
									</div>
									<div class="dt">
										Người nhận:
										<span>
											Phạm Diễm
										</span>
									</div>
									<div class="dt">
										Địa chỉ giao hàng:
										<span>
											KTX ĐHQG TP. Hồ Chí Minh, KP6. P. Linh Trung, Q. Thủ Đức
										</span>
									</div>
									<div class="dt">
										Số điện thoại:
										<span>
											01234.567.890
										</span>
									</div>
								</div>
								<div class="box mxClrAft">
									<div class="left">
										<div class="tt">
											Phương thức vận chuyển
										</div>
										<div class="dt">
											<span>
												Vận chuyển Tiết Kiệm (dự kiến giao hàng vào Thứ sáu, 18/09/2015 - Thứ bảy, 19/09/2015)
											</span>
										</div>
										<div class="dt">
											Phí vận chuyển:
											<span>
												12.000đ
											</span>
										</div>
									</div>
									<div class="left">
										<div class="tt">
											Phương thức thanh toán
										</div>
										<div class="dt">
											<span>
												Thanh toán trực tiếp khi nhận hàng
											</span>
										</div>
									</div>
								</div>
								<div class="box">
									<div class="tt">
										Danh sách sản phẩm:
									</div>
									<div class="tbsp">
										<div class="rsp fr mxClrAft">
											<div class="na inr">
												<div class="t">
													Sản phẩm
												</div>
											</div>
											<div class="sku inr">
												<div class="t">
													SKU
												</div>
											</div>
											<div class="pri inr">
												<div class="t">
													Giá
												</div>
											</div>
											<div class="nb inr">
												<div class="t">
													SL
												</div>
											</div>
											<div class="lpri inr">
												<div class="t">
													Giảm
												</div>
											</div>
											<div class="ttl inr">
												<div class="t">
													Tổng giá
												</div>
											</div>
										</div>
										<?php
													$num = array("1", "2", "3", "4");
													foreach ($num as $value) :
												?>
											<div class="rsp mxClrAft">
												<div class="na inr">
													<div class="tx">
														Nếu cuộc đời suôn sẻ, nước mắt biết dành cho ai
													</div>
													<div class="tx">
														<span>
															Tác giả: Nguyễn Phong Việt
														</span>
													</div>
												</div>
												<div class="sku inr">
													<div class="tx">
														2512201420
													</div>
												</div>
												<div class="pri inr">
													<div class="tx">
														59.000đ
													</div>
												</div>
												<div class="nb inr">
													<div class="tx">
														2
													</div>
												</div>
												<div class="lpri inr">
													<div class="tx">
														0%
													</div>
												</div>
												<div class="ttl inr">
													<div class="tx">
														59.000đ
													</div>
												</div>
											</div>
										<?php endforeach?>
									</div>
								</div>
								<div class="box mxClrAft">
									<div class="pribox right">
										<div class="pr">
											<div class="l">
												Tổng cộng:
											</div>
											<div class="ri">
												230.000đ
											</div>
										</div>
										<div class="pr">
											<div class="l">
												Xu tặng:
											</div>
											<div class="ri">
												200 Xu
											</div>
										</div>
										<div class="pr">
											<div class="l">
												Giảm giá:
											</div>
											<div class="ri">
												0đ
											</div>
										</div>
										<div class="pr">
											<div class="l">
												Chi phí vận chuyển:
											</div>
											<div class="ri">
												25.000đ
											</div>
										</div>
										<div class="pr">
											<div class="l">
												Tổng hóa đơn:
											</div>
											<div class="ri">
												255.000đ
											</div>
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
			</div>
			<div class="is-tab" data-link="fav">
				<div class="filterbox">
					<div class="filterbar mxClrAft">
						<div class="title">
							Danh sách yêu thích
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
						<div class="gridbook">
							<div class="lbook grid mxClrAft">
								<?php   for ($i = 1; $i < 5;$i++): ?>
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
												<div class="cartbox mxClrAft">
													<div class="num">
														<input type="text" class="n left" value="1">
														<div class="ctrlnum left">
															<div class="fa fa-angle-up is-up"></div>
															<div class="fa fa-angle-down is-down"></div>
														</div>
														<div class="clear"></div>
													</div>
													<button class="addcart">
														<span class="fa fa-opencart"></span>
														<span class="fa fa-check"></span>
														THÊM VÀO GIỎ
													</button>
													<button class="over">
														<span class="fa fa-bulhorn"></span>
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
					</div>
				</div>
			</div>
			<div class="is-tab is-tbl" data-link="rated">
				<div class="titlebar">
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
											<button class="over">
												<span class="fa fa-bullhorn"></span>
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
			</div>
		</div>
	</div>
@stop