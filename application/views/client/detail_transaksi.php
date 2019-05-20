<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<?php if($transaksi != null){ ?>
			<?php
			$where = array('id' => $transaksi[0]->id_client);
			$c = $this->m_supplier->getData('client', $where)->result()[0];
			?>
			<div class="row invoice-info" style="padding-left: 20%">
				<div class="col-md-6 invoice-col">
					Info Toko
					<address>
						<strong><?php echo $c->nama_toko;?></strong><br>
						Alamat : <?php echo $c->alamat;?><br>
						Phone : <?php echo $c->phone;?><br>
						Email : <?php echo $c->email;?><br>
					</address>
				</div>
				<div class="col-md-6 invoice-col">
					Info Transaksi <br>
					<b>Transaction ID : <?php echo $transaksi[0]->id;?></b><br>
					<b>Status Transaksi : <?php echo $transaksi[0]->status;?></b><br>
					<b>Tangal Pembelian:</b> <?php echo $transaksi[0]->waktu_dibuat;?><br>
					<b>PEMBAYARAN TUNAI</b>
				</div>
				<!-- /.col -->
			</div>
			<div class="box-body table-responsive">
					<table class="table table-striped">
						<thead>
						<tr>
							<th>&nbsp;</th>
							<th>Item</th>
							<th>Jml</th>
							<th>Subtotal</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$empty = false;
						foreach ($details as $data) {
							$w = array('id' => $data->id_product);
							$p = $this->m_supplier->getData('product', $w)->result()[0];
							echo "<tr>";
							if ($p->foto != null && $p->foto != '') {
								echo "<td class='text-center'><img style='max-height: 50px;max-width: 50px;' src='images/product/" . $p->foto . "'></td>";
							} else {
								echo "<td class='text-center'><img style='max-height: 50px;max-width: 50px;' src='images/no_image.png'></td>";
							}
							echo "<td>" . $p->nama_product . "</td>";
							echo "<td>".$data->jumlah."</td>";
							echo "<td class='subtotal' data-total='".$p->harga * $data->jumlah."' id='$data->id'>".$p->harga * $data->jumlah."</td>";
							echo "</tr>";
						}
						echo "<tr>";
						echo "<td colspan='3' class='text-center'><b><span class='pull-right'>Total</span></b></td>";
						echo "<td colspan='2' class='text-center'><b><span class='pull-left' id='totals'>$totals</span></td></b>";
						echo "</tr>";
						?>
						</tbody>
					</table>
					<a href="<?php echo base_url().'index.php/print_transaksi?id='.$transaksi[0]->id;?>" class="pull-right btn btn-primary"><span class="fa fa-print"></span> Print</a>
			</div>
			<?php } ?>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
<!-- /.col -->

