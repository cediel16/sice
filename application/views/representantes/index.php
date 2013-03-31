<?php
$buscar = array(
    'id' => 'buscar',
    'name' => 'buscar',
    'value' => $this->input->post('buscar')
);
?>

<div class="content-header">
    <div class="title pull-left">Representantes</div>
    <div class="pull-right">
        <?php echo anchor('representantes/add', 'Nuevo representante', 'class="btn btn-info btn-small"') ?>
    </div>
</div>

<div>
    <?php echo $message ?>
</div>

<div class="row-fluid">
    <ul class="thumbnails">
        <?php foreach ($rows as $k => $v) { ?>
            <li class="span3">
                <div class="thumbnail">
                    <div class="profile-picture">
                        <?php echo img(array('src' => 'main/img/' . base64_encode('profile:representantes:' . $v->id)), TRUE) ?>
                    </div>
                    <div class="profile-data">
                        <strong><?php echo $v->primer_apellido . ' ' . $v->segundo_apellido . ', ' . $v->primer_nombre . ' ' . $v->segundo_nombre ?></strong>
                        <div style="font-size:10px;">C.I. <?php echo $v->cedula ?></div>
                        <div class="thumbnail-options">
                            <?php echo anchor('representantes/view/' . $v->id, '<i class="icon-eye-open icon-white"></i>', 'class="btn btn-mini btn-info" data-placement="bottom" data-original-title="Ver"') ?>
                            <?php echo anchor('representantes/edit/' . $v->id, '<i class="icon-edit icon-white"></i>', 'class="btn btn-mini btn-info" data-placement="bottom" data-original-title="Editar"') ?>
                            <?php echo anchor('representantes/del/' . $v->id, '<i class="icon-remove-circle icon-white"></i>', 'class="btn btn-mini btn-info" data-placement="bottom" data-original-title="Eliminar"') ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>