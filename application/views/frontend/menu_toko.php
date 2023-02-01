<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?php echo site_url('toko/main/'. $this -> uri -> segment(3)); ?>"> Beranda </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo site_url('toko/produk/'. $this -> uri -> segment(3)); ?>"> Produk </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo site_url('member/transaksi'); ?>"> Pesanan </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo site_url('member/toko'); ?>"> Laporan </a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url('member'); ?>" class="nav-link btn btn-primary mr-3"> Menu Member </a>
									</li>
</ul>
							