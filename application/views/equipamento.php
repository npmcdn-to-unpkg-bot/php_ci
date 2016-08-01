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
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<p class="text-muted font-13 m-b-30">

					</p>
					<table id="datatable-buttons" class="table table-striped table-bordered">
						<thead>
						<tr>
							<th>Patrimônio</th>
							<th>Cód. FCA</th>
							<th>Tipo</th>
							<th>Nome</th>
							<th>Modelo</th>
							<th>TAG</th>
							<th>Dt. compra</th>
							<th>Dt. Garantia</th>
							<th>IP</th>
							<th>Ctr</th>
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
							<td>2012/03/29</td>
							<td>2017/03/29</td>
							<td>177.00.11.22</td>
							<td>AD009</td>
						</tr>
						<tr>
							<td>002</td>
							<td>FCA-002</td>
							<td>Servidor</td>
							<td>Servidor Dell</td>
							<td>XT11</td>
							<td>S119782ZT5</td>
							<td>2014/05/29</td>
							<td>2019/05/29</td>
							<td>177.00.11.32</td>
							<td>AD011</td>
						</tr>
						<tr>
							<td>003</td>
							<td>FCA-003</td>
							<td>Servidor</td>
							<td>Servidor Dell</td>
							<td>XT02</td>
							<td>A49002ZT5</td>
							<td>2011/10/30</td>
							<td>2016/10/30</td>
							<td>177.00.11.02</td>
							<td>AA003</td>
						</tr>
						<tr>
							<td>004</td>
							<td>SPP-001</td>
							<td>Servidor</td>
							<td>Servidor Dell</td>
							<td>XT08</td>
							<td>Z119602ZT5</td>
							<td>2015/01/19</td>
							<td>2020/01/19</td>
							<td>177.00.11.52</td>
							<td>AD049</td>
						</tr>

						</tbody>
					</table>
				</div>
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

