<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
	$(function () {
		$('#table-category').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : true,
			'info'        : true,
			'ordering'    : true,
			'autoWidth'   : false,
			'columnDefs': [ {
				'targets': [2], /* column index */
				'orderable': false, /* true or false */
			}]
		})
	})
</script>
