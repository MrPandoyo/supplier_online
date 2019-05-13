<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
			<?php  if($this->session->userdata('foto') != null && $this->session->userdata('foto') != '') : ?>
				<img src="images/profile/<?php echo $this->session->userdata('foto')?>" class="img-circle" alt="User Image">
			<?php else: ?>
				<img src="images/user.png" class="img-circle" alt="User Image">
			<?php endif; ?>
        </div>
        <div class="pull-left info">
          	<p><?php echo $this->session->userdata('nama');?></p>
			<small>Joined on <?php echo $this->session->userdata('join_date'); ?></small>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- admin sidebar -->
        <?php if($this->session->userdata('tipe_user') == 'admin') : ?>
        <li class="treeview <?php if(isset($page_tab) && $page_tab == 'Master') echo 'menu-open' ?>">
          <a href="#">
            <i class="fa fa-lock"></i> <span>Master</span>
            <span class="pulll-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="<?php if(isset($page_tab) && $page_tab == 'Master') echo 'display:block' ?>">
			  <li class="<?php if(isset($page_level1) && $page_level1 == 'User Admin') echo 'active' ?>"><a href="index.php/master_user_admin"><i class="fa fa-lock"></i> User Admin</a></li>

			  <li class="<?php if(isset($page_level1) && $page_level1 == 'Client') echo 'active' ?>"><a href="index.php/admin/client"><i class="fa fa-users"></i> Client</a></li>
        
			  <li class="<?php if(isset($page_level1) && $page_level1 == 'Produk') echo 'active' ?>"><a href="index.php/master_produk"><i class="fa fa-th"></i> <span>Manage Products</span></a></li>
			  <li class="<?php if(isset($page_level1) && $page_level1 == 'Kurir') echo 'active' ?>"><a href="index.php/master_kurir"><i class="fa fa-circle-o"></i> Kurir</a></li>
		  </ul>
        </li>
        <li>
          <a href="index.php/admin/manage_request">
            <i class="fa fa-arrow-left"></i> <span>Manage Requests</span>
          </a>
        </li>
        <li>
          <a href="index.php/admin/manage_pengiriman">
            <i class="fa fa-paper-plane"></i> <span>Manage Pengiriman</span>
          </a>
        </li>
          <?php else: ?>
      <!-- client sidebar -->
        <li class="<?php if(isset($page_tab) && $page_tab == 'Katalog') echo 'active' ?>">
          <a href="index.php/katalog">
            <i class="fa fa-th"></i> <span>Katalog produk</span>
          </a>
        </li>
        <li>
          <a href="index.php/client/order">
            <i class="fa fa-shopping-cart"></i> <span>Order</span>
		  	<span class="pull-right-container">
              <small class="label pull-right bg-red">0</small>
            </span>
          </a>
        </li>
        <li>
          <a href="index.php/client/pengiriman">
            <i class="fa fa-paper-plane"></i> <span>Pengiriman</span>
          </a>
        </li>
          <?php endif; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
