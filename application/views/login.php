<?php
$usr = array(
    'id' => 'usr',
    'name' => 'usr',
    'class' => 'input-block-level',
    'placeholder' => 'Correo electrónico'
);

$clv = array(
    'id' => 'clv',
    'name' => 'clv',
    'class' => 'input-block-level',
    'placeholder' => 'Contraseña'
);

$grp = array(
    'id' => 'grp',
    'name' => 'grp',
    'attr' => 'class="input-block-level"',
    'placeholder' => 'Contraseña',
    'options' => array(
        '' => 'Grupo',
        'representantes' => 'Representantes',
        'alumnos' => 'Alumnos'
    )
);

$submit = array(
    'value' => 'Iniciar sesión',
    'class' => 'btn btn-primary'
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Iniciar sesión</title>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap.css")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery/jquery-1.9.1.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "bootstrap/js/bootstrap.js")) ?>
        <?php echo $script ?>
        <style>
            .container-narrow{
                margin:auto;
                max-width:450px;
            }

            #grp{
                color:#999999;
            }
            #grp option{
                color:#000000;
            }

        </style>
    </head>
    <body>
        <div class="container-narrow">

            <?php if ($msj_login != '') { ?>
                <div class="alert">
                    <?php echo $msj_login ?>
                </div>
            <?php } ?>
            <?php echo form_open('', 'class=form-signin') ?>
            <h3 class="form-signin-heading">Iniciar sesión</h3>
            <?php echo form_input($usr) ?>
            <?php echo form_password($clv) ?>
            <?php echo form_dropdown($grp['name'], $grp['options'], '', $grp['attr'] . ' id="' . $grp['id'] . '"') ?>
            <div style="float:right;">
                <?php echo anchor('#', '¿Olvidaste tu contraseña?', 'class="btn btn-link"') ?>
                <?php echo form_submit($submit) ?>
            </div>
            <?php echo form_close() ?>
        </div>
    </body>    
</html>