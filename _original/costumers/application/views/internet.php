<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Internets&nbsp;&nbsp;&nbsp;<a href="#" target="_blanck"><span class="glyphicon glyphicon-print"></span></a></h3>
  </div>
  <div class="panel-body">
    	<table class="table table-hover">
		    <thead>
		      <tr>
		        <th>Cod.FCA</th>
		        <th>Provedor</th>
		        <th>IPs</th>
		        <th>Link</th>
		        <th>Fones</th>
		        <th>Ctr</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php 
		    	if ( $internet != NULL ) {
		    	foreach ($internet as $row) : ?>
		    <?php @$i++; ?>
		      <tr>
		        <td><?php echo "$row->idequipamento"; ?></td>
		        <td><?php echo "$row->provedor"; ?></td>
		        <td><?php echo "$row->ip"; ?></td>
		        <td><?php echo "$row->link"; ?></td>
		        <td><?php echo "$row->telefone"; ?></td>
		        <td></td>
		      </tr>
		    <?php endforeach; } ?>    
		    </tbody>
		    <tfoot>
		    	<tr>
		    		<td colspan="8">Total de <?php echo @$i; ?> Internets / Provedores</td>
		    	</tr>
		    </tfoot>
		  </table>
  </div>
  <div class="panel-footer">
  	<button type="button" class="btn btn-success" disabled>Nova Internet</button>
  </div>
</div>