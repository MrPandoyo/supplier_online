<div class="row">
	<div class="col-xs-12">
		<a href="index.php/master_produk/form" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Kategori</a>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">List Produk</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="table-produk" class="table table-bordered table-striped">
					<thead>
					<tr>
						<th>Photo</th>
						<th>Nama Product</th>
						<th>Kode Product</th>
						<th>Stock</th>
						<th>Harga</th>
						<th>Deskripsi</th>
						<th class="text-center">Action</th>
					</tr>
					</thead>
					<tbody>
						<?php
						foreach ($datas->result() as $data) {
							echo "<tr>";
							if($data->foto != null && $data->foto != ''){
								echo "<td class='text-center'><img style='max-height: 50px;max-width: 50px;' src='images/product/'".$data->foto."></td>";
							}else{
								echo "<td class='text-center'><img style='max-height: 50px;max-width: 50px;' src='images/no_image.png'></td>";
							}
							echo "<td>".$data->nama_product."</td>";
							echo "<td>".$data->kode."</td>";
							echo "<td>".$data->stock."</td>";
							echo "<td>".$data->harga."</td>";
							echo "<td>".$data->description."</td>";
								echo "<td class='text-center'><a href='index.php/master_produk/form?id=".$data->id."' class='btn btn-warning'>Edit</a> <a href='index.php/master_produk/delete?id=".$data->id."' class='btn btn-danger'>Delete</a></td>";
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
