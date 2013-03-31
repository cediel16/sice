<?php
$usr = array(
    'id' => 'usr',
    'name' => 'usr'
);

$clv = array(
    'id' => 'clv',
    'name' => 'clv'
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Iniciar sesión</title>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap-responsive.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "bootstrap/css/bootstrap.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/jquery-ui/smoothness/jquery-ui-1.10.1.min.css")) ?>
        <?php echo link_tag(array("rel" => "stylesheet", "type" => "text/css", "href" => "css/style.css")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery/jquery-1.9.1.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/jquery-ui/jquery-ui-1.10.1.custom.min.js")) ?>
        <?php echo script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "bootstrap/js/bootstrap.js")) ?>
        <?php echo $script ?>
    </head>
    <body>
        <div id="dialog_login">
            <?php echo form_open('', 'id=form_login') ?>
            <table>
                <tr>
                    <td valign="top"><?php echo form_label('Usuario', $usr['name']) ?></td>
                    <td>
                        <?php echo form_input($usr) ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Contraseña', $clv['name']) ?></td>
                    <td>
                        <?php echo form_password($clv) ?>
                    </td>
                </tr>
            </table>

            <?php echo $msj_login; ?>
            <?php echo form_close() ?>
        </div>
    </body>    
</html>