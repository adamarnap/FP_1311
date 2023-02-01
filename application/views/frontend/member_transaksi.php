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
					<div class="col">
						<div class="section-header">
							<button type="button" class="btn btn-primary mr-3">
								Notifications <span class="badge badge-transparent">4</span>
							</button>
							<button type="button" class="btn  mr-3">
								Notifications <span class="badge badge-success">4</span>
							</button>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>Invoices</h4>
								<div class="card-header-action">
									<a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive table-invoice">
									<table class="table table-striped">
										<tr>
											<th>Invoice ID</th>
											<th>Customer</th>
											<th>Status</th>
											<th>Due Date</th>
											<th>Action</th>
										</tr>
										<tr>
											<td><a href="#">INV-87239</a></td>
											<td class="font-weight-600">Kusnadi</td>
											<td>
												<div class="badge badge-warning">Unpaid</div>
											</td>
											<td>July 19, 2018</td>
											<td>
												<a href="#" class="btn btn-primary">Detail</a>
											</td>
										</tr>
										<tr>
											<td><a href="#">INV-48574</a></td>
											<td class="font-weight-600">Hasan Basri</td>
											<td>
												<div class="badge badge-success">Paid</div>
											</td>
											<td>July 21, 2018</td>
											<td>
												<a href="#" class="btn btn-primary">Detail</a>
											</td>
										</tr>
										<tr>
											<td><a href="#">INV-76824</a></td>
											<td class="font-weight-600">Muhamad Nuruzzaki</td>
											<td>
												<div class="badge badge-warning">Unpaid</div>
											</td>
											<td>July 22, 2018</td>
											<td>
												<a href="#" class="btn btn-primary">Detail</a>
											</td>
										</tr>
										<tr>
											<td><a href="#">INV-84990</a></td>
											<td class="font-weight-600">Agung Ardiansyah</td>
											<td>
												<div class="badge badge-warning">Unpaid</div>
											</td>
											<td>July 22, 2018</td>
											<td>
												<a href="#" class="btn btn-primary">Detail</a>
											</td>
										</tr>
										<tr>
											<td><a href="#">INV-87320</a></td>
											<td class="font-weight-600">Ardian Rahardiansyah</td>
											<td>
												<div class="badge badge-success">Paid</div>
											</td>
											<td>July 28, 2018</td>
											<td>
												<a href="#" class="btn btn-primary">Detail</a>
											</td>
										</tr>
									</table>
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
