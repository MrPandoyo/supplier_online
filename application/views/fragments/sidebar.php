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
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- admin sidebar -->
        <?php if($this->session->userdata('tipe_user') == 'admin') : ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php/admin/category"><i class="fa fa-circle-o"></i> Category</a></li>
            <li><a href="index.php/admin/user_admin"><i class="fa fa-circle-o"></i> User Admin</a></li>
            <li><a href="index.php/admin/kurir"><i class="fa fa-circle-o"></i> Kurir</a></li>
          </ul>
        </li>
        <li>
          <a href="index.php/admin/manage_produk">
            <i class="fa fa-th"></i> <span>Manage Products</span>
          </a>
        </li>
        <li>
          <a href="index.php/admin/manage_request">
            <i class="fa fa-th"></i> <span>Manage Requests</span>
          </a>
        </li>
        <li>
          <a href="index.php/admin/manage_pengiriman">
            <i class="fa fa-th"></i> <span>Manage Pengiriman</span>
          </a>
        </li>
          <?php else: ?>
      <!-- client sidebar -->
        <li>
          <a href="index.php/client/shop">
            <i class="fa fa-th"></i> <span>Katalog produk</span>
          </a>
        </li>
        <li>
          <a href="index.php/client/order">
            <i class="fa fa-th"></i> <span>Order</span>
          </a>
        </li>
        <li>
          <a href="index.php/client/pengiriman">
            <i class="fa fa-th"></i> <span>Pengiriman</span>
          </a>
        </li>
          <?php endif; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
