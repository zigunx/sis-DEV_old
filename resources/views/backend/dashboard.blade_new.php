<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>Dashboard111</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/fonts/style.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/main-responsive.css') }}">
        <link rel="stylesheet" href="{{asset('assets/plugins/iCheck/skins/all.css') }}">
        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') }}">
        <link rel="stylesheet" href="{{asset('assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/theme_light.css') }}" type="text/css" id="skin_color">
        <link rel="stylesheet" href="{{asset('assets/css/print.css') }}" type="text/css" media="print"/>
        <!--[if IE 7]>
        <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome-ie7.min.css') }}">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.css') }}">
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body>
        <!-- start: HEADER -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <!-- start: TOP NAVIGATION CONTAINER -->
            <div class="container">
                <div class="navbar-header">
                    <!-- start: RESPONSIVE MENU TOGGLER -->
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="clip-list-2"></span>
                    </button>
                    <!-- end: RESPONSIVE MENU TOGGLER -->
                    <!-- start: LOGO -->
                    <a class="navbar-brand" href="/">
                        Siap LF 
                    </a>
                    <!-- end: LOGO -->
                </div>
                <div class="navbar-tools">
                    <!-- start: TOP NAVIGATION MENU -->
                    <ul class="nav navbar-right">

                        <!-- start: USER DROPDOWN -->
                        <li class="dropdown current-user">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                               Selamat Datang!
                                <span class="username">{{ Auth::user() ->nama_pegawai }};</span>
                                <i class="clip-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <i class="clip-user-2"></i>
                                        &nbsp;My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="pages_calendar.html">
                                        <i class="clip-calendar"></i>
                                        &nbsp;My Calendar
                                    </a>
                                <li>
                                    <a href="pages_messages.html">
                                        <i class="clip-bubble-4"></i>
                                        &nbsp;My Messages (3)
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="utility_lock_screen.html"><i class="clip-locked"></i>
                                        &nbsp;Lock Screen </a>
                                </li>
                                <li>
                                    <a href="auth/logout">
                                        <i class="clip-exit"></i>
                                        &nbsp;Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: USER DROPDOWN -->

                    </ul>
                    <!-- end: TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- end: TOP NAVIGATION CONTAINER -->
        </div>
        <!-- end: HEADER -->
        <!-- start: MAIN CONTAINER -->
        <div class="main-container">
            <div class="navbar-content">
                <!-- start: SIDEBAR -->
                <div class="main-navigation navbar-collapse collapse">
                    <!-- start: MAIN MENU TOGGLER BUTTON -->
                    <div class="navigation-toggler">
                        <i class="clip-chevron-left"></i>
                        <i class="clip-chevron-right"></i>
                    </div>
                    <!-- end: MAIN MENU TOGGLER BUTTON -->
                    <!-- start: MAIN NAVIGATION MENU -->
                    <ul class="main-navigation-menu">
                        <li class="active open">
                            <a href="index.html"><i class="clip-home-3"></i>
                                <span class="title"> Dashboard </span><span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-screen"></i>
                                <span class="title"> Layouts </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="layouts_horizontal_menu1.html">
                                        <span class="title"> Horizontal Menu </span>
                                        <span class="badge badge-new">new</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layouts_sidebar_closed.html">
                                        <span class="title"> Sidebar Closed </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layouts_boxed_layout.html">
                                        <span class="title"> Boxed Layout </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layouts_footer_fixed.html">
                                        <span class="title"> Footer Fixed </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../clip-one-rtl/index.html">
                                        <span class="title"> RTL Version </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../../frontend/clip-one/index.html" target="_blank"><i class="clip-cursor"></i>
                                <span class="title"> Frontend Theme </span><span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-cog-2"></i>
                                <span class="title"> UI Lab </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="ui_elements.html">
                                        <span class="title"> Elements </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_buttons.html">
                                        <span class="title"> Buttons &amp; icons </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_animations.html">
                                        <span class="title"> CSS3 Animation </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_modals.html">
                                        <span class="title"> Extended Modals </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_tabs_accordions.html">
                                        <span class="title"> Tabs &amp; Accordions </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_sliders.html">
                                        <span class="title"> Sliders </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_treeview.html">
                                        <span class="title"> Treeview </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_nestable.html">
                                        <span class="title"> Nestable List </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_typography.html">
                                        <span class="title"> Typography </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-grid-6"></i>
                                <span class="title"> Tables </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="table_static.html">
                                        <span class="title">Static Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table_responsive.html">
                                        <span class="title">Responsive Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table_data.html">
                                        <span class="title">Data Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table_export.html">
                                        <span class="title">Table Export</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-pencil"></i>
                                <span class="title"> Forms </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form_elements.html">
                                        <span class="title">Form Elements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_wizard.html">
                                        <span class="title">Form Wizard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_validation.html">
                                        <span class="title">Form Validation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_inline.html">
                                        <span class="title">Inline Editor</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_x_editable.html">
                                        <span class="title">Form X-editable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_image_cropping.html">
                                        <span class="title">Image Cropping</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_multiple_upload.html">
                                        <span class="title">Multiple File Upload</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_dropzone.html">
                                        <span class="title">Dropzone File Upload</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-user-2"></i>
                                <span class="title">Login</span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="login_example1.html">
                                        <span class="title">Login Form Example 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login_example2.html">
                                        <span class="title">Login Form Example 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- end: MAIN NAVIGATION MENU -->
                </div>
                <!-- end: SIDEBAR -->
            </div>
            <!-- start: PAGE -->
            <div class="main-content">
                <!-- start: PANEL CONFIGURATION MODAL FORM -->
                <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title">Panel Configuration</h4>
                            </div>
                            <div class="modal-body">
                                Here will be a configuration form
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Save changes
                                </button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- end: SPANEL CONFIGURATION MODAL FORM -->
                <div class="container">
                    <!-- start: PAGE HEADER -->
                    <div class="row">
                        <div class="col-sm-12">
                           
                            <!-- start: PAGE TITLE & BREADCRUMB -->
                            <ol class="breadcrumb">
                                <li>
                                    <i class="clip-home-3"></i>
                                    <a href="#">
                                        Home
                                    </a>
                                </li>
                                <li class="active">
                                    Dashboard
                                </li>
                                <li class="search-box">
                                    <form class="sidebar-search">
                                        <div class="form-group">
                                            <input type="text" placeholder="Start Searching...">
                                            <button class="submit">
                                                <i class="clip-search-3"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                            </ol>
                            <div class="page-header">
                                <h1>Dashboard <small>overview &amp; stats </small></h1>
                            </div>
                            <!-- end: PAGE TITLE & BREADCRUMB -->
                        </div>
                    </div>
                    <!-- end: PAGE HEADER -->
                    <!-- start: PAGE CONTENT -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="core-box">
                                <div class="heading">
                                    <i class="clip-user-4 circle-icon circle-green"></i>
                                    <h2>Input Data</h2>
                                </div>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </div>
                                <a class="view-more" href="{{route('admin.datastatis.index')}}">
                                    View More <i class="clip-arrow-right-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="core-box">
                                <div class="heading">
                                    <i class="clip-clip circle-icon circle-teal"></i>
                                    <h2>Rekap Data</h2>
                                </div>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </div>
                                <a class="view-more" href="#">
                                    View More <i class="clip-arrow-right-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="core-box">
                                <div class="heading">
                                    <i class="clip-database circle-icon circle-bricky"></i>
                                    <h2>Laporan</h2>
                                </div>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </div>
                                <a class="view-more" href="#">
                                    View More <i class="clip-arrow-right-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="clip-stats"></i>
                                    Site Visits
                                    <div class="panel-tools">
                                        <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                        </a>
                                        <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <a class="btn btn-xs btn-link panel-refresh" href="#">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                        <a class="btn btn-xs btn-link panel-close" href="#">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="flot-medium-container">
                                        <div id="placeholder-h1" class="flot-placeholder"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <i class="clip-pie"></i>
                                            Acquisition
                                            <div class="panel-tools">
                                                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                                </a>
                                                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                <a class="btn btn-xs btn-link panel-refresh" href="#">
                                                    <i class="fa fa-refresh"></i>
                                                </a>
                                                <a class="btn btn-xs btn-link panel-close" href="#">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="flot-mini-container">
                                                <div id="placeholder-h2" class="flot-placeholder"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <i class="clip-bars"></i>
                                            Pageviews real-time
                                            <div class="panel-tools">
                                                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                                </a>
                                                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                <a class="btn btn-xs btn-link panel-refresh" href="#">
                                                    <i class="fa fa-refresh"></i>
                                                </a>
                                                <a class="btn btn-xs btn-link panel-close" href="#">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="flot-mini-container">
                                                <div id="placeholder-h3" class="flot-placeholder"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="row space12">
                                <ul class="mini-stats col-sm-12">
                                    <li class="col-sm-4">
                                        <div class="sparkline_bar_good">
                                            <span>3,5,9,8,13,11,14</span>+10%
                                        </div>
                                        <div class="values">
                                            <strong>18304</strong>
                                            Visits
                                        </div>
                                    </li>
                                    <li class="col-sm-4">
                                        <div class="sparkline_bar_neutral">
                                            <span>20,15,18,14,10,12,15,20</span>0%
                                        </div>
                                        <div class="values">
                                            <strong>3833</strong>
                                            Unique Visitors
                                        </div>
                                    </li>
                                    <li class="col-sm-4">
                                        <div class="sparkline_bar_bad">
                                            <span>4,6,10,8,12,21,11</span>+50%
                                        </div>
                                        <div class="values">
                                            <strong>18304</strong>
                                            Pageviews
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="row space12">
                                <div class="col-sm-6">
                                    <div class="easy-pie-chart">
                                        <span class="bounce number" data-percent="44"> <span class="percent">44</span> </span>
                                        <div class="label-chart">
                                            Bounce Rate
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="easy-pie-chart">
                                        <span class="cpu number" data-percent="82"> <span class="percent">82</span> </span>
                                        <div class="label-chart">
                                            New Visits
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>
            <!-- end: PAGE -->
        </div>
        <!-- end: MAIN CONTAINER -->
        <!-- start: FOOTER -->
        <div class="footer clearfix">
            <div class="footer-inner">
                2014 &copy; clip-one by cliptheme.
            </div>
            <div class="footer-items">
                <span class="go-top"><i class="clip-chevron-up"></i></span>
            </div>
        </div>
        <!-- end: FOOTER -->
     

        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="{{asset('assets/plugins/respond.min.js') }}"></script>
        <script src="{{asset('assets/plugins/excanvas.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/plugins/jQuery-lib/1.10.2/jquery.min.js') }}"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="{{asset('assets/plugins/jQuery-lib/2.0.3/jquery.min.js') }}"></script>
        <!--<![endif]-->
        <script src="{{asset('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
        <script src="{{asset('assets/plugins/blockUI/jquery.blockUI.js') }}"></script>
        <script src="{{asset('assets/plugins/iCheck/jquery.icheck.min.js') }}"></script>
        <script src="{{asset('assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') }}"></script>
        <script src="{{asset('assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') }}"></script>
        <script src="{{asset('assets/plugins/less/less-1.5.0.min.js') }}"></script>
        <script src="{{asset('assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
        <script src="{{asset('assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') }}"></script>
        <script src="{{asset('assets/js/main.js') }}"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="{{asset('assets/plugins/flot/jquery.flot.js') }}"></script>
        <script src="{{asset('assets/plugins/flot/jquery.flot.pie.js') }}"></script>
        <script src="{{asset('assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{asset('assets/plugins/jquery.sparkline/jquery.sparkline.js') }}"></script>
        <script src="{{asset('assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
        <script src="{{asset('assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
        <script src="{{asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
        <script src="{{asset('assets/js/index.js') }}"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                Main.init();
                Index.init();
            });
        </script>
    </body>
    <!-- end: BODY -->
</html>