<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Manajemen Kurir</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Manajemen Kurir</h2>
          
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <td><a href="<?php echo site_url('kurir/add'); ?>" class="btn btn-primary"> Tambah Kurir </a></td>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th> Id Kurir </th>
                          <th> Nama Kurir </th>
                          <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                        <?php foreach($kurir as $paket) :?>
                        <tr>
                          <td><?php echo $paket->idKurir ?></td>
                          <td><?php echo $paket->namaKurir ?></td>
                          <td class="text-center"><a href="<?php echo site_url('kurir/getid/'. $paket->idKurir); ?>" class="btn btn-warning"> Edit </a></td>
                          <td class="text-center"><a href="<?php echo site_url('kurir/hapus/'. $paket->idKurir); ?>" class="btn btn-danger"> Hapus  </a></td>
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