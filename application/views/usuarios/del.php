<?php
$buscar = array(
    'id' => 'buscar',
    'name' => 'buscar',
    'value' => $this->input->post('buscar')
);

?>
<div class="content-header">
    <div class="title"><?php echo $title ?></div>
</div>
<div>
    <pre>
<?php print_r($_SERVER) ?>
    </pre>
</div>