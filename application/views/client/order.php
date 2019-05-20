<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Current Order</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<?php if($cart != null){ ?>
				<form action="<?php echo base_url().'index.php/proses_order'?>" method="post">
					<input type="hidden" name="id" value="<?php echo $cart[0]->id; ?>">
					<input type="hidden" id="fieldTotals" name="totals" value="<?php echo $totals; ?>">
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
						if($p->stock == 0){
							echo '<tr style="background-color: lightcoral">';
							$empty = true;
						}else{
							echo '<tr>';
						}
						if ($p->foto != null && $p->foto != '') {
							echo "<td class='text-center'><img style='max-height: 50px;max-width: 50px;' src='images/product/" . $p->foto . "'></td>";
						} else {
							echo "<td class='text-center'><img style='max-height: 50px;max-width: 50px;' src='images/no_image.png'></td>";
						}
						echo "<td>" . $p->nama_product . "</td>";
						echo "<td><input data-harga='$p->harga' type='number' name='$data->id' max='$p->stock' min='1' class='form-control jml' value='" . $data->jumlah . "'></td>";
						echo "<td class='subtotal' data-total='".$p->harga * $data->jumlah."' id='$data->id'>".$p->harga * $data->jumlah."</td>";
						echo "<td class='text-center'><a href='".base_url()."index.php/hapus_item?id=".$data->id."' class='btn btn-danger'><span class='fa fa-trash'></span></a></td>";
						echo "</tr>";
					}
					echo "<tr>";
					echo "<td colspan='3' class='text-center'><b><span class='pull-right'>Total</span></b></td>";
					echo "<td colspan='2' class='text-center'><b><span class='pull-left' id='totals'>$totals</span></td></b>";
					echo "</tr>";
					?>
					</tbody>
				</table>
					<?php if($empty) { ?>
					<div class="alert alert-danger">
						Harap hapus item yang stocknya telah habis
					</div>
					<?php } ?>
					<button type="submit" class="pull-right btn btn-primary" <?php echo ($empty) ? 'disabled' : ''; ?>>Proses Order</button>
				</form>
				<?php }else{ ?>
					<div class="text-center">
						<h3>Order kosong, silahkan klik <a href="<?php echo base_url().'index.php/katalog'; ?>">disini</a> untuk menambah order</h3>
					</div>
				<?php } ?>
			</div>
		</div>
			<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
<!-- /.col -->

