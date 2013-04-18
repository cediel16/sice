
<div class="main-menu">
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar collapsed" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="brand">SICE</a>
                <div class="nav-collapse collapse" style="height: 0px;">
                    <ul class="nav">
                        <li><?php echo anchor('.', 'Inicio') ?></li>
                        <li><?php echo anchor('representantes', 'Representantes') ?></li>
                        <li class="dropdown">
                            <?php echo anchor('repórtes', 'Reportes <b class="caret"></b>', 'data-toggle="dropdown" class="dropdown-toggle"') ?>
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
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>