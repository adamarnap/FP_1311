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
                            <div class="row">
                                <?php if(count($toko) > 0) { ?>
                                                        
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                                            <div class="card-mb-0">
                                                <div class="card-body">
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item">
                                                            <a href="<?php echo site_url('member/create_toko') ?>" class="nav-link active"> Silahkan Membuat Toko </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>                                                                             
                                            <div class="card">
                                                    <div class="card-header">
                                                        <h4> Data Toko </h4>
                                                       
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="table-responsive table-invoice">
                                                            <table class="table table-striped">
                                                          
                                                                <tr>
                                                                    <th> Nama Toko </th>
                                                                    <th> Deskripsi </th>
                                                                    <th> Logo </th>
                                                                    <th> Status </th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            
                                                            <?php foreach($toko as $val) : ?>
                                                      
                                                                <tr>
                                                                    <td><a href="#"> <?php echo $val['namaToko']; ?> </a></td>
                                                                    <td class="font-weight-600"> <?php echo $val['deskripsi']; ?> </td>
                                                                    <td>
                                                                        <div class="badge badge-success"> <?php echo $val['logo']; ?> </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="badge badge-warning"> <?php echo $val['StatusAktif']; ?> </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="<?php echo site_url('toko/main/'. $val['idToko']); ?>" class="btn btn-primary">Detail</a>
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
                                                            <a href="<?php echo site_url('member/create_toko') ?>" class="nav-link active"> Silahkan Membuat Toko </a>
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
