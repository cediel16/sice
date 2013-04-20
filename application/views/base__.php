<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Sice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />

        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" />

        <!-- styles -->
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/bootstrap.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/bootstrap-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/stilearn.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/stilearn-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/stilearn-helper.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/stilearn-icon.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/font-awesome.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/animate.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/uniform.default.css")) ?>

        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/select2.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/fullcalendar.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "stilearn/css/bootstrap-wysihtml5.css")) ?>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <!-- section header -->
        <header class="header">
            <!--nav bar helper-->
            <div class="navbar-helper">
                <div class="row-fluid">
                    <!--panel site-name-->
                    <div class="span2">
                        <div class="panel-sitename">
                            <h2><a href="index.html"><span class="color-teal">S</span>ice</a></h2>
                        </div>
                    </div>
                    <!--/panel name-->

                    <div class="span6">
                        <!--panel search-->
                        <div class="panel-search">
                            <form class="form-search">
                                <div class="input-icon-append">
                                    <button type="submit" rel="tooltip-bottom" title="search" class="icon"><i class="icofont-search"></i></button>
                                    <input class="input-large search-query grd-white" maxlength="23" placeholder="Search here..." type="text">
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
                                <a class="btn btn-inverse btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                    Layouts
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li class="active"><a tabindex="-1" href="layout_2columns.html">2 Columns</a></li>
                                    <li><a tabindex="-1" href="layout_grid.html">Change Grid</a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="layout_toggleright.html">Toggle Right</a></li>
                                    <li><a tabindex="-1" href="layout_toggleright2.html">Toggle Right Alt</a></li>
                                </ul>
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

                </div><!--/row-fluid-->
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
                    <div class="content content-large">
                        <!-- content-header -->
                        <div class="content-header">
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
                                        <a href="#" class="a-btn" rel="tooltip" title="add new post">
                                            <div class="grd-white">
                                                <span></span>
                                                <span><i class="icofont-edit color-silver-dark"></i></span>
                                                <span><i class="icofont-file color-silver-dark"></i></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="a-btn" rel="tooltip" title="upload something">
                                            <div class="grd-white">
                                                <span></span>
                                                <span><i class="icofont-upload color-silver-dark"></i></span>
                                                <span><i class="icofont-upload-alt color-silver-dark"></i></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="a-btn" rel="tooltip" title="message">
                                            <div class="grd-white">
                                                <span></span>
                                                <span><i class="icofont-envelope color-silver-dark"></i></span>
                                                <span><i class="icofont-envelope-alt color-teal"></i></span>
                                            </div>
                                            <div class="badge badge-info">9</div> <!--don't use span here!-->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="a-btn" rel="tooltip" title="invoice">
                                            <div class="grd-white">
                                                <span></span>
                                                <span><i class="icofont-barcode color-silver-dark"></i></span>
                                                <span><i class="icofont-shopping-cart color-red"></i></span>
                                            </div>
                                            <div class="label label-important">2</div> <!--don't use span here!-->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="a-btn" rel="tooltip" title="check statistics">
                                            <div class="grd-white">
                                                <span></span>
                                                <span><i class="icofont-bar-chart color-silver-dark"></i></span>
                                                <span><i class="icofont-tasks color-silver-dark"></i></span>
                                            </div>
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
                                                        <input data-chart="knob" type="text" data-readOnly=true data-width="120" data-height="120" data-fgColor="#00A600" value="2465" data-min="0" data-max="5000" />
                                                        <div class="stat-label grd-green color-white">Monthly Bandwidth</div>
                                                    </div>
                                                </div>
                                                <div class="span4">
                                                    <div class="dashboard-stat" rel="tooltip" title="usage 8795kb of 10000kb">
                                                        <input data-chart="knob" type="text" data-readOnly=true data-width="120" data-height="120" data-fgColor="#00A0B1" value="8795" data-min="0" data-max="10000" />
                                                        <div class="stat-label grd-teal color-white">Disk Space</div>
                                                    </div>
                                                </div>
                                                <div class="span4">
                                                    <div class="dashboard-stat" rel="tooltip" title="server condition 70%, it's good!">
                                                        <input data-chart="knob" type="text" data-readOnly=true data-width="120" data-height="120" data-fgColor="#AC193D" value="70" data-min="0" data-max="100" />
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
                                                            <img class="media-object" data-src="js/holder.js/64x64">
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
                                                            <img class="media-object" data-src="js/holder.js/64x64">
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
                                                            <img class="media-object" data-src="js/holder.js/64x64">
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
                                                            <img class="media-object" data-src="js/holder.js/64x64">
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
                                                            <img class="media-object" data-src="js/holder.js/64x64">
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
                                                            <img class="media-object" data-src="js/holder.js/64x64">
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
                                                            <img class="media-object" data-src="js/holder.js/64x64">
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
                                                            <img class="media-object" data-src="js/holder.js/64x64">
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
                                                            <img class="media-object" data-src="js/holder.js/64x64">
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
                                            <form>
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
                            </div><!-- /tab stat -->

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

                <div class="span2">
                    <aside class="side-right">
                        <div class="sidebar-right">
                            <div class="sidebar-right-header">
                                <div class="sr-header-left">
                                    <p class="bold">Notificaciones</p>
                                    <small class="muted">30 dic 2012</small>
                                </div>
                            </div><!--/sidebar-right-header-->
                            <div class="sidebar-right-content">
                                <div class="tab-content">
                                    asd                                    
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div><!-- /row -->
        </section><!-- /section content -->

        <!-- section footer -->
        <footer>
            <a rel="to-top" href="#top"><i class="icofont-circle-arrow-up"></i></a>
        </footer>

        <!-- javascript
        ================================================== -->
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/widgets.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/jquery.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/jquery-ui.min.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/bootstrap.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/uniform/jquery.uniform.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/peity/jquery.peity.js")) ?>

        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/select2/select2.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/knob/jquery.knob.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/flot/jquery.flot.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/flot/jquery.flot.resize.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/flot/jquery.flot.categories.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/wysihtml5/wysihtml5-0.3.0.js")) ?>
        <?php //echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/wysihtml5/bootstrap-wysihtml5.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/calendar/fullcalendar.js")) ?>
        <!-- this plugin required jquery ui-->

        <!-- required stilearn template js, for full feature-->
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/holder.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "stilearn/js/stilearn-base.js")) ?>

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
