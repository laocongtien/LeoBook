@extends('admin.master')
@section('content')

<div class="col-lg-12">
    <h1 class="page-header">Đơn hàng
    </h1>
</div>
<div class="clear"></div>
<div class="filter mxClrAft is-filter">
    <div class="fl">
        <div class="fil atv">
            Tất cả
            <span class="ab">5</span>
        </div>
        <div class="fil">
            Đang xử lý
            <span class="ab">5</span>
        </div>
        <div class="fil">
            Có hàng
            <span class="ab">5</span>
        </div>
        <div class="fil">
            Đang giao hàng
            <span class="ab">5</span>
        </div>
        <div class="fil">
            Đã hoàn thành
            <span class="ab">5</span>
        </div>
        <div class="fil">
            Không thể giao hàng
            <span class="ab">5</span>
        </div>
        <div class="fil">
            Hàng bị trả về
            <span class="ab">5</span>
        </div>
        <div class="fil">
            Đã hủy
            <span class="ab">5</span>
        </div>
    </div>
</div>
<div class="ctrlb mxClrAft">
    <div class="sh left">
        <div class="lb">
            Hiển thị:
        </div>
        <select name="Soluong" class="is-sl" value="num">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="">Tất cả</option>
        </select>
        <div class="lb">
            Kết quả
        </div>
        <div class="clear"></div>
    </div>
    <div class="sf right">
        <div class="input-group custom-search-form right">
            <input type="text" placeholder="Tìm kiếm..." class="form-control">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover">
<thead>
    <tr align="center">
        <th class="f"><i class="fa fa-square-o is-ck-all"></i></th>
        <th class="is-sort atv">
            <div class="tt">
                Đơn hàng 
            </div>
            <div class="icb">
                <i class="fa fa-caret-up"></i>
                <i class="fa fa-caret-down"></i>
            </div>
            <div class="ics">
                <i class="fa fa-caret-square-o-up"></i>
                <i class="fa fa-caret-square-o-down"></i>
            </div>
        </th>
        <th class="is-sort">
            <div class="tt"  align="center">
                Cập nhật 
            </div>
            <div class="icb">
                <i class="fa fa-caret-up"></i>
                <i class="fa fa-caret-down"></i>
            </div>
            <div class="ics">
                <i class="fa fa-caret-square-o-up"></i>
                <i class="fa fa-caret-square-o-down"></i>
            </div>
        </th>
        <th class="is-sort">
            <div class="tt" align="center">
                Khách hàng 
            </div>
            <div class="icb">
                <i class="fa fa-caret-up"></i>
                <i class="fa fa-caret-down"></i>
            </div>
            <div class="ics">
                <i class="fa fa-caret-square-o-up"></i>
                <i class="fa fa-caret-square-o-down"></i>
            </div>
        </th>
        <th class="is-sort">
            <div class="tt">
                Tổng tiền 
            </div>
            <div class="icb">
                <i class="fa fa-caret-up"></i>
                <i class="fa fa-caret-down"></i>
            </div>
            <div class="ics">
                <i class="fa fa-caret-square-o-up"></i>
                <i class="fa fa-caret-square-o-down"></i>
            </div>
        </th>
        <th class="is-sort">
            <div class="tt">
                Thanh toán 
            </div>
            <div class="icb">
                <i class="fa fa-caret-up"></i>
                <i class="fa fa-caret-down"></i>
            </div>
            <div class="ics">
                <i class="fa fa-caret-square-o-up"></i>
                <i class="fa fa-caret-square-o-down"></i>
            </div>
        </th>
        <th class="sb">
            <div class="tt" align="center">
                Trạng thái 
            </div>
            <select name="trangthaidonhang" class="is-sl" value="abc">
                <option value="">Chọn trạng thái</option>
                <option value="">Đang xử lý</option>
                <option value="">Có hàng</option>
                <option value="">Đang giao hàng</option>
                <option value="">Đã hoàn thành</option>
                <option value="">Không thể giao hàng</option>
                <option value="">Hàng bị trả về</option>
                <option value="">Đã hủy</option>
            </select>
        </th>
    </tr>
</thead>
<tbody>
    <tr class="even gradeC" align="center">
        <td><i class="fa fa-square-o is-ck"></i></td>
        <td>#abc123</td>
        <td>07:07 25/12.2015</td>
        <td>Phạm Thị Diễm Mi</td>
        <td>512.000 đ</td>
        <td>Đã thanh toán</td>
        <td class="sb">
            <select name="trangthaidonhang" class="is-sl" value="Sắp xếp">
                <option value="">Đang xử lý</option>
                <option value="">Có hàng</option>
                <option value="">Đang giao hàng</option>
                <option value="">Đã hoàn thành</option>
                <option value="">Không thể giao hàng</option>
                <option value="">Hàng bị trả về</option>
                <option value="">Đã hủy</option>
            </select>
        </td>
    </tr>
    <tr class="even gradeC" align="center">
        <td><i class="fa fa-square-o is-ck"></i></td>
        <td>#abc123</td>
        <td>07:07 25/12.2015</td>
        <td>Phạm Diễm</td>
        <td>512.000 đ</td>
        <td>Đã thanh toán</td>
        <td class="sb">
            <select name="trangthaidonhang" class="is-sl" value="Sắp xếp">
                <option value="">Đang xử lý</option>
                <option value="">Có hàng</option>
                <option value="">Đang giao hàng</option>
                <option value="">Đã hoàn thành</option>
                <option value="">Không thể giao hàng</option>
                <option value="">Hàng bị trả về</option>
                <option value="">Đã hủy</option>
            </select>
        </td>
    </tr>
</tbody>
</table>
<div class="page_number">
    <div class="page_num mxClrAft">
        <div class="num numprev fa fa-angle-double-left hide"></div>
        <div href="#" class="num numpage atv">
            1
        </div>
        <div href="#" class="num numpage ">
            2
        </div>
        <div href="#" class="num numpage ">
            3
        </div>
        <div href="#" class="num numpage ">
            4
        </div>
        <div class="num numnext fa fa-angle-double-right"></div>
        <div class="clear"></div>
    </div>
  </div>
@stop