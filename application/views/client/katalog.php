<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">List Product</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<?php foreach ($datas->result() as $key => $d ) { ?>
				<div class="col-md-3">
					<!-- Widget: user widget style 1 -->
					<div class="box box-widget widget-user">
						<!-- Add the bg color to the header using any of the bg-* classes -->
						<div class="text-center">
							<img src="<?php echo($d->foto != null && $d->foto != '') ? base_url().'images/product/'.$d->foto : base_url().'images/no_image.png'; ?>" style="height: 200px;" alt="">
						</div>
						<div class="box-footer" style="padding-top: 0px;">
							<div class="row">
								<div class="col-sm-12">
									<div class="description-block">
										<h4 class="description-header"><?php echo $d->nama_product; ?></h4>
									</div>
									<h5 class="pull-left">Rp. <?php echo $d->harga; ?>/pcs</h5>
									<h5 class="pull-right">Avail. Stock <?php echo $d->stock; ?></h5>
								</div>
								<div class="col-sm-6 border-right">
									<div class="description-block">
										<button type="button" data-toggle="modal" data-target="#modalBeli_<?php echo $key; ?>" class="btn btn-success btn-block" <?php echo(!$d->stock > 0)  ?'disabled' : ''; ?>><span class="fa fa-shopping-cart"></span> Beli</button>
									</div>
									<!-- /.description-block -->
								</div>
								<!-- /.col -->
								<div class="col-sm-6 border-right">
									<div class="description-block">
										<a href="<?php echo base_url().'index.php/product_detail?id='.$d->id; ?>" class="btn btn-primary btn-block"><span class="fa fa-eye"></span> Detail</a>
									</div>
									<!-- /.description-block -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div>
						<div class="modal fade" id="modalBeli_<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembelian</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?php echo base_url().'index.php/add_trx'?>" method="post">
										<input type="hidden" name="product" value="<?php echo $d->id; ?>"/>
										<div class="modal-body">
												<h4><b><?php echo $d->nama_product; ?></b> - Rp. <?php echo $d->harga; ?> / pcs</h4>
												<div class="form-group">
													<label>Masukan jumlah</label>
													<input type="number" value="1" name="jumlah" class="form-control" min="1" max="<?php echo $d->stock; ?>" />
												</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary">Beli</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
</div>
