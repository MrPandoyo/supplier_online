<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Filter Product</h3>
			</div>
			<!-- /.box-header -->
			<form action="">
				<div class="box-body">
					<div class="col-md-12">
						<label>Nama Product</label>
						<input type="text" class="form-control" />
					</div>
				</div>
				<div class="box-footer">
					<div class="row">
						<div class="col-md-12">
							<div class="pull-right">
								<button class="btn btn-primary"><span class="fa fa-search"></span> Cari</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">List Product</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<?php foreach ($datas->result() as $d) { ?>
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
										<h5 class="description-header"><?php echo $d->nama_product; ?></h5>
									</div>
								</div>
								<div class="col-sm-6 border-right">
									<div class="description-block">
										<a class="btn btn-primary btn-block"><span class="fa fa-shopping-cart"></span> Beli</a>
									</div>
									<!-- /.description-block -->
								</div>
								<!-- /.col -->
								<div class="col-sm-6 border-right">
									<div class="description-block">
										<a class="btn btn-primary btn-block"><span class="fa fa-eye"></span> Detail</a>
									</div>
									<!-- /.description-block -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div>
					</div>
					<!-- /.widget-user -->
				</div>
				<?php } ?>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
</div>
