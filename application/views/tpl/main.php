<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Plantilla</title>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/jquery-ui/smoothness/jquery-ui-1.10.1.min.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/style.css")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery/jquery-1.9.1.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery-ui/jquery-ui-1.10.1.custom.min.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "bootstrap/js/bootstrap.js")) ?>
        <?php echo $script ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-sup">
                    <div class="pull-left name-institution">Nombre de la institución</div>
                    <div class="btn-group pull-right">
                        <?php echo anchor('#', '<i class="icon-envelope"></i>Mensajes (0)', 'class="btn btn-small"') ?>
                        <?php echo anchor('#', $this->session->userdata('nombre') . '<i class="icon-user"></i>', 'class="btn btn-small dropdown-toggle" data-toggle="dropdown"') ?>    
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li><?php echo anchor('main/logout', '<i class=""></i>Cerrar sesión') ?></li>
                        </ul>
                    </div>
                </div>
                <div class="header-inf">
                    <?php include('navbar.php') ?>
                </div>
            </div>
        </header>
        <section class="container">
            <div class="content">
                <div class="content-header">
                    <div class="title pull-left"><?php echo $title ?></div>
                    <div class="pull-right">
                        <?php echo $submenu ?>
                    </div>
                </div>
                <?php echo $content ?>
            </div>
        </section>
        <footer>
                <?php //print_r($this->session->all_userdata()) ?>
        </footer>
    </body>
</html>