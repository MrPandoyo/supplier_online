<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
					<tr>
						<th>Id Transaksi</th>
						<th>Waktu Transaksi</th>
						<th>Total Harga</th>
						<th class="text-center">Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					foreach ($datas->result() as $data) {
						echo "<tr>";
						echo "<td>".$data->id."</td>";
						echo "<td>".$data->waktu_dibuat."</td>";
						echo "<td>".$data->total_harga."</td>";
						echo "<td class='text-center'><a href='index.php/detail_transaksi?id=".$data->id."' class='btn btn-warning'>Detail</a> <a href='index.php/proses_transaksi?id=".$data->id."' class='btn btn-success'>Proses</a></td>";
						echo "</tr>";
					} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- /.col -->
</div>
