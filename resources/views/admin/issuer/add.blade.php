@extends('admin.master')
@section('content')

<div class="col-lg-12">
    <h1 class="page-header">
        Thêm nhà xuất bản
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
<form action="{!! route('admin.book.getAdd') !!}" method="POST" class="wrap iss">
    {{csrf_field()}}
    <div class="fgr">
        <div class="l">
            Tên nhà xuất bản
        </div>
        <input type="text" class="ip" placeholder="Nhập tên nhà xuất bản (Tên đầy đủ)" name="txtName">
    </div>
    <div class="fgr">
        <div class="l">
            Tên nnhà xuất bản
        </div>
        <input type="text" class="ip" placeholder="Nhập tên nhà xuất bản (Tên thường gọi)" name="txtName">
    </div>
    <div class="fgr">
        <div class="l">
            Logo
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
            Trụ sở chính
        </div>
        <input type="text" placeholder="Nhập địa chỉ" class="ip">
    </div>
    <div class="fgr">
        <div class="l">
            Số điện thoại liên hệ
        </div>
        <input type="text" placeholder="Nhập số điện thoại" class="ip">
    </div>
    <div class="fgr">
        <div class="l">
            Fax
        </div>
        <input type="text" placeholder="Nhập số Fax" class="ip">
    </div>
    <div class="fgr">
        <div class="l">
            Email liên hệ
        </div>
        <input type="text" placeholder="Nhập email" class="ip">
    </div>
    <div class="fgr">
        <div class="l">
            Website chính thức
        </div>
        <input type="text" placeholder="Nhập địa chỉ website" class="ip">
    </div>
    <div class="ctrlp">
        <button class="apply">
            Thêm nhà xuất bản
        </button>
        <button class="cancel">
            Hủy
        </button>
    </div>
</form>
@stop