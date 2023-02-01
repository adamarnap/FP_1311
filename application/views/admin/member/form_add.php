      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Form</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Member</h2>
            <p class="section-lead">
            
            </p>

            <div class="row">

              <div class="col-12 col-md-8 col-lg-8">
               <form method="POST" action="<?php echo site_url('memberr/member/save');?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Tambah Member</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">username</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="username" required>
                      </div> 
                    </div> 
              
                     
                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="password" placeholder="password" required>
                      </div>  
                    
                      <div class="card-body">   
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Konsumen</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="namaKonsumen" placeholder="NamaKonsumen" required>
                      </div>  
                      </div>

                     
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="alamat" placeholder="alamat" required>
                      </div>  
                      
                      <div class="card-body">  
                      <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kota</label>
                      <div class="col-sm-9">
                      <tr> 
                        <td> 
                          <select class="form-control" name="idKota" required> 
                          <option value="0">-Pilih Kota-</option> 
                            <?php  foreach ($kota as $item) { ?> 
                              <option value="<?php echo $item->idKota; ?>">
                            <?php echo $item->namaKota; ?>  
                            </option>   
                            <?php } ?>  
                            </select>
                            </td>
                        </tr>   
                        </div>  
                        </div>
                         
                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="email" required>
                      </div>  
                      
                      <div class="card-body">
                      <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Telepon</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="tlpn" placeholder="telepon" required>
                      </div> 
                      </div>
                     

                   
                      <div class="form-group row"> 
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