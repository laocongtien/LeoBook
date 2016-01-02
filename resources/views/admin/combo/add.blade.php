@extends('admin.master')
@section('content')

<div class="col-lg-12">
    <h1 class="page-header">
        Thêm Combo
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
<form action="{!! route('admin.combo.getAdd') !!}" method="POST" class="wrap">
    {{csrf_field()}}
    <div class="fgr">
        <div class="l">
            Tên Combo
        </div>
        <input type="text" class="ip" placeholder="Nhập tên sách" name="txtName">
    </div>
    <div class="fgr">
        <div class="l">
            Ảnh đại diện
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
            Số lượng
        </div>
        <input type="text" class="ip" placeholder="Nhập số lượng combo">
    </div>
    <div class="fgr">
        <div class="lb">
            <span class="fa fa-plus-circle"></span>
            <div class="bta">Thêm sách</div>
            <div class="bta">Thêm khác</div>
        </div>
    </div>
    <div class="item"><!--Thêm sách-->
        <div class="ttl">
            #item1
        </div>
        <div class="fgr">
            <div class="l">
                Thêm Sách
            </div>
            <input type="text" class="ip" placeholder="Nhập link sách" onchange="addcombo()">
        </div>
    </div>
    <div class="item"><!--Thêm khác-->
        <div class="ttl">
            #item2
        </div>
        <div class="fgr">
            <div class="l">
                Thêm khác
            </div>
            <input type="text" class="ip" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="fgr">
            <div class="l">
                Ảnh sản phẩm
            </div>
            <input type="text" class="ip" value="Thay cái này = box nhập ảnh">
        </div>
        <div class="fgr">
            <div class="l">
                Thông tin sản phẩm
            </div>
            <textarea name="" id="" cols="30" rows="10" class="itr"></textarea>
        </div>
    </div>
    <div class="ctrlp mxClrAft">
        <button class="apply">
            Thêm combo
        </button>
        <button class="cancel">
            Hủy
        </button>
    </div>
</form>
@stop