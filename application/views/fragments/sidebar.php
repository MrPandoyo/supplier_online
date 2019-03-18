<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Category</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> User Admin</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Kurir</a></li>
          </ul>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Manage Products</span>
          </a>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Manage Requests</span>
          </a>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Manage Pengiriman</span>
          </a>
        </li>
          <?php else: ?>
      <!-- client sidebar -->
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Katalog produk</span>
          </a>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Order</span>
          </a>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Pengiriman</span>
          </a>
        </li>
          <?php endif; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>