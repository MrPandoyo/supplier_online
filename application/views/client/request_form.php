<div class="col-md-12">
	<h3>Request Barang Form</h3>
<br><br>
<form action="" method="post">

	<div class="form-group">
		<label>Jenis Kurir</label>
		<select class="form-control">
			<option>Sepeda Motor (3-5 jam)</option>
			<option>Mobil Pickup (3-12 jam)</option>
		</select>
	</div>

	<div class="table table-responsive">
		<table class="table table-bordered">
			<tr>
				<th>Nama Item</th>
				<th>Tipe pembelian</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th title="Tambah barang"><button class="btn btn-primary"><i class="fa fa-plus"></i></button></th>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option>Beng Beng (30g)</option>
						<option>Beng Beng (43g)</option>
						<option>Sendal Swallow (size 40)</option>
						<option>Sendal Swallow (size 42)</option>
						<option>Sendal Swallow (size 44)</option>
						<option>Sendal Swallow (size 46)</option>
						<option>Magnum Ice Cream(100g)</option>
					</select>
				</td>
				<td>
					<select class="form-control">
						<option>Kardus Kecil</option>
						<option>kardus Besar</option>
					</select>
				</td>
				<td>Rp. 110.000</td>
				<td>
					<input class="form-control" value="2">
				</td>
				<td><button class="btn btn-danger"><i class="fa fa-minus"></i></button></td>
			</tr>
			<tr>
				<td colspan="3">
					<b>Total Harga</b>
				</td>
				<td colspan="2">
					Rp. 220.000
				</td>
			</tr>
		</table>
	</div>

	<div class="form-group">
		<input type="submit" value="Kirim Request" class="btn btnprimary">
	</div>
</div>
</form>
</div>