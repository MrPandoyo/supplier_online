<div class="row">
	<div class="col-xs-12">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="<?php echo base_url().'index.php/manage_pengiriman';?>" >Siap Diantar</a></li>
				<li><a href="<?php echo base_url().'index.php/manage_pengiriman/enroute';?>" >Enroute</a></li>
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
							<?php if($datas != null) foreach ($datas->result() as $index => $data) { ?>
								<tr>
									<td><?php echo $data->id; ?></td>
									<td><?php echo $data->waktu_dibuat; ?></td>
									<td><?php echo $data->total_harga; ?></td>
									<td class='text-center'>
										<a href='<?php echo base_url()."index.php/detail_transaksi?id=".$data->id; ?>' class='btn btn-warning'>Detail</a>
										<button data-toggle="modal" data-target="#mKirim_<?php echo $index; ?>" class='btn btn-success'>Kirim</button>
										<div class="modal fade" id="mKirim_<?php echo $index; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Pilih Kurir Pengiriman</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<form action="<?php echo base_url().'index.php/kirim_barang'?>" id="<?php echo 'form_'.$index;?>" method="post">
														<input type="hidden" name="transaksi" value="<?php echo $data->id; ?>"/>
														<div class="modal-body">
															<div class="form-group">
																<label>Kurir</label>
																<select name="kurir" class="form-control" data-live-search="true">
																	<?php foreach ($kurirs->result() as $k) { ?>
																		<option value="<?php echo $k->id;?>"><?php echo $k->kode; ?> - <?php echo $k->nama;?></option>
																	<?php } ?>
																</select>
															</div>
														</div>
														<div class="modal-footer">
															<button type="submit" class="btn btn-primary">Kirim</button>
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
														</div>
													</form>
												</div>
											</div>
										</div>
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
