<ul class="thumbnails">
    <li class="span3 ">
        <a class="thumbnail" data-placement="bottom" data-original-title="first tooltip" href="#">
            <?php echo img(array('src' => 'img/prueba.png')) ?>
        </a>
    </li>
    <li class="span3 ">
        <a class="thumbnail" data-placement="bottom" data-original-title="first tooltip" href="#">
            <?php echo img(array('src' => 'img/prueba.png')) ?>
        </a>
    </li>
    <li class="span3 ">
        <a class="thumbnail" data-placement="bottom" data-original-title="first tooltip" href="#">
            <?php echo img(array('src' => 'img/prueba.png')) ?>
        </a>
    </li>
</ul>
<script type="text/javascript">
    $(".thumbnail").tooltip();
</script>

<?php 

$obj = new stdClass;
$modulo='representantes';
$obj->$modulo=new stdClass();
$accion='insertar';
$obj->$modulo->$accion=1;
$accion='editar';
$obj->$modulo->$accion=1;
$accion='eliminar';
$obj->$modulo->$accion=1;
echo '<pre>';
print_r($obj);
echo '</pre>';
?>