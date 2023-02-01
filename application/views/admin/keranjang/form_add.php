   <!-- Main Content -->
   <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Toko</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kategori</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Keranjang</h2>
      

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6"> 
              <form method="POST" action="<?php echo site_url('toko/toko/save');?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Keranjang</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">  
                        <tr> 
                        <th></th> 
                        <td> 
                          <select class="form-control" name="idKonsumen"> 
                          <option value="0">-Pilih Kategori-</option> 
                            <?php  foreach ($kategori as $item) { ?> 
                              <option value="<?php echo $item->idKat; ?>">
                            <?php echo $item->namaKat; ?>  
                            </option>   
                            <?php } ?>  
                            </select>
                            </td>
                        <tr>

                        <tr> 
                          
                        <th>Nama Pembeli</th>
                            <td> 
                            <div class="col-sm-14">
                            <input type="text" class="form-control" id="inputEmail3" name="namaPembeli" placeholder="Nama Pembeli">
                            </div> 
                            </td> 

                        </tr>  
                        <tr> 
                        </tr>  
                        <tr> 
 
                        <th>Jumlah Barang</th>
                            <td> 
                            <div class="col-sm-14">
                            <input type="text" class="form-control" id="inputEmail3" name="jumlahbarang" placeholder="Jumlah Barang">
                            </div> 
                            </td> 
                        
                        </tr> 
                        <tr>  
                            <th>Total Harga</th>
                            <td> 
                            <div class="col-sm-14">
                            <input type="text" class="form-control" id="inputEmail3" name="deskripsi" placeholder="Total Harga">
                            </div> 
                            </td> 
                        </tr>

                      </table>
                    </div> 
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                  </div>
                  
                </div>
              </div>
             
            </div>

          </div>
        </section>
      </div>