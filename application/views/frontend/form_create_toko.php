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
				<div id="output-status"></div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<h4> Menu Member </h4>
								</div>
								<div class="card-body">
									<?php $this -> load -> view('frontend/menu_member'); ?>
								</div>
							</div>
						</div>
                        <div class="col-lg-9 col-md-6 col-sm-6 col-12">                          
                                <form id="setting-form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('member/insert_toko'); ?>">
                                    <div class="card" id="settings-card">
                                        <div class="card-header">
                                        <h4> Form Membuat Toko Baru </h4>
                                        </div>
                                        <div class="card-body">
                                        <p class="text-muted">General settings such as, site title, site description, address and so on.</p>
                                        <div class="form-group row align-items-center">
                                            <label for="site-title" class="form-control-label col-sm-3 text-md-right"> Nama Toko </label>
                                            <div class="col-sm-6 col-md-9">
                                            <input type="text" name="nama_toko" class="form-control" id="site-title">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="site-description" class="form-control-label col-sm-3 text-md-right"> Deksripsi </label>
                                            <div class="col-sm-6 col-md-9">
                                            <textarea class="form-control" name="deskripsi" id="site-description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="form-control-label col-sm-3 text-md-right"> Logo Toko </label>
                                            <div class="col-sm-6 col-md-9">
                                            <div class="custom-file">
                                                <input type="file" name="logo_toko" class="custom-file-input" id="site-logo">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                            <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                                            </div>
                                        </div>
                                      
                                        
                                        </div>
                                        <div class="card-footer bg-whitesmoke text-md-right">
                                        <button class="btn btn-primary" id="save-btn">Save Changes</button>
                                        <button class="btn btn-secondary" type="button">Reset</button>
                                        </div>
                                    </div>
                                </form>                      
                        </div>
					</div>                            
			</div>
		</section>
	</div>
</body>

</html>
