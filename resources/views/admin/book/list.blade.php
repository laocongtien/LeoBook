@extends('admin.master')
@section('content')

<div class="col-lg-12">
    <h1 class="page-header">Quản lý sách
    </h1>
</div>
<div class="clear"></div>
<div class="sc wrap">
    <ul>
        Xóa thành công
    </ul>
</div>
<div class="ctrlb mxClrAft">
    <div class="sh left">
        <div class="lb">
            Hiển thị:
        </div>
        <select name="" class="is-sl" value="">
            <option value="">5</option>
            <option value="">10</option>
            <option value="">20</option>
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
<table class="table table-bordered table-hover cate_table">
    <thead>
        <tr align="center">
            <th class="f cl1">
                <i class="fa fa-square-o is-ck-all"></i>
                <i class="fa fa-angle-double-down is-show-all"><!--fa-angle-double-right cho hide-->
                    <span class="p">Ẩn tất cả danh mục con</span>
                </i>
            </th>
            <th class="is-sort cl2">
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
            <th class="is-sort cl3">
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
            <th class="cl4">
                <div class="tt" align="center">
                    Vị trí
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
</table>
@stop