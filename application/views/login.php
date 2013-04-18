<?php
$usr = array(
    'id' => 'email',
    'name' => 'email',
    'class' => 'input-block-level',
    'autocomplete' => 'off'
);

$clv = array(
    'id' => 'clv',
    'name' => 'clv',
    'class' => 'input-block-level',
    'autocomplete' => 'off'
);

$grp = array(
    'id' => 'grp',
    'name' => 'grp',
    'attr' => 'class="span4"',
    'options' => array(
        '' => '',
        $this->config->item('doc') => 'Docentes',
        $this->config->item('alu') => 'Alumnos',
        $this->config->item('rep') => 'Representantes'
    )
);

$submit = array(
    'value' => 'Iniciar sesión',
    'class' => 'btn btn-info'
);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/bootstrap.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/bootstrap-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/login.css")) ?>

        <title>Sice - Inicio de sesión</title>
    </head>
    <body>
        <header>  <!-- header section start -->
            <div class="banner">
                <div class="container-fluid">
                    <ul>
                        <li class="pull-left">
                            <?php echo anchor('.', '<div class="logo"></div>') ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class = "container main-content">
        <div class = "span6 span-info">
            <h4>Sistema Integral para el Control Escolar</h4>
            <div class = "entry-content description">
                <p>
                    Welcome to the Chamilo 2.1 Aldrin release - Demo platform!!</p>
                <ul>
                    <li>
                        Click on 'register'</li>
                    <li>
                        Create an account (student or course manager)</li>
                    <li>
                        Start exploring :-)<br>
                        &nbsp;
                    </li>
                </ul>
                <p>
                    Check the user documentation on <a target = "_blank" href = "http://support.chamilo.org/projects/community/wiki">http://support.chamilo.org/projects/community/wiki</a></p>
                <div style = "clear: both;"></div>
            </div>
        </div>
        <div class = "span4">
            <h4>Inicio de sesión</h4>
            <?php echo form_open('', 'class="form-vertical"')
            ?>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Correo electrónico</label>
                <div class="controls">
                    <?php echo form_input($usr) ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Contraseña</label>
                <div class="controls">
                    <?php echo form_input($clv) ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Grupo</label>
                <div class="controls">
                    <?php echo form_dropdown($grp['name'], $grp['options'], '', $grp['attr'] . ' id="' . $grp['id'] . '"') ?>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <?php echo form_submit($submit) ?>
                    <?php echo anchor('', '¿Olvidaste tu contraseña?', 'class="btn"') ?>
                </div>
            </div>
            </br>
            <div class="control-group">
                <div class="controls">
                    <?php if (!empty($msj_login)) { ?>
                        <div class="alert alert-error">
                            <h6><?php echo $msj_login ?></h6>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </section>
    <!-- javascript -->
    <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery.js")) ?>
    <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/boostrap.js")) ?>
    <!-- javascript -->
</body>
</html>
