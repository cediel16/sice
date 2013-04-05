<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Plantilla</title>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/jquery-ui/smoothness/jquery-ui-1.10.1.min.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/admin/style.css")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery/jquery-1.9.1.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery-ui/jquery-ui-1.10.1.custom.min.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "bootstrap/js/bootstrap.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/admin/main.js")) ?>
    </head>
    <body>
        <header>
            <div>
                <div class="header-sup">
                    <div class="pull-left name-institution">Nombre de la institución</div>
                    <div class="btn-group pull-right">
                        <?php echo anchor('#', '<i class="icon-envelope"></i>Mensajes (0)', 'class="btn btn-mini"') ?>
                        <?php echo anchor('#', $this->session->userdata('nombre') . '<i class="icon-user"></i>', 'class="btn btn-mini dropdown-toggle" data-toggle="dropdown"') ?>    
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li><?php echo anchor('main/logout', '<i class=""></i>Cerrar sesión') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <ul class="nav nav-tabs" id="maintab">
                <li><a href="#inicio">Inicio</a></li>
                <li class="active"><a href="#representantes">Representantes</a></li>
            </ul>
            <div class="tab-content tab-content-main">
                <div class="tab-pane tab-pane-main " id="inicio">
                    Inicio...
                </div>
                <div class="tab-pane tab-pane-main active" id="representantes">
                    <div style="margin: 0;" class="btn-toolbar-main">
                        <?php echo anchor(current_url().'#myModal', '<i class="icon-plus-sign icon-white"></i> Añadir representante', 'title="News title" class="btn btn-mini btn-success" data-toggle="modal"') ?>
                    </div>
                    <div>
                        <a href="#myModal" role="button" class="btn" data-toggle="modal">Añadir representante</a>
                        <!-- Modal -->
                        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">Añadir representante</h3>
                            </div>
                            <div class="modal-body">
                                asd
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                                <button class="btn btn-primary">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
        </footer>
    </body>
</html>