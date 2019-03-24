<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
          <img src="#" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a>Xin Chào</a>
          <p> <?php echo $this->session->userdata('login'); ?></p>
          
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo admin_url('home')?>">
            <i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-equalizer"></i> <span>Quản lý bán hàng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('transaction') ?>"><i class="glyphicon glyphicon-upload"></i> Giao dịch</a></li>
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-list"></i> <span>Sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('product')?>"><i class="glyphicon glyphicon-upload"></i> Sản phẩm</a></li>
            <li><a href="<?php echo admin_url('catalog')?>"><i class="glyphicon glyphicon-th-list"></i> Danh mục</a></li>
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>Tài khoản</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('admin')?>"><i class="glyphicon glyphicon-upload"></i> Ban quản trị</a></li>
            <li><a href="<?php echo admin_url('users')?>"><i class="glyphicon glyphicon-upload"></i>Người dùng</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-phone-alt"></i> <span>Hỗ trợ và liên hệ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('suppot')?>/edit/Content"><i class="glyphicon glyphicon-upload"></i> Hỗ trợ</a></li>
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-tag"></i> <span>Nội dung</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('slide')?>"><i class="glyphicon glyphicon-upload"></i> Slide</a></li>
            <li><a href="<?php echo admin_url('footer')?>/edit/Content"><i class="glyphicon glyphicon-th-list"></i> Footer</a></li>
            <li><a href="<?php echo admin_url('about') ?>/edit/Content"><i class="glyphicon glyphicon-th-list"></i>Giới Thiệu</a></li>

          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>