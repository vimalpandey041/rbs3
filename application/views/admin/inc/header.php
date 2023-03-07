<?php /*
    if(!$this->session->userdata('login'))
    {
      return redirect('admin/login');
    } */
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Panel</title>

  <!-- Font Awesome Icons -->
  <?= link_tag('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <?= link_tag('assets/admin/css/adminlte.min.css'); ?>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/plugins/datatableEksport/buttons.dataTables.min.css'); ?>">
	 <!-- File Manager css -->
	  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/filemanager/scripts/filemanager.min.css">
	   
    
	 
   

    <style type="text/css">
      [class*=sidebar-dark-] .nav-sidebar>.nav-item.menu-open>.nav-link, [class*=sidebar-dark-] .nav-sidebar>.nav-item:hover>.nav-link, [class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-link:focus {
    background-color: rgba(54, 135, 236, 0.62);

}
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM 
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url('assets/admin/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> Muskan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview <?php if(isset($menu_p1) || isset($menu_p2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Top Header
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('manage_top_header'); ?>" class="nav-link <?php if(isset($menu_p1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Top Header</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Announcement
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_announcement'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Announcement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_announcement'); ?>" class="nav-link <?php if(isset($menu_c2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Announcement</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(isset($menu_p1) || isset($menu_p2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                DIRECTOR'S CORNER
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_director_corner'); ?>" class="nav-link <?php if(isset($menu_p1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage director's </p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                About RBSSIET
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_about'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage About</p>
                </a>
              
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                FAQ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_faq'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_faq'); ?>" class="nav-link <?php if(isset($menu_c2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage FAQ</p>
                </a>
              </li>
            </ul>
          </li>
          
            
          <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Notice Board
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                News & Events
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_news_events'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New News & Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_news_events'); ?>" class="nav-link <?php if(isset($menu_c2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage News & Events</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
              Notices
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_notices'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Notices</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_notices'); ?>" class="nav-link <?php if(isset($menu_c2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Notices</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Admissions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_admissions'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Admissions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_admissions'); ?>" class="nav-link <?php if(isset($menu_c2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Admissions</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Important Persons
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_person'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Person</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_persons'); ?>" class="nav-link <?php if(isset($menu_c2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Persons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Footer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_footer_block_1'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add block 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/add_footer_block_2'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add block 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_footer'); ?>" class="nav-link <?php if(isset($menu_c2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage footer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(isset($menu_c1) || isset($menu_c2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_category'); ?>" class="nav-link <?php if(isset($menu_c1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_category'); ?>" class="nav-link <?php if(isset($menu_c2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Categories</p>
                </a>
              </li>
            </ul>
          </li>

        <?php /*  <li class="nav-item">
            <a href="<?=base_url('admin/homepage');?>" class="nav-link <?php if(isset($menu_h1)){echo "active";} ?>">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Homepage
              </p>
            </a>
          </li>  */ ?>
          
          <li class="nav-item">
            <a href="<?=base_url('admin/order_list');?>" class="nav-link <?php if(isset($menu_o1)){echo "active";} ?>">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                ORDERS
              </p>
            </a>
          </li>
		  
		<li class="nav-item has-treeview <?php if(isset($menu_g1) || isset($menu_g2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_gallery'); ?>" class="nav-link <?php if(isset($menu_g1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_gallery'); ?>" class="nav-link <?php if(isset($menu_g2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Gallery</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="<?=base_url('admin/settings');?>" class="nav-link <?php if(isset($menu_s1)){echo "active";} ?>">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
		  
		  <li class="nav-item has-treeview <?php if(isset($menu_p1) || isset($menu_p2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_page'); ?>" class="nav-link <?php if(isset($menu_p1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_pages'); ?>" class="nav-link <?php if(isset($menu_p2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Page</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item has-treeview <?php if(isset($menu_t1) || isset($menu_t2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Trade Show
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_tradeshow'); ?>" class="nav-link <?php if(isset($menu_t1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New TradeShow</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_tradeshow'); ?>" class="nav-link <?php if(isset($menu_t2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage TradeShow</p>
                </a>
              </li>
            </ul>
          </li>
		  
		  <li class="nav-item has-treeview <?php if(isset($menu_f1) || isset($menu_f2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Trade Fair Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_tradefairgallery'); ?>" class="nav-link <?php if(isset($menu_f1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add NewTradeFairGallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_tradefairgallery'); ?>" class="nav-link <?php if(isset($menu_f2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage TradeFairGallery</p>
                </a>
              </li>
            </ul>
          </li>
		  
		    <li class="nav-item has-treeview <?php if(isset($menu_s1) || isset($menu_s2)){echo "menu-open";} ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Sliders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_slider'); ?>" class="nav-link <?php if(isset($menu_s1)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/manage_sliders'); ?>" class="nav-link <?php if(isset($menu_s2)){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sliders</p>
                </a>
              </li>
            </ul>
          </li>
		  		  
          <li class="nav-item">
            <a href="<?= base_url('admin/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
