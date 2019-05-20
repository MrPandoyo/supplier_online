<div class="row">
	<div class="col-xs-12">
		<a href="index.php/master_user_admin/form" class="btn btn-primary" style="margin-bottom: 10px;">Tambah User</a>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">List User</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="table-user" class="table table-bordered table-striped">
					<thead>
					<tr>
						<th>Nama</th>
						<th>Username</th>
						<th>Photo</th>
						<th class="text-center">Action</th>
					</tr>
					</thead>
					<tbody>
						<?php
						foreach ($datas->result() as $data) {
							echo "<tr>";
							echo "<td>".$data->nama."</td>";
							echo "<td>".$data->username."</td>";
							if($data->foto != null && $data->foto != ''){
								echo "<td class='text-center'><img style='max-height: 50px;max-width: 50px;' src='images/profile/".$data->foto."'></td>";
							}else{
								echo "<td class='text-center'><img style='max-height: 50px;max-width: 50px;' src='images/no_image.png'></td>";
							}
							echo "<td class='text-center'><a href='index.php/master_user_admin/form?id=".$data->id."' class='btn btn-warning'>Edit</a> <a href='index.php/master_user_admin/delete?id=".$data->id."' class='btn btn-danger'>Delete</a></td>";
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
