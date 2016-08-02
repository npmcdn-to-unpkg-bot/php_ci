<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3><small></small></h3>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Equipamentos</h2>
					<a href="<?php echo BASEURL .'add_equipamento';?>" id="btn-add" class="btn btn-success">
						<i class="fa fa-plus-circle"></i> Novo equipamento
					</a>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<p class="text-muted font-13 m-b-30">
					</p>
					<table id="datatable-buttons" class="table table-striped table-bordered tb-responsive">
						<thead>
						<tr>
							<th>Patrimônio</th>
							<th>Cód. FCA</th>
							<th>Tipo</th>
							<th>Nome</th>
							<th>Modelo</th>
							<th>TAG</th>
							<th>Dt. Garantia</th>
							<th>Ctr</th>
							<td>Funções</td>
						</tr>
						</thead>

						<tbody>
						<tr>
							<td>001</td>
							<td>FCA-001</td>
							<td>Servidor</td>
							<td>Servidor Dell</td>
							<td>XT11</td>
							<td>S119002ZT5</td>
							<td>2017/03/29</td>
							<td>AD009</td>
							<td>
								<a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Visualizar">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Editar">
									<i class="fa fa-edit"></i>
								</a>
								<a href="#" class="btn btn-default"
								   data-tooltip="true" data-placement="top" title="Excluir"
								   data-toggle="modal" data-target="#del-item">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						<tr>
							<td>002</td>
							<td>FCA-002</td>
							<td>Servidor</td>
							<td>Servidor Dell</td>
							<td>XT11</td>
							<td>S119782ZT5</td>
							<td>2019/05/29</td>
							<td>AD011</td>
							<td>
								<a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Visualizar">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Editar">
									<i class="fa fa-edit"></i>
								</a>
								<a href="#" class="btn btn-default"
								   data-tooltip="true" data-placement="top" title="Excluir"
								   data-toggle="modal" data-target="#del-item">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						<tr>
							<td>003</td>
							<td>FCA-003</td>
							<td>Servidor</td>
							<td>Servidor Dell</td>
							<td>XT02</td>
							<td>A49002ZT5</td>
							<td>2016/10/30</td>
							<td>AA003</td>
							<td>
								<a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Visualizar">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Editar">
									<i class="fa fa-edit"></i>
								</a>
								<a href="#" class="btn btn-default"
								   data-tooltip="true" data-placement="top" title="Excluir"
								   data-toggle="modal" data-target="#del-item">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>

						</tbody>
					</table>
				</div>

				<!-- START MODAL OF DELETE ITEM -->
				<div class="modal fade" id="del-item" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
								</button>
								<h3 class="modal-title text-center" id="myModalLabel">Excluir item</h3>
							</div>
							<div class="modal-body">
								<h4>Exclusão de item</h4>
								<p>Deseja realmente excluir o item selecionado?</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn btn-danger">Excluir</button>
							</div>
						</div>
					</div>
				</div>
				<!-- END MODAL OF DELETE ITEM -->

			</div>
		</div>

	</div>
</div>


<!-- Datatables -->
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/jquery.dataTables.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/dataTables.bootstrap.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/dataTables.buttons.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/buttons.bootstrap.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/buttons.flash.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/buttons.html5.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/buttons.print.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/dataTables.fixedHeader.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/dataTables.keyTable.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/dataTables.responsive.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/responsive.bootstrap.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/datatables/datatables.scroller.js';?>"></script>

<!-- PDF -->
<script src="<?php echo ASSETSPATH.'gentelella/js/jszip/jszip.min.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/pdf/pdfmake.min.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/pdf/vfs_fonts.js';?>"></script>

<!-- PNOTIFY -->
<script src="<?php echo ASSETSPATH.'gentelella/js/pnotify/pnotify.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/pnotify/pnotify.buttons.js';?>"></script>
<script src="<?php echo ASSETSPATH.'gentelella/js/pnotify/pnotify.nonblock.js';?>"></script>


<!-- Datatables -->
<script>
	$(document).ready(function() {

		var handleDataTableButtons = function() {
			if ($("#datatable-buttons").length) {
				$("#datatable-buttons").dataTable({
					//sLengthMenu: true,
					dom: "Bfrtip",
					buttons: [
						{
							extend: "copy",
							className: "btn-sm"
						},
						{
							extend: "csv",
							className: "btn-sm"
						},
						{
							extend: "excel",
							className: "btn-sm"
						},
						{
							extend: "pdfHtml5",
							className: "btn-sm"
						},
						{
							extend: "print",
							className: "btn-sm"
						},
					],
					responsive: true
				});
			}
		};


		TableManageButtons = function() {
			"use strict";
			return {
				init: function() {
					handleDataTableButtons();
				}
			};
		}();

		TableManageButtons.init();
	});
</script>
<!-- /Datatables -->

