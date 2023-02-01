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
            <h2 class="section-title">Toko</h2>
      

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6"> 
              <form method="POST" action="<?php echo site_url('toko/save');?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Data toko</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">  
                        <tr> 
                        <th></th> 
                        <td> 
                          <select class="form-control" name="idKonsumen"> 
                          <option value="0">-Pilih Konsumen-</option> 
                            <?php  foreach ($member as $item) { ?> 
                              <option value="<?php echo $item->idKonsumen; ?>">
                            <?php echo $item->namaKonsumen; ?>  
                            </option>   
                            <?php } ?>  
                            </select>
                            </td>
                        <tr>

                        <tr> 
                          
                        <th>Nama Toko</th>
                            <td> 
                            <div class="col-sm-14">
                            <input type="text" class="form-control" id="inputEmail3" name="namaToko" placeholder="Nama Toko">
                            </div> 
                            </td> 

                        </tr>  
                        <tr> 
                        </tr>  
                        <tr> 
 
                        <th>Logo</th>
                            <td> 
                            <div class="col-sm-14">
                            <input type="text" class="form-control" id="inputEmail3" name="logo" placeholder="Masukan Logo">
                            </div> 
                            </td> 
                        
                        </tr> 
                        <tr>  
                            <th>Deskripsi</th>
                            <td> 
                            <div class="col-sm-14">
                            <input type="text" class="form-control" id="inputEmail3" name="deskripsi" placeholder="Deskripsi">
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