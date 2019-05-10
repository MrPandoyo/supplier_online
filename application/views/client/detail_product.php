<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo($product[0]->foto != null && $product[0]->foto != '') ? base_url().'images/product/'.$product[0]->foto : base_url().'images/no_image.png'; ?>" style="max-width: 100%;" alt="">
					</div>
					<div class="col-md-6">
						<h3><b><?php echo $product[0]->nama_product; ?></b></h3>
						<h4>
							<p><b>Rp. <?php echo $product[0]->harga; ?></b></p>
							<p><?php echo $product[0]->description; ?></p>
						</h4>
						<hr/>
						<a href="" class="btn btn-success btn-block"><span class="fa fa-shopping-cart"></span> Beli</a>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
</div>
