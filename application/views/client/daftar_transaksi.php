<div class="row">
	<div class="col-xs-12">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="<?php echo ($sub_tab == 'Pending') ? 'active' : ''; ?>"><a href="<?php echo base_url().'index.php/daftar_transaksi';?>" >Transaksi Pending</a></li>
				<li class="<?php echo ($sub_tab == 'Proses') ? 'active' : ''; ?>"><a href="<?php echo base_url().'index.php/daftar_transaksi/proses';?>" >Transaksi yang Diproses</a></li>
				<li class="<?php echo ($sub_tab == 'Enroute') ? 'active' : ''; ?>"><a href="<?php echo base_url().'index.php/daftar_transaksi/enroute';?>" >Sedang Dikirim</a></li>
				<li class="<?php echo ($sub_tab == 'Selesai') ? 'active' : ''; ?>"><a href="<?php echo base_url().'index.php/daftar_transaksi/selesai';?>" >Transaksi Selesai</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-content">
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
							<?php foreach ($datas->result() as $data) { ?>
								<tr>
								<td><?php echo $data->id; ?></td>
								<td><?php echo $data->waktu_dibuat; ?></td>
								<td><?php echo $data->total_harga; ?> </td>
								<td class='text-center'>
									<a href='index.php/detail_transaksi?id=<?php echo $data->id?>' class='btn btn-warning'>Detail</a>
									<?php if ($sub_tab == 'Enroute'){ ?>
									<a href='index.php/selesai_kirim?id=<?php echo $data->id?>' class='btn btn-success'>Selesai</a>
									<?php } ?>
								</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.col -->
</div>
