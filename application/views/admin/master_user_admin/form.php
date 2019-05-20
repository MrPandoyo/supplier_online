<?php if(validation_errors() != ''){
	echo '<div class="alert alert-danger alert-warning">';
	echo validation_errors();
	echo '</div>';}
?>
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Form User Admin</h3>
	</div>
	<form action="index.php/master_user_admin/save" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($user)):echo $user[0]->id; endif; '' ?>">
		<div class="box-body">
			<div class="form-group">
				<label>Nama</label>
				<input required type="text" class="form-control" name="nama" value="<?php if(isset($user)):echo $user[0]->nama; endif; '' ?>" placeholder="Masukan Nama">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input required type="text" class="form-control" name="username" value="<?php if(isset($user)):echo $user[0]->username; endif; '' ?>" placeholder="Masukan Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input required min="0" type="password" class="form-control" name="password" >
			</div>
			<div class="form-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control">
			</div>
		</div>
		<div class="box-footer">
			<div class="pull-right">
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="index.php/master_user_admin" class="btn btn-default">Kembali</a>
			</div>
		</div>
	</form>
</div>
