<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Establish a database connection
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'rectubmx_simplegreen');
    define('DB_PASSWORD', '3N2h0DEwaDJ#');
    define('DB_NAME', 'rectubmx_simplegreenenergy');
    
    
    
    // Establish a database connection
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

    // Sanitize the fno value and avoid SQL injection
    $fno = $conn->real_escape_string($_POST['fno']);

    // Create a SQL query to retrieve values from the database based on the fno
    $sql = "SELECT * FROM ATP WHERE `f.no` = '$fno'";

    // Execute the query
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Now $row contains the retrieved values from the database
        } else {
            echo "No records found.";
        }
    } else {
        echo "Query failed: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "No POST data received.";
}
?>




<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/charts_Js.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:40:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Adminpage - Responsive Bootstrap Admin Template Dashboard</title>
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i', 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 'Open Sans']
                }
            });
        </script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
        <!-- START GLOBAL MANDATORY STYLE -->
        <link href="assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/modals/modal-component.css" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link id="defaultTheme" href="assets/dist/css/skins/skin-default.min" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            @media (max-width: 767px) {
                    .navbar-header {
                background-color: #ffffff;
                }
                .navbar-toggle{
                 color: black;
                }
                    }
        </style>
    </head>
    <body>
        <div id="wrapper" class="wrapper animsition">
            <!-- Navigation -->
            <nav class="navbar navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="material-icons">apps</i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img class="main-logo" src="https://www.simplegreenenergy.org/wp-content/uploads/2021/06/SimpleGreenEnergy_FinalLogo.png" alt="">
                        <!--<span>AdminPage</span>-->
                    </a>
                </div>
                <div class="nav-container">
                    <!-- /.navbar-header -->
                    <ul class="nav navbar-nav hidden-xs">
                        <li><a id="fullscreen" href="#"><i class="material-icons">fullscreen</i> </a></li>
                        <!-- /.Fullscreen -->
                        <li class="hidden-xs"> 
                            <a class="search-trigger" href="#">
                                <i class="material-icons">search</i>
                            </a>
                            <div class="fullscreen-search-overlay" id="search-overlay">
                                <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="ti-close"></i></a>
                                <div id="fullscreen-search-wrapper">
                                    <form method="get" id="fullscreen-searchform">
                                        <input type="text" value="" placeholder="Type keyword(s) here" id="fullscreen-search-input">
                                        <i class="ti-search fullscreen-search-icon"><input value="" type="submit"></i>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <!-- /.Full page search -->
                        <li><a id="menu-toggle" href="#"><i class="material-icons">apps</i></a></li>
                        <!-- /.Sidebar menu toggle icon -->
                        <!--Start dropdown menu-->
                        <!-- <li class="dropdown hidden-sm"><a href="#" class="dropdown-toggle material-ripple" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                               
                                <li><a href="#">Dropdown Link 1</a></li>
                                <li><a href="#">Dropdown Link 2</a></li>
                                <li><a href="#">Dropdown Link 3</a></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Submenu Link 4.1</a></li>
                                        <li><a href="#">Submenu Link 4.2</a></li>
                                        <li><a href="#">Submenu Link 4.3</a></li>
                                        <li><a href="#">Submenu Link 4.4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Submenu Link 5.1</a></li>
                                        <li><a href="#">Submenu Link 5.2</a></li>
                                        <li><a href="#">Submenu Link 5.3</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu Link 5.4</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Submenu Link 5.4.1</a></li>
                                                <li><a href="#">Submenu Link 5.4.2</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu Link 5.4.3</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Submenu Link 5.4.3.1</a></li>
                                                        <li><a href="#">Submenu Link 5.4.3.2</a></li>
                                                        <li><a href="#">Submenu Link 5.4.3.3</a></li>
                                                        <li><a href="#">Submenu Link 5.4.3.4</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu Link 5.4.4</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Submenu Link 5.4.4.1</a></li>
                                                        <li><a href="#">Submenu Link 5.4.4.2</a></li>
                                                        <li><a href="#">Submenu Link 5.4.4.3</a></li>
                                                        <li><a href="#">Submenu Link 5.4.4.4</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <!--End Start dropdown menu-->
                        <!--Start dropdown mega menu-->
                        <li class="dropdown mega-dropdown hidden-sm">
                            <a href="#" class="dropdown-toggle material-ripple" data-toggle="dropdown">Megamenu <b class="caret"></b></a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="buttons.php"><i class="fa fa-window-minimize"></i>Buttons</a></li>
                                            <li><a href="tabs.php"><i class="fa fa-tablet"></i>Tab</a></li>
                                            <li><a href="notification.php"><i class="fa fa-exclamation-triangle"></i>Notification</a></li>
                                            <li><a href="tree-view.php"><i class="fa fa-tree"></i>Tree View</a></li>
                                            <li><a href="progressbars.php"><i class="fa fa-minus"></i>Progressber</a></li>
                                            <li><a href="list.php"><i class="fa fa-list-ol"></i>List View</a></li>
                                            <li><a href="typography.php"><i class="fa fa-text-width"></i>Typography</a></li>
                                            <li><a href="panels.php"><i class="fa fa-keyboard-o"></i>Panels</a></li>
                                        </ul>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="modals.php"><i class="fa fa-file-text-o"></i>Modals</a></li>
                                            <li><a href="icheck_toggle_pagination.php"><i class="fa fa-check-square-o"></i>iCheck, Toggle</a></li>
                                            <li><a href="labels-badges-alerts.php"><i class="fa fa-exclamation"></i>labels, Badges, Alerts</a></li>
                                            <li><a href="charts_flot.php"><i class="fa fa-area-chart"></i>Flot Chart</a></li>
                                            <li><a href="charts_Js.php"><i class="fa fa-bar-chart"></i>ATP</a></li>
                                            <li><a href="charts_morris.php"><i class="fa fa-pie-chart"></i>Documents History</a></li>
                                            <li><a href="charts_sparkline.php"><i class="fa fa-line-chart"></i>Sparkline Charts</a></li>
                                            <li><a href="maps_data.php"><i class="fa fa-map-marker"></i>Data Maps</a></li>
                                        </ul>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="maps_jvector.php"><i class="fa fa-puzzle-piece"></i>Jvector Maps</a></li>
                                            <li><a href="maps_google.php"><i class="fa fa-google"></i>Google map</a></li>
                                            <li><a href="maps_snazzy.php"><i class="fa fa-map-signs"></i>Snazzy Map</a></li>
                                            <li><a href="widgets.php">
                                                    <i class="fa fa-windows"></i> <span>Widgets</span>
                                                    <span class="pull-rightr">
                                                        <small class="label pull-right bg-green">new</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li><a href="table.php"><i class="fa fa-table"></i>Simple tables</a></li>
                                            <li><a href="dataTables.php"><i class="ti-layout-tab-window"></i>Data tables</a></li>
                                            <li><a href="footable.php"><i class="ti-layout-width-default"></i>FooTable</a></li>
                                            <li><a href="x-editable.php"><i class="ti-close"></i>X-editable</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="icons_bootstrap.php"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
                                            <li><a href="icons_fontawesome.php"><i class="fa fa-fort-awesome"></i>Fontawesome Icon</a></li>
                                            <li><a href="icons_flag.php"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
                                            <li><a href="icons_material.php"><i class="fa fa-meetup"></i>Material Icons</a></li>
                                            <li><a href="icons_weather.php"><i class="fa fa-bolt"></i>Weather Icons </a></li>
                                            <li><a href="icons_line.php"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
                                            <li><a href="icons_pe.php"><i class="fa fa-diamond"></i>Pe Icons</a></li>
                                            <li><a href="icon_socicon.php"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>
                                        </ul>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="invoice.php"><i class="fa fa-file-text-o"></i>Invoice</a></li>
                                            <li><a href="timeline.php"><i class="fa fa-hourglass-o"></i>Vertical timeline</a></li>
                                            <li><a href="horizontal_timeline.php"><i class="fa fa-hourglass-end"></i>Horizontal timeline</a></li>
                                            <li><a href="pricing.php"><i class="fa fa-usd"></i>Pricing Table</a></li>
                                            <li><a href="slider.php"><i class="fa fa-sliders"></i>Slider</a></li>
                                            <li><a href="carousel.php"><i class="fa fa-long-arrow-left"></i>Carousel</a></li>
                                            <li><a href="code_editor.php"><i class="fa fa-code"></i>Code editor</a></li>
                                            <li>
                                                <a href="calender.php">
                                                    <i class="ti-calendar"></i><span>Calendar</span>
                                                    <span class="pull-right">
                                                        <small class="label pull-right bg-red m-r-5">9</small>
                                                        <small class="label pull-right bg-yellow m-r-5">29</small>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end col-3 -->
                                </li><!-- end row -->
                            </ul>
                        </li>
                        <!--End dropdown mega menu-->
                        <li><a href="lockscreen.php"  class="btn-buy hidden-xs hidden-sm hidden-md">Lockscreen</a></li>
                    </ul>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">chat</i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li class="rad-dropmenu-header"><a href="#">New Messages</a></li>
                                <li>
                                    <a href="#" class="rad-content">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                            <strong class="inbox-item-author">Naeem Khan</strong>
                                            <span class="inbox-item-date">-13:40 PM</span>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rad-content">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/dist/img/avatar2.png" class="img-circle" alt=""></div>
                                            <strong class="inbox-item-author">Sala Uddin</strong>
                                            <span class="inbox-item-date">-13:40 PM</span>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <span class="profile-status away pull-right"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rad-content">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/dist/img/avatar3.png" class="img-circle" alt=""></div>
                                            <strong class="inbox-item-author">Mozammel</strong>
                                            <span class="inbox-item-date">-13:40 PM</span>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rad-content">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                            <strong class="inbox-item-author">Tanzil Ahmed</strong>
                                            <span class="inbox-item-date">-13:40 PM</span>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="rad-dropmenu-footer"><a href="#">View All messages</a></li>
                            </ul> <!-- /.Dropdown-messages -->
                        </li><!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <!--<i class="ti-flag-alt"></i>-->
                                <i class="material-icons">flag</i>
                                <span class="label label-success">4</span>
                                <!--<i class="ti-angle-down"></i>-->
                            </a>
                            <ul class="dropdown-menu dropdown-tasks">
                                <!--<li class="ui_popover_tooltip"></li>-->
                                <li class="rad-dropmenu-header"><a  href="#">Your Task</a></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p><strong>Task 1</strong>
                                                <span class="pull-right sm-text">40% Complete</span></p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p><strong>Task 2</strong>
                                                <span class="pull-right sm-text">20% Complete</span></p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p><strong>Task 3</strong>
                                                <span class="pull-right sm-text">60% Complete</span></p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p><strong>Task 4</strong>
                                                <span class="pull-right sm-text">80% Complete</span></p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="rad-dropmenu-footer"><a href="#">See All Tasks</a></li>
                            </ul><!-- /.Dropdown-tasks -->
                        </li><!-- /.Dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">add_alert</i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                <!--<i class="ti-announcement"></i>-->
                                <!--<i class="ti-angle-down"></i>-->
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <!--<li class="ui_popover_tooltip"></li>-->
                                <li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
                                <li>
                                    <a class="rad-content" href="#">
                                        <div class="pull-left"><i class="fa fa-html5 fa-2x color-red"></i>
                                        </div>
                                        <div class="rad-notification-body">
                                            <div class="lg-text">Introduction to fetch()</div>
                                            <div class="sm-text">The fetch API</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="rad-content" href="#">
                                        <div class="pull-left"><i class="fa fa-bitbucket fa-2x color-violet"></i>
                                        </div>
                                        <div class="rad-notification-body">
                                            <div class="lg-text">Check your BitBucket</div>
                                            <div class="sm-text">Last Chance</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="rad-content" href="#">
                                        <div class="pull-left"><i class="fa fa-google fa-2x color-info"></i>
                                        </div>
                                        <div class="rad-notification-body">
                                            <div class="lg-text">Google Account</div>
                                            <div class="sm-text">example@gmail.com</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="rad-content" href="#">
                                        <div class="pull-left"><i class="fa fa-amazon fa-2x color-green"></i>
                                        </div>
                                        <div class="rad-notification-body">
                                            <div class="lg-text">Amazon Simple Notification ...</div>
                                            <div class="sm-text">Lorem Ipsum is simply dummy text...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
                            </ul>  <!-- /.dropdown-alerts -->
                            <!-- /.dropdown-alerts -->
                        </li>
                        <!-- /.Dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">person_add</i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="profile.php"><i class="ti-user"></i>&nbsp; Profile</a></li>
                                <li><a href="mailbox.php"><i class="ti-email"></i>&nbsp; My Messages</a></li>
                                <li><a href="lockscreen.php"><i class="ti-lock"></i>&nbsp; Lock Screen</a></li>
                                <li><a href="#"><i class="ti-settings"></i>&nbsp; Settings</a></li>
                                <li><a href="logout.php"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
                            </ul><!-- /.dropdown-user -->
                        </li><!-- /.Dropdown -->
                        <li class="log_out">
                            <a href="logout.php">
                                <i class="material-icons">power_settings_new</i>
                            </a>
                        </li><!-- /.Log out -->
                    </ul> <!-- /.navbar-top-links -->
                </div>
            </nav>
            <!-- /.Navigation -->
            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li><a href="index.php" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
                        <li class="active">
                            <a href="#" class="material-ripple"><i class="material-icons">bubble_chart</i> Lead Generation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="charts_flot.php">Leads</a></li>
                                <li class="active"><a href="charts_Js.php">ATP</a></li>
                                <li><a href="charts_morris.php">Documents History</a></li>
                                <!-- <li><a href="charts_sparkline.php">Sparkline Charts</a></li>
                                <li><a href="charts_am.php">Am Charts</a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">drafts</i> Customers<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                               <li><a href="mailbox.php">User Management<span class="nav-tag green">3</span></a></li>
                                <!-- <li><a href="mailDetails.php">Admin Details<span class="nav-tag yellow">2</span></a></li> -->
                                 <!-- <li><a href="compose.php">Compose<span class="nav-tag red">9</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Sales<span class="fa arrow"></span></a>
                            <!-- <ul class="nav nav-second-level">
                                <li><a href="table.php">Simple tables</a></li>
                                <li><a href="dataTables.php">Data tables</a></li>
                                <li><a href="footable.php">FooTable</a></li>
                                <li><a href="x-editable.php">X-editable</a></li>
                            </ul> -->
                        </li>
                         <li>
                            <a href="#" class="material-ripple"><i class="material-icons">assignment</i> Surveyor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li><a href="forms_basic.php">Basic Surveyor</a></li> -->
                                <!-- <li><a href="form_input_group.php">Input group</a></li> -->
                                <li><a href="form-mask.php">Create New Surveyor</a></li>
                                <li><a href="form_touchspin.php">Surveyor  Work Deatils</a></li>
                                <li><a href="form_select.php">Surveyors List</a></li> 
                                <!-- <li><a href="forms_validation.php">Validation Surveyor</a></li> -->
                                <!-- <li><a href="forms_cropper.php">Cropper</a></li> -->
                                <li><a href="form_file_upload.php">Surveyor File Upload</a></li>
                                <!-- <li><a href="forms_editor_ck.php">CK Editor</a></li> -->
                                <!-- <li><a href="forms_editor_summernote.php">Summernote</a></li> -->
                                <!-- <li><a href="form_wizard.php">Form Wizaed</a></li> -->
                                <!-- <li><a href="forms_editor_markdown.php">Markdown</a></li> -->
                                <!-- <li><a href="forms_editor_trumbowyg.php">Trumbowyg</a></li> -->
                                <!-- <li><a href="form_editor_wysihtml5.php">Wysihtml5</a></li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-heading "> <span>Components&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">format_color_fill</i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="buttons.php">Buttons</a></li>
                                <li><a href="tabs.php">Tab</a></li>
                                <li><a href="notification.php">Notification</a></li>
                                <li><a href="tree-view.php">Tree View</a></li>
                                <li><a href="progressbars.php">Progressber</a></li>
                                <li><a href="list.php">List View</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="panels.php">Panels</a></li>
                                <li><a href="modals.php">Modals</a></li>
                                <li><a href="icheck_toggle_pagination.php">iCheck, Toggle, pagination</a></li>
                                <li><a href="labels-badges-alerts.php">labels, Badges, Alerts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">map</i> Maps<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="maps_amcharts.php">Amcharts Map</a></li>
                                <li><a href="maps_gmaps.php">gMaps</a></li>
                                <li><a href="maps_data.php">Data Maps</a></li>
                                <li><a href="maps_jvector.php">Jvector Maps</a></li>
                                <li><a href="maps_google.php">Google map</a></li>
                                <li><a href="maps_snazzy.php">Snazzy Map</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">insert_emoticon</i> Icons<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="icons_bootstrap.php">Bootstrap Icons</a></li>
                                <li><a href="icons_fontawesome.php">Fontawesome Icon</a></li>
                                <li><a href="icons_flag.php">Flag Icons</a></li>
                                <li><a href="icons_material.php">Material Icons</a></li>
                                <li><a href="icons_weather.php">Weather Icons </a></li>
                                <li><a href="icons_line.php">Line Icons</a></li>
                                <li><a href="icons_pe.php">Pe Icons</a></li>
                                <li><a href="icon_socicon.php">Socicon Icons</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="widgets.php"><i class="material-icons">widgets</i>Widgets<span class="nav-tag green">new</span></a></li>
                        <li><a href="calender.php"><i class="material-icons">perm_contact_calendar</i>Calendar<span class="nav-tag red">3</span><span class="nav-tag green">5</span><span class="nav-tag yellow">8</span></a></li>
                        <li class="nav-heading "> <span>Extra&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">stay_current_portrait</i>App Views<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="invoice.php">Invoice</a></li>
                                <li><a href="timeline.php">Vertical timeline</a></li>
                                <li><a href="horizontal_timeline.php">Horizontal timeline</a></li>
                                <li><a href="pricing.php">Pricing Table</a></li>
                                <li><a href="slider.php">Slider</a></li>
                                <li><a href="carousel.php">Carousel</a></li>
                                <li><a href="code_editor.php">Code editor</a></li>
                                <li><a href="gridSystem.php">Grid System</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">devices_other</i>Other pags<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="logout.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="forget_password.php">Forget password</a></li>
                                <li><a href="lockscreen.php">Lockscreen</a></li>
                                <li><a href="404.php">404 Error</a></li>
                                <li><a href="505.php">505 Error</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">invert_colors</i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="#">Second Level Item</a></li>
                                <li><a href="#">Second Level Item</a></li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="blank.php" class="material-ripple"><i class="material-icons">check_box_outline_blank</i> Blank page</a></li>
                        <li><a href="https://thememinister.com/adminpage/documentation/index.php" class="material-ripple" target="_blank"><i class="material-icons">bookmark</i> Documentation</a></li>-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.Left Sidebar-->
            <div class="side-bar right-bar">
                <div class="">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs right-sidebar-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="material-icons">home</i></a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="material-icons">person_add</i></a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="material-icons">chat</i></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade  in active" id="home">
                            <ul id="styleOptions" title="switch styling">
                                <li><b>Dark Skin</b></li>
                                <li><a href="javascript: void(0)" data-theme="skin-blue.min"><img src="assets/dist/img/theme-color/1.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-dark.min"><img src="assets/dist/img/theme-color/2.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-red-light.min" class="skin-logo"><img src="assets/dist/img/theme-color/5.jpg" alt=""/></a></li>
                                <li><b>Dark Skin sidebar</b></li>
                                <li><a href="javascript: void(0)" data-theme="skin-default.min"><img src="assets/dist/img/theme-color/7.jpg" alt=""/> </a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-red-dark.min"><img src="assets/dist/img/theme-color/6.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-dark-1.min"><img src="assets/dist/img/theme-color/8.jpg" alt=""/></a></li>
                                <li><b>Light Skin sidebar</b></li>
                                <li><a href="javascript: void(0)" data-theme="skin-default-light.min" class="skin-logo"><img src="assets/dist/img/theme-color/3.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-white.min"><img src="assets/dist/img/theme-color/4.jpg" alt=""/></a> </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="profile">
                            <h3 class="sidebar-heading">Activity</h3>
                            <div class="rad-activity-body">
                                <div class="rad-list-group group">
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-red pull-left"><i class="fa fa-phone"></i></div>
                                        <div class="rad-list-content"><strong>Client meeting</strong>
                                            <div class="md-text">Meeting at 10:00 AM</div>
                                        </div>
                                    </a>
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-yellow pull-left"><i class="fa fa-refresh"></i></div>
                                        <div class="rad-list-content"><strong>Created ticket</strong>
                                            <div class="md-text">Ticket assigned to Dev team</div>
                                        </div>
                                    </a>
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-primary pull-left"><i class="fa fa-check"></i></div>
                                        <div class="rad-list-content"><strong>Activity completed</strong>
                                            <div class="md-text">Completed the dashboard html</div>
                                        </div>
                                    </a>
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-green pull-left"><i class="fa fa-envelope"></i></div>
                                        <div class="rad-list-content"><strong>New Invitation</strong>
                                            <div class="md-text">Max has invited you to join Inbox</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- /.sidebar-menu -->
                            <h3 class="sidebar-heading">Tasks Progress</h3>
                            <ul class="sidebar-menu">
                                <li>
                                    <a href="#">
                                        <h4 class="subheading">
                                            Task one
                                            <span class="label label-danger pull-right">40%</span>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 40%"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h4 class="subheading">
                                            Task two
                                            <span class="label label-success pull-right">20%</span>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 20%"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h4 class="subheading">
                                            Task Three
                                            <span class="label label-warning pull-right">60%</span>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 60%"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h4 class="subheading">
                                            Task four
                                            <span class="label label-primary pull-right">80%</span>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-bar-striped active" style="width: 80%"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.sidebar-menu -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="messages">
                            <div class="message_widgets">
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Naeem Khan</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar2.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Sala Uddin</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status away pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar3.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Mozammel</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Tanzil</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar5.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Amir Khan</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Salman Khan</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Tahamina</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Jhon</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
 </div>
            <!-- /.Right Sidebar -->
            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-graph3"></i>
                        </div>
                        <div class="header-title">
                            <h1>ATP Updation</h1>
                            <small>Simple yet flexible JavaScript charting for designers & developers</small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Charts</a></li>
                                <li class="active">Charts Js</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                    <!-- <form id="updateForm" class="row" method="post" action="atpupdates.php"> -->
                    <form id="updateForm" class="row" method="post" action="atpupdates.php">
                    <!-- Left Side - 10 Fields -->
                         <div class="col-md-6">
                        
                         <div class="form-group">
                            <label>What kind of fuel does your boiler use? *</label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="fuleType" name="fuleType" value="<?= $row['fuleType'] ?>">
                                         <option value="Gas" <?= ($row['fuleType'] === 'Gas') ? 'selected' : '' ?>>Gas</option>
                                         <option value="LPG" <?= ($row['fuleType'] === 'LPG') ? 'selected' : '' ?>>LPG</option>
                                         <option value="Oil" <?= ($row['fuleType'] === 'Oil') ? 'selected' : '' ?>>Oil</option>
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>


                        <!-- <div class="form-group">
                           <label for="fuleType">Fuel Type</label>
                            <input type="text" class="form-control" id="fuleType" name="fuleType" value="<?= $row['fuleType'] ?>">
                        </div> -->
                        <div class="form-group">
                            <!-- <label for="boilerType">Boiler Type</label>
                            <input type="text" class="form-control" id="boilerType" name="boilerType" value="<?= $row['boilerType']; ?>"> -->

                            <label>Currently what type of boiler do you have? *</label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="boilerType" name="boilerType" value="<?= $row['boilerType']; ?>">
                                         <option value="Combi" <?= ($row['boilerType'] === 'Combi') ? 'selected' : '' ?>>Combi</option>
                                         <option value="Standard" <?= ($row['boilerType'] === 'Standard') ? 'selected' : '' ?>>Standard</option>
                                         <option value="System" <?= ($row['boilerType'] === 'System') ? 'selected' : '' ?>>System</option>
                                         <option value="Back Boiler" <?= ($row['boilerType'] === 'Back Boiler') ? 'selected' : '' ?>>Back Boiler</option>
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                        
                        <div class="form-group">
                            <!-- <label for="boilerCondition">Boiler Condition</label>
                            <input type="text" class="form-control" id="boilerCondition" name="boilerCondition" value="<?= $row['boilerCondition'] ?>"> -->

                            <label>How would you describe your current boiler?</label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="boilerCondition" name="boilerCondition" value="<?= $row['boilerCondition'] ?>">
                                         <option value="Not Working" <?= ($row['boilerCondition'] === 'Not Working') ? 'selected' : '' ?>>Not Working</option>
                                         <option value="Old Inefficient" <?= ($row['boilerCondition'] === 'Old Inefficient') ? 'selected' : '' ?>>Old Inefficient</option>
                                         <option value="Not fit your requirement" <?= ($row['boilerCondition'] === 'Not fit your requirement') ? 'selected' : '' ?>>Not fit your requirement</option>
                                         <option value="Other" <?= ($row['boilerCondition'] === 'Other') ? 'selected' : '' ?>>Other</option>
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="isWallMounted">Is Wall Mounted</label>
                            <input type="text" class="form-control" id="isWallMounted" name="isWallMounted" value="<?= $row['isWallMounted'] ?>"> -->

                            <label>Is your boiler mounted on the wall?</label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="isWallMounted" name="isWallMounted" value="<?= $row['isWallMounted'] ?>">
                                         <option value="Yes, its mounted" <?= ($row['isWallMounted'] === 'Yes, its mounted') ? 'selected' : '' ?>>Yes, its mounted</option>
                                         <option value="No, its floor standing" <?= ($row['isWallMounted'] === 'No, its floor standing') ? 'selected' : '' ?>>No, its floor standing</option>
                                         
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="bolierAge">Boiler Age</label>
                            <input type="text" class="form-control" id="bolierAge" name="bolierAge" value="<?= $row['bolierAge'] ?>"> -->
                            <label>Roughly how old is your boiler?</label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="bolierAge" name="bolierAge" value="<?= $row['bolierAge'] ?>">
                                         <option value="0-10" <?= ($row['bolierAge'] === '0-10') ? 'selected' : '' ?>>0-10</option>
                                         <option value="10-20" <?= ($row['bolierAge'] === '10-20') ? 'selected' : '' ?>>10-20</option>
                                         <option value="20-25" <?= ($row['bolierAge'] === '20-25') ? 'selected' : '' ?>>20-25</option>
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>

                        </div>
                        <div class="form-group">
                            <!-- <label for="shouldBoilerLocationChange">Should Boiler Location Change</label>
                            <input type="text" class="form-control" id="shouldBoilerLocationChange" name="shouldBoilerLocationChange" value="<?= $row['shouldBoilerLocationChange'] ?>"> -->

                            <label>Do you want your new boiler in a different place?</label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="shouldBoilerLocationChange" name="shouldBoilerLocationChange" value="<?= $row['shouldBoilerLocationChange'] ?>">
                                         <option value="Yes" <?= ($row['shouldBoilerLocationChange'] === 'Yes') ? 'selected' : '' ?>>Yes</option>
                                         <option value="No" <?= ($row['shouldBoilerLocationChange'] === 'No') ? 'selected' : '' ?>>No</option>
                                         
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="propertyType">Type of property you are applying for?</label>
                            <input type="text" class="form-control" id="propertyType" name="propertyType" value="<?= $row['propertyType'] ?>"> -->
                            <label>Type of property you are applying for?</label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="propertyType" name="propertyType" value="<?= $row['propertyType'] ?>">
                                         <option value="Detached House" <?= ($row['propertyType'] === 'Detached House') ? 'selected' : '' ?>>Detached House</option>
                                         <option value="Semi-Detached House" <?= ($row['propertyType'] === 'Semi-Detached House') ? 'selected' : '' ?>>Semi-Detached House</option>
                                         <option value="Terrace House" <?= ($row['propertyType'] === 'Terrace House') ? 'selected' : '' ?>>Terrace House</option>
                                         <option value="Bungalow" <?= ($row['propertyType'] === 'Bungalow') ? 'selected' : '' ?>>Bungalow</option>
                                         <option value="Flat" <?= ($row['propertyType'] === 'Flat') ? 'selected' : '' ?>>Flat</option>
                                         <option value="Park Home" <?= ($row['propertyType'] === 'Park Home') ? 'selected' : '' ?>>Park Home</option>
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="bedroomCount">Bedroom Count</label>
                            <input type="text" class="form-control" id="bedroomCount" name="bedroomCount" value="<?= $row['bedroomCount'] ?>"> -->

                            <label>How many bedrooms does the property have? </label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="bedroomCount" name="bedroomCount" value="<?= $row['bedroomCount'] ?>">
                                         <option value="1 Bedroom" <?= ($row['bedroomCount'] === '1 Bedroom') ? 'selected' : '' ?>>1 Bedroom</option>
                                         <option value="2 Bedrooms" <?= ($row['bedroomCount'] === '2 Bedrooms') ? 'selected' : '' ?>>2 Bedrooms</option>
                                         <option value="3 Bedrooms" <?= ($row['bedroomCount'] === '3 Bedrooms') ? 'selected' : '' ?>>3 Bedrooms</option>
                                         <option value="4 Bedrooms" <?= ($row['bedroomCount'] === '4 Bedrooms') ? 'selected' : '' ?>>4 Bedrooms</option>
                                         <option value="5 Bedrooms" <?= ($row['bedroomCount'] === '5 Bedrooms') ? 'selected' : '' ?>>5 Bedrooms</option>
                                         <option value="6+ Bedrooms" <?= ($row['bedroomCount'] === '6+ Bedrooms') ? 'selected' : '' ?>>6+ Bedrooms</option>
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="radiatorCount">Radiator Count</label>
                            <input type="text" class="form-control" id="radiatorCount" name="radiatorCount" value="<?= $row['radiatorCount'] ?>"> -->

                            <label>How many bedrooms does the property have? </label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="radiatorCount" name="radiatorCount" value="<?= $row['radiatorCount'] ?>">
                                         <option value="1" <?= ($row['radiatorCount'] === '1') ? 'selected' : '' ?>>1</option>
                                         <option value="2" <?= ($row['radiatorCount'] === '2') ? 'selected' : '' ?>>2</option>
                                         <option value="3" <?= ($row['radiatorCount'] === '3') ? 'selected' : '' ?>>3</option>
                                         <option value="4" <?= ($row['radiatorCount'] === '4') ? 'selected' : '' ?>>4</option>
                                         <option value="5" <?= ($row['radiatorCount'] === '5') ? 'selected' : '' ?>>5</option>
                                         <option value="6" <?= ($row['radiatorCount'] === '6') ? 'selected' : '' ?>>6</option>
                                         <option value="7" <?= ($row['radiatorCount'] === '7') ? 'selected' : '' ?>>7</option>
                                         <option value="8" <?= ($row['radiatorCount'] === '8') ? 'selected' : '' ?>>8</option>
                                         <option value="9" <?= ($row['radiatorCount'] === '9') ? 'selected' : '' ?>>9</option>
                                         <option value="10" <?= ($row['radiatorCount'] === '10') ? 'selected' : '' ?>>10</option>
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="isThermostaticRadiatorValvesPresent">Is Thermostatic Radiator Valves Present</label>
                            <input type="text" class="form-control" id="isThermostaticRadiatorValvesPresent" name="isThermostaticRadiatorValvesPresent" value="<?= $row['isThermostaticRadiatorValvesPresent'] ?>"> -->

                            <label>Do you have thermostatic radiator valves?</label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="isThermostaticRadiatorValvesPresent" name="isThermostaticRadiatorValvesPresent" value="<?= $row['isThermostaticRadiatorValvesPresent'] ?>">
                                         <option value="Yes" <?= ($row['isThermostaticRadiatorValvesPresent'] === 'Yes') ? 'selected' : '' ?>>Yes</option>
                                         <option value="No" <?= ($row['isThermostaticRadiatorValvesPresent'] === 'No') ? 'selected' : '' ?>>No</option>
                                         
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                       </div>

                        <!-- Right Side - 10 Fields -->
                       <div class="col-md-6">
                        <div class="form-group">
                            <!-- <label for="flueExhaustLocation">Flue Exhaust Location</label>
                            <input type="text" class="form-control" id="flueExhaustLocation" name="flueExhaustLocation" value="<?= $row['flueExhaustLocation'] ?>"> -->

                            <label>Where does your Flue come out? </label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="flueExhaustLocation" name="flueExhaustLocation" value="<?= $row['flueExhaustLocation'] ?>">
                                         <option value="Roof" <?= ($row['flueExhaustLocation'] === 'Roof') ? 'selected' : '' ?>>Roof</option>
                                         <option value="Wall" <?= ($row['flueExhaustLocation'] === 'Wall') ? 'selected' : '' ?>>Wall</option>
                                         
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="flueLocation">Flue Location</label>
                            <input type="text" class="form-control" id="flueLocation" name="flueLocation" value="<?= $row['flueLocation'] ?>"> -->


                            <label>Is your flue on a sloped roof or flat roof or wall?</label>
                                <div class="icon-addon addon-md input-left-icon">
                                     <select class="form-control" id="flueLocation" name="flueLocation" value="<?= $row['flueLocation'] ?>">
                                         <option value="Sloped Roof" <?= ($row['flueLocation'] === 'Sloped Roof') ? 'selected' : '' ?>>Sloped Roof</option>
                                         <option value="Flat Roof" <?= ($row['flueLocation'] === 'Flat Roof') ? 'selected' : '' ?>>Flat Roof</option>
                                         <option value="Wall" <?= ($row['flueLocation'] === 'Wall') ? 'selected' : '' ?>>Wall</option>
                                         
                                     </select>
                                     <label class="ti-reload" title="email"></label>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" value="<?= $row['firstName'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $row['lastName'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $row['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $row['phone'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="addressLine1">Address Line 1</label>
                            <input type="text" class="form-control" id="addressLine1" name="addressLine1" value="<?= $row['addressLine1'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="<?= $row['city'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="postcode">Postcode</label>
                            <input type="text" class="form-control" id="postcode" name="postcode" value="<?= $row['postcode'] ?>">
                        </div>
                        <div class="form-group">
                           <label for="fuleType">F.no</label>
                           <input type="text" name="fno" class="form-control" id="fuleType" name="fuleType" value="<?= $row['f.no'] ?>" readonly>
                        </div>
                        <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="submit"  class="btn btn-primary" id="updateRecord">Update Record</button>
                       </div>
                       </div>
                    </form>
                    </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
       <!-- Modal for updating the record -->
    </div>
</div>




<!-- <script>
$(document).ready(function () {
    $("#updateRecord").click(function () {
        var fno = <?= $row['f.no'] ?>;
        var fuleType = $("#fuleType").val();
        var boilerType = $("#boilerType").val();
        var boilerCondition = $("#boilerCondition").val();
        var isWallMounted = $("#isWallMounted").val();
        var bolierAge = $("#bolierAge").val();
        var shouldBoilerLocationChange = $("#shouldBoilerLocationChange").val();
        var propertyType = $("#propertyType").val();
        var bedroomCount = $("#bedroomCount").val();
        var radiatorCount = $("#radiatorCount").val();
        var isThermostaticRadiatorValvesPresent = $("#isThermostaticRadiatorValvesPresent").val();
        var flueExhaustLocation = $("#flueExhaustLocation").val();
        var flueLocation = $("#flueLocation").val();
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var addressLine1 = $("#addressLine1").val();
        var city = $("#city").val();
        var postcode = $("#postcode").val();

        // Log the data to the console for debugging
        console.log("fno: " + fno);
        console.log("fuleType: " + fuleType);
        console.log("boilerType: " + boilerType);
        console.log("boilerCondition: " + boilerCondition);
        console.log("isWallMounted: " + isWallMounted);
        console.log("bolierAge: " + bolierAge);
        console.log("shouldBoilerLocationChange: " + shouldBoilerLocationChange);
        console.log("propertyType: " + propertyType);
        console.log("bedroomCount: " + bedroomCount);
        console.log("radiatorCount: " + radiatorCount);
        console.log("isThermostaticRadiatorValvesPresent: " + isThermostaticRadiatorValvesPresent);
        console.log("flueExhaustLocation: " + flueExhaustLocation);
        console.log("flueLocation: " + flueLocation);
        console.log("firstName: " + firstName);
        console.log("lastName: " + lastName);
        console.log("email: " + email);
        console.log("phone: " + phone);
        console.log("addressLine1: " + addressLine1);
        console.log("city: " + city);
        console.log("postcode: " + postcode);

        $.ajax({
    type: "POST",
    url: "atpupdates.php",
    data: {
        fno: fno,
        fuleType: fuleType,
        boilerType: boilerType,
        boilerCondition: boilerCondition,
        isWallMounted: isWallMounted,
        bolierAge: bolierAge,
        shouldBoilerLocationChange: shouldBoilerLocationChange,
        propertyType: propertyType,
        bedroomCount: bedroomCount,
        radiatorCount: radiatorCount,
        isThermostaticRadiatorValvesPresent: isThermostaticRadiatorValvesPresent,
        flueExhaustLocation: flueExhaustLocation,
        flueLocation: flueLocation,
        firstName: firstName,
        lastName: lastName,
        email: email,
        phone: phone,
        addressLine1: addressLine1,
        city: city,
        postcode: postcode,
    },

    
    success: function (response) {
        if (response === "success") {
            Swal.fire("Success", "Record updated successfully", "success");
        } else {
            Swal.fire("Error", "Failed to update the record", "error");
           
            console.log("postcode: " + postcode);
        }
    },
    error: function () {
        Swal.fire("Error", "Failed to update the record", "error");
    },
});

    });
});



</script> -->





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!-- START CORE PLUGINS -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/metisMenu/metisMenu.min.js" type="text/javascript"></script>
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- STRAT PAGE LABEL PLUGINS -->
        <script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/app.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>
       
    </body>
</html>
