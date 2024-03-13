<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $path;?>index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $path;?>company/index.php" class="nav-link">Company</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://github.com/AymanDasa/JIMP/discussions" class="nav-link">🚀Community <span class="right badge badge-danger">New</span></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
	  
	   <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">User Menue</span>
          <div class="dropdown-divider"></div>
          <a href="<?php echo $path;?>profile/index.php" class="dropdown-item">
            <i class="fas fa-id-badge mr-2"></i> User Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo $path;?>access/resetpassword.php" class="dropdown-item">
            <i class="fas fa-key mr-2"></i> Security
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo $path;?>access/logout.php" class="dropdown-item">
            <i class="fas fa-right-to-bracket mr-2"></i> Logout
          </a>
        </div>
      </li>
      </li>
      <?php /*
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $path;?>adminlte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $path;?>adminlte/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $path;?>adminlte/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
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
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      */?>

 
     
<?php 

$admin_access = intval($_SESSION["is_admin"]);

	if($admin_access){?>
	 <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user text-danger"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Admin Menue</span>
          <div class="dropdown-divider"></div>
			<a href="<?php echo $path;?>access/register.php" class="dropdown-item">
			<i class="fas fa-id-badge mr-2 text-danger"></i> New User
			</a>
			<a href="<?php echo $path;?>access/data_reset.php" class="dropdown-item">
			<i class="fas fa-id-badge mr-2 text-danger"></i> Delete All Data
			</a>
			<a href="<?php echo $path;?>access/2fa.php" class="dropdown-item">
			<i class="fas fa-user-shield mr-2 text-danger" ></i> 2FA
			</a>
          <div class="dropdown-divider"></div>
			<a href="<?php echo $path;?>access/debug.php" class="dropdown-item">
			<i class="fas fa-user-shield mr-2 text-danger" ></i> Enable Debug
			</a>
		<div class="dropdown-divider"></div>
			<a href="<?php echo $Homepath;?>phpmyadmin/" class="dropdown-item">
			<i class="fas fa-right-to-bracket mr-2 text-danger"></i> phpMyAdmin
			</a>
          <div class="dropdown-divider"></div>
			<a href="<?php echo $path;?>access/resetpassword.php" class="dropdown-item">
			<i class="fas fa-key mr-2  text-danger"></i> Reset Password
			</a>
		<div class="dropdown-divider"></div>
			<a href="<?php echo $path;?>access/logout.php" class="dropdown-item">
			<i class="fas fa-right-to-bracket mr-2 text-danger"></i> Logout
			</a>
        </div>
      </li>
<?php } ?>
    </ul>
  </nav>
