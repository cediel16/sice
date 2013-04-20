<?php
$cedula = array(
    'id' => 'cedula',
    'name' => 'cedula',
    'value' => $representante->cedula,
    'maxlength' => 9
);

$primer_nombre = array(
    'id' => 'primer_nombre',
    'name' => 'primer_nombre',
    'value' => $representante->primer_nombre,
    'maxlength' => 30
);

$segundo_nombre = array(
    'id' => 'segundo_nombre',
    'name' => 'segundo_nombre',
    'value' => $representante->segundo_nombre,
    'maxlength' => 30
);

$primer_apellido = array(
    'id' => 'primer_apellido',
    'name' => 'primer_apellido',
    'value' => $representante->primer_apellido,
    'maxlength' => 30
);

$segundo_apellido = array(
    'id' => 'segundo_apellido',
    'name' => 'segundo_apellido',
    'value' => $representante->segundo_apellido,
    'maxlength' => 30
);

$fecha_nacimiento = array(
    'id' => 'fecha_nacimiento',
    'name' => 'fecha_nacimiento',
    'value' => $representante->fecha_nacimiento,
    'readonly' => 'readonly',
    'maxlength' => 30
);

$sexo = array(
    'id' => 'sexo_m',
    'name' => 'sexo',
    'value' => $representante->sexo
);


$email = array(
    'id' => 'email',
    'name' => 'email',
    'value' => $representante->email
);
?>

<div class="content-header">
    <div class="title"><?php echo $title ?></div>
    <div class="sub-menu">
        <?php if (is_array($sub_menu)) { ?>
            <ul>
                <?php foreach ($sub_menu as $v) { ?>
                    <li><?php echo $v ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</div>
<div class="question">
    <div class="msj-question">¿Estas seguro que deseas eliminar este representante?</div>
    <div class="keypad-question">
        <?php echo form_open('', 'id="form_representantes_del"') ?>
        <?php echo anchor($atras, 'No', 'id="btn_no_representantes_del"') ?>
        <?php echo form_submit(array('id' => 'btn_si_representantes_del','name'=>'del','value' => 'Sí')) ?>
        <?php echo form_hidden('del', 'true') ?>
        <?php echo form_close() ?>
    </div>
</div>

<div class="conteiner-add-representantes">
    <div class="bar-side ui-corner-all" style="position:relative;">
        <div id="foto_perfil" class="profile-picture ui-corner-all" style="background: #D5D5D5 url('<?php echo base_url() ?>img/profile/default2.jpg') no-repeat center;"></div>
    </div>
    <div class="sub-content">
        <fieldset>
            <legend>Datos personales</legend>
            <table class="table-form" border="0">
                <tr>
                    <td valign="top" width="150px"><?php echo form_label('Cédula', $cedula['id']) ?></td>
                    <td>
                        <?php echo $cedula['value'] ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Primer nombre', $primer_nombre['id']) ?></td>
                    <td>
                        <?php echo $primer_nombre['value'] ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Segundo nombre', $segundo_nombre['id']) ?></td>
                    <td>
                        <?php echo $segundo_nombre['value'] ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Primer apellido', $primer_apellido['id']) ?></td>
                    <td>
                        <?php echo $primer_apellido['value'] ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Segundo apellido', $segundo_apellido['id']) ?></td>
                    <td>
                        <?php echo $segundo_apellido['value'] ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Fecha de nacimiento', $fecha_nacimiento['id']) ?></td>
                    <td>
                        <?php echo $fecha_nacimiento['value'] ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Sexo', $sexo['name']) ?></td>
                    <td>

                        <?php echo $sexo['value'] ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Correo electónico', $email['id']) ?></td>
                    <td>
                        <?php echo $email['value'] ?>
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
</div>