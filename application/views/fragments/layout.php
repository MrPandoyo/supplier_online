<?php
$this->load->view('fragments/head');
if(isset($customCss)){$this->load->view($customCss);}
$this->load->view('fragments/header');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php if(isset($page_title) && $page_title != '') : echo $page_title; endif; 'Home' ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">
			<?php if(isset($page_title) && $page_title != ''){ echo $page_title;} ?>
		</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<?php if($this->session->flashdata() && $this->session->flashdata('pesan_sukses') != ''){
		echo "<div class='alert alert-success alert-message'>";
		echo $this->session->flashdata('pesan_sukses');
		echo "</div>";} ?>
		<?php if($this->session->flashdata() && $this->session->flashdata('pesan_error') != ''){
			echo "<div class='alert alert-danger alert-message'>";
			echo $this->session->flashdata('pesan_error');
			echo "</div>";} ?>
      <?php $this->load->view($content);?>
    </section>
    <!-- /.content -->
  </div>


<?php
$this->load->view('fragments/sidebar');
$this->load->view('fragments/footer');
$this->load->view('fragments/javascript');
if(isset($customJavascript)){$this->load->view($customJavascript);}
$this->load->view('fragments/closer');
?>
