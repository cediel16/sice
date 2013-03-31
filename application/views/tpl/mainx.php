<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Título</title>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/jquery-ui/smoothness/jquery-ui-1.10.1.min.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/style.css")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery-ui/jquery-1.9.1.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery-ui/jquery-ui-1.10.1.custom.min.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/main.js")) ?>
        <?php echo $script ?>
    </head>
    <body>
        <header class="ui-widget-header ui-helper-clearfix">
            <div class="header-sup">
                <ul class="ul-main">
                    <li class="li-logo">
                        <?php echo anchor('.', img(array('src' => 'img/logo_header.png', 'alt' => 'OpenClass')), 'title="Ir al inicio"') ?>
                    </li>
                    <li class="li-usr">
                        <span class="username">Bienvenido <?php echo $username ?></span>
                        <span class="logout"><?php echo anchor('main/logout', 'cerrar sesión') ?></span>
                    </li>
                </ul>                
            </div>
            <div class="header-inf">
            </div>
        </header>
        <section>
            <aside>
                <ul id="menu">
                    <li><?php echo anchor('alumnos','Alumnos') ?></li>
                    <li><?php echo anchor('representantes','Representantes') ?></li>
                    <li><?php echo anchor('docentes','Docentes') ?></li>
                </ul>
            </aside>
            <article class="ui-widget-content ui-corner-all">
                <div class="title"><?php echo $title ?></div>
                <div class="content">
                    <?php echo $content ?>
                </div>
            </article>
        </section>
        <footer>
        </footer>
    </body>    
</html>