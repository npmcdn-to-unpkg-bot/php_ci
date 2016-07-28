<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Softwares&nbsp;&nbsp;&nbsp;<a href="#" target="_blanck"><span class="glyphicon glyphicon-print"></span></a></h3>
  </div>
  <div class="panel-body">
    	<table class="table table-hover">
		    <thead>
		      <tr>
		        <th>Cod.FCA</th>
		        <th>Nome</th>
		        <th>Versão/Tipo</th>
		        <th>Dt.Compra</th>
		        <th>Vcto.Lic</th>
		        <th>Dt.Cadastro</th>
		        <th>Ctr</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php foreach ($equipamento as $row) : ?>
		    <?php @$i++; ?>
		      <tr>
		        <td><?php echo "$row->idequipamento"; ?></td>
		        <!-- <td><?php echo "$row->softwares"; ?> <?php echo badge("dns");?> <span class="badge">dhcp</span></td> -->
		        <td><?php echo "$row->software_nome"; ?></td>
		        <td><?php echo "$row->versao"; ?></td>
		        <td><?php echo mysql_to_date($row->data_garantia); ?></td>
		        <td><?php echo mysql_to_date($row->data_garantia); ?></td>
		        <td><?php echo mysql_to_date($row->datain); ?></td>
		        <!-- <td><?php echo btn_edit("software/$row->idequipamento") ?></td> -->
		        <!-- <td><span class="glyphicon glyphicon-edit"> </span>&nbsp;<span class="glyphicon glyphicon-remove-sign"> </span></td> -->
		      </tr>
		    <?php endforeach; ?>  
		    </tbody>
		    <tfoot>
		    	<tr>
		    		<td colspan="8">Total de <?php echo $i ?> Softwares</td>
		    	</tr>
		    </tfoot>
		  </table>
  </div>
  <div class="panel-footer">
  	<button type="button" class="btn btn-success" disabled>Novo Software</button>
  </div>
</div>