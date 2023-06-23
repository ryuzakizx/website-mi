
<!-- .app -->
<div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
  <![endif]-->
  	<!-- .app-header -->
  	<header class="app-header app-header-dark">
  		<!-- .top-bar -->
  		<div class="top-bar">
  			<!-- .top-bar-brand -->
  			<div class="top-bar-brand">
  				<!-- toggle aside menu -->
  				<button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
  				<a href="<?= base_url('admin'); ?>">
  					<img src="<?= base_url('assets/') ?>gambar/logohmps_mi.png" height="45" width="45"> HMPS-MI</a>
  				</div><!-- /.top-bar-brand -->
  				<!-- .top-bar-list -->
  				<div class="top-bar-list">
  					<!-- .top-bar-item -->
  					<div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
  						<!-- toggle menu -->
  						<button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
  					</div><!-- /.top-bar-item -->
  					<!-- .top-bar-item -->
  					<div class="top-bar-item top-bar-item-full">
  						<!-- .top-bar-search -->
  						<form class="top-bar-search">
  							<!-- .input-group -->
  							<div class="input-group input-group-search dropdown">
  								<div class="input-group-prepend">
  									<span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
  								</div><input type="text" class="form-control" data-toggle="dropdown" aria-label="Search" placeholder="Search"> <!-- .dropdown-menu -->
  								<div class="dropdown-menu dropdown-menu-rich dropdown-menu-xl ml-n4 mw-100">
  									<div class="dropdown-arrow ml-3"></div><!-- .dropdown-scroll -->
  									<div class="dropdown-scroll perfect-scrollbar h-auto" style="max-height: 360px">
  										<!-- .list-group -->
  										<div class="list-group list-group-flush list-group-reflow mb-2">
  											<h6 class="list-group-header d-flex justify-content-between">
  												<span>Shortcut</span>
  											</h6><!-- .list-group-item -->
  											<div class="list-group-item py-2">
  												<a href="#" class="stretched-link"></a>
  												<div class="tile tile-sm bg-muted">
  													<i class="fas fa-user-plus"></i>
  												</div>
  												<div class="ml-2"> Create user </div>
  											</div><!-- /.list-group-item -->
  											<!-- .list-group-item -->
  											<div class="list-group-item py-2">
  												<a href="#" class="stretched-link"></a>
  												<div class="tile tile-sm bg-muted">
  													<i class="fas fa-dollar-sign"></i>
  												</div>
  												<div class="ml-2"> Create invoice </div>
  											</div><!-- /.list-group-item -->
  											<h6 class="list-group-header d-flex justify-content-between mt-2">
  												<span>In projects</span> <a href="#" class="font-weight-normal">Show more</a>
  											</h6><!-- .list-group-item -->
  											<div class="list-group-item py-2">
  												<a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
  												<div class="user-avatar user-avatar-sm bg-muted">
  													<img src="assets/images/avatars/bootstrap.svg" alt="">
  												</div>
  												<div class="ml-2">
  													<div class="mb-n1"> Bootstrap </div><small class="text-muted">Just now</small>
  												</div>
  											</div><!-- /.list-group-item -->
  											<!-- .list-group-item -->
  											<div class="list-group-item py-2">
  												<a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
  												<div class="user-avatar user-avatar-sm bg-muted">
  													<img src="assets/images/avatars/slack.svg" alt="">
  												</div>
  												<div class="ml-2">
  													<div class="mb-n1"> Slack </div><small class="text-muted">Updated 25 minutes ago</small>
  												</div>
  											</div><!-- /.list-group-item -->
  											<!-- /.list-group-item -->
  											<h6 class="list-group-header d-flex justify-content-between mt-2">
  												<span>Another section</span> <a href="#" class="font-weight-normal">Show more</a>
  											</h6><!-- .list-group-item -->
  											<div class="list-group-item py-2">
  												<a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
  												<div class="tile tile-sm bg-muted"> P </div>
  												<div class="ml-2">
  													<div class="mb-n1"> Product name </div>
  												</div>
  											</div><!-- /.list-group-item -->
  										</div><!-- /.list-group -->
  									</div><!-- /.dropdown-scroll -->
  									<a href="#" class="dropdown-footer">Show all results</a>
  								</div><!-- /.dropdown-menu -->
  							</div><!-- /.input-group -->
  						</form><!-- /.top-bar-search -->
  					</div><!-- /.top-bar-item -->
  					<!-- .top-bar-item -->
  					<div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
  						<!-- .nav -->
  						<ul class="header-nav nav">
  							<!-- .nav-item -->
  							<li class="nav-item dropdown header-nav-dropdown">
  								<a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a> <!-- .dropdown-menu -->
  								<div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
  									<div class="dropdown-arrow"></div><!-- .dropdown-sheets -->
  									<div class="dropdown-sheets">
  										<!-- .dropdown-sheet-item -->
  										<div class="dropdown-sheet-item">
  											<a href="#" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span> <span class="tile-peek">Teams</span></a>
  										</div><!-- /.dropdown-sheet-item -->
  										<!-- .dropdown-sheet-item -->
  										<div class="dropdown-sheet-item">
  											<a href="#" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Projects</span></a>
  										</div><!-- /.dropdown-sheet-item -->
  										<!-- .dropdown-sheet-item -->
  										<div class="dropdown-sheet-item">
  											<a href="#" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span> <span class="tile-peek">Tasks</span></a>
  										</div><!-- /.dropdown-sheet-item -->
  										<!-- .dropdown-sheet-item -->
  										<div class="dropdown-sheet-item">
  											<a href="#" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span> <span class="tile-peek">Feeds</span></a>
  										</div><!-- /.dropdown-sheet-item -->
  										<!-- .dropdown-sheet-item -->
  										<div class="dropdown-sheet-item">
  											<a href="#" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span> <span class="tile-peek">Files</span></a>
  										</div><!-- /.dropdown-sheet-item -->
  									</div><!-- .dropdown-sheets -->
  								</div><!-- .dropdown-menu -->
  							</li><!-- /.nav-item -->
  						</ul><!-- /.nav -->
  						<!-- .btn-account -->
  						<div class="dropdown d-none d-md-flex">
  							<button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="<?= base_url('assets/gambar/profile/') . $user['image']; ?>" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?= $user['nama']; ?></span> <span class="account-description"><?= $user['jabatan']; ?></span></span></button> <!-- .dropdown-menu -->
  							<div class="dropdown-menu">
  								<div class="dropdown-arrow d-lg-none" x-arrow=""></div>
  								<div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
  								<h6 class="dropdown-header d-none d-md-block d-lg-none"> <?= $user['nama']; ?> </h6><a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="#" onclick="confirmLogout();"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
  								<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
  							</div><!-- /.dropdown-menu -->
  						</div><!-- /.btn-account -->
  					</div><!-- /.top-bar-item -->
  				</div><!-- /.top-bar-list -->
  			</div><!-- /.top-bar -->
  		</header><!-- /.app-header -->
  		<!-- .app-aside -->
  		<aside class="app-aside app-aside-expand-md app-aside-light">
  			<!-- .aside-content -->
  			<div class="aside-content">
  				<!-- .aside-header -->
  				<header class="aside-header d-block d-md-none">
  					<!-- .btn-account -->
  					<button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="<?= base_url('assets/gambar/profile/') . $user['image']; ?>" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"><?= $user['nama']; ?></span> <span class="account-description"><?= $user['jabatan']; ?></span></span></button> <!-- /.btn-account -->
  					<!-- .dropdown-aside -->
  					<div id="dropdown-aside" class="dropdown-aside collapse">
  						<!-- dropdown-items -->
  						<div class="pb-3">
  							<a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="#" onclick="confirmLogout();"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
  							<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
  						</div><!-- /dropdown-items -->
  					</div><!-- /.dropdown-aside -->
  				</header><!-- /.aside-header -->
  				<!-- .aside-menu -->
  				<div class="aside-menu overflow-hidden">
  					<!-- .stacked-menu -->
  					<nav id="stacked-menu" class="stacked-menu">
  						<!-- .menu -->
  						<ul class="menu">

  							<!-- .menu-header -->
  							<li class="menu-header">Panel Admin </li><!-- /.menu-header -->
  							<!-- .menu-item -->
  							<li class="menu-item">
  								<a href="<?= base_url('admin'); ?>" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
  							</li><!-- /.menu-item -->
  							<!-- .menu-item -->
  						</ul><!-- /.menu -->
  					</nav><!-- /.stacked-menu -->
  				</div><!-- /.aside-menu -->
  				<!-- Skin changer -->
  				<footer class="aside-footer border-top p-2">
  					<button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
  				</footer><!-- /Skin changer -->
  			</div><!-- /.aside-content -->
  		</aside><!-- /.app-aside -->
  		<!-- .app-main -->
  		<main class="app-main">
  			<!-- .wrapper -->
  			<div class="wrapper">
  				<!-- .page -->
  				<div class="page">
  					<!-- .page-inner -->
  					<div class="page-inner">
  						<!-- .page-title-bar -->
  						<header class="page-title-bar">
  							<!-- page title stuff goes here -->
  							<h1 class="page-title"> Page title </h1>
  						</header><!-- /.page-title-bar -->
  						<!-- .page-section -->
  						<div class="page-section">
  							<!-- .section-block -->
  							<div class="section-block">
  								<!-- page content goes here -->
  								<p> Hello world! </p>
  							</div><!-- /.section-block -->
  						</div><!-- /.page-section -->
  					</div><!-- /.page-inner -->
  				</div><!-- /.page -->
  			</div><!-- /.wrapper -->
  		</main><!-- /.app-main -->
  	</div><!-- /.app -->
  	<script>
    // Fungsi untuk menampilkan pop-up konfirmasi logout
    function confirmLogout() {
    	Swal.fire({
    		title: 'Konfirmasi Logout',
    		text: 'Apakah Anda yakin ingin logout?',
    		icon: 'warning',
    		showCancelButton: true,
    		confirmButtonColor: '#3085d6',
    		cancelButtonColor: '#d33',
    		confirmButtonText: 'Ya, Logout',
    		cancelButtonText: 'Batal'
    	}).then((result) => {
    		if (result.isConfirmed) {
          // Jika pengguna mengklik "Ya, Logout"
          window.location.href = '<?= base_url('auth/logout'); ?>';
      }
  });
    }
</script>