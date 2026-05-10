<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Kiddy Campus | Admin Panel | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Md Ismail Hossain, Email: Ismailhossain600@gmail.com" name="author" />
    <link rel="shortcut icon" href="{{asset('assets')}}/images/icon.png">

    <link href="{{asset('/')}}assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/css/bootstrap.min.css"  rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/css/app.min.css"  rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">
<div id="layout-wrapper">
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{route('dashboard')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets')}}/images/icon.png" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('assets')}}/images/icon.png" alt="" height="17">
                                </span>
                    </a>

                    <a href="{{route('dashboard')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets')}}/images/icon.png" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('assets')}}/images/icon.png" alt="" height="70">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ Auth::user()->profile_photo_url }}"
                             alt="{{ Auth::user()->name }}">
                        <span class="d-none d-xl-inline-block ml-1">{{ Auth::user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="{{route('profile.show')}}"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="dropdown-item text-danger">
                            <i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                            <span>{{ __('Log Out') }}</span>
                        </a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>                    </div>
                </div>
            </div>
        </div>
    </header> <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <div id="sidebar-menu">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>
                    <li>
                        <a href="{{route('dashboard')}}" class="waves-effect"><i class="bx bx-home-circle"></i><span>Home / Dashboard</span></a>
                    </li>

                    <!-- <li>
                        <a href="">
                            <i class="bx bx-user"></i>
                            <span>User Request </span><span class="badge badge-pill badge-info float-right"></span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <i class="bx bx-briefcase-alt-2"></i>
                            <span class="badge badge-pill badge-primary float-right">210</span>
                            <span>Coupon Request</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="bx bx-receipt"></i>
                            <span>Orders</span>
                            <span class="badge badge-pill badge-success float-right">32</span>
                        </a>
                    </li> -->

                    <!-- <li class="menu-title">Apps</li> -->

                    <!--  <li><a href="" class=" waves-effect">
                            <i class="bx bx-user-voice"></i>
                            <span>Distributor</span>
                        </a>
                    </li>

                    <li><a href="" class=" waves-effect">
                            <i class="bx bxs-notification"></i>
                            <span>Push Notification</span>
                        </a>
                    </li>

                    <li><a href="" class=" waves-effect">
                            <i class="bx bx-carousel"></i>
                            <span>Carousel</span>
                        </a>
                    </li> -->

                    <li><a href="{{route('category')}}" class=" waves-effect">
                            <i class="bx bx-calendar"></i>
                            <span>Category</span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="" class=" waves-effect">
                            <i class="bx bx-chat"></i>
                            <span>Sub-Category</span>
                        </a>
                    </li> -->

                    <li>
                        <a href="{{route('brand')}}">
                            <i class="bx bx-store"></i>
                            <span>Brand</span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="">
                            <i class="bx bx-bitcoin"></i>
                            <span>Unit</span>
                        </a>
                    </li> -->

                    <li>
                        <a href="">
                            <i class="bx bxl-product-hunt"></i>
                            <span>Products</span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="javascript: void(0);">
                            <i class="bx bx-briefcase-alt-2"></i>
                            <span>Promotions</span>
                        </a>
                    </li> -->

                    <li>
                        <a href="">
                            <i class="bx bxs-user-detail"></i>
                            <span>Customers</span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span>Reports</span>
                        </a>
                    </li> -->
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>


    <div class="main-content">
        <div class="page-content">
            @yield('body')
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Agrani Group
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Developed by Rahat Khan
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>


<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('/')}}assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}assets/libs/node-waves/waves.min.js"></script>
<script src="{{asset('/')}}assets/libs/select2/js/select2.min.js"></script>


<!-- Required datatable js -->
<script src="{{asset('/')}}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Buttons examples -->
<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/')}}assets/libs/jszip/jszip.min.js"></script>
<script src="{{asset('/')}}assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{asset('/')}}assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="{{asset('/')}}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/')}}/js/pages/datatables.init.js"></script>
<script src="{{asset('/')}}assets/libs/apexcharts/apexcharts.min.js"></script>
<!-- Datatable init js -->
<script src="{{asset('/')}}assets/js/pages/dashboard.init.js"></script>
<script src="{{asset('/')}}assets/js/pages/dashboards.init.js"></script>
<script src="{{asset('/')}}assets/js/pages/datatables.init.js"></script>
<script src="{{asset('/')}}assets/js/app.js"></script>
<script src="{{asset('/')}}assets/js/pages/form-advanced.init.js"></script>
<script src="{{asset('/')}}assets/libs/summernote/summernote-bs4.min.js"></script>
<script src="{{asset('/')}}assets/js/pages/form-editor.init.js"></script>
</body>
</html>
