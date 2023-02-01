<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> Manajemen Keranjang </h1>
            <div class="section-header-breadcrumb">
      
              <div class="breadcrumb-item"> Keranjang </div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title"> Manajemen Keranjang </h2>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
               
             
                  <div class="card-header">
                    <td><a href="<?php echo site_url('keranjang/add'); ?>" class="btn btn-primary"> Tambah Keranjang </a></td>
                  </div>
                


                  <div class="card-body">

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

                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th> Id Keranjang </th>
                          <th> Nama Kategori </th>  
                          <th> Nama Pembeli </th>
                          <th> Jumlah Barang </th>  
                          <th> Total Harga </th>                
                          <th  colspan="2" style="text-align: center">Action</th>
                        </tr>
                        <?php foreach($keranjang as $item) :?>
                        <tr>
                          <td><?php echo $item->idKeranjang ?></td>
                          <td><?php echo $item->namaKat ?></td>
                          <td><?php echo $item->namaPembeli ?></td>
                          <td><?php echo $item->jumlahBarang ?></td>
                          <td><?php echo $item->totalHarga ?></td>
                          <td><a href="<?php echo site_url('kategori/getid/'. $item->idKeranjang); ?>" class="btn btn-warning"> Edit </a></td>
                          <td><a href="<?php echo site_url('kategori/hapus/'. $item->idKeranjang); ?>" class="btn btn-danger"> Hapus  </a></td>
                        </tr>
                        <?php endforeach; ?>
                                 
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              
            </div>
           
           
          </div>
        </section>
      </div>