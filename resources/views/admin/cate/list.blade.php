@extends('admin.master')
@section('content')

<div class="col-lg-12">
    <h1 class="page-header">
        Danh mục
    </h1>
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
            <div class="tt" align="center">
                Danh mục
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
        <th class="sb">
            <div class="tt" align="center">
                Thao tác
            </div>
            <div class="ttb" align="center">
                <div class="ip">Xóa toàn bộ</div>
            </div>
        </th>
    </tr>
</thead>
<tbody>
    <tr class="even gradeC lv1" align="center" data-link="1">
        <td><i class="fa fa-square-o is-ck"></i></td>
        <td class="lv1 lv">Văn học - tiểu thuyết</td>
        <td>07:07 25/12.2015</td>
        <td>
            <div class="ttb">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash"></i>
            </div>
        </td>
    </tr>
    <div class="uslv" data-set="1">
    <tr class="even gradeC lv2" align="center">
        <td><i class="fa fa-square-o is-ck"></i></td>
        <td class="lv">Trinh thám - kinh dị</td>
        <td>07:07 25/12.2015</td>
        <td>
            <div class="ttb">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash"></i>
            </div>
        </td>
    </tr>
    <tr class="even gradeC lv2" align="center">
        <td><i class="fa fa-square-o is-ck"></i></td>
        <td class="lv">Truyện cổ tích</td>
        <td>07:07 25/12.2015</td>
        <td>
            <div class="ttb">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash"></i>
            </div>
        </td>
    </tr>
    </div>
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