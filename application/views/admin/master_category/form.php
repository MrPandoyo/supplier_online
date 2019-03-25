<?php if(validation_errors() != ''){
	echo '<div class="alert alert-danger alert-warning">';
	echo validation_errors();
	echo '</div>';}
?>
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Form Kategori</h3>
	</div>
	<form action="index.php/master_category/save" method="post">
		<input type="hidden" name="id" value="<?php if(isset($kategori)):echo $kategori[0]->id; endif; '' ?>">
		<div class="box-body">
			<div class="form-group">
				<label>Kode Kategori</label>
				<input type="text" class="form-control" name="kode" value="<?php if(isset($kategori)):echo $kategori[0]->kode; endif; '' ?>" placeholder="Masukan Kode">
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="nama" value="<?php if(isset($kategori)):echo $kategori[0]->nama; endif; '' ?>" placeholder="Masukan Nama">
			</div>
		</div>
		<div class="box-footer">
			<div class="pull-right">
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="index.php/master_category" class="btn btn-default">Kembali</a>
			</div>
		</div>
	</form>
</div>
