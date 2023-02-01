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
                            <div class="row">
                                <?php if(count($produk) > 0) { ?>
                                                        
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                                            <div class="card-mb-0">
                                                <div class="card-body">
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item">
                                                            <a href="<?php echo site_url('toko/create_produk/'. $this -> uri -> segment(3)) ?>" class="nav-link active"> Silahkan tambah produk  </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>                                                                             
                                            <div class="card">
                                                    <div class="card-header">
                                                        <h4> Data Produk </h4>                                                      
                                                    </div>
                                                    <div class="card-body p-0">

                                                     <?php if(!empty($this->session->flashdata('pesan'))) { ; ?>
                                                    <div class="alert alert-success alert-dismissible show fade">
                                                        <div class="alert-body">
                                                            <button class="close" data-dismiss="alert">
                                                            <span>&times;</span>
                                                            </button>
                                                            <?php echo $this -> session -> flashdata('pesan'); ?>
                                                        </div>
                                                    </div>
                                                    <?php } ?>


                                                        <div class="table-responsive table-invoice">
                                                            <table class="table table-striped">
                                                                <tr>
                                                                    <th> Nama Produk </th>
                                                                    <th> Harga </th>
                                                                    <th> Stok </th>
                                                                   
                                                                    <th>Action</th>
                                                                </tr>
                                                            
                                                            <?php foreach($produk as $val) : ?>
                                                      
                                                                <tr>
                                                                    <td> <?php echo $val['namaProduk']; ?></td>
                                                                    <td class="font-weight-600"> <?php echo $val['harga']; ?></td>
                                                                    <td class="font-weight-600"> <?php echo $val['stok']; ?></td> 
                                                                 
                                                                    <td>
                                                                        <a href="<?php echo site_url('toko/getid/'. $val['idProduk']. '/'. $val['idToko']); ?>" class="btn btn-warning"> Edit </a>
                                                                    </td>
                                                                     <td>
                                                                        <a href="<?php echo site_url('toko/hapus_produk/'. $val['idProduk']. '/'. $val['idToko']); ?>" class="btn btn-danger"> Hapus </a>
                                                                    </td>
                                                                </tr>

                                                            <?php endforeach; ?>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div> 
                                            

                                <?php } else { ?>
                                    <div class="row">                      
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                                            <div class="card-mb-0">
                                                <div class="card-body">
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item">
                                                            <a href="<?php echo site_url('toko/create_produk/'. $this -> uri -> segment(3)); ?>" class="nav-link active"> Silahkan Memasukan Produk Baru </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>                             
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
					</div>                            
			</div>
		</section>
	</div>
</body>

</html>
