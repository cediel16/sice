<?php
$rol = array(
    'id' => 'rol',
    'name' => 'rol',
    'value' => ''
);
?>

<div>
    <?php echo $message ?>
</div>

<div>
    <table class="table table-condensed table-bordered">
        <thead>
            <tr>
                <th>
                    Rol
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_rows as $row) { ?>
                <tr>
                    <td>
                        <?php echo $row->rol ?>
                    </td>
                    <td style="text-align:right;">
                        <div class="btn-group">
                            <button class="btn btn-mini btn-info"><i class="icon-edit icon-white"></i> Editar</button>
                            <button class="btn btn-mini btn-info"><i class="icon-lock icon-white"></i> Cambiar permisos</button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-mini btn-danger"><i class="icon-remove icon-white"></i> Eliminar</button>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div id="modalAnadirRol" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <h3 id="myModalLabel">Añadir rol</h3>
    </div>
    <?php echo form_open('op', 'id=frmAnadirRol') ?>
    <div class="modal-body">
        <?php echo form_input($rol) ?>
        <p id="msjError" class="text-error"></p>
    </div>
    <div class="modal-footer">
        <a class="btn btn-link hide" id="icon-loading-modal"><i class="icon-load"></i></a>
        <?php
        echo form_button(
                array(
                    'id' => 'btnCancelar',
                    'class' => 'btn',
                    'data-dismiss' => 'modal',
                    'aria-hidden' => 'true',
                    'content' => 'Cancelar'
                )
        );
        ?>
        <?php
        echo form_submit(
                array(
                    'id' => 'btnAceptar',
                    'class' => 'btn btn-info',
                    'value' => 'Aceptar'
                )
        );
        ?>
    </div>
    <?php echo form_close() ?>
</div>