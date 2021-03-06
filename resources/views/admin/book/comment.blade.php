@extends('admin.master')
@section('content')
<form action="" method="post" accept-charset="utf-8" class="book">
{{csrf_field()}}
    <div class="col-lg-12">
        <h1 class="page-header">
            Quản lý lời bình //CHƯA XONG
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
    <table class="table table-bordered table-hover cmt_table">
        <thead>
            <tr align="center">
                <th class="f cl1">
                    <i class="fa fa-square-o is-ck-all"></i>
                </th>
                <th class="is-sort cl2">
                    <div class="tt" align="center">
                        Tên sách
                    </div>
                </th>
                <th class="is-sort cl3">
                    <div class="tt"  align="center">
                        Đánh giá 
                    </div>
                </th>
                <th class="cl4">
                    <div class="tt" align="center">
                        Người đăng
                    </div>
                </th>
                <th class="cl5 is-sort">
                    <div class="tt">
                        Thời gian
                    </div>
                </th>
                <th class="sb cl6">
                    <div class="tt" align="center">
                        Trạng thái
                    </div>
                    <select name="" id="" class="is-sl">
                        <option value="">Ẩn lời bình</option>
                        <option value="">Hiển thị lời bình</option>
                        <option value="">Xóa lời bình</option>
                    </select>
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
                        Các Tuyệt Chiêu Microsoft Word 2010 Bằng Hình Minh Họa (Kèm CD)
                    </div>
                </td>
                <td class="cl3">
                    <div class="rtbar">
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star-o"></div>
                        <div class="fa fa-star-o"></div>
                    </div>
                </td>
                <td class="cl4">
                    <div class="t">
                        Nghiêng nghiêng nghiêng nghiêng
                    </div>
                </td>
                <td class="cl5">
                    <div class="t">
                        12:45:41 19/03/2015
                    </div>
                </td>
                <td class="cl6">
                    <div class="fa fa-eye">
                        <div class="p">
                            Chọn để ẩn lời bình
                        </div>
                    </div>
                    <div class="fa fa-trash">
                        <div class="p">
                            Xóa lời bình
                        </div>
                    </div>
                    <div class="fa fa-book">
                        <div class="p">
                            Xem sách
                        </div>
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