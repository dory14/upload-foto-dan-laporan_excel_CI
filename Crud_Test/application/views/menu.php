<div class="sidebar sidebar-main">
  <div class="sidebar-content">
    <div class="sidebar-user">
    </div>
    <div class="sidebar-category sidebar-category-visible">
      <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">
          <li class="<?php echo menuaktif('dashboard',$aktif); ?>"><a href="<?php echo base_url(); ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
           <li class="<?php echo menuaktif('barang',$aktif); ?>"><a href="<?php echo base_url('barang/barang'); ?>"><i class="icon-box"></i> <span>Barang</span></a></li>
           <li class="<?php echo menuaktif('User',$aktif); ?>"><a href="<?php echo site_url('barang/User'); ?>"><i class="icon-collaboration"></i> <span>Manajemen Akses</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>