<?php
$usr = array(
    'id' => 'usr',
    'name' => 'usr',
    'class' => 'input-block-level',
    'placeholder' => 'Correo electrónico',
    'autocomplete' => 'off'
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
        'docentes' => 'Docentes',
        'alumnos' => 'Alumnos',
        'representantes' => 'Representantes'
    )
);

$submit = array(
    'value' => 'Iniciar sesión',
    'class' => 'btn btn-primary'
);
?>
<!--
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
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Iniciar sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="stilearning" />

        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" />

        <!-- styles -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Iniciar sesión</title>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap.css")) ?>

        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/stilearn/css/stilearn.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/stilearn/css/tilearn-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/stilearn/css/stilearn-helper.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/stilearn/css/stilearn-icon.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/stilearn/css/css/font-awesome.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/stilearn/css/css/animate.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/stilearn/css/uniform.default.css")) ?>

        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery/jquery-1.9.1.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "bootstrap/js/bootstrap.js")) ?>
        <?php echo $script ?>
        <link href="css/stilearn.css" rel="stylesheet" />
        <link href="css/stilearn-responsive.css" rel="stylesheet" />
        <link href="css/stilearn-helper.css" rel="stylesheet" />
        <link href="css/stilearn-icon.css" rel="stylesheet" />
        <link href="css/font-awesome.css" rel="stylesheet" />
        <link href="css/animate.css" rel="stylesheet" />
        <link href="css/uniform.default.css" rel="stylesheet" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>
        <!-- section header -->
        <header class="header" data-spy="affix" data-offset-top="0">
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
                </div>
            </div><!--/nav bar helper-->
        </header>

        <!-- section content -->

        <section class="section">


            <div class="container">
                <div class="signin-form row-fluid">
                    <!--Sign In-->
                    <div class="offset3 span6">
                        <div class="box corner-all">
                            <div class="box-header grd-teal color-white corner-top">
                                <span>Iniciar sesión</span>
                            </div>
                            <div class="box-body bg-white">
                                <?php echo form_open() ?>
                                <div class="control-group">
                                    <div class="controls">
                                        <?php echo form_input($usr) ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <?php echo form_input($clv) ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <?php echo form_dropdown($grp['name'], $grp['options'], '', $grp['attr'] . ' id="' . $grp['id'] . '"') ?>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <input type="submit" class="btn btn-block btn-large btn-primary" value="Entrar" />
                                    <p class="recover-account"><a>¿Olvidaste tu contraseña?</a></p>
                                </div>
                                <?php form_close() ?>
                            </div>
                        </div>
                    </div><!--/Sign In-->
                </div><!-- /row -->
            </div><!-- /container -->
        </section>

        <!-- javascript
        ================================================== -->
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/uniform/jquery.uniform.js"></script>

        <script src="js/validate/jquery.metadata.js"></script>
        <script src="js/validate/jquery.validate.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                // try your js
                
                // uniform
                $('[data-form=uniform]').uniform();
                
                // validate
                $('#sign-in').validate();
                $('#sign-up').validate();
                $('#form-recover').validate();
            })
        </script>
    </body>
</html>
