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
            <h2 class="section-title">Forms</h2>
            <p class="section-lead">
              Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
            </p>

            <div class="row">
              <!-- <div class="col-12 col-md-6 col-lg-6">         
              </div> -->

              <div class="col-12 col-md-6 col-lg-6">   
                <form method="POST" action="<?php echo site_url('ongkir/edit') ?> ">  
                <input type="hidden" name="id" value="<?php echo $ongkir->idBiayaKirim; ?>">          
                    <div class="card">
                        <div class="card-header">
                            <h4> Form Edit Biaya Kirim </h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Kurir  </label>
                                    <div class="col-sm-9">
                                                    <select class="form-control form-control-sm" name="kurir">
                                                    <?php foreach($kurir as $val) : ?>
                                                        <option value="<?php echo $val -> idKurir ?>"> <?php echo $val -> namaKurir; ?> 
                                                        </option>
                                                    <?php endforeach; ?>
                                                    </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Kota Asal   </label>
                                    <div class="col-sm-9">
                                                    <select class="form-control form-control-sm" name="asal">
                                                    <?php foreach($kota as $val) : ?>
                                                        <option value="<?php echo $val -> idKota ?>"> <?php echo $val -> namaKota; ?> 
                                                        </option>
                                                    <?php endforeach; ?>
                                                    </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Kota tujuan   </label>
                                    <div class="col-sm-9">
                                                    <select class="form-control form-control-sm" name="tujuan">
                                                    <?php foreach($kota as $val) : ?>
                                                        <option value="<?php echo $val -> idKota ?>"> <?php echo $val -> namaKota; ?> 
                                                        </option>
                                                    <?php endforeach; ?>
                                                    </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Ongkos  </label>
                                    <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="biaya" placeholder="Ongkir" value="<?php echo $ongkir -> biaya; ?>">
                                    </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"> Tambahkan </button>
                    </div>
                    </div> 
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>