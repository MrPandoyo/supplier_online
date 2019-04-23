<?php if(validation_errors() != ''){
	echo '<div class="alert alert-danger alert-warning">';
	echo validation_errors();
	echo '</div>';}
?>
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Form Produk</h3>
	</div>
	<form action="index.php/master_produk/save" method="post">
		<input type="hidden" name="id" value="<?php if(isset($product)):echo $product[0]->id; endif; '' ?>">
		<div class="box-body">
			<div class="form-group">
				<label>Kode Produk</label>
				<input required type="text" class="form-control" name="kode" value="<?php if(isset($product)):echo $product[0]->kode; endif; '' ?>" placeholder="Masukan Kode">
			</div>
			<div class="form-group">
				<label>Nama Produk</label>
				<input required type="text" class="form-control" name="nama_product" value="<?php if(isset($product)):echo $product[0]->nama_product; endif; '' ?>" placeholder="Masukan Nama">
			</div>
			<div class="form-group">
				<label>Stock</label>
				<input required min="0" type="number" class="form-control" name="stock" value="<?php if(isset($product)):echo $product[0]->stock; endif; '' ?>" >
			</div>
			<div class="form-group">
				<label>Harga</label>
				<input required min="0" type="number" class="form-control" name="harga" value="<?php if(isset($product)):echo $product[0]->harga; endif; '' ?>" >
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea name="description" placeholder="Masukan Deskripsi" class="form-control"><?php if(isset($product)):echo $product[0]->description; endif; '' ?></textarea>
			</div>
		</div>
		<div class="box-footer">
			<div class="pull-right">
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="index.php/master_produk" class="btn btn-default">Kembali</a>
			</div>
		</div>
	</form>
</div>
