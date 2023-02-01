<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Manajemen Kota</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Manajemen Kota</h2>
          
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <td><a href="<?php echo site_url('kota/add'); ?>" class="btn btn-primary"> Tambah Kota </a></td>
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
                          <th>#</th>
                          <th> Nama Kota </th>


                          <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                        <?php foreach($kota as $city) :?>
                        <tr>
                          <td><?php echo $city->idKota ?></td>
                          <td><?php echo $city->namaKota ?></td>
                          <td class="text-center"><a href="<?php echo site_url('kota/getid/'. $city->idKota); ?>" class="btn btn-warning"> Edit </a></td>
                          <td class="text-center"><a href="<?php echo site_url('kota/hapus/'. $city->idKota); ?>" class="btn btn-danger"> Hapus  </a></td>
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