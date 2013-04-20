<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/bootstrap.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/bootstrap-responsive.css")) ?>

        <?php //echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/smoothness/jquery-ui.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/bootstrap/jquery-ui-1.10.2.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/style.css")) ?>

        <title>Sice - <?php echo $title ?></title>
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
                            <div class="data-usuario" class="pull-left">
                                <div class="usuario-nombre">Johel Cediel</div>
                                <div class="usuario-grupo">Representante</div>
                            </div>
                            <div class="dropdown pull-left">
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
                    <?php foreach ($breadcump as $v) { ?>
                        <li><?php echo anchor($v['href'], $v['name']) ?></li>
                    <?php } ?>
                </ul>
            </div>
        </header>
        <section class="container-fluid">
            <?php if (trim($title) != '') { ?>
                <div class="main-title">
                    <div class="title pull-left"><?php echo $title ?></div>
                    <div class="pull-right">
                        <?php for ($i = 0; $i < count($submenu); $i++) { ?>
                            <?php echo anchor($submenu[$i]['href'], $submenu[$i]['name'], 'class="btn btn-info btn-small"') ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php echo $tpl_content ?>
        </section>
        <!-- javascript -->
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery-ui.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/bootstrap.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/main.js")) ?>
        <?php echo $script ?>
        <!-- javascript -->
    </body>
</html>

<pre>
    <?php print_r($this->session->all_userdata()) ?>
</pre>
