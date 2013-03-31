<?php
$foto = array(
    'id' => 'foto',
    'name' => 'foto',
    'value' => $this->input->post('foto')
);

$cedula = array(
    'id' => 'cedula',
    'name' => 'cedula',
    'value' => $this->input->post('cedula'),
    'maxlength' => 9
);

$primer_nombre = array(
    'id' => 'primer_nombre',
    'name' => 'primer_nombre',
    'value' => $this->input->post('primer_nombre'),
    'maxlength' => 30
);

$segundo_nombre = array(
    'id' => 'segundo_nombre',
    'name' => 'segundo_nombre',
    'value' => $this->input->post('segundo_nombre'),
    'maxlength' => 30
);

$primer_apellido = array(
    'id' => 'primer_apellido',
    'name' => 'primer_apellido',
    'value' => $this->input->post('primer_apellido'),
    'maxlength' => 30
);

$segundo_apellido = array(
    'id' => 'segundo_apellido',
    'name' => 'segundo_apellido',
    'value' => $this->input->post('segundo_apellido'),
    'maxlength' => 30
);

$fecha_nacimiento = array(
    'id' => 'fecha_nacimiento',
    'name' => 'fecha_nacimiento',
    'value' => $this->input->post('fecha_nacimiento'),
    'readonly' => 'readonly',
    'maxlength' => 30
);

$sexo_m = array(
    'id' => 'sexo_m',
    'name' => 'sexo',
    'value' => 'Masculino',
    'checked' => ($this->input->post('sexo') == 'Masculino') ? TRUE : FALSE
);

$sexo_f = array(
    'id' => 'sexo_f',
    'name' => 'sexo',
    'value' => 'Femenino',
    'checked' => ($this->input->post('sexo') == 'Femenino') ? TRUE : FALSE
);

$email = array(
    'id' => 'email',
    'name' => 'email',
    'value' => $this->input->post('email')
);
?>
<div class="content-header">
    <div class="title"><?php echo $title ?></div>
</div>

<div class="conteiner-add-representantes">
    <div class="bar-side ui-corner-all" style="position:relative;">
        <div id="foto_perfil" class="profile-picture ui-corner-all" style="background: #D5D5D5 url('<?php echo base_url() ?>img/profile/default2.jpg') no-repeat center;"></div>
    </div>
    <div class="sub-content">
        <?php echo form_open('', 'id="form_representantes_add"') ?>
        <fieldset>
            <legend>Datos personales</legend>
            <table class="table-form" border="0">
                <tr>
                    <td valign="top" width="150px"><?php echo form_label('Cédula', $cedula['id']) ?></td>
                    <td>
                        <?php echo form_input($cedula) ?>
                        <?php echo form_error($cedula['name']) ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Primer nombre', $primer_nombre['id']) ?></td>
                    <td>
                        <?php echo form_input($primer_nombre) ?>
                        <?php echo form_error($primer_nombre['name']) ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Segundo nombre', $segundo_nombre['id']) ?></td>
                    <td>
                        <?php echo form_input($segundo_nombre) ?>
                        <?php echo form_error($segundo_nombre['name']) ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Primer apellido', $primer_apellido['id']) ?></td>
                    <td>
                        <?php echo form_input($primer_apellido) ?>
                        <?php echo form_error($primer_apellido['name']) ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Segundo apellido', $segundo_apellido['id']) ?></td>
                    <td>
                        <?php echo form_input($segundo_apellido) ?>
                        <?php echo form_error($segundo_apellido['name']) ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Fecha de nacimiento', $fecha_nacimiento['id']) ?></td>
                    <td>
                        <?php echo form_input($fecha_nacimiento) ?>
                        <?php echo form_error($fecha_nacimiento['name']) ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Sexo', $sexo_m['name']) ?></td>
                    <td>

                        <?php echo form_radio($sexo_m) . form_label($sexo_m['value'], $sexo_m['id']) ?>
                        <?php echo form_radio($sexo_f) . form_label($sexo_f['value'], $sexo_f['id']) ?>
                        <?php echo form_error($sexo_m['name']) ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><?php echo form_label('Correo electónico', $email['id']) ?></td>
                    <td>
                        <?php echo form_input($email) ?>
                        <?php echo form_error($email['name']) ?>
                    </td>
                </tr>
            </table>
        </fieldset>
        <?php echo form_close() ?>
    </div>
</div>

<div class="keypad">
    <?php echo anchor('representantes', 'Cancelar', 'id="btn_cancelar_representantes_add"') ?>
    <?php
    echo form_button(array(
        'id' => 'btn_aceptar_representantes_add',
        'name' => 'btn_aceptar_representantes_add',
        'value' => 'true',
        'content' => 'Aceptar'
    ));
    ?>
</div>