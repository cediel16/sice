<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard - Stilearn Admin Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="stilearning" />

        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" />

        <!-- styles -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="css/stilearn.css" rel="stylesheet" />
        <link href="css/stilearn-responsive.css" rel="stylesheet" />
        <link href="css/stilearn-helper.css" rel="stylesheet" />
        <link href="css/stilearn-icon.css" rel="stylesheet" />
        <link href="css/font-awesome.css" rel="stylesheet" />
        <link href="css/animate.css" rel="stylesheet" />
        <link href="css/uniform.default.css" rel="stylesheet" />

        <link href="css/select2.css" rel="stylesheet" />
        <link href="css/fullcalendar.css" rel="stylesheet" />
        <link href="css/bootstrap-wysihtml5.css" rel="stylesheet" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>
        <!-- section header -->
        <header class="header">
            <!--nav bar helper-->
            <div class="navbar-helper">
                <div class="row-fluid">
                    <!--panel site-name-->
                    <div class="span2">
                        <div class="panel-sitename">
                            <h2><a href="index.html"><span class="color-teal">Sti</span>learn</a></h2>
                        </div>
                    </div>
                    <!--/panel name-->

                    <div class="span6">
                        <!--panel search-->
                        <div class="panel-search">
                            <form class="form-search" />
                            <div class="input-icon-append">
                                <button type="submit" rel="tooltip-bottom" title="search" class="icon"><i class="icofont-search"></i></button>
                                <input class="input-large search-query grd-white" maxlength="23" placeholder="Search here..." type="text" />
                            </div>
                            </form>
                        </div><!--/panel search-->
                    </div>
                    <div class="span4">
                        <!--panel button ext-->
                        <div class="panel-ext">
                            <div class="btn-group">
                                <!--notification-->
                                <a class="btn btn-danger btn-small" data-toggle="dropdown" href="#" title="3 notification">3</a>
                                <ul class="dropdown-menu dropdown-notification">
                                    <li class="dropdown-header grd-white"><a href="#">View All Notifications</a></li>
                                    <li class="new">
                                        <a href="#">
                                            <div class="notification">John Doe commented on a post</div>
                                            <div class="media">
                                                <img class="media-object pull-left" data-src="js/holder.js/64x64" />
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lorem ipsum <small class="helper-font-small"> john doe</small></h4>
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="#">
                                            <div class="notification">Request new order</div>
                                            <div class="media">
                                                <img class="media-object pull-left" data-src="js/holder.js/64x64" />
                                                <div class="media-body">
                                                    <h4 class="media-heading">Tortor dapibus</h4>
                                                    <p>Vegan fanny pack odio cillum wes anderson 8-bit.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="#">
                                            <div class="notification">Request new order</div>
                                            <div class="media">
                                                <img class="media-object pull-left" data-src="js/holder.js/64x64" />
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lacinia non</h4>
                                                    <p>Messenger bag gentrify pitchfork tattooed craft beer.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notification">John Doe commented on a post</div>
                                            <div class="media">
                                                <img class="media-object pull-left" data-src="js/holder.js/64x64" />
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lorem ipsum <small class="helper-font-small"> john doe</small></h4>
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notification">Request new order</div>
                                            <div class="media">
                                                <img class="media-object pull-left" data-src="js/holder.js/64x64" />
                                                <div class="media-body">
                                                    <h4 class="media-heading">Tortor dapibus</h4>
                                                    <p>Vegan fanny pack odio cillum wes anderson 8-bit.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notification">Request new order</div>
                                            <div class="media">
                                                <img class="media-object pull-left" data-src="js/holder.js/64x64" />
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lacinia non</h4>
                                                    <p>Messenger bag gentrify pitchfork tattooed craft beer.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- <li class="dropdown-footer"><a href=""></a></li> -->
                                </ul><!--notification-->
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-inverse btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                    Shortcut
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a tabindex="-1" href="calendar.html">Calendar</a></li>
                                    <li><a tabindex="-1" href="invoice.html">Invoice</a></li>
                                    <li><a tabindex="-1" href="message.html">Message</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Sample Page</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="pricing.html">Pricing</a></li>
                                            <li><a tabindex="-1" href="bonus-page/resume/index.html">Resume</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Error Page</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="403.html">Error 403</a></li>
                                            <li><a tabindex="-1" href="404.html">Error 404</a></li>
                                            <li><a tabindex="-1" href="405.html">Error 405</a></li>
                                            <li><a tabindex="-1" href="500.html">Error 500</a></li>
                                            <li><a tabindex="-1" href="503.html">Error 503</a></li>
                                            <li><a tabindex="-1" href="under-construction.html">Under Construction</a></li>
                                            <li><a tabindex="-1" href="coming-son.html">Coming Son</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-inverse btn-small" href="#">Other Action</a>
                            </div>
                            <div class="btn-group user-group">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <img class="corner-all" align="middle" src="img/user-thumb.jpg" title="John Doe" alt="john doe" /> <!--this for display on PC device-->
                                    <button class="btn btn-small btn-inverse">John Doe</button> <!--this for display on tablet and phone device-->
                                </a>
                                <ul class="dropdown-menu dropdown-user" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="img-circle" src="img/user.jpg" title="profile" alt="profile" />
                                            </a>
                                            <div class="media-body description">
                                                <p><strong>John Doe</strong></p>
                                                <p class="muted">johndoe@mail.com</p>
                                                <p class="action"><a class="link" href="#">Activity</a> - <a class="link" href="#">Setting</a></p>
                                                <a href="bonus-page/resume/index.html" class="btn btn-primary btn-small btn-block">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-footer">
                                        <div>
                                            <a class="btn btn-small pull-right" href="login.html">Logout</a>
                                            <a class="btn btn-small" href="#">Add Account</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--panel button ext-->
                    </div>
                </div>
            </div><!--/nav bar helper-->
        </header>

        <!-- section content -->
        <section class="section">
            <div class="row-fluid">
                <!-- span side-left -->
                <div class="span1">
                    <!--side bar-->
                    <aside class="side-left">
                        <ul class="sidebar">
                            <li class="active first"> <!--always define class .first for first-child of li element sidebar left-->
                                <a href="index.html" title="dashboard">
                                    <div class="helper-font-24">
                                        <i class="icofont-dashboard"></i>
                                    </div>
                                    <span class="sidebar-text">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="interface.html" title="interface">
                                    <div class="helper-font-24">
                                        <i class="icofont-magnet"></i>
                                    </div>
                                    <span class="sidebar-text">Interface</span>
                                </a>
                            </li>
                            <li>
                                <a href="form.html" title="form">
                                    <div class="badge badge-important">3</div>
                                    <div class="helper-font-24">
                                        <i class="icofont-edit"></i>
                                    </div>
                                    <span class="sidebar-text">Form</span>
                                </a>
                                <ul class="sub-sidebar-form corner-top shadow-white">
                                    <li class="title muted">Quick Upload</li>
                                    <li>
                                        <input type="file" data-form="uniform" onchange="alert('your progres uploading file...')" />
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="form.html" title="form element" class="corner-all">
                                            <i class="icofont-file"></i>
                                            <span class="sidebar-text">Form Element</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="code_editor.html" title="code editor" class="corner-all">
                                            <i class="icofont-book"></i>
                                            <span class="sidebar-text">Code Editor</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery.html" title="gallery" class="corner-all">
                                            <i class="icofont-picture"></i>
                                            <span class="sidebar-text">Gallery</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="charts.html" title="charts">
                                    <div class="helper-font-24">
                                        <i class="icofont-bar-chart"></i>
                                    </div>
                                    <span class="sidebar-text">charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables.html" title="table">
                                    <div class="helper-font-24">
                                        <i class="icofont-table"></i>
                                    </div>
                                    <span class="sidebar-text">Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="grids.html" title="grids">
                                    <div class="helper-font-24">
                                        <i class="icofont-columns"></i>
                                    </div>
                                    <span class="sidebar-text">Grids</span>
                                </a>
                            </li>
                            <li>
                                <a href="icons.html" title="icons">
                                    <div class="helper-font-24">
                                        <i class="icofont-star"></i>
                                    </div>
                                    <span class="sidebar-text">Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href="widgets.html" title="widgets">
                                    <div class="helper-font-24">
                                        <i class="icofont-reorder"></i>
                                    </div>
                                    <span class="sidebar-text">Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="more">
                                    <div class="badge badge-important">5</div>
                                    <div class="helper-font-24">
                                        <i class="icofont-th-large"></i>
                                    </div>
                                    <span class="sidebar-text">More</span>
                                </a>
                                <ul class="sub-sidebar corner-top shadow-silver-dark">
                                    <li>
                                        <a href="404.html" title="not found">
                                            <div class="helper-font-24">
                                                <i class="icofont-warning-sign"></i>
                                            </div>
                                            <span class="sidebar-text">404</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.html" title="login">
                                            <div class="helper-font-24">
                                                <i class="icofont-lock"></i>
                                            </div>
                                            <span class="sidebar-text">Login</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoice.html" title="invoice">
                                            <div class="helper-font-24">
                                                <i class="icofont-barcode"></i>
                                            </div>
                                            <span class="sidebar-text">Invoice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pricing.html" title="pricing table">
                                            <div class="helper-font-24">
                                                <i class="icofont-briefcase"></i>
                                            </div>
                                            <span class="sidebar-text">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="bonus-page/resume/index.html" title="resume">
                                            <div class="helper-font-24">
                                                <i class="icofont-user"></i>
                                            </div>
                                            <span class="sidebar-text">Resume</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </aside><!--/side bar -->
                </div><!-- span side-left -->

                <!-- span content -->
                <div class="span9">
                    <!-- content -->
                    <div class="content">
                        <!-- content-header -->
                        <div class="content-header">
                            <ul class="content-header-action pull-right">
                                <li>
                                    <a href="#">
                                        <span data-chart="peity-bar" data-height="32" data-colours='["#00A600", "#00A600"]'>5,3,9,6,5,9,7,3,5,2</span>
                                        <div class="action-text color-green">8765 <span class="helper-font-small color-silver-dark">Visits</span></div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <span data-chart="peity-bar" data-height="32" data-colours='["#00A0B1", "#00A0B1"]'>9,7,9,6,3,5,3,5,5,2</span>
                                        <div class="action-text color-teal">1437 <span class="helper-font-small color-silver-dark">Users</span></div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <span data-chart="peity-bar" data-height="32" data-colours='["#BF1E4B", "#BF1E4B"]'>6,5,9,7,3,5,2,5,3,9</span>
                                        <div class="action-text color-red">4367 <span class="helper-font-small color-silver-dark">Orders</span></div>
                                    </a>
                                </li>
                            </ul>
                            <h2><i class="icofont-home"></i> Dashboard <small>welcome to stilearn</small></h2>
                        </div><!-- /content-header -->

                        <!-- content-breadcrumb -->
                        <div class="content-breadcrumb">
                            <!--breadcrumb-nav-->
                            <ul class="breadcrumb-nav pull-right">
                                <li class="divider"></li>
                                <li class="btn-group">
                                    <a href="#" class="btn btn-small btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="icofont-tasks"></i> Tasks
                                        <i class="icofont-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Some Action</a></li>
                                        <li><a href="#">Other Action</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Something Else</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="btn-group">
                                    <a href="#" class="btn btn-small btn-link">
                                        <i class="icofont-money"></i> Orders <span class="color-red">(+12)</span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="btn-group">
                                    <a href="#" class="btn btn-small btn-link">
                                        <i class="icofont-user"></i> Users <span class="color-red">(+34)</span>
                                    </a>
                                </li>
                            </ul><!--/breadcrumb-nav-->

                            <!--breadcrumb-->
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="icofont-home"></i> Dashboard</a> <span class="divider">&rsaquo;</span></li>
                                <li class="active">Data elements</li>
                            </ul><!--/breadcrumb-->
                        </div><!-- /content-breadcrumb -->

                        <!-- content-body -->
                        <div class="content-body">
                            <!-- dashboar -->
                            <!-- shortcut button -->
                            <div class="shortcut-group">
                                <ul class="a-btn-group">
                                    <li>
                                        <a href="#" class="a-btn grd-white" rel="tooltip" title="add new post">
                                            <span></span>
                                            <span><i class="icofont-edit color-silver-dark"></i></span>
                                            <span class="color-silver-dark"><i class="icofont-file color-silver-dark"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="a-btn grd-white" rel="tooltip" title="upload something">
                                            <span></span>
                                            <span><i class="icofont-upload color-silver-dark"></i></span>
                                            <span class="color-silver-dark"><i class="icofont-upload-alt color-silver-dark"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="a-btn grd-white" rel="tooltip" title="message">
                                            <span></span>
                                            <span><i class="icofont-envelope color-silver-dark"></i></span>
                                            <span class="color-silver-dark"><i class="icofont-envelope-alt color-teal"></i></span>
                                            <div class="badge badge-info">9</div> <!--don't use span here!-->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="a-btn grd-white" rel="tooltip" title="invoice">
                                            <span></span>
                                            <span><i class="icofont-barcode color-silver-dark"></i></span>
                                            <span class="color-silver-dark"><i class="icofont-shopping-cart color-red"></i></span>
                                            <div class="label label-important">2</div> <!--don't use span here!-->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="a-btn grd-white" rel="tooltip" title="check statistics">
                                            <span></span>
                                            <span><i class="icofont-bar-chart color-silver-dark"></i></span>
                                            <span class="color-silver-dark"><i class="typicn-lineChart"></i></span>
                                        </a>
                                    </li>
                                    <li class="clearfix"></li>
                                </ul>
                            </div><!-- /shortcut button -->

                            <div class="divider-content"><span></span></div>

                            <!-- tab stat -->
                            <div class="box-tab corner-all">
                                <div class="box-header corner-top">
                                    <div class="header-control pull-right">
                                        <a data-box="collapse"><i class="icofont-caret-up"></i></a>
                                    </div>
                                    <ul class="nav nav-tabs" id="tab-stat">
                                        <li class="active"><a data-toggle="tab" href="#system-stat">System Stat</a></li>
                                        <li><a data-toggle="tab" href="#server-stat">Server Stat</a></li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="system-stat">
                                            <div class="row-fluid">
                                                <div class="span4">
                                                    <div class="dashboard-stat">
                                                        <div id="visitor-stat" class="chart" style="height: 120px;"></div>
                                                        <div class="stat-label grd-green color-white">Visitor</div>
                                                    </div>
                                                </div>
                                                <div class="span4">
                                                    <div class="dashboard-stat">
                                                        <div id="order-stat" class="chart" style="height: 120px;"></div>
                                                        <div class="stat-label grd-teal color-white">Users</div>
                                                    </div>
                                                </div>
                                                <div class="span4">
                                                    <div class="dashboard-stat">
                                                        <div id="user-stat" class="chart" style="height: 120px;"></div>
                                                        <div class="stat-label grd-red color-white">Orders</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="server-stat">
                                            <div class="row-fluid">
                                                <div class="span4">
                                                    <div class="dashboard-stat" rel="tooltip" title="usage 2465kb of 5000kb">
                                                        <input data-chart="knob" type="text" data-readonly="true" data-width="120" data-height="120" data-fgcolor="#00A600" value="2465" data-min="0" data-max="5000" />
                                                        <div class="stat-label grd-green color-white">Monthly Bandwidth</div>
                                                    </div>
                                                </div>
                                                <div class="span4">
                                                    <div class="dashboard-stat" rel="tooltip" title="usage 8795kb of 10000kb">
                                                        <input data-chart="knob" type="text" data-readonly="true" data-width="120" data-height="120" data-fgcolor="#00A0B1" value="8795" data-min="0" data-max="10000" />
                                                        <div class="stat-label grd-teal color-white">Disk Space</div>
                                                    </div>
                                                </div>
                                                <div class="span4">
                                                    <div class="dashboard-stat" rel="tooltip" title="server condition 70%, it's good!">
                                                        <input data-chart="knob" type="text" data-readonly="true" data-width="120" data-height="120" data-fgcolor="#AC193D" value="70" data-min="0" data-max="100" />
                                                        <div class="stat-label grd-red color-white">Server Health</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /tab stat -->

                            <!-- tab resume content -->
                            <div class="row-fluid">
                                <!-- tab resume update -->
                                <div class="span6">
                                    <div class="box-tab corner-all">
                                        <div class="box-header corner-top">
                                            <!--tab action-->
                                            <div class="header-control pull-right">
                                                <a data-box="collapse"><i class="icofont-caret-up"></i></a>
                                                <a data-box="close" data-hide="rotateOutDownLeft">&times;</a>
                                            </div>
                                            <ul class="nav nav-pills">
                                                <!--tab menus-->
                                                <li class="active"><a data-toggle="tab" href="#recent-orders">Recent Orders</a></li>
                                                <li><a data-toggle="tab" href="#recent-posts">Recent Posts</a></li>
                                                <li><a data-toggle="tab" href="#recent-comments">Recent Comments</a></li><!--/tab menus-->
                                            </ul>
                                        </div>
                                        <div class="box-body">
                                            <!-- widgets-tab-body -->
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="recent-orders">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" data-src="js/holder.js/64x64" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Lorem ipsum </a><small class="helper-font-small">by john doe on 22 aug 2012, ip 192.168.56.7</small></h4>
                                                            <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                                            <div class="btn-group pull-right">
                                                                <a href="#" class="btn btn-mini">Approve</a>
                                                                <a href="#" class="btn btn-mini">Invoice</a>
                                                                <a href="#" class="btn btn-mini btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" data-src="js/holder.js/64x64" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Lorem ipsum </a><small class="helper-font-small">by jane smith on 18 aug 2012, ip 192.168.56.7</small></h4>
                                                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                                                            <div class="btn-group pull-right">
                                                                <a href="#" class="btn btn-mini">Approve</a>
                                                                <a href="#" class="btn btn-mini">Invoice</a>
                                                                <a href="#" class="btn btn-mini btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" data-src="js/holder.js/64x64" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Lorem ipsum </a><small class="helper-font-small">by john smith on 18 aug 2012, ip 192.168.56.7</small></h4>
                                                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                                            <div class="btn-group pull-right">
                                                                <a href="#" class="btn btn-mini">Approve</a>
                                                                <a href="#" class="btn btn-mini">Invoice</a>
                                                                <a href="#" class="btn btn-mini btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-small btn-link pull-right">View all &rarr;</a>
                                                </div>
                                                <div class="tab-pane fade" id="recent-posts">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" data-src="js/holder.js/64x64" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Tortor dapibus </a><small class="helper-font-small">by jane smith on 11 aug 2012, ip 192.168.56.7</small></h4>
                                                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                                            <div class="btn-group pull-right">
                                                                <a href="#" class="btn btn-mini">Edit</a>
                                                                <a href="#" class="btn btn-mini">Draft</a>
                                                                <a href="#" class="btn btn-mini btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" data-src="js/holder.js/64x64" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Tortor dapibus </a><small class="helper-font-small">by john doe on 10 aug 2012, ip 192.168.56.7</small></h4>
                                                            <p>Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel.</p>
                                                            <div class="btn-group pull-right">
                                                                <a href="#" class="btn btn-mini">Edit</a>
                                                                <a href="#" class="btn btn-mini">Draft</a>
                                                                <a href="#" class="btn btn-mini btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" data-src="js/holder.js/64x64" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Tortor dapibus </a><small class="helper-font-small">by jane doe on 9 aug 2012, ip 192.168.56.7</small></h4>
                                                            <p>Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                                                            <div class="btn-group pull-right">
                                                                <a href="#" class="btn btn-mini">Edit</a>
                                                                <a href="#" class="btn btn-mini">Draft</a>
                                                                <a href="#" class="btn btn-mini btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-small btn-link pull-right">View all &rarr;</a>
                                                </div>
                                                <div class="tab-pane fade" id="recent-comments">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" data-src="js/holder.js/64x64" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Lacinia non </a><small class="helper-font-small">by jane smith on 20 aug 2012, ip 192.168.56.7</small></h4>
                                                            <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                                            <div class="btn-group pull-right">
                                                                <a href="#" class="btn btn-mini">Approve</a>
                                                                <a href="#" class="btn btn-mini">Spam</a>
                                                                <a href="#" class="btn btn-mini btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" data-src="js/holder.js/64x64" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Lacinia non </a><small class="helper-font-small">by john smith on 19 aug 2012, ip 192.168.56.7</small></h4>
                                                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                                                            <div class="btn-group pull-right">
                                                                <a href="#" class="btn btn-mini">Approve</a>
                                                                <a href="#" class="btn btn-mini">Spam</a>
                                                                <a href="#" class="btn btn-mini btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" data-src="js/holder.js/64x64" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Lacinia non </a><small class="helper-font-small">by john doe on 17 aug 2012, ip 192.168.56.7</small></h4>
                                                            <p>Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                                                            <div class="btn-group pull-right">
                                                                <a href="#" class="btn btn-mini">Approve</a>
                                                                <a href="#" class="btn btn-mini">Spam</a>
                                                                <a href="#" class="btn btn-mini btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-small btn-link pull-right">View all &rarr;</a>
                                                </div>
                                            </div><!--/widgets-tab-body-->
                                        </div><!--/box-body-->
                                    </div><!--/box-tab-->
                                </div><!-- tab resume update -->
                                <div class="span6">
                                    <div class="box corner-all">
                                        <div class="box-header corner-top grd-white">
                                            <div class="header-control">
                                                <a data-box="collapse"><i class="icofont-caret-up"></i></a>
                                                <a data-box="close" data-hide="rotateOutDownRight">&times;</a>
                                            </div>
                                            <span><i class="icofont-envelope"></i> Quick Mail</span>
                                        </div>
                                        <div class="box-body">
                                            <form />
                                            <div class="control-group">
                                                <label class="control-label">To</label>
                                                <div class="controls">
                                                    <input type="hidden" class="input-block-level" name="reseiver" value="johndoe@mail.com, janedoe@mail.com, johnsmith@mail.com, janesmith@mail.com" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Subject</label>
                                                <div class="controls">
                                                    <input type="text" class="input-block-level grd-white" name="subject" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Message</label>
                                                <div class="controls">
                                                    <textarea name="message" data-form="wysihtml5" rows="6" class="span11"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <input type="reset" class="btn" value="Reset" />
                                                <input type="submit" class="btn btn-primary" value="Submit" />
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- tab stat -->

                            <!--schedule-->
                            <div class="box corner-all">
                                <div class="box-header grd-white color-silver-dark corner-top">
                                    <div class="header-control">
                                        <a data-box="collapse"><i class="icofont-caret-up"></i></a>
                                    </div>
                                    <span>Schedule this month</span>
                                </div>
                                <div class="box-body">
                                    <div id="schedule"></div>
                                </div>
                            </div>
                            <!--schedule-->

                            <!--/dashboar-->
                        </div><!--/content-body -->
                    </div><!-- /content -->
                </div><!-- /span content -->

                <!-- span side-right -->
                <div class="span2">
                    <!-- side-right -->
                    <aside class="side-right">
                        <!-- sidebar-right -->
                        <div class="sidebar-right">
                            <!--sidebar-right-header-->
                            <div class="sidebar-right-header">
                                <div class="sr-header-right">
                                    <h2><span class="label label-info">$26,875</span></h2>
                                </div>
                                <div class="sr-header-left">
                                    <p class="bold">Balance</p>
                                    <small class="muted">Dec 30 2012</small>
                                </div>
                            </div><!--/sidebar-right-header-->
                            <!--sidebar-right-control-->
                            <div class="sidebar-right-control">
                                <ul class="sr-control-item">
                                    <li class="active"><a href="#contact" data-toggle="tab" title="contacts"><i class="icofont-group"></i></a></li>
                                    <li><a href="#alt1" data-toggle="tab" title="alternative 1"><i class="icofont-flag"></i></a></li>
                                    <li rel="tooltip-bottom" title="view site"><a href="index.html" target="_BLANK"><i class="icofont-external-link"></i></a></li>
                                </ul>
                            </div><!-- /sidebar-right-control-->
                            <!-- sidebar-right-content -->
                            <div class="sidebar-right-content">
                                <div class="tab-content">

                                    <!--chat-->
                                    <div class="tab-pane fade" id="chat">
                                        <div class="side-chat">
                                            <!--header part-->
                                            <div class="chat-header">
                                                <div class="chat-action">
                                                    <div class="btn-group pull-right">
                                                        <!--we use data toggle tab for navigate this action-->
                                                        <a class="bg-transparent no-border" href="#contact" data-toggle="tab" title="minimize"><i class="icofont-minus"></i></a>
                                                        <a class="bg-transparent no-border" title="pop out"><i class="icofont-resize-full"></i></a>
                                                        <a class="bg-transparent no-border" href="#contact" data-toggle="tab" title="close"><i class="icofont-remove-sign"></i></a>
                                                    </div>
                                                </div>
                                                <h5><i class="icofont-certificate color-green"></i> Jane smith</h5>
                                            </div>
                                            <!--content part-->
                                            <div class="chat-content">
                                                <div class="chat-in">
                                                    <span class="chat-time">10:45am</span>
                                                    <strong class="chat-user">Jane smith: </strong>
                                                    <div class="chat-text">Lorem ipsum dolor</div>
                                                </div>
                                                <div class="chat-out">
                                                    <span class="chat-time">10:47am</span>
                                                    <strong class="chat-user">me: </strong>
                                                    <div class="chat-text">Erat duis lectus vel wisi, quibusdam aliquam vehicula eleifend ut</div>
                                                </div>
                                                <div class="chat-in">
                                                    <span class="chat-time">10:50am</span>
                                                    <strong class="chat-user">Jane smith: </strong>
                                                    <div class="chat-text">Et sagittis ut vel dolor nullam proin</div>
                                                </div>
                                                <div class="chat-out">
                                                    <span class="chat-time">10:52am</span>
                                                    <strong class="chat-user">me: </strong>
                                                    <div class="chat-text">massa massa quisque sodales id dictumst.</div>
                                                </div>
                                            </div>
                                            <!--status typed part-->
                                            <div class="chat-typed"><i class="typicn-chat"></i> Jane smith is typing...</div>
                                            <!--input part-->
                                            <div class="chat-input">
                                                <div class="chat-desc muted">Lorem ipsum dolor sit amet.</div>
                                                <textarea class="input-block-level" placeholder="chat here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="divider-content"><span></span></div>
                                    </div><!--chat-->

                                    <!--contact-->
                                    <div class="tab-pane fade active in" id="contact">
                                        <div class="side-contact">
                                            <!--contact-control-->
                                            <div class="contact-control">
                                                <div class="btn-group pull-right">
                                                    <button class="dropdown-toggle bg-transparent no-border" data-toggle="dropdown">
                                                        <i class="icofont-caret-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i class="icofont-certificate color-green"></i> Online</a></li>
                                                        <li><a href="#"><i class="icofont-certificate color-silver-dark"></i> Ofline</a></li>
                                                        <li><a href="#"><i class="icofont-certificate color-red"></i> Busy</a></li>
                                                        <li><a href="#"><i class="icofont-certificate color-orange"></i> Idle</a></li>
                                                    </ul>
                                                </div>
                                                <h5><i class="icofont-comment color-green"></i> John Doe</h5>
                                            </div><!--/contact-control-->
                                            <!--contact-search-->
                                            <div class="contact-search">
                                                <div class="input-icon-prepend">
                                                    <div class="icon">
                                                        <button type="submit">
                                                            <i class="typicn-message color-silver-dark"></i>
                                                        </button>
                                                    </div>
                                                    <input class="input-block-level grd-white" maxlength="11" type="text" name="contact-search" placeholder="chat with..." />
                                                </div>
                                            </div><!--/contact-search-->
                                            <!--contact-list, we set this max-height:380px, you can set this if you want-->
                                            <ul class="contact-list">
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a href="#chat" data-toggle="tab" data-id="iin@mail.com">
                                                        <!--we use contact-item structure like the component media in bootstrap-->
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img class="contact-item-object" style="width: 32px;height: 32px;" src="img/user-thumb-mini.jpg" />
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div class="status" title="busy"><i class="icofont-certificate color-red"></i></div>
                                                                <p class="contact-item-heading bold">Iin T.</p>
                                                                <p class="help-block"><small class="muted">Team Leader</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a href="#chat" data-toggle="tab" data-id="sungep@mail.com">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img class="contact-item-object" style="width: 32px;height: 32px;" src="img/user-thumb-mini.jpg" />
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div class="status" title="idle"><i class="icofont-certificate color-orange"></i></div>
                                                                <p class="contact-item-heading bold">Sungep</p>
                                                                <p class="help-block"><small class="muted">UI designer</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a href="#chat" data-toggle="tab" data-id="harab@mail.com">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img class="contact-item-object" style="width: 32px;height: 32px;" src="img/user-thumb-mini.jpg" />
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div class="status" title="ofline"><i class="icofont-certificate color-silver-dark"></i></div>
                                                                <p class="contact-item-heading bold">Harab</p>
                                                                <p class="help-block"><small class="muted">Team Leader</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white active"> <!-- you can use this for active contact or your self status-->
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a href="#chat" data-toggle="tab" data-id="janesmith@mail.com">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img class="contact-item-object" style="width: 32px;height: 32px;" src="img/user-thumb-mini.jpg" />
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div class="status" title="online"><i class="icofont-certificate color-green"></i></div>
                                                                <p class="contact-item-heading bold">Jane smith</p>
                                                                <p class="help-block"><small class="muted">Data analyst</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a href="#chat" data-toggle="tab" data-id="mahardika@mail.com">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img class="contact-item-object" style="width: 32px;height: 32px;" src="img/user-thumb-mini.jpg" />
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div class="status" title="online"><i class="icofont-certificate color-green"></i></div>
                                                                <p class="contact-item-heading bold">Mahardika</p>
                                                                <p class="help-block"><small class="muted">PHP Developer</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a href="#chat" data-toggle="tab" data-id="patul@mail.com">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img class="contact-item-object" style="width: 32px;height: 32px;" src="img/user-thumb-mini.jpg" />
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div class="status" title="ofline"><i class="icofont-certificate color-silver-dark"></i></div>
                                                                <p class="contact-item-heading bold">Pathoel</p>
                                                                <p class="help-block"><small class="muted">UI designer</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a href="#chat" data-toggle="tab" data-id="opytama@mail.com">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img class="contact-item-object" style="width: 32px;height: 32px;" src="img/user-thumb-mini.jpg" />
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div class="status" title="ofline"><i class="icofont-certificate color-silver-dark"></i></div>
                                                                <p class="contact-item-heading bold">Opytama</p>
                                                                <p class="help-block"><small class="muted">PHP Developer</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul><!--/contact-list-->
                                        </div>
                                    </div><!--/contact-->

                                    <!--alternative 1-->
                                    <div class="tab-pane fade" id="alt1">
                                        <div class="divider-content"><span></span></div> <!--divider-->

                                        <button class="btn btn-block btn-mini btn-primary">Add Action</button>
                                        <button class="btn btn-block btn-mini">Add Action</button>

                                        <div class="divider-content"><span></span></div> <!--divider-->

                                        <!-- side-task -->
                                        <div class="side-task">
                                            <div class="task active">
                                                <span class="task-header">
                                                    <img src="img/loader_16.gif" /> 
                                                    <strong>Portofolio_W34GF.zip</strong>
                                                </span>
                                                <span class="task-desc">9.1 of 17MB - 243KB/sec - 1 min</span>
                                                <div class="progress progress-striped active" rel="tooltip" title="40%">
                                                    <div class="bar bar-success" style="width: 40%;"></div>
                                                </div>
                                            </div>
                                            <div class="task fade in">
                                                <i class="icofont-ok-sign color-green" title="success"></i>
                                                <span class="task-desc">Paralax_bg_5448.jpg</span>
                                                <button data-dismiss="alert" class="close">&times;</button>
                                            </div>
                                            <div class="task fade in">
                                                <i class="icofont-ok-sign color-green" title="success"></i>
                                                <span class="task-desc">Widget_sidebar_W0089.psd</span>
                                                <button data-dismiss="alert" class="close">&times;</button>
                                            </div>
                                            <div class="task fade in">
                                                <i class="icofont-remove-sign color-red" title="failed"></i>
                                                <span class="task-desc">Widget_sidebar_W0089.psd</span>
                                                <button data-dismiss="alert" class="close">&times;</button>
                                            </div>
                                            <div class="task fade in">
                                                <i class="typicn-loop color-silver-dark" title="cancel"></i>
                                                <span class="task-desc">Widget_sidebar_W0089.psd</span>
                                                <button data-dismiss="alert" class="close">&times;</button>
                                            </div>
                                            <div class="task fade in">
                                                <i class="typicn-loop color-silver-dark" title="cancel"></i>
                                                <span class="task-desc">Widget_sidebar_W0089.psd</span>
                                                <button data-dismiss="alert" class="close">&times;</button>
                                            </div>
                                            <div class="task fade in">
                                                <i class="icofont-ok-sign color-green" title="success"></i>
                                                <span class="task-desc">Icons_bg_I98GH.jpg</span>
                                                <button data-dismiss="alert" class="close">&times;</button>
                                            </div>
                                            <div class="task fade in">
                                                <i class="icofont-remove-sign color-red" title="failed"></i>
                                                <span class="task-desc">Dashboard_3805.jpg</span>
                                                <button data-dismiss="alert" class="close">&times;</button>
                                            </div>
                                        </div><!-- /side-task -->

                                        <div class="divider-content"><span></span></div> <!--divider-->

                                    </div><!--/alternative 1-->

                                </div>
                            </div><!-- /sidebar-right-content -->
                        </div><!-- /sidebar-right -->
                    </aside><!-- /side-right -->
                </div><!-- /span side-right -->
            </div>
        </section>

        <!-- section footer -->
        <footer>
            <a rel="to-top" href="#top"><i class="icofont-circle-arrow-up"></i></a>
        </footer>

        <!-- javascript
        ================================================== -->
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/uniform/jquery.uniform.js"></script>
        <script src="js/peity/jquery.peity.js"></script>

        <script src="js/select2/select2.js"></script>
        <script src="js/knob/jquery.knob.js"></script>
        <script src="js/flot/jquery.flot.js"></script>
        <script src="js/flot/jquery.flot.resize.js"></script>
        <script src="js/flot/jquery.flot.categories.js"></script>
        <script src="js/wysihtml5/wysihtml5-0.3.0.js"></script>
        <script src="js/wysihtml5/bootstrap-wysihtml5.js"></script>
        <script src="js/calendar/fullcalendar.js"></script> <!-- this plugin required jquery ui-->

        <!-- required stilearn template js, for full feature-->
        <script src="js/holder.js"></script>
        <script src="js/stilearn-base.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                // try your js
                
                // normalize event tab-stat, we hack something here couse the flot re-draw event is any some bugs for this case
                $('#tab-stat > a[data-toggle="tab"]').on('shown', function(){
                    if(sessionStorage.mode == 4){ // this hack only for mode side-only
                        $('body,html').animate({
                            scrollTop: 0
                        }, 'slow');
                    }
                });
                
                // peity chart
                $("span[data-chart=peity-bar]").peity("bar");
                
                // Input tags with select2
                $('input[name=reseiver]').select2({
                    tags:[]
                });
                
                // uniform
                $('[data-form=uniform]').uniform();
                
                // wysihtml5
                $('[data-form=wysihtml5]').wysihtml5()
                toolbar = $('[data-form=wysihtml5]').prev();
                btn = toolbar.find('.btn');
                
                $.each(btn, function(k, v){
                    $(v).addClass('btn-mini')
                });
                
                // Server stat circular by knob
                $("input[data-chart=knob]").knob();
                
                // system stat flot
                d1 = [ ['jan', 231], ['feb', 243], ['mar', 323], ['apr', 352], ['maj', 354], ['jun', 467], ['jul', 429] ];
                d2 = [ ['jan', 87], ['feb', 67], ['mar', 96], ['apr', 105], ['maj', 98], ['jun', 53], ['jul', 87] ];
                d3 = [ ['jan', 34], ['feb', 27], ['mar', 46], ['apr', 65], ['maj', 47], ['jun', 79], ['jul', 95] ];
                
                var visitor = $("#visitor-stat"),
                order = $("#order-stat"),
                user = $("#user-stat"),
                
                data_visitor = [{
                        data: d1,
                        color: '#00A600'
                    }],
                data_order = [{
                        data: d2,
                        color: '#2E8DEF'
                    }],
                data_user = [{
                        data: d3,
                        color: '#DC572E'
                    }],
                 
                
                options_lines = {
                    series: {
                        lines: {
                            show: true,
                            fill: true
                        },
                        points: {
                            show: true
                        },
                        hoverable: true
                    },
                    grid: {
                        backgroundColor: '#FFFFFF',
                        borderWidth: 1,
                        borderColor: '#CDCDCD',
                        hoverable: true
                    },
                    legend: {
                        show: false
                    },
                    xaxis: {
                        mode: "categories",
                        tickLength: 0
                    },
                    yaxis: {
                        autoscaleMargin: 2
                    }
        
                };
                
                // render stat flot
                $.plot(visitor, data_visitor, options_lines);
                $.plot(order, data_order, options_lines);
                $.plot(user, data_user, options_lines);
                
                // tootips chart
                function showTooltip(x, y, contents) {
                    $('<div id="tooltip" class="bg-black corner-all color-white">' + contents + '</div>').css( {
                        position: 'absolute',
                        display: 'none',
                        top: y + 5,
                        left: x + 5,
                        border: '0px',
                        padding: '2px 10px 2px 10px',
                        opacity: 0.9,
                        'font-size' : '11px'
                    }).appendTo("body").fadeIn(200);
                }

                var previousPoint = null;
                $('#visitor-stat, #order-stat, #user-stat').bind("plothover", function (event, pos, item) {
                    
                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;

                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);
                            label = item.series.xaxis.ticks[item.datapoint[0]].label;
                            
                            showTooltip(item.pageX, item.pageY,
                            label + " = " + y);
                        }
                    }
                    else {
                        $("#tooltip").remove();
                        previousPoint = null;            
                    }
                    
                });
                // end tootips chart
                
                
                // Schedule Calendar
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
		
                var calendar = $('#schedule').fullCalendar({
                    header: {
                        left: 'title',
                        center: '',
                        right: 'prev,next today,month,basicWeek,basicDay'
                    },
                    events: [
                        {
                            title: 'Start a project',
                            start: new Date(y, m, 1)
                        },
                        {
                            title: 'interview and data collection',
                            start: new Date(y, m, 3),
                            end: new Date(y, m, 7)
                        },
                        {
                            title: 'Creating design interface',
                            start: new Date(y, m, 9),
                            end: new Date(y, m, 12)
                        },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, 19, 10, 30),
                            allDay: false
                        },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, 28, 10, 30),
                            allDay: false
                        },
                        {
                            title: 'Date',
                            start: new Date(y, m, d, 12, 0),
                            end: new Date(y, m, d, 14, 0),
                            allDay: false
                        },
                        {
                            title: 'Birthday Party',
                            start: new Date(y, m, d+1, 19, 0),
                            end: new Date(y, m, d+1, 22, 30),
                            allDay: false
                        }
                    ]
                });
                // end Schedule Calendar
            });
      
        </script>
    </body>
</html>
