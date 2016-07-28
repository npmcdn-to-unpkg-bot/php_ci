<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Equiapemtos Voip&nbsp;&nbsp;&nbsp;<a href="#" target="_blanck"><span class="glyphicon glyphicon-print"></span></a></h3>
  </div>
  <div class="panel-body">
    	<table class="table table-hover">
		    <thead>
		      <tr>
		        <th>Patrimônio</th>
		        <th>Cod.FCA</th>
		        <th>Ramal</th>
		        <th>Modelo</th>
		        <th>Local</th>
		        <th>IP</th>
		        <th>Ctr</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php 
		    	if ( $voip != NULL ) {
		    	foreach ($voip as $row) : ?>
		    <?php @$i++; ?>	
		      <tr>
		        <td><?php echo "$row->idexterno"; ?></td>
		        <td><?php echo "$row->idequipamento"; ?></td>
		        <td><?php echo "$row->ramalvoip"; ?></td>
		        <td><?php echo "$row->modelo"; ?></td>
		        <td><?php echo "$row->localizacao_fisica"; ?></td>
		        <td>192.168.1.123</td>
		        <!-- <td><span class="glyphicon glyphicon-edit"> </span>&nbsp;<span class="glyphicon glyphicon-remove-sign"> </span></td> -->
		      </tr>

		    <?php endforeach; } ?>     
		    </tbody>
		    <tfoot>
		    	<tr>
		    		<td colspan="8">Total de <?php echo @$i; ?> Voips / Equipamentos</td>
		    	</tr>
		    </tfoot>
		  </table>
  </div>
  <div class="panel-footer">
  	<button type="button" class="btn btn-success" disabled>Novo Equipamento</button>
  </div>
</div>