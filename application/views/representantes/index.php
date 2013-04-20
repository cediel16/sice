<?php
$buscar = array(
    'id' => 'buscar',
    'name' => 'buscar',
    'value' => $this->input->post('buscar')
);
?>



<div>
    <?php //echo $message ?>
</div>


<div class="xrow-narrow" style="border:1px solid red;">
        <?php foreach ($rows as $k => $v) { ?>
            <?php
            if ($k == 4) {
                echo '';
            }
            ?>
            <div class="span2">
                <div class="thumbnailx">

                    <!--
                    <div class="profile-picture" style="width: 100px; height:130px; background: gray; float: left;">
                    </div>
                    <div class="profile-data" style="margin-left:200px; float: left;">
                        <strong><?php echo $v->primer_apellido . ' ' . $v->segundo_apellido . ', ' . $v->primer_nombre . ' ' . $v->segundo_nombre ?></strong>
                        <div style="font-size:10px;">C.I. <?php echo $v->cedula ?></div>
                        <div class="thumbnail-options">
                    <?php echo anchor('representantes/view/' . $v->id, '<i class="icon-eye-open icon-white"></i>', 'class="btn btn-mini btn-info" data-placement="bottom" data-original-title="Ver"') ?>
                    <?php echo anchor('representantes/edit/' . $v->id, '<i class="icon-edit icon-white"></i>', 'class="btn btn-mini btn-info" data-placement="bottom" data-original-title="Editar"') ?>
                    <?php echo anchor('representantes/del/' . $v->id, '<i class="icon-remove-circle icon-white"></i>', 'class="btn btn-mini btn-info" data-placement="bottom" data-original-title="Eliminar"') ?>
                        </div>
                    </div>
                    -->
                    <div>
                        <?php echo img(array('src' => 'img/perfil_75x100.jpg')) ?>
                    </div>
                    <div>
                        <strong><?php echo $v->primer_apellido . ' ' . $v->segundo_apellido . ', ' . $v->primer_nombre . ' ' . $v->segundo_nombre ?></strong>
                        <div style="font-size:10px;">C.I. <?php echo $v->cedula ?></div>
                        <!--
                        <div class="thumbnail-options">
                        <?php echo anchor('representantes/view/' . $v->id, '<i class="icon-eye-open icon-white"></i>', 'class="btn btn-mini btn-info" data-placement="bottom" data-original-title="Ver"') ?>
                        <?php echo anchor('representantes/edit/' . $v->id, '<i class="icon-edit icon-white"></i>', 'class="btn btn-mini btn-info" data-placement="bottom" data-original-title="Editar"') ?>
                        <?php echo anchor('representantes/del/' . $v->id, '<i class="icon-remove-circle icon-white"></i>', 'class="btn btn-mini btn-info" data-placement="bottom" data-original-title="Eliminar"') ?>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        <?php } ?>
</div> <!-- row-fluid -->