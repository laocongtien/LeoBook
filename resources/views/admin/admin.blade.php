@extends('admin.master')
@section('content')

<div class="col-lg-12">
    <h1 class="page-header">
    	Tổng quan
    </h1>
</div>
<div class="filter mxClrAft is-filter">
  <div class="fl">
    <div class="fil atv">
        Hôm nay
    </div>
    <div class="fil">
        Hôm qua
    </div>
    <div class="fil">
        7 ngày
    </div>
    <div class="fil">
        1 tháng
    </div>
    <div class="fil">
        3 tháng
    </div>
    <div class="fil">
        6 tháng
    </div>
  </div>
</div>
<div class="bigchart wrap is-box">
  <div class="ch is-tab" data-link="1">Chỗ này để biểu đồ thống kê doanh số</div>
  <div class="ch is-tab" data-link="2">Chỗ này để biểu đồ thống kê lượng giao dịch</div>
  <div class="ch is-tab" data-link="3">Chỗ này để biểu đồ thống kê lượng truy cập</div>
  <div class="mn mxClrAft">
    <div class="m atv is-menu" data-link="1">
      Doanh số
    </div>
    <div class="m is-menu" data-link="2">
      Giao dịch
    </div>
    <div class="m is-menu" data-link="3">
      Khách truy cập
    </div>
  </div>
</div>
<div class="statisticspace mxClrAft wrap">
  <div class="b">
    <div class="hb">
      giá trị giao dịch trung bình
    </div>
    <div class="n">
      100.000đ
    </div>
    <div class="tt">
      tổng số giao dịch
    </div>
    <div class="n">
      1.000
    </div>
    <div class="tk">
      <span class="fa fa-chevron-circle-up"><!-- fa-chevron-circle-up nếu tăng, fa-chevron-circle-down nếu giảm--></span>
      10% so với ngày hôm trước
    </div>
  </div>
  <div class="b">
    <div class="hb">
      tổng doanh số
    </div>
    <div class="bdch mxClrAft">
      <div class="ch"><!-- nguyên cục này là chèn biểu đồ tròn vào -->
        <img class="" src="public/style/images/temp/chart.png">
        <div class="nch">
          100k
        </div>
      </div>
      <div class="ttch">
        <div class="l gr">
            25% Thanh toán trực tiếp
        </div>
        <div class="l pi">
          25% Qua ATM
        </div>
        <div class="l blu">
          25% Visa/Master Card
        </div>
        <div class="l gra">
          35% Khác
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="b">
    <div class="hb">
      sản phẩm bán chạy
    </div>
    <div class="scrb">
      <div class="js-sc">
      <?php   for ($i = 1; $i < 6;$i++): ?>
        <div class="r mxClrAft">
          <div class="ler">
            Cô đơn cũng không khóc
          </div>
          <div class="rir">
            80.000đ
          </div>
        </div>
      <?php endfor ?>
      </div>
    </div>
    <a class="more">
      Xem thêm
    </a>
  </div>
  <div class="b">
    <div class="hb">
      Khách truy cập
    </div>
    <div class="n">
      1000
    </div>
    <div class="tt">
      Lượt xem trang
    </div>
    <div class="n">
      10.000
    </div>
    <div class="tk">
      <span class="fa fa-chevron-circle-down"><!-- fa-chevron-circle-up nếu tăng, fa-chevron-circle-down nếu giảm--></span>
      10% so với ngày hôm trước
    </div>
  </div>
  <div class="b">
    <div class="hb">
      giờ bán chạy hàng
    </div>
    <div class="scrb">
      <div class="js-sc">
      <?php   for ($i = 1; $i < 6;$i++): ?>
        <div class="r mxClrAft">
          <div class="ler">
            08:00 21/02/2015 (200SP)
          </div>
          <div class="rir">
            10.000.000đ
          </div>
        </div>
      <?php endfor ?>
      </div>
    </div>
    <a class="more">
      Xem thêm
    </a>
  </div>
  <div class="b box5">
    <div class="hb">
      khách hàng thân thiết
    </div>
    <div class="scrb mxClrAft">
      <div class="js-sc">
        <?php   for ($i = 1; $i < 6;$i++): ?>
          <div class="rb5 mxClrAft">
            <div class="num">
              <?php echo $i; ?>
            </div>
            <div class="na">
              Phạm Thị Diễm Mi
            </div>
          </div>
        <?php endfor ?>
      </div>
    </div>
    <a class="more">
      Xem thêm
    </a>
  </div>
</div>
@stop