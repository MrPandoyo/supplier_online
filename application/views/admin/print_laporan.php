<body onload="window.print();">
<?php $this->load->view('fragments/head'); ?>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<table class="table table-bordered table-striped">
					<thead>
					<tr>
						<th>Id Transaksi</th>
						<th>Nama Toko</th>
						<th>Alamat</th>
						<th>Kurir Pengantar</th>
						<th>Total Harga</th>
						<th>Waktu Transaksi</th>
						<th>Waktu Pengiriman</th>
						<th>Waktu Sampai</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($datas->result() as $data) { ?>
						<?php
						$client = $this->m_supplier->getData('client',array('id'=>$data->id_client))->result()[0];
						$pengiriman = $this->m_supplier->getData('pengiriman',array('id_transaksi'=>$data->id))->result()[0];
						$kurir = $this->m_supplier->getData('kurir',array('id'=>$pengiriman->id_kurir))->result()[0];
						?>
						<tr>
							<td><?php echo $data->id;?></td>
							<td><?php echo $client->nama_toko;?></td>
							<td><?php echo $client->alamat;?></td>
							<td><?php echo $kurir->nama;?></td>
							<td><?php echo $data->total_harga;?></td>
							<td><?php echo $data->waktu_dibuat;?></td>
							<td><?php echo $pengiriman->waktu_berangkat;?></td>
							<td><?php echo $pengiriman->waktu_sampai;?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- /.box -->
</div>
<!-- /.col -->
<?php $this->load->view('fragments/javascript'); ?>
</body>

