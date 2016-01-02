@extends('admin.master')
@section('content')

<div class="col-lg-12">
    <h1 class="page-header">
        Thêm sách
    </h1>
</div>
<div class="clear"></div>
 @if(count($errors) > 0)
    <div class="er wrap">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{!! route('admin.book.getAdd') !!}" method="POST" class="wrap book edit">
    {{csrf_field()}}
    <div class="fgr">
        <div class="l">
            Tên sách
        </div>
        <input type="text" class="ip" placeholder="Nhập tên sách" name="txtName">
    </div>
    <div class="fgr">
        <div class="l">
            Danh mục
        </div>
        <select name="" id="" class="is-sl">
            <option value="">
                Chọn thư mục
            </option>
            <option value="">List danh mục cấp 1</option>
        </select>
    </div>
    <div class="fgr">
        <div class="l">
            Thể loại
        </div>
        <select name="" id="" class="is-sl">
            <option value="">
                Chọn thể loại
            </option>
            <option value="">
                List danh mục cấp 2 của #danh mục cấp 1
            </option>
        </select>
    </div>
    <div class="fgr">
        <div class="l">
            Tác giả:
        </div>
        <div class="ipb mxClrAft">
            <input list="auth" class="aip is-add-ath" placeholder="Nhập tác giả" onchange="ipath()" />
            <datalist id="auth" class="is-list">
                <option value="Ngô Bảo Châu"></option>
                <option value="Trần Minh Minh"></option>
                <option value="Vương Tuấn Khải"></option>
                <option value="Andy"></option>
            </datalist>
        </div>
    </div>
    <div class="fgr">
        <div class="l">
            Nhà xuất bản
        </div>
        <input list="nxb" class="ip" placeholder="Nhập nhà xuất bản"/>
        <datalist id="nxb" class="is-list">
            <option value="Ngô Bảo Châu"></option>
            <option value="Trần Minh Minh"></option>
            <option value="Vương Tuấn Khải"></option>
            <option value="Andy"></option>
        </datalist>
    </div>
    <div class="fgr">
        <div class="l">
            Nhà sản xuất
        </div>
        <input list="issues" class="ip" placeholder="Nhập nhà sản xuất"/>
        <datalist id="issues" class="is-list">
            <option value="Ngô Bảo Châu"></option>
            <option value="Trần Minh Minh"></option>
            <option value="Vương Tuấn Khải"></option>
            <option value="Andy"></option>
        </datalist>
    </div>
    <div class="ss3">
        <div class="fgr sp3" name="txtPrice">
            <div class="l">
                Giá:
            </div>
            <input class="ip" type="text" placeholder="Nhập giá tiền">
        </div>
        <div class="fgr sp3">
            <div class="l">
                Số lượng
            </div>
            <input type="text" type="number" placeholder="Nhập số lượng sách" class="ip">
        </div>
        <div class="fgr sp3">
            <div class="l">
                Ngày xuất bản
            </div>
            <input type="text" class="ip" placeholder="mm/dd/yyyy">
        </div>
        <div class="clear"></div>
    </div>
    <div class="ss4 mxClrAft">
        <div class="fgr">
            <div class="l">
                Kiểu bìa
            </div>
            <input type="text" class="ip" placeholder="Kiểu bìa">
        </div>
        <div class="fgr lt">
            <div class="l">
                Số trang
            </div>
            <input type="text" class="ip" placeholder="Số trang">
        </div>
        <div class="fgr la">
            <div class="l">
                Khổ sách
            </div>
            <div class="p mxClrAft">
                <input type="text" class="s">
                x
                <input type="text" class="s">
            </div>
        </div>
        <div class="fgr">
            <div class="l">
                Ngôn ngữ
            </div>
            <input type="text" class="ip" placeholder="Nhập ngôn ngữ">
        </div>
    </div>
    <div class="fgr">
        <div class="l">
            Bìa sách
        </div>
        <div class="ch mxClrAft">
            <div class="up">
                <div class="bt">Chọn ảnh từ máy tính</div>
                <input type="text" class="ipch">
            </div>
            <div class="up">
                <div class="bt">Nhập link ảnh</div>
                <input type="text" class="ipch">
            </div>
        </div>
    </div>
    <div class="fgr">
        <div class="l">
            Giới thiệu sách
        </div>
        <textarea name="txtContent" class="itr"></textarea>
    </div>
    <div class="ctrlp">
        <button class="apply">
            Thêm Sách
        </button>
        <button class="cancel">
            Hủy
        </button>
    </div>
</form>
@stop