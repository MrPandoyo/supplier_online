<div class="row">
	<div class="col-xs-12">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li><a href="<?php echo base_url().'index.php/manage_pengiriman';?>" >Siap Diantar</a></li>
				<li class="active"><a href="<?php echo base_url().'index.php/manage_pengiriman/enroute';?>" >Enroute</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-content">
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Id Transaksi</th>
								<th>Nama Kurir</th>
								<th>Waktu Dikirim</th>
								<th>Total Harga</th>
								<th class="text-center">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php if($datas != null) foreach ($datas->result() as $index => $data) { ?>
								<?php
								$kurir = $this->m_supplier->getData('kurir',array('id'=>$data->id_kurir))->result()[0];
								$transaksi = $this->m_supplier->getData('transaksi',array('id'=>$data->id_transaksi))->result()[0];
								?>
								<tr>
									<td><?php echo $data->id_transaksi; ?></td>
									<td><?php echo $kurir->nama; ?></td>
									<td><?php echo $data->waktu_berangkat; ?></td>
									<td><?php echo $transaksi->total_harga; ?></td>
									<td class='text-center'>
										<a href='<?php echo base_url()."index.php/detail_transaksi?id=".$data->id_transaksi; ?>' class='btn btn-warning'>Detail</a>
										<a href='<?php echo base_url()."index.php/selesai_kirim?id=".$data->id_transaksi; ?>'  class='btn btn-success'>Selesai</a>
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
