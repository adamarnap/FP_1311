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
				<h1> Menu utama dashboard toko "<?php echo $namaToko -> namaToko; ?>" </h1>
			</div>

			<!-- Carousel -->

			<!-- End Carousel -->
			<div class="section-body">
				<div id="output-status"></div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<h4> Menu Toko </h4>
								</div>
								<div class="card-body">
									<?php $this -> load -> view('frontend/menu_toko'); ?>
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
