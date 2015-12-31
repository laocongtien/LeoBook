@extends('admin.master')
@section('content')
<form action="list_submit" method="get" accept-charset="utf-8">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh mục
        </h1>
    </div>
    <div class="clear"></div>
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
    <table class="table table-bordered table-hover cate_table is-tbl-clone">
        <tbody>
            <tr class="even gradeC lv1" align="center" data-link="1">
                <td class="cl1">
                    <i class="fa fa-square-o is-ck"></i>
                    <i class="fa fa-angle-double-down is-show"><!--Nếu là danh mục lv2 thì thêm class none-->
                        <span class="p">Ẩn danh mục con</span><!--Hiện danh mục con nếu là fa-angle-double-right-->
                    </i>
                </td>
                <td class="lv1 lv cl2">Văn học - tiểu thuyết</td>
                <td class="cl3">07:07 25/12.2015</td>
                <td class="cl4">
                    <a class="fa fa-caret-up disable">
                        <span class="p">Di chuyển lên trên</span>
                    </a>
                    <a class="fa fa-caret-down">
                        <span class="p">Di chuyển xuống dưới</span>
                    </a>
                </td>
                <td>
                    <div class="ttb">
                        <a href="{{ route('admin.cate.getEdit') }}" class="fa fa-edit">
                            <span class="p">
                                Sửa danh mục
                            </span>
                        </a>
                        <a class="fa fa-trash" data-link="1">
                            <span class="p">
                                Xóa danh mục
                            </span>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="even gradeC lv2" align="center" data-link="1-1">
                <td class="cl1">
                    <i class="fa fa-square-o is-ck"></i>
                    <a class="fa fa-angle-double-down is-show">
                        <span class="p">Ẩn danh mục con</span><!--Hiện danh mục con nếu là fa-angle-double-right-->
                    </a>
                </td>
                <td class="lv cl2">Trinh thám - kinh dị</td>
                <td class="cl3">07:07 25/12.2015</td>
                <td class="cl4">
                    <a class="fa fa-caret-up">
                        <span class="p">Di chuyển lên trên</span>
                    </a>
                    <a class="fa fa-caret-down">
                        <span class="p">Di chuyển xuống dưới</span>
                    </a>
                </td>
                <td>
                    <div class="ttb">
                        <a href="{{ route('admin.cate.getEdit') }}" class="fa fa-edit" data-link="1-1">
                            <span class="p">
                                Sửa danh mục
                            </span>
                        </a>
                        <a class="fa fa-trash" data-link="1-1">
                            <span class="p">
                                Xóa danh mục
                            </span>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="even gradeC lv2" align="center" data-link="1-2">
                <td class="cl1">
                    <i class="fa fa-square-o is-ck"></i>
                    <a class="fa fa-angle-double-down is-show">
                        <span class="p">Ẩn danh mục con</span><!--Hiện danh mục con nếu là fa-angle-double-right-->
                    </a>
                </td>
                <td class="lv cl2">Truyện cổ tích</td>
                <td class="cl3">07:07 25/12.2015</td>
                <td class="cl4">
                    <a class="fa fa-caret-up">
                        <span class="p">Di chuyển lên trên</span>
                    </a>
                    <a class="fa fa-caret-down">
                        <span class="p">Di chuyển xuống dưới</span>
                    </a>
                </td>
                <td>
                    <div class="ttb">
                        <a href="{{ route('admin.cate.getEdit') }}" class="fa fa-edit" data-link="1-2">
                            <span class="p">
                                Sửa danh mục
                            </span>
                        </a>
                        <a class="fa fa-trash" data-link="1-2">
                            <span class="p">
                                Xóa danh mục
                            </span>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered table-hover cate_table is-tbl-clone">
        <tbody>
            <tr class="even gradeC lv1" align="center" data-link="2">
                <td class="cl1">
                    <i class="fa fa-square-o is-ck"></i>
                    <a class="fa fa-angle-double-down is-show">
                            <span class="p">Ẩn danh mục con</span><!--Hiện danh mục con nếu là fa-angle-double-right-->
                        </a>
                </td>
                <td class="lv1 cl2 lv">Thường thức</td>
                <td class="cl3">07:07 25/12.2015</td>
                <td class="cl4">
                    <a class="fa fa-caret-up">
                        <span class="p">Di chuyển lên trên</span>
                    </a>
                    <a class="fa fa-caret-down">
                        <span class="p">Di chuyển xuống dưới</span>
                    </a>
                </td>
                <td>
                    <div class="ttb">
                        <a href="{{ route('admin.cate.getEdit') }}" class="fa fa-edit" data-link="2">
                            <span class="p">
                                Sửa danh mục
                            </span>
                        </a>
                        <a class="fa fa-trash" data-link="2">
                            <span class="p">
                                Xóa danh mục
                            </span>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="even gradeC lv2" align="center" data-link="2-1">
                <td class="cl1">
                    <i class="fa fa-square-o is-ck"></i>
                    <a class="fa fa-angle-double-down is-show">
                        <span class="p">Ẩn danh mục con</span><!--Hiện danh mục con nếu là fa-angle-double-right-->
                    </a>
                </td>
                <td class="lv cl2">Dạy nấu ăn</td>
                <td class="cl3">07:07 25/12.2015</td>
                <td class="cl4">
                    <a class="fa fa-caret-up">
                        <span class="p">Di chuyển lên trên</span>
                    </a>
                    <a class="fa fa-caret-down">
                        <span class="p">Di chuyển xuống dưới</span>
                    </a>
                </td>
                <td>
                    <div class="ttb">
                        <a href="{{ route('admin.cate.getEdit') }}" class="fa fa-edit" data-link="2-1">
                            <span class="p">
                                Sửa danh mục
                            </span>
                        </a>
                        <a class="fa fa-trash" data-link="2-1">
                            <span class="p">
                                Xóa danh mục
                            </span>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="even gradeC lv2" align="center" data-link="2-2">
                <td class="cl1">
                    <i class="fa fa-square-o is-ck"></i>
                    <a class="fa fa-angle-double-down is-show">
                        <span class="p">Ẩn danh mục con</span><!--Hiện danh mục con nếu là fa-angle-double-right-->
                    </a>
                </td>
                <td class="lv cl2">kỹ năng sống</td>
                <td class="cl3">07:07 25/12.2015</td>
                <td class="cl4">
                    <a class="fa fa-caret-up">
                        <span class="p">Di chuyển lên trên</span>
                    </a>
                    <a class="fa fa-caret-down">
                        <span class="p">Di chuyển xuống dưới</span>
                    </a>
                </td>
                <td>
                    <div class="ttb">
                        <a href="{{ route('admin.cate.getEdit') }}" class="fa fa-edit" data-link="2-2">
                            <span class="p">
                                Sửa danh mục
                            </span>
                        </a>
                        <a class="fa fa-trash" data-link="2-2">
                            <span class="p">
                                Xóa danh mục
                            </span>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered table-hover cate_table is-tbl-clone">
        <tbody>
            <tr class="even gradeC lv1" align="center" data-link="3">
                <td class="cl1">
                    <i class="fa fa-square-o is-ck"></i>
                    <a class="fa fa-angle-double-down is-show">
                            <span class="p">Ẩn danh mục con</span><!--Hiện danh mục con nếu là fa-angle-double-right-->
                        </a>
                </td>
                <td class="lv1 cl2 lv">a ha</td>
                <td class="cl3">07:07 25/12.2015</td>
                <td class="cl4">
                    <a class="fa fa-caret-up">
                        <span class="p">Di chuyển lên trên</span>
                    </a>
                    <a class="fa fa-caret-down">
                        <span class="p">Di chuyển xuống dưới</span>
                    </a>
                </td>
                <td>
                    <div class="ttb">
                        <a href="{{ route('admin.cate.getEdit') }}" class="fa fa-edit" data-link="3">
                            <span class="p">
                                Sửa danh mục
                            </span>
                        </a>
                        <a class="fa fa-trash" data-link="3">
                            <span class="p">
                                Xóa danh mục
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
    <div class="apply mxClrAft">
        <button>
            Cập nhật thay đổi
        </button>
    </div>
</form>
@stop