
<div class="container">
    <div style="position: static;" class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <a data-target=".navbar-inverse-collapse" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <?php echo anchor('.', 'Inicio', 'class="brand"') ?>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav">
                        <?php if ($this->auth->is_access_module('representantes')) { ?>
                            <li><?php echo anchor('representantes', 'Representantes') ?></li>
                        <?php } ?> 
                        <?php if ($this->auth->is_access_module('usuarios')) { ?>
                            <li><?php echo anchor('usuarios', 'Usuarios') ?></li>
                        <?php } ?>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav pull-right">
                        <li class="navbar-search pull-left">
                            <?php echo form_input(array('type' => 'text', 'placeholder' => 'Buscar', 'class' => 'search-query')) ?>
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div>
</div>