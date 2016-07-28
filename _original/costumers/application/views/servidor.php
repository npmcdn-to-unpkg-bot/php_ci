<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Servidor(es)&nbsp;&nbsp;&nbsp;<a href="#" target="_blanck"><span class="glyphicon glyphicon-print"></span></a></h3>
  </div>
  <div class="panel-body">
    	<table class="table table-hover">
		    <thead>
		      <tr>
		        <th>Patrimônio</th>
		        <th>Cod.FCA</th>
		        <th>Tipo</th>
		        <th>Nome</th>
		        <th>Modelo</th>
		        <th>Dt.Compra</th>
		        <th>Vcto.Grtia</th>
		        <th>IP</th>
		        <th>Ctr</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php 
		    if ( $equipamento != NULL ) {
		    	foreach ($equipamento as $row) : ?>
		    <?php @$i++; ?>
		      <tr>
		        <td><?php echo "$row->idexterno"; ?></td>
		        <td><?php echo "$row->idequipamento"; ?></td>
		        <td><?php echo "$row->tipoequipamento"; ?> </td>
		        <?php 
		        	// codigo para mostrar os valores de um array.
		        	$add_servico = NULL;
		        	if ( $row->idtiposervicoservidor != NULL ){
		        		$servicos = explode(";",$row->idtiposervicoservidor);
		        		foreach ($servicos as $servico) {
		        			foreach ($badge as $tiposervico) {
			        			if ($tiposervico->idtiposervicoservidor == $servico){
			        				$add_servico .= "<span class=\"badge\">$tiposervico->nome</span>";
			        			}
		        			}
		        		}
		        	}
		        ?>	
		        <td><?php echo "$row->usuario"; ?>&nbsp;<?php echo $add_servico; ?> </td>
		        <td><?php echo "$row->modelo"; ?></td>
		        <td><?php echo mysql_to_date($row->data_compra); ?></td>
		        <td><?php echo mysql_to_date($row->data_garantia); ?></td>
		        <td><?php echo "$row->ip"; ?></td>
		        <!-- <td><?php echo btn_edit("equipamento/$row->idequipamento")?></td> -->
		        <!-- <td><span class="glyphicon glyphicon-edit"> </span>&nbsp;<span class="glyphicon glyphicon-remove-sign"> </span></td> -->
		      </tr>
		    <?php endforeach; } ?>  
		    </tbody>
		    <tfoot>
		    	<tr>
		    		<td colspan="8">Total de <?php echo @$i ?> equipamentos</td>
		    	</tr>
		    </tfoot>
		  </table>
  </div>
  <div class="panel-footer">
  	<button type="button" class="btn btn-success" disabled>Novo Equipamento</button>
  </div>
</div>