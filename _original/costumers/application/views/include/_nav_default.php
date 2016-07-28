<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.fcacomputers.com.br" target="_blanck">FCA TI</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        
        <li class="active"><a href="<?php echo base_url().'dashboard'; ?>" >Dashboard</a></li>
        
       <!-- Inventario -->
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Iventário<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url().'equipamento';?>">Equipamentos</a></li>
            <li><a href="<?php echo base_url().'servidor';?>">Servidores</a></li>
            <li><a href="<?php echo base_url().'software';?> ">Softwares</a></li>
            <li><a href="<?php echo base_url().'roteador_switch';?> ">Roteador/Switch</a></li> 
            <li><a href="<?php echo base_url().'internet';?> ">Internet</a></li> 
            <li><a href="<?php echo base_url().'voip';?> ">Voip</a></li> 
            <!-- <li><a href="<?php echo base_url().'procedimento';?> ">Procedimentos</a></li>                       -->
          </ul>
        </li>
        <!-- /Inventário -->

        <!-- Financeiro -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url().'extrato_voip';?>">Extratos Voip</a></li>
            <li><a href="<?php echo base_url().'lista_boleto';?>">Boletos Atualizados</a></li>
          </ul>
        </li>
        <!-- /Financeiro -->

        <!-- procedimento -->
        <li class="nav navbar-nav"><a href="<?php echo base_url().'procedimento';?>">Procedimentos</a></li>
        <!-- /procedimento -->

        <!-- <li><a href="#">Page 2</a></li> -->
        <!-- <li><a href="#">Page 3</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" ><?php echo $this->session->userdata('email'); ?></a></li>
        <li class="dropdown">
            <a lass="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Perfil</a></li>
                <li><a href="<?php echo base_url().'login/destroy'; ?>" ><span class="glyphicon glyphicon-off"></span> Sair</a></li>                     
            </ul>

        </li>

        <!-- <li><a href="#"><span class="glyphicon glyphicon-off"></span> Sair</a></li> -->
      </ul>
    </div>
  </div>
</nav>
<div class="row">
    <br><br><br>
  </div>