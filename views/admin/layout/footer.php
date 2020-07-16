<!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.slimscroll.js"></script>        
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="<?php echo base_url(); ?>assets/dashboard/pages/jquery.dashboard.init.js"></script>

		<!-- Required datatable js -->
        <script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url(); ?>plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="<?php echo base_url(); ?>plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="<?php echo base_url(); ?>plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="<?php echo base_url(); ?>plugins/datatables/dataTables.select.min.js"></script>
        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.app.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>