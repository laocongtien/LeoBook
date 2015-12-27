@extends('admin.master')
@section('Category','Danh mục')
@section('action', 'Danh sách')
@section('content')

<div class="col-lg-12">
    <h1 class="page-header">Danh mục
        <small>Thêm mới</small>
    </h1>
</div>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr align="center">
        <th>ID</th>
        <th>Name</th>
        <th>Category Parent</th>
        <th>Status</th>
        <th>Delete</th>
        <th>Edit</th>
        <th>Edit</th>
    </tr>
</thead>
<tbody>
    <tr class="odd gradeX" align="center">
        <td>1</td>
        <td>Tin Tức</td>
        <td>None</td>
        <td>Hiện</td>
        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
    </tr>
    <tr class="even gradeC" align="center">
        <td>2</td>
        <td>Bóng Đá</td>
        <td>Thể Thao</td>
        <td>Ẩn</td>
        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
    </tr>
</tbody>
</table>
@stop