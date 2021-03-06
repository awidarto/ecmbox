<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>{{ Config::get('ecm.site_name') }}</title>

    <!--Core CSS -->
    <link href="{{ URL::to('bucket') }}/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::to('bucket') }}/css/bootstrap-reset.css" rel="stylesheet">
    <link href="{{ URL::to('bucket') }}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ URL::to('bucket') }}/css/style.css" rel="stylesheet">
    <link href="{{ URL::to('bucket') }}/css/style-responsive.css" rel="stylesheet" />

    <link href="{{ URL::to('bucket') }}/css/clndr.css" rel="stylesheet">

    <!--clock css-->
    <link href="{{ URL::to('bucket') }}/assets/css3clock/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    {{ HTML::style('css/dataTables.bootstrap.css') }}

    {{ HTML::style('css/bootstrap-timepicker.css') }}

    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="{{ URL::to('bucket') }}/assets/file-uploader/css/jquery.fileupload.css">
    <link rel="stylesheet" href="{{ URL::to('bucket') }}/assets/file-uploader/css/jquery.fileupload-ui.css">


    {{-- HTML::style('css/bootstrap-modal-bs3patch.css') --}}

    {{ HTML::style('css/bootstrap-modal.css') }}

    {{ HTML::style('css/sm-datepicker/bootstrap-datetimepicker.min.css') }}

    {{-- HTML::style('css/flick/jquery-ui-1.9.2.custom.min.css') --}}

    {{ HTML::style('css/daterangepicker-bs2.css') }}

    {{ HTML::style('css/blueimp-gallery.min.css') }}

    {{ HTML::style('css/form.css') }}

    {{ HTML::style('css/jquery.tagsinput.css') }}

    <script src="{{ URL::to('bucket') }}/js/lib/jquery-1.11.0.min.js"></script>


    <script type="text/javascript">
        var base = '{{ URL::to('/') }}';
    </script>
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        <img src="{{ URL::to('bucket')}}/images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{ URL::to('bucket')}}/images/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{ URL::to('bucket')}}/images/avatar-mini-2.jpg"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{ URL::to('bucket')}}/images/avatar-mini-3.jpg"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{ URL::to('bucket')}}/images/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ URL::to('bucket')}}/images/avatar1_small.jpg">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{URL::to('logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <!-- SIDE NAVIGATION -->
    @include('partials.leftsidenav')
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    @if(isset($crumb))
                        {{ $crumb }}
                    @endif
                    <!--breadcrumbs end -->
                </div>
            </div>

        <!-- page start-->

        @yield('content')

        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
<div class="search-row">
    <input type="text" placeholder="Search" class="form-control">
</div>
<div class="right-stat-bar">
<ul class="right-side-accordion">
<li class="widget-collapsible">
    <a href="#" class="head widget-head red-bg active clearfix">
        <span class="pull-left">work progress (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row side-mini-stat clearfix">
                <div class="side-graph-info">
                    <h4>Target sell</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="target-sell">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>product delivery</h4>
                    <p>
                        55%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-delivery">
                        <div class="sparkline" data-type="bar" data-resize="true" data-height="30" data-width="90%" data-bar-color="#39b7ab" data-bar-width="5" data-data="[200,135,667,333,526,996,564,123,890,564,455]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info payment-info">
                    <h4>payment collection</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-collection">
                        <span class="pc-epie-chart" data-percent="45">
                        <span class="percent"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>delivery pending</h4>
                    <p>
                        44%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="d-pending">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="col-md-12">
                    <h4>total progress</h4>
                    <p>
                        50%, Deadline 12 june 13
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                            <span class="sr-only">50% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head terques-bg active clearfix">
        <span class="pull-left">contact online (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="{{ URL::to('bucket')}}/images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Jonathan Smith</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="{{ URL::to('bucket')}}/images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Anjelina Joe</a></h4>
                    <p>
                        Available
                    </p>
                </div>
                <div class="user-status text-success">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="{{ URL::to('bucket')}}/images/chat-avatar2.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">John Doe</a></h4>
                    <p>
                        Away from Desk
                    </p>
                </div>
                <div class="user-status text-warning">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="{{ URL::to('bucket')}}/images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Mark Henry</a></h4>
                    <p>
                        working
                    </p>
                </div>
                <div class="user-status text-info">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="{{ URL::to('bucket')}}/images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Shila Jones</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <p class="text-center">
                <a href="#" class="view-btn">View all Contacts</a>
            </p>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head purple-bg active">
        <span class="pull-left"> recent activity (3)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        just now
                    </p>
                    <p>
                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        2 min ago
                    </p>
                    <p>
                        <a href="#">Jane Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        1 day ago
                    </p>
                    <p>
                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head yellow-bg active">
        <span class="pull-left"> shipment status</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="col-md-12">
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">70% Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</div>
<!--right sidebar end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<script type="text/javascript">

    asset_base_url = '{{ URL::to('bucket') }}';

</script>

<!--Core js-->
<script type="text/javascript" src="{{ URL::to('bucket') }}/js/lib/jquery-ui-1.9.2.custom.min.js"></script>
<script src="{{ URL::to('bucket') }}/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="{{ URL::to('bucket') }}/js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ URL::to('bucket') }}/js/scrollTo/jquery.scrollTo.min.js"></script>
<script src="{{ URL::to('bucket') }}/assets/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="{{ URL::to('bucket') }}/js/nicescroll/jquery.nicescroll.js"></script>

<script src="{{ URL::to('bucket') }}/assets/calendar/clndr.js"></script>
<script src="{{ URL::to('bucket') }}/js/underscore-min.js"></script>

<script src="{{ URL::to('bucket') }}/assets/calendar/moment-2.2.1.js"></script>
<script src="{{ URL::to('bucket') }}/js/calendar/evnt.calendar.init.js"></script>

<script src="{{ URL::to('bucket')}}/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>

<!--Easy Pie Chart-->
<script src="{{ URL::to('bucket') }}/assets/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="{{ URL::to('bucket') }}/assets/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="{{ URL::to('bucket') }}/assets/flot-chart/jquery.flot.js"></script>
<script src="{{ URL::to('bucket') }}/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="{{ URL::to('bucket') }}/assets/flot-chart/jquery.flot.resize.js"></script>
<script src="{{ URL::to('bucket') }}/assets/flot-chart/jquery.flot.pie.resize.js"></script>

<!--common script init for all pages-->
<script src="{{ URL::to('bucket') }}/js/scripts.js"></script>

<!--script for this page only-->

<script src="{{ URL::to('bucket')}}/js/calendar/external-dragging-calendar.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="{{ URL::to('bucket')}}/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{{ URL::to('bucket')}}/assets/data-tables/DT_bootstrap.js"></script>

<!--dynamic table initialization -->
<script src="{{ URL::to('bucket')}}/js/dynamic_table/dynamic_table_init.js"></script>

<!--tree -->

<!--clock init-->
<script src="{{ URL::to('bucket') }}/assets/css3clock/js/script.js"></script>


<script src="{{ URL::to('bucket') }}/assets/fuelux/js/tree.min.js"></script>

<script src="{{ URL::to('bucket') }}/js/tree/tree.js"></script>

<script>
    jQuery(document).ready(function() {
        TreeView.init();
    });
</script>

    {{ HTML::script('js/bootstrap-modalmanager.js') }}
    {{ HTML::script('js/bootstrap-modal.js') }}

    {{ HTML::script('js/jquery.removeWhitespace.min.js')}}
    {{ HTML::script('js/jquery.collagePlus.min.js')}}
    {{ HTML::script('js/jquery.collageCaption.js')}}
    {{ HTML::script('js/jquery-datatables/jquery.datatables.min.js')}}
    {{ HTML::script('js/jquery-datatables/datatables.bootstrap.js')}}

    {{ HTML::script('js/jquery.tagsinput.js') }}

    {{-- HTML::script('js/bootstrap-timepicker.js') --}}
    {{ HTML::script('js/sm-datepicker/bootstrap-datetimepicker.min.js') }}

    {{ HTML::script('js/moment.min.js') }}
    {{ HTML::script('js/daterangepicker.js') }}

    {{ HTML::script('js/app.js') }}

    {{ HTML::script('js/blueimp-gallery.min.js') }}
    {{ HTML::script('js/jquery.blueimp-gallery.min.js') }}

    {{ HTML::script('js/wysihtml5-0.3.0.min.js') }}

    {{ HTML::script('js/bootstrap-wysihtml5-0.0.2.min.js') }}

    {{ HTML::script('js/select2.js') }}

    {{ HTML::script('js/jquery-fileupload/vendor/jquery.ui.widget.js') }}

    {{ HTML::script('js/js-load-image/load-image.min.js') }}

    {{ HTML::script('js/js-canvas-to-blob/canvas-to-blob.min.js') }}

    {{ HTML::script('js/jquery-fileupload/jquery.iframe-transport.js') }}

    {{ HTML::script('js/jquery-fileupload/jquery.fileupload.js') }}

    {{ HTML::script('js/jquery-fileupload/jquery.fileupload-process.js') }}
    {{ HTML::script('js/jquery-fileupload/jquery.fileupload-image.js') }}
    {{ HTML::script('js/jquery-fileupload/jquery.fileupload-audio.js') }}
    {{ HTML::script('js/jquery-fileupload/jquery.fileupload-video.js') }}
    {{ HTML::script('js/jquery-fileupload/jquery.fileupload-validate.js') }}




</body>
</html>
