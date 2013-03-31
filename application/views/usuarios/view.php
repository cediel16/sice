<?php
$buscar = array(
    'id' => 'buscar',
    'name' => 'buscar',
    'value' => $this->input->post('buscar')
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