<!-- sidebar menu -->
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title text-center" style="border: 0;">
            <img src="<?php echo ASSETSPATH.'logo/img/logo_fcati.png';?>" alt="FCATI" class="nav_logo">
        </div>

        <div class="clearfix"></div>


        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo BASEURL .'dashboard';?>">
                            <i class="fa fa-dashboard"></i> Dashboard <span class="fa fa-chevron-right"></span>
                        </a>
                    </li>
                    <li><a><i class="fa fa-calculator"></i> Contas <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo BASEURL .'lista_boleto';?>">Boletos atualizados</a></li>
                            <li><a href="<?php echo BASEURL .'extrato_voip';?>">Extratos VoIP</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-check-square-o"></i> Inventário <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo BASEURL .'equipamento';?>">Equipamentos</a></li>
                            <li><a href="<?php echo BASEURL .'internet';?>">Internet</a></li>
                            <li><a href="<?php echo BASEURL .'roteador_switch';?>">Roteador/Switch</a></li>
                            <li><a href="<?php echo BASEURL .'servidor';?>">Servidores</a></li>
                            <li><a href="<?php echo BASEURL .'software';?>">Softwares</a></li>
                            <li><a href="<?php echo BASEURL .'voip';?>">VoIP</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL .'procedimento';?>">
                            <i class="fa fa-trello"></i> Procedimentos <span class="fa fa-chevron-right"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- /sidebar menu -->


<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class=" fa fa-user"></span>
                        Olá, Daniel
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"><i class="fa fa-gears"></i> Perfil</a></li>
                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->


<!-- page content -->
<div class="right_col" role="main">