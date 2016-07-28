<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Procedimentos&nbsp;&nbsp;&nbsp;<a href="#" target="_blanck"><span class="glyphicon glyphicon-print"></span></a></h3>
  </div>
  <div class="panel-body">
    	<dl id="faqs">
		  <?php 
		    	if ( $procedimento != NULL ) {
		    	foreach ($procedimento as $row) : ?>

		  <?php echo "<dt>$row->titulo</dt>"; ?>
		  <?php echo "<dd>$row->procedimento<br><br><br>$row->data</dd>"; ?>
		 

		<?php endforeach; } ?>    
		</dl>
  </div>
  <div class="panel-footer">
  	<button type="button" class="btn btn-success" disabled>Novo Procedimento</button>
  </div>
</div>