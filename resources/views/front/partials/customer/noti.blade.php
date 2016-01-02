<div class="titlebar loaded">
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