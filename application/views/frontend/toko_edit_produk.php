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
                        <div class="col-lg-9 col-md-6 col-sm-6 col-12">                          
                                <form id="setting-form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('toko/edit_produk'); ?>">
                                <input type="hidden" name="idProduk" value="<?php echo $idProduk; ?>">
                                <input type="hidden" name="id_toko" value="<?php echo $idToko; ?>">
                                    <div class="card" id="settings-card">
                                        <div class="card-header">
                                        <h4> Form Edit Produk </h4>
                                        </div>
                                        <div class="card-body">
                                        <p class="text-muted">General settings such as, site title, site description, address and so on.</p>
                                            <div class="form-group row align-items-center"> 
                                                <label for="site-title" class="form-control-label col-sm-3 text-md-right"> Kategori </label>
                                                    <div class="col-sm-6 col-md-9">
                                                        <select name="kategori" id=""  class="form-control">
                                                            <?php foreach($kategori as $val) : ?>
                                                                <option value="<?php echo $val -> idKat; ?>"> <?php echo $val -> namaKat ?> </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label for="site-title" class="form-control-label col-sm-3 text-md-right"> Nama Produk </label>
                                                    <div class="col-sm-6 col-md-9">
                                                            <input type="text" name="namaProduk" class="form-control" id="site-title">
                                                    </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label for="site-title" class="form-control-label col-sm-3 text-md-right"> Harga Produk </label>
                                                    <div class="col-sm-6 col-md-9">
                                                            <input type="text" name="harga" class="form-control" id="site-title">
                                                    </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label for="site-title" class="form-control-label col-sm-3 text-md-right"> Stok Produk </label>
                                                    <div class="col-sm-6 col-md-9">
                                                            <input type="text" name="stok" class="form-control" id="site-title">
                                                    </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label for="site-title" class="form-control-label col-sm-3 text-md-right"> Berat Produk </label>
                                                    <div class="col-sm-6 col-md-9">
                                                            <input type="text" name="berat" class="form-control" id="site-title">
                                                    </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label for="site-description" class="form-control-label col-sm-3 text-md-right"> Deksripsi </label>
                                                    <div class="col-sm-6 col-md-9">
                                                <textarea class="form-control" name="deskripsiProduk" id="site-description"></textarea>
                                            </div>
                                            </div>
                                            <div class="form-group row align-items-center">  
                                                <label class="form-control-label col-sm-3 text-md-right"> Foto Produk </label>
                                                <div class="col-sm-6 col-md-9">

                                                    <div class="custom-file">
                                                        <input type="file" name="foto_produk" class="custom-file-input" id="site-logo">
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
