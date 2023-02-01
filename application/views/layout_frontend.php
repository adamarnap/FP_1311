<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- CSS Libraries -->

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/style.css'); ?> ">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/components.css'); ?>">
</head>

<body class="layout-3">
	<div id="app">
		<div class="main-wrapper container">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<a href="index.html" class="navbar-brand sidebar-gone-hide"> TOKOKITA </a>
				<div class="navbar-nav">
					<a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
				</div>
				<div class="nav-collapse">
					<a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
						<i class="fas fa-ellipsis-v"></i>
					</a>
					<ul class="navbar-nav">
						<li class="nav-item active"><a href="#" class="nav-link"> Tentang Tokokita </a></li>
						<li class="nav-item"><a href="#" class="nav-link"> Cara Belanja </a></li>
						<li class="nav-item"><a href="#" class="nav-link"> Hubungi Kami </a></li>
					</ul>
				</div>
				<form class="form-inline ml-auto">
					<ul class="navbar-nav">
						<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
									class="fas fa-search"></i></a></li>
					</ul>

					<div class="search-element">

						<select class="form-control" data-width="150" name="" id="">
							<?php foreach($kategori as $val) : ?>
							<option value="elektronik"> <?php echo $val -> namaKat; ?> </option>
							<?php endforeach; ?>
						</select>

						<input class="form-control" type="search" placeholder="Search" aria-label="Search"
							data-width="350">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>


					</div>

				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
							class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
						<div class="dropdown-menu dropdown-list dropdown-menu-right">
							<div class="dropdown-header">Notifications
								<div class="float-right">
									<a href="#">Mark All As Read</a>
								</div>
							</div>
							<div class="dropdown-list-content dropdown-list-icons">
								<a href="#" class="dropdown-item dropdown-item-unread">
									<div class="dropdown-item-icon bg-primary text-white">
										<i class="fas fa-code"></i>
									</div>
									<div class="dropdown-item-desc">
										Template update is available now!
										<div class="time text-primary">2 Min Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<div class="dropdown-item-icon bg-info text-white">
										<i class="far fa-user"></i>
									</div>
									<div class="dropdown-item-desc">
										<b>You</b> and <b>Dedik Sugiharto</b> are now friends
										<div class="time">10 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<div class="dropdown-item-icon bg-success text-white">
										<i class="fas fa-check"></i>
									</div>
									<div class="dropdown-item-desc">
										<b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
										<div class="time">12 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<div class="dropdown-item-icon bg-danger text-white">
										<i class="fas fa-exclamation-triangle"></i>
									</div>
									<div class="dropdown-item-desc">
										Low disk space. Let's clean it!
										<div class="time">17 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<div class="dropdown-item-icon bg-info text-white">
										<i class="fas fa-bell"></i>
									</div>
									<div class="dropdown-item-desc">
										Welcome to Stisla template!
										<div class="time">Yesterday</div>
									</div>
								</a>
							</div>
							<div class="dropdown-footer text-center">
								<a href="#">View All <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</li>
				</ul>

				<!-- Button Daftar Masuk -->
				<?php if(!empty($this -> session -> userdata('id'))) { ;?>
				<!-- <a href="" class="btn btn-outline-light mr-3"> Menu Member </a> -->
				<div class="btn btn-outline-light mr-3"> Hi, <?php echo $this -> session -> userdata('userName') ?> </div>
				<a href="<?php echo site_url('member/logout'); ?>" class="btn btn-outline-light"> Logout </a>
				<?php } else { ?>
				<a href="<?php echo site_url('home/login'); ?>" class="btn btn-outline-light mr-3"> Masuk </a>

				<a href="<?php echo site_url('home/register'); ?>" class="btn btn-outline-light"> Daftar </a>
				<?php } ?>
			</nav>

			<nav class="navbar navbar-secondary navbar-expand-lg">
				<div class="container">
					<ul class="navbar-nav">
						<?php foreach ($kategori as $val) :?>
						<li class="nav-item">
							<a href="#" class="nav-link"><span> <?php echo $val -> namaKat; ?> </span></a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</nav>

			<?= $contents ?>


			<footer class="main-footer">
				<div class="footer-left">
					Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
						Nauval Azhar</a>
				</div>
				<div class="footer-right">
					2.3.0
				</div>
			</footer>
		</div>
	</div>

	<!-- General JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="../assets/js/stisla.js"></script>

	<!-- JS Libraies -->

	<!-- Page Specific JS File -->

	<!-- Template JS File -->
	<script src="../assets/js/scripts.js"></script>
	<script src="../assets/js/custom.js"></script>
</body>

</html>
