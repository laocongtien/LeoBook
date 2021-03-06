<div class="titlebar loaded">
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