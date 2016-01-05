@extends('admin.master')
@section('content')
<form action="" method="post" accept-charset="utf-8" class="combo wrap">
{{csrf_field()}}
    <div class="col-lg-12">
        <h1 class="page-header">
            Quản lý Combo
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
    <table class="table table-bordered table-hover combo_table">
        <thead>
            <tr align="center">
                <th class="f cl1">
                    <i class="fa fa-square-o is-ck-all"></i>
                </th>
                <th class="is-sort cl2">
                    <div class="tt" align="center">
                        Tên combo
                    </div>
                </th>
                <th class="is-sort cl3">
                    <div class="tt"  align="center">
                        Số mặt hàng
                    </div>
                </th>
                <th class="cl4">
                    <div class="tt" align="center">
                        Còn lại
                    </div>
                </th>
                <td class="cl5">
                    <div class="tt">
                        Số lượt mua
                    </div>
                </td>
                <th class="sb cl6">
                    <div class="tt" align="center">
                        Thao tác
                    </div>
                    <div class="ttb" align="center">
                        <div class="ip">Xóa</div>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="even gradeC" align="center" data-link="1">
                <td class="cl1">
                    <i class="fa fa-square-o is-ck"></i>
                </td>
                <td class="cl2">
                    <div class="t">
                        Combo Tony buổi sáng (tặng kèm Ly sứ cao cấp)
                    </div>
                </td>
                <td class="cl3">
                    <div class="t">
                        4
                    </div>
                </td>
                <td class="cl4">
                    <div class="t">
                        50
                    </div>
                </td>
                <td class="cl5">
                    <div class="t">
                        65
                    </div>
                </td>
                <td class="cl9">
                    <div class="ttb">
                        <a href="" class="fa fa-eye">
                            <span class="p">
                                Xem combo
                            </span>
                        </a>
                        <a href="{{ route('admin.combo.getEdit') }}" class="fa fa-edit">
                            <span class="p">
                                Sửa combo
                            </span>
                        </a>
                        <a class="fa fa-trash" data-link="1">
                            <span class="p">
                                Xóa combo
                            </span>
                        </a>
                    </div>
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
</form> 
@stop