<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Roteadores / Switches / Infra&nbsp;&nbsp;&nbsp;<a href="#" target="_blanck"><span class="glyphicon glyphicon-print"></span></a></h3>
  </div>
  <div class="panel-body">
    	<table class="table table-hover">
		    <thead>
		      <tr>
		        <th>Patrimônio</th>
		        <th>Cod.FCA</th>
		        <th>Tipo</th>
		        <th>Modelo</th>
		        <th>Dt.Compra</th>
		        <th>Local</th>
		        <th>IP</th>
		        <th>Ctr</th>
		      </tr>
		    </thead>
		    <?php foreach ($equipamento as $row) : ?>
		    <?php @$i++; ?>
		      <tr>
		        <td><?php echo "$row->idexterno"; ?></td>
		        <td><?php echo "$row->idequipamento"; ?></td>
		        <!-- <td><?php echo "$row->usuario"; ?> <?php echo badge("dns");?> <span class="badge">dhcp</span></td> -->
		        <td><?php echo "$row->usuario"; ?></td>
		        <td><?php echo "$row->modelo"; ?></td>
		        <td><?php echo mysql_to_date($row->data_garantia); ?></td>
		        <td><?php echo $row->localizacao_fisica; ?></td>
		        <td><?php echo "$row->ip"; ?></td>
		        <!-- <td><?php echo btn_edit("roteador_switch/$row->idequipamento") ?></td> -->
		        <!-- <td><span class="glyphicon glyphicon-edit"> </span>&nbsp;<span class="glyphicon glyphicon-remove-sign"> </span></td> -->
		      </tr>
		    <?php endforeach; ?>  
		    </tbody>
		    <tfoot>
		    	<tr>
		    		<td colspan="8">Total de <?php if (isset($i)){echo $i;} ?> equipamentos</td>
		    	</tr>
		    </tfoot>
		  </table>
  </div>
  <div class="panel-footer">
  	<button type="button" class="btn btn-success" disabled>Novo Equipamento</button>
  </div> 
</div>