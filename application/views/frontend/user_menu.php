<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<!-- Main Content -->
	<div class="main-content">
		<section class="section">
			<div class="section-header">
				<h1> Menu utama dashboard Member </h1>

			</div>

			<!-- Carousel -->

			<!-- End Carousel -->
			<div class="section-body">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="card">
							<div class="card-header">
								<h4> Menu Member </h4>
							</div>
							<div class="card-body">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?php echo site_url('member/index'); ?>"> Beranda </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo site_url('member/transaksi'); ?>"> Transaksi </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"> Riwayat Transaksi </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo site_url('member/toko'); ?>"> Toko </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"> Ubah Profil </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"> Logout </a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url('member'); ?>" class="nav-link btn btn-primary mr-3"> Menu Member </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="card card-statistic-1">

							<div class="card-icon bg-primary">
								<i class="far fa-user"></i>
							</div>

							<div class="card-wrap">
								<div class="card-header">
									<h4>Total Admin</h4>
								</div>
								<div class="card-body">
									10
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="card card-statistic-1">
							<div class="card-icon bg-danger">
								<i class="far fa-newspaper"></i>
							</div>
							<div class="card-wrap">
								<div class="card-header">
									<h4>News</h4>
								</div>
								<div class="card-body">
									42
								</div>
							</div>
						</div>
					</div>
          			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="card card-statistic-1">
							<div class="card-icon bg-warning">
								<i class="far fa-file"></i>
							</div>
							<div class="card-wrap">
								<div class="card-header">
									<h4>Reports</h4>
								</div>
								<div class="card-body">
									1,201
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>

</html>
