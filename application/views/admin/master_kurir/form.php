<?php if(validation_errors() != ''){
	echo '<div class="alert alert-danger alert-warning">';
	echo validation_errors();
	echo '</div>';}
?>
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Form Kurir</h3>
	</div>
	<form action="index.php/master_kurir/save" method="post">
		<input type="hidden" name="id" value="<?php if(isset($kurir)):echo $kurir[0]->id; endif; '' ?>">
		<div class="box-body">
			<div class="form-group">
				<label>Nama</label>
				<input required type="text" class="form-control" name="nama" value="<?php if(isset($kurir)):echo $kurir[0]->nama; endif; '' ?>" placeholder="Masukan Nama">
			</div>
			<div class="form-group">
				<label>Kode</label>
				<input required type="text" class="form-control" name="kode" value="<?php if(isset($kurir)):echo $kurir[0]->kode; endif; '' ?>" placeholder="Masukan Kode">
			</div>
		</div>
		<div class="box-footer">
			<div class="pull-right">
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="index.php/master_kurir" class="btn btn-default">Kembali</a>
			</div>
		</div>
	</form>
</div>
