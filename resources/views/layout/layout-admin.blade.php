<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Collapsed Sidebar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    @yield('style')
    @yield('content-header')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
            <img src="https://w7.pngwing.com/pngs/548/122/png-transparent-dog-paw-cat-logo-dog-animals-poster-paw-thumbnail.png" alt="Dog lover" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-light">Dog lover Admin</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{($current_page == 'dog-list' || $current_page == 'dog-form' || $current_page == 'dog-edit') ? 'menu-open' : ''}}">
                        <a href="/admin/dogs" class="nav-link">
                            <i class="nav-icon fas fa-dog"></i>
                            <p>
                                Quản lý chó
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview {{($current_page == 'dog-list' || $current_page == 'dog-form') ? 'menu-open' : ''}}">
                            <li class="nav-item">
                                <a href="/admin/dogs" class="nav-link  {{($current_page == 'dog-list') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách chó</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/dogs/create" class="nav-link {{($current_page == 'dog-form') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới chó</p>
                                </a>
                            </li>
                            @if($current_page == 'dog-edit')
                                <li class="nav-item">
                                    <a href="{{Request::url()}}" class="nav-link {{($current_page == 'dog-edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sửa bài viết</p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{($current_page  == 'dogs-categories-list' || $current_page  == 'dogs-categories-form' || $current_page  == 'dogs-categories-edit') ? 'menu-open' : ''}}">
                        <a href="/admin/dogs-categories" class="nav-link">
                            <i class="nav-icon fas fa-stream"></i>
                            <p>
                                Quản lý danh mục chó
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview {{($current_page  == 'dogs-categories-edit' || $current_page == 'dogs-categories-form') ? 'menu-open' : ''}}">
                            <li class="nav-item">
                                <a href="/admin/dogs-categories" class="nav-link {{($current_page  == 'dogs-categories-list') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách danh mục chó</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/dogs-categories/create" class="nav-link  {{($current_page  == 'dogs-categories-form') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới danh mục chó</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{($current_page  == 'account-list' || $current_page  == 'account-form' || $current_page  == 'account-edit') ? 'menu-open' : ''}}">
                        <a href="/admin/accounts" class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>
                                Quản lý account
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview  {{($current_page  == 'account-edit' || $current_page == 'account-form') ? 'menu-open' : ''}}">
                            <li class="nav-item">
                                <a href="/admin/accounts" class="nav-link {{($current_page  == 'account-list') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách account</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/accounts/create" class="nav-link {{($current_page  == 'account-form') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới account</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{($current_page  == 'article-list' || $current_page  == 'article-form' || $current_page == 'article-edit') ? 'menu-open' : ''}}">
                        <a href="/admin/articles" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Quản lý bài viết
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview {{($current_page  == 'article-edit' || $current_page  == 'article-form') ? 'menu-open' : ''}}">
                            <li class="nav-item">
                                <a href="/admin/articles" class="nav-link {{($current_page  == 'article-list') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách bài viết</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/articles/create" class="nav-link {{($current_page  == 'article-form') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới bài viết</p>
                                </a>
                            </li>
                            @if($current_page == 'article-edit')
                                <li class="nav-item">
                                    <a href="{{Request::url()}}" class="nav-link {{($current_page  == 'article-edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sửa bài viết</p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item has-treeview  {{($current_page == 'article-categories-list' || $current_page == 'article-categories-form' || $current_page == 'categories-edit') ? 'menu-open' : ''}}">
                        <a href="/admin/article-categories" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Quản lý danh mục bài viết
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview {{($current_page == 'article-categories-list' || $current_page == 'article-categories-form') ? 'menu-open' : ''}}">
                            <li class="nav-item">
                                <a href="/admin/article-categories" class="nav-link {{($current_page == 'article-categories-list') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ds danh mục bài viết</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/article-categories/create" class="nav-link  {{($current_page == 'article-categories-form') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm danh mục bài viết</p>
                                </a>
                            </li>
                            @if($current_page == 'article-categories-edit')
                                <li class="nav-item">
                                    <a href="{{Request::url()}}" class="nav-link {{($current_page == 'article-categories-edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sửa bài viết</p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                @yield('main-content')
            </div><!-- /.container-fluid -->
        </section>

    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0-pre
        </div>
        <strong>Copyright © 2020-2021,Nhóm 1- TT1908M <a href="https://aptech.fpt.edu.vn/">Trường FPT APTECH</a>.</strong>  Tôn Thất Thuyết -Mỹ Đình- Hà Nội.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
@yield('script')

</body>
</html>
