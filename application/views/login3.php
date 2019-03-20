<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
	<style type="text/css">
		body { 
  background: url(<?php echo base_url().'images/sunset.jpg'; ?>) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.panel-default {
opacity: 0.9;
margin-top:30px;
}
.form-group.last { margin-bottom:0px; }
	</style>
</head>
<body>
	<div class="container">
	    <div class="row">
	    	<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert alert-danger alert-danger'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
					
				}else if($_GET['pesan'] == "logout"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-success'>";
						echo $this->session->flashdata('Anda Telah Logut');
						echo "</div>";
					}	
				

				}else if($_GET['pesan'] == "belumlogin"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-primary'>";
						echo $this->session->flashdata('alert');
						echo "</div>";
					}	
				}
			}else{
				if($this->session->flashdata())
			{
				echo "<div class='alert alert-danger alert-message'>";
				echo $this->session->flashdata('alert');
				echo "</div>";
			}
		}
	?>
	        <div class="col-md-4 col-md-offset-7">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    <span class="glyphicon glyphicon-lock"></span> Login</div>
	                <div class="panel-body">
	                    <form action="<?php echo base_url().'index.php/welcome/login' ?>" method="post" class="form-horizontal" role="form">
		                    <div class="form-group">
		                        <label for="inputEmail3" class="col-sm-3 control-label">
		                            Email</label>
		                        <div class="col-sm-9">
		                            <input type="email" class="form-control" name="username" id="inputEmail3" placeholder="Email" required>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputPassword3" class="col-sm-3 control-label">
		                            Password</label>
		                        <div class="col-sm-9">
		                            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
		                        </div>
		                    </div>
		                    <div class="form-group last">
		                        <div class="col-sm-offset-3 col-sm-9">
		                            <button type="submit" class="btn btn-primary">Login</button>
		                        </div>
		                    </div>
	                    </form>
	                </div>
	                <div class="panel-footer">
	                    <a href="<?php echo base_url().'index.php/welcome/daftar'; ?>">Daftar menjadi Client</a></div>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>


