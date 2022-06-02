<?php
    $protocol = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on'))?'https://':'http://';
    if ($protocol != 'http://'){
        $public = '/public';
    }
    else {
        $public = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        window.alert = function() {
            debugger;
        }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ-панель - Целевик - @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/summernote/summernote-bs4.min.css">
    <link href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/css/colorbox.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://novsu.ru/local/templates/novsu-ru/images/favicon.ico">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="https://pk.novsu.ru/temp_lib/img/logo.png" alt="AdminLTELogosad" height="60" width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home_admin') }}" class="brand-link">
            <img src="https://pk.novsu.ru/temp_lib/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin-Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1256/1256220.png?w=826" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a class="d-block">{{ Auth::user()->name }}</a>
                        <a class=" text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('home_admin') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Главная
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Таблица "Организации"
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('organiz.index') }}" class="nav-link">
                                    <p>Все организации</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('organiz.create') }}" class="nav-link">
                                    <p>Добавить организацию</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Таблица "Должности"
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('jobs.index') }}" class="nav-link">
                                    <p>Все должности</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('jobs.create') }}" class="nav-link">
                                    <p>Добавить должность</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Таблица "Направления"
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('direct.index') }}" class="nav-link">
                                    <p>Все направления</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('direct.create') }}" class="nav-link">
                                    <p>Добавить направление</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('app.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Таблицы "Заявки абитуриентов"
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('appOrg.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Таблицы "Заявки организаций"
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('head')</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; {{ date('Y') }} <a href="https://celevoe.novsu.ru" target="_blank">celevoe.novsu.ru</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/moment/moment.min.js"></script>
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/js/pages/dashboard.js"></script>
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/admin.js"></script>
<script type="text/javascript" src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>

</body>
</html>
