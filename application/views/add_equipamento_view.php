<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><small></small></h3>
        </div>
    </div>

    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="<?php echo BASEURL .'equipamento';?>"><i class="fa fa-check-square-o"></i> Equipamentos</a></li>
            <li class="active">Adicionar equipamento</li>
        </ol>
    </section>


    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Adicionar equipamento</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

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

