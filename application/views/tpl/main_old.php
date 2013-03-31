<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Plantilla</title>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/style.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/jquery-ui/smoothness/jquery-ui-1.10.1.min.css")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery-ui/jquery-ui-1.10.1.custom.min.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/main.js")) ?>
        <?php echo $script ?>
    </head>
    <body>
        <header>
            <section class="up-header">
                <div class="content">
                    <div class="name-institution">Nombre de la institucion</div>
                    <nav class="option">
                        <ul>
                            <li class="msj"><a href="javsacript:void(0);">Mensajes (0)</a></li>
                            <li class="usr"><a href="javsacript:void(0);">Usuario</a></li>
                            <li class="logout"><?php echo anchor('main/logout', 'cerrar sesión') ?></li>
                        </ul>
                    </nav>
                </div>
            </section>
            <!--
            <section class="low-header">
                <div class="content">
                    <nav class="main-menu">
                        <?php include('main_menu.php') ?>
                    </nav>
                    <div class="search">
                        <input type="text" />
                    </div>
                </div>
            </section>
            -->
        </header>
        <section class="container">
            <div class="content">
                <?php echo $content ?>
            </div>
        </section>
        <footer>
            Pie
        </footer>
    </body>
</html>