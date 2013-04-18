<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/bootstrap.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/bootstrap-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/style.css")) ?>

        <title>Sice - Inicio de sesión</title>
    </head>
    <body>
        <header>
            <div class="banner"> <!-- top of banner with institution name/hompage link -->
                <div class="container-fluid">
                    <ul class="banner-ul">
                        <li class="pull-left">
                            <a target="_top" href="http://c2.chamilo.org/index.php">
                                <div class="logo"></div>
                            </a>
                        </li>
                        <li class="perfil pull-right">
                            <div class="dropdown">
                                <?php
                                echo anchor(
                                        base_url() . '#', img(array(
                                            'src' => 'img/perfil_150x200.jpg',
                                            'alt' => 'Usuario',
                                            'class' => 'banner-perfil')
                                        ), 'class="dropdown-toggle" data-toggle="dropdown"'
                                );
                                ?>
                                <ul class="dropdown-menu dropdown-menu-user pull-right">
                                    <li>
                                        <?php echo anchor(base_url() . '#', 'Ver perfil') ?>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <?php echo anchor('main/logout', '<strong>Cerrar sesión</strong>') ?>
                                    </li>
                                </ul>                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of #header-sup -->
            <?php echo $tpl_menu ?>
            <div id="trailbox">
                <ul id="breadcrumbtrail">
                    <li><a target="_self" href="http://c2.chamilo.org/index.php">Chamilo 2.1 Demo Installation</a></li>
                    <li><a target="_self" href="/run.php?application=weblcms">Courses</a></li>
                </ul>
            </div>
        </header>
        <section class="container-fluid">
            <?php echo $tpl_content ?>
        </section>
        <!-- javascript -->
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/bootstrap.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/main.js")) ?>
        <!-- javascript -->
    </body>
</html>
