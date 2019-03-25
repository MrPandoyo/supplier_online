<div class="row">
	<div class="col-xs-12">
		<a href="index.php/master_category/form" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Kategori</a>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">List Category</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="table-category" class="table table-bordered table-striped">
					<thead>
					<tr>
						<th>Kode Category</th>
						<th>Nama Category</th>
						<th class="text-center">Action</th>
					</tr>
					</thead>
					<tbody>
						<?php
						foreach ($datas->result() as $data) {
							echo "<tr>";
								echo "<td>".$data->kode."</td>";
								echo "<td>".$data->nama."</td>";
								echo "<td class='text-center'><a href='index.php/master_category/form?id=".$data->id."' class='btn btn-warning'>Edit</a> <a href='index.php/master_category/delete?id=".$data->id."' class='btn btn-danger'>Delete</a></td>";
							echo "</tr>";
						} ?>
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
</div>
