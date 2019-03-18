<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo base_url(); ?>">
    	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>

		<script type="text/javascript" src="assets/datatable/jquery.dataTables.js"></script>
		<script type="text/javascript" src="assets/datatable/datatables.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/datatable/datatables.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/home.css">

		<!-- Website Font style -->
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<title>Home</title>
</head>
<body class="home">
    <div class="container-fluid display-table" style="min-height: 100%;margin-bottom: -50px;">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="index.php/client">
                    	<img src="images/logo-2.png" alt="merkery_logo"  >
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="<?php if($tab == 'home'){echo 'active';} ?>"><a href="index.php/client"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li class="<?php if($tab == 'request_barang'){echo 'active';} ?>"><a href="index.php/client/request_barang"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Request Barang</span></a></li>
                        <li class="<?php if($tab == 'pengiriman'){echo 'active';} ?>"><a href="index.php/client/pengiriman"><i class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Pengiriman</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-12">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/user.png" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?php echo $this->session->userdata('nama');?></span>
                                                    <p class="text-muted small">
                                                        <?php echo $this->session->userdata('email');?>
                                                    </p>
                                                    <div class="divider"></div>
                                                    <a href="<?php echo base_url().'index.php/client/logout'; ?>" class="view btn-sm active"><span class="glyphicon glyphicon-log-out"></span> Logout
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="row">