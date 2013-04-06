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
        <!-- start header -->
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
                            <form class="form-search">
                                <div class="input-icon-append">
                                    <button class="icon" rel="tooltip-bottom" type="submit" data-original-title="search"><i class="icofont-search"></i></button>
                                    <input type="text" placeholder="Search here..." maxlength="23" class="input-large search-query grd-white">
                                </div>
                            </form>
                        </div><!--/panel search-->
                    </div>
                    <div class="span4">
                        <!--panel button ext-->
                        <div class="panel-ext">
                            <div class="btn-group">
                                <!--notification-->
                                <a title="3 notification" href="#" data-toggle="dropdown" class="btn btn-danger btn-small">3</a>
                                <ul class="dropdown-menu dropdown-notification">
                                    <li class="dropdown-header grd-white"><a href="#">View All Notifications</a></li>
                                    <li class="new">
                                        <a href="#">
                                            <div class="notification">John Doe commented on a post</div>
                                            <div class="media">
                                                <img data-src="js/holder.js/64x64" class="media-object pull-left" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACBUlEQVR4nO2T36qicBRGz/s/ytZM04KESCm8kLqLQKSiIvJP7Vf45urENFMzDHX84My+WCD462O50g9Vxf/MB1uAjQVgC7CxAGwBNhaALcDGArAF2FgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdi8FGC32yGOY7iuCxGBiPx25nK5YDQaPb3P2H5LgMPhANd1EccxTqfT03N5nmM6nf6T5Fduvy1AmqYQEez3+z/+i0EQoKqqO8nP35ZlCVVFWZYQEaRp+vJ2ZwF834eIYDweo9frwfd9ZFmGtm2hqmjbFlEUoSgKqOqdZF3X8H0fvu/jeDzeruu6fnm7swCO40BEsFwu0bYtlsslRATz+RyqiizLMJvNbud/lSyKAiJy+8Y/H+Yd250ECIIAIoKmaaCqaJoGIoJ+vw9VxWAwuN17JhlFEUQEURS9ffvLA0wmk4eSQRDcST1CVbFarSAit9d9tVq9bbuTAJvN5uFrmuf5w/M/C57PZ3iehzAMUVUVwjCE53k4n88vb3cWQFWxXq8xHA7hui7CMMRiscD1ev2rZJIkcBwH2+0WqortdgvHcZAkycvbnQb4DlgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdhYALYAGwvAFmBjAdgCbCwAW4CNBWALsLEAbAE2PwA0hBvcPPTxBQAAAABJRU5ErkJggg==">
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
                                                <img data-src="js/holder.js/64x64" class="media-object pull-left" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACBUlEQVR4nO2T36qicBRGz/s/ytZM04KESCm8kLqLQKSiIvJP7Vf45urENFMzDHX84My+WCD462O50g9Vxf/MB1uAjQVgC7CxAGwBNhaALcDGArAF2FgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdi8FGC32yGOY7iuCxGBiPx25nK5YDQaPb3P2H5LgMPhANd1EccxTqfT03N5nmM6nf6T5Fduvy1AmqYQEez3+z/+i0EQoKqqO8nP35ZlCVVFWZYQEaRp+vJ2ZwF834eIYDweo9frwfd9ZFmGtm2hqmjbFlEUoSgKqOqdZF3X8H0fvu/jeDzeruu6fnm7swCO40BEsFwu0bYtlsslRATz+RyqiizLMJvNbud/lSyKAiJy+8Y/H+Yd250ECIIAIoKmaaCqaJoGIoJ+vw9VxWAwuN17JhlFEUQEURS9ffvLA0wmk4eSQRDcST1CVbFarSAit9d9tVq9bbuTAJvN5uFrmuf5w/M/C57PZ3iehzAMUVUVwjCE53k4n88vb3cWQFWxXq8xHA7hui7CMMRiscD1ev2rZJIkcBwH2+0WqortdgvHcZAkycvbnQb4DlgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdhYALYAGwvAFmBjAdgCbCwAW4CNBWALsLEAbAE2PwA0hBvcPPTxBQAAAABJRU5ErkJggg==">
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
                                                <img data-src="js/holder.js/64x64" class="media-object pull-left" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACBUlEQVR4nO2T36qicBRGz/s/ytZM04KESCm8kLqLQKSiIvJP7Vf45urENFMzDHX84My+WCD462O50g9Vxf/MB1uAjQVgC7CxAGwBNhaALcDGArAF2FgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdi8FGC32yGOY7iuCxGBiPx25nK5YDQaPb3P2H5LgMPhANd1EccxTqfT03N5nmM6nf6T5Fduvy1AmqYQEez3+z/+i0EQoKqqO8nP35ZlCVVFWZYQEaRp+vJ2ZwF834eIYDweo9frwfd9ZFmGtm2hqmjbFlEUoSgKqOqdZF3X8H0fvu/jeDzeruu6fnm7swCO40BEsFwu0bYtlsslRATz+RyqiizLMJvNbud/lSyKAiJy+8Y/H+Yd250ECIIAIoKmaaCqaJoGIoJ+vw9VxWAwuN17JhlFEUQEURS9ffvLA0wmk4eSQRDcST1CVbFarSAit9d9tVq9bbuTAJvN5uFrmuf5w/M/C57PZ3iehzAMUVUVwjCE53k4n88vb3cWQFWxXq8xHA7hui7CMMRiscD1ev2rZJIkcBwH2+0WqortdgvHcZAkycvbnQb4DlgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdhYALYAGwvAFmBjAdgCbCwAW4CNBWALsLEAbAE2PwA0hBvcPPTxBQAAAABJRU5ErkJggg==">
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
                                                <img data-src="js/holder.js/64x64" class="media-object pull-left" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACBUlEQVR4nO2T36qicBRGz/s/ytZM04KESCm8kLqLQKSiIvJP7Vf45urENFMzDHX84My+WCD462O50g9Vxf/MB1uAjQVgC7CxAGwBNhaALcDGArAF2FgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdi8FGC32yGOY7iuCxGBiPx25nK5YDQaPb3P2H5LgMPhANd1EccxTqfT03N5nmM6nf6T5Fduvy1AmqYQEez3+z/+i0EQoKqqO8nP35ZlCVVFWZYQEaRp+vJ2ZwF834eIYDweo9frwfd9ZFmGtm2hqmjbFlEUoSgKqOqdZF3X8H0fvu/jeDzeruu6fnm7swCO40BEsFwu0bYtlsslRATz+RyqiizLMJvNbud/lSyKAiJy+8Y/H+Yd250ECIIAIoKmaaCqaJoGIoJ+vw9VxWAwuN17JhlFEUQEURS9ffvLA0wmk4eSQRDcST1CVbFarSAit9d9tVq9bbuTAJvN5uFrmuf5w/M/C57PZ3iehzAMUVUVwjCE53k4n88vb3cWQFWxXq8xHA7hui7CMMRiscD1ev2rZJIkcBwH2+0WqortdgvHcZAkycvbnQb4DlgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdhYALYAGwvAFmBjAdgCbCwAW4CNBWALsLEAbAE2PwA0hBvcPPTxBQAAAABJRU5ErkJggg==">
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
                                                <img data-src="js/holder.js/64x64" class="media-object pull-left" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACBUlEQVR4nO2T36qicBRGz/s/ytZM04KESCm8kLqLQKSiIvJP7Vf45urENFMzDHX84My+WCD462O50g9Vxf/MB1uAjQVgC7CxAGwBNhaALcDGArAF2FgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdi8FGC32yGOY7iuCxGBiPx25nK5YDQaPb3P2H5LgMPhANd1EccxTqfT03N5nmM6nf6T5Fduvy1AmqYQEez3+z/+i0EQoKqqO8nP35ZlCVVFWZYQEaRp+vJ2ZwF834eIYDweo9frwfd9ZFmGtm2hqmjbFlEUoSgKqOqdZF3X8H0fvu/jeDzeruu6fnm7swCO40BEsFwu0bYtlsslRATz+RyqiizLMJvNbud/lSyKAiJy+8Y/H+Yd250ECIIAIoKmaaCqaJoGIoJ+vw9VxWAwuN17JhlFEUQEURS9ffvLA0wmk4eSQRDcST1CVbFarSAit9d9tVq9bbuTAJvN5uFrmuf5w/M/C57PZ3iehzAMUVUVwjCE53k4n88vb3cWQFWxXq8xHA7hui7CMMRiscD1ev2rZJIkcBwH2+0WqortdgvHcZAkycvbnQb4DlgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdhYALYAGwvAFmBjAdgCbCwAW4CNBWALsLEAbAE2PwA0hBvcPPTxBQAAAABJRU5ErkJggg==">
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
                                                <img data-src="js/holder.js/64x64" class="media-object pull-left" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACBUlEQVR4nO2T36qicBRGz/s/ytZM04KESCm8kLqLQKSiIvJP7Vf45urENFMzDHX84My+WCD462O50g9Vxf/MB1uAjQVgC7CxAGwBNhaALcDGArAF2FgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdi8FGC32yGOY7iuCxGBiPx25nK5YDQaPb3P2H5LgMPhANd1EccxTqfT03N5nmM6nf6T5Fduvy1AmqYQEez3+z/+i0EQoKqqO8nP35ZlCVVFWZYQEaRp+vJ2ZwF834eIYDweo9frwfd9ZFmGtm2hqmjbFlEUoSgKqOqdZF3X8H0fvu/jeDzeruu6fnm7swCO40BEsFwu0bYtlsslRATz+RyqiizLMJvNbud/lSyKAiJy+8Y/H+Yd250ECIIAIoKmaaCqaJoGIoJ+vw9VxWAwuN17JhlFEUQEURS9ffvLA0wmk4eSQRDcST1CVbFarSAit9d9tVq9bbuTAJvN5uFrmuf5w/M/C57PZ3iehzAMUVUVwjCE53k4n88vb3cWQFWxXq8xHA7hui7CMMRiscD1ev2rZJIkcBwH2+0WqortdgvHcZAkycvbnQb4DlgAtgAbC8AWYGMB2AJsLABbgI0FYAuwsQBsATYWgC3AxgKwBdhYALYAGwvAFmBjAdgCbCwAW4CNBWALsLEAbAE2PwA0hBvcPPTxBQAAAABJRU5ErkJggg==">
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
                                <a href="#" data-toggle="dropdown" class="btn btn-inverse btn-small dropdown-toggle">
                                    Shortcut
                                </a>
                                <ul aria-labelledby="dLabel" role="menu" class="dropdown-menu">
                                    <li><a href="calendar.html" tabindex="-1">Calendar</a></li>
                                    <li><a href="invoice.html" tabindex="-1">Invoice</a></li>
                                    <li><a href="message.html" tabindex="-1">Message</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-submenu">
                                        <a href="#" tabindex="-1">Sample Page</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="pricing.html" tabindex="-1">Pricing</a></li>
                                            <li><a href="bonus-page/resume/index.html" tabindex="-1">Resume</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" tabindex="-1">Error Page</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="403.html" tabindex="-1">Error 403</a></li>
                                            <li><a href="404.html" tabindex="-1">Error 404</a></li>
                                            <li><a href="405.html" tabindex="-1">Error 405</a></li>
                                            <li><a href="500.html" tabindex="-1">Error 500</a></li>
                                            <li><a href="503.html" tabindex="-1">Error 503</a></li>
                                            <li><a href="under-construction.html" tabindex="-1">Under Construction</a></li>
                                            <li><a href="coming-son.html" tabindex="-1">Coming Son</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#" tabindex="-1">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn btn-inverse btn-small">Other Action</a>
                            </div>
                            <div class="btn-group user-group">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <?php echo img('stilearn/img/user-thumb.jpg','','align="middle" alt="John Doe" title="John"') ?>
                                                                       <?php
                                    echo img(
                                            array(
                                                'src' => 'stilearn/img/user-thum.jpg',
                                                'alt'=>'Nombre del usuario',
                                                'title'=>'Nombre del usuario',
                                                'align'=>'middle',
                                                'class'=>'corner-all'
                                                
                                            )
                                    );
                                    ?>
 
                                    <button class="btn btn-small btn-inverse">John Doe</button> <!--this for display on tablet and phone device-->
                                </a>
                                <ul aria-labelledby="dLabel" role="menu" class="dropdown-menu dropdown-user">
                                    <li>asdasd
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img alt="profile" title="profile" src="img/user.jpg" class="img-circle">
                                            </a>
                                            <div class="media-body description">
                                                <p><strong>John Doe</strong></p>
                                                <p class="muted">johndoe@mail.com</p>
                                                <p class="action"><a href="#" class="link">Activity</a> - <a href="#" class="link">Setting</a></p>
                                                <a class="btn btn-primary btn-small btn-block" href="bonus-page/resume/index.html">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-footer">
                                        <div>
                                            <a href="login.html" class="btn btn-small pull-right">Logout</a>
                                            <a href="#" class="btn btn-small">Add Account</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--panel button ext-->
                    </div>
                </div>
            </div><!--/nav bar helper-->
        </header>
        <!-- end header -->
    </body>
</html>
