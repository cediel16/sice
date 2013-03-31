<div>
    <?php echo $message ?>
</div>
<div class="content-header">
    <div class="title"><?php echo $title ?></div>
</div>


<div class="tabbable tabs-left">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#lA">Alumnos</a></li>
        <li class=""><a data-toggle="tab" href="#lB">Representantes</a></li>
        <li class=""><a data-toggle="tab" href="#lC">Administrativos</a></li>
    </ul>
    <div class="tab-content">
        <div id="lA" class="tab-pane active">
            <p>I'm in Section A.</p>
        </div>
        <div id="lB" class="tab-pane">
            <table width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cédula</th>
                        <th>Usuario</th>
                        <th>Status</th>
                        <th>Roles</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows_representantes as $k => $v) { ?>
                        <tr>
                            <td>
                                <?php echo $v->primer_nombre ?>
                                <?php echo $v->segundo_nombre ?>
                                <?php echo $v->primer_apellido ?>
                                <?php echo $v->segundo_apellido ?>
                            </td>
                            <td>
                                <?php echo $v->cedula ?>
                            </td>
                            <td><?php echo $v->usuario ?></td>
                            <td><?php echo $v->status ?></td>
                            <td>

                                <?php
                                $a = json_decode($v->acceso, 1);
                                if (is_array($a)) {
                                    foreach ($a as $k => $v) {
                                        echo '<div>' . ucfirst($k) . '</div>';
                                    }
                                }
                                ?>
                            </td>
                            <td align="center">
                                editar
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
        <div id="lC" class="tab-pane">
            <table width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cédula</th>
                        <th>Usuario</th>
                        <th>Status</th>
                        <th>Roles</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows_administrativos as $k => $v) { ?>
                        <tr>
                            <td>
                                <?php echo $v->primer_nombre ?>
                                <?php echo $v->segundo_nombre ?>
                                <?php echo $v->primer_apellido ?>
                                <?php echo $v->segundo_apellido ?>
                            </td>
                            <td>
                                <?php echo $v->cedula ?>
                            </td>
                            <td><?php echo $v->usuario ?></td>
                            <td><?php echo $v->status ?></td>
                            <td>

                                <?php
                                $a = json_decode($v->acceso, 1);
                                if (is_array($a)) {
                                    foreach ($a as $k => $v) {
                                        echo '<div>' . ucfirst($k) . '</div>';
                                    }
                                }
                                ?>
                            </td>
                            <td align="center">
                                editar
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>