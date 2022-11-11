<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>เว็บไซต์อภิสราการพิมพ์</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/images/favicon.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('backend/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

</head>

<body>
    @include('sweetalert::alert')


    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{ route('home') }}">
                    <span class="text-white">
                        อภิสราการพิมพ์
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{ asset('backend/images/user/1.png') }}" height="40" width="40"
                                    alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>

                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"><i
                                                    class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" >
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a  href="{{ route('home') }}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        
                    </li>
                    <li>
                        <a  href="{{ route('pro.index') }}" aria-expanded="false">
                            <i class="icon-basket menu-icon"></i><span class="nav-text">Product</span>
                        </a>   
                    </li>
                    <li>
                        <a  href="{{ route('calendar.index') }}" aria-expanded="false">
                            <i class="fa-regular fa-calendar"></i><span class="nav-text">Calendar</span>
                        </a>   
                    </li>
                    <li>
                        <a  href="{{ route('employee.index') }}" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Employee</span>
                        </a>   
                    </li>
                    <li>
                        <a  href="{{ route('working.index') }}" aria-expanded="false">
                            <i class="fa-regular fa-file-word"></i><span class="nav-text">Workings</span>
                        </a>   
                    </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    @yield('content')
                </div>
                <!-- #/ container -->
            </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a
                            href="https://themeforest.net/user/quixlab">Quixlab</a>
                        2018</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <script src="{{ asset('backend/plugins/common/common.min.js') }}"></script>
        <script src="{{ asset('backend/js/custom.min.js') }}"></script>
        <script src="{{ asset('backend/js/settings.js') }}"></script>
        <script src="{{ asset('backend/js/gleek.js') }}"></script>
        <script src="{{ asset('backend/js/styleSwitcher.js') }}"></script>

        <!-- Chartjs -->
        <script src="{{ asset('backend/plugins/chart.js/Chart.bundle.min.js') }}"></script>
        <!-- Circle progress -->
        <script src="{{ asset('backend/plugins/circle-progress/circle-progress.min.js') }}"></script>
        <!-- Datamap -->
        <script src="{{ asset('backend/plugins/d3v3/index.js') }}"></script>
        <script src="{{ asset('backend/plugins/topojson/topojson.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datamaps/datamaps.world.min.js') }}"></script>
        <!-- Morrisjs -->
        <script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/morris/morris.min.js') }}"></script>
        <!-- Pignose Calender -->
        <script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
        <!-- ChartistJS -->
        <script src="{{ asset('backend/plugins/chartist/js/chartist.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>



        <script src="{{ asset('backend/js/dashboard/dashboard-1.js') }}"></script>

</body>

</html>
