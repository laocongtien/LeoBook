@extends('front.layouts.base')

@section('head.title')
Tác giả
@stop

@section('body.content')
	<div class="contain mxClrAft wrap is-box athp">
		<div class="authorlist left">
			<div class="title_author is-menu" data-link="all">
				Tất cả
			</div>

			<div class="athslider">
				<div class="slider">
					@foreach ($author_word as $value)
					<div class="nav">
			      <div class="author_word is-menu" data-set="{{$value->alpha}}"data-link="word">
			      	{{$value->alpha}}
			      </div>
			      <div class="author_list">
				    <?php $author = DB::table('authors')->where(DB::raw('substr(name,1,1)'),$value->alpha)->get();?>
				    @foreach ($author as $item)
			        	<div class="author_name is-menu" data-set="{{ $item->id }}"data-link="pp">
			        		{{$item->name}}
			        	</div>
		        	@endforeach
			      </div>
			    </div>
					@endforeach
				</div>
			</div>
		    <div class="scroll_word">
				@foreach ($author_word as $value)
				<div class="word is-menu"  data-set="{{ $value->alpha }}" data-link="word">
					{{ $value->alpha }}
				</div>
				@endforeach
		    </div>
		</div>
		<div class="authorbox right">
			<!--Tất cả tác giả-->
			<div class="is-tab" data-link="all">
				<div class="filterbox">
					<div class="filterbar mxClrAft">
						<div class="namebox">
							Danh sách tác giả
						</div>
						<div class="fil slfilter right">
							<select name="TenDanhSach" class="is-sl" value="Sắp xếp">
								<option value="">Sắp xếp theo: A - Z</option>
								<option value="">Sắp xếp theo: Z - A</option>
							</select>
						</div>
					</div>
					<div class="athl mxClrAft pagination">
						@foreach ($data as $item)
						<div class="athitem {{($item->avatar == '') ? 'noav' : ''}}">
							<div class="ava" style="background-image: url({{($item->avatar == '') ? '' : url($item->avatar)}})"></div>
							<img src="{{ url('style/images/theme/logo-gray.png') }}" alt="" class="nava">
							<div class="athn">
								<div>
									{{ $item->name }}

								</div>
							</div>
						</div>
						@endforeach
					</div>
					@if ($data->lastPage() > 1)
					<div class="page_number">
					    <div class="page_num">
					    	<div class="num numprev fa fa-angle-double-left {{$data->currentPage() == 1 ? 'hide' : '' }}"></div>
					    	@for ($i = 1; $i <= $data->lastPage(); $i = $i + 1)
					    	<div class="num numpage {{$data->currentPage() == $i ? 'atv' : '' }}" href="{!! $data->url($i) !!}">
					    		{{ $i }}
					    	</div>
					    	@endfor
					    	<div class="num numnext fa fa-angle-double-right {{$data->currentPage() == $data->lastPage() ? 'hide' : '' }}"></div>
					    	<div class="clear"></div>
					    </div>
					</div>
					@endif
				</div>
			</div>
			<!--Tác giả theo từ khóa #-->
			<div class="is-tab" data-link="word">
				<div class="filterbox">
					<div class="filterbar mxClrAft">
						<div class="namebox">
							Danh sách tác giả 
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
							<img src="{{ url('style/images/theme/logo-gray.png') }}" alt="" class="nava">
							<div class="athn">
								<div>
									Ploy
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
			</div>
		</div>
	</div>
@stop