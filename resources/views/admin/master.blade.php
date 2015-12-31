<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Leo Book</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('public/admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ url('public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!!asset('')!!}public/style/css/font.css">
    <link rel="stylesheet" type="text/css" href="{!!asset('')!!}public/style/css/reset.css">
    <link rel="stylesheet" type="text/css" href="{!!asset('')!!}public/style/css/jquery.selectbox.css">
    <link rel="stylesheet" type="text/css" href="{!! asset('public/style/css/jquery.jscrollpane.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('')!!}public/style/css/admin.css">
</head>

<body>
    <div class="popup">
        <div class="bg_pop"></div>
        <div class="pop">
            <div class="header_pop">
                Thông báo
                <div class="fa fa-close"></div>
            </div>
            <div class="body_pop">
                Bạn muốn xóa danh mục $Tên?
                <!--Bạn muốn thêm danh mục $Tên?
                Cập nhật danh mục $Tên?-->
            </div>
            <div class="ctrl mxClrAft">
                <button class="cancel" action="kệ pa nó">
                    Hủy
                </button>
                <button class="update" action="Thêm xóa sửa j đó">
                    Đồng ý
                </button>
            </div>
        </div>
    </div>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{!!asset('')!!}public/style/images/theme/logo-gray.png" alt="Leobook.com">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Cài đặt</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ route('admin.index') }}">
                              Tổng quan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.oder') }}">Đơn hàng</a>
                        </li>
                        <li>
                            <a href="#">Danh mục<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.cate.getList') }}"> Quản lý danh mục</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.cate.getAdd') }}">Thêm danh mục</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"> Tác giả<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.author.getList') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.author.getAdd') }}">Thêm tác giả</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">Sách<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.book.getList') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.book.getAdd') }}">Thêm sách mới</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">Nhà sản xuất<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.publisher.getList') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.publisher.getAdd') }}">Thêm nhà sản xuất</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">Nhà xuất bản<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.issuer.getList') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.issuer.getAdd') }}">Thêm nhà xuất bản</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.user.getList') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.user.getAdd') }}">Thêm User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
          <div class="container-fluid">
              <div class="row">
                  
                  <!-- /.col-lg-12 -->
                  @yield('content')
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </div>
        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ url('public/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ url('public/admin/dist/js/sb-admin-2.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ url('public/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
  <script type='text/javascript' src='{!!asset('')!!}public/style/js/jquery.selectbox-0.2.js'></script>
  <script src="{{ url('public/style/js/jquery.jscrollpane.js') }}"></script>
    <script src="{{ url('public/style/js/admin.js') }}"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
