<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('backend/admin/Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>

      <li <?php if ($page == 'pakar') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('backend/admin/Pakar'); ?>">
          <i class="fa fa-user-md"></i>
          <span>Data Pakar</span>
        </a>
      </li>

      <li <?php if ($page == 'penyakit') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('backend/admin/Penyakit'); ?>">
          <i class="fa fa-book"></i>
          <span>Data Penyakit</span>
        </a>
      </li>
      
      <li <?php if ($page == 'user') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('backend/admin/user'); ?>">
          <i class="fa fa-group"></i>
          <span>Data User</span>
        </a>
      </li>

      <li <?php if ($page == 'artikel') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('backend/admin/artikel'); ?>">
          <i class="fa fa-newspaper-o"></i>
          <span>Data Artikel</span>
        </a>
      </li>
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>