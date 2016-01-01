@extends('admin.master')
@section('content')

<div class="col-lg-12">
    <h1 class="page-header">Danh mục
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
    <form action="{!! route('admin.cate.getAdd') !!}" method="POST" class="wrap">
    {{csrf_field()}}
        <div class="fgr">
            <div class="l">
                Thư mục cha
            </div>
            <select name="" id="" class="is-sl">
                <option value="">Thư mục gốc</option>
                <option value="">Sách văn học</option>
                <option value="">Sách kinh tế</option>
            </select>
        </div>
        <div class="fgr">
            <div class="l">
                Tên danh mục
            </div>
            <input type="text" name="txtCateName" placeholder="Nhập tên danh mục" class="ip">
        </div>
        <div class="ctrlp">
            <button class="apply">
                Thêm Danh mục
            </button>
            <button class="cancel">
                Hủy
            </button>
        </div>
    </form>
@stop