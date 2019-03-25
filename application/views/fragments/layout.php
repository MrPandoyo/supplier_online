<?php
$this->load->view('fragments/head');
$this->load->view('fragments/header');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php if(isset($data) && $data['page_title'] != ''){ echo $data['page_title'];} ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">
			<?php if(isset($data) && $data['page_tab'] != ''){ echo $data['page_tab'];} ?>
		</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
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
