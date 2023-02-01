  <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> Tampilan Home </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Top Navigation</div>
            </div>
          </div>

        <!-- Carousel -->
        
        <!-- End Carousel -->





          <div class="section-body">
           <h2 class="section-title"> Produk Terbaru </h2>
            <p class="section-lead">This article component is based on card and flexbox.</p>

            <div class="row">

            <?php foreach($produk_terbaru as $val) { ?>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background=" <?php base_url('upload_produk/'. $val -> foto); ?> ">
                    
                    </div>
                    <div class="article-title">
                      <h2><a href="#"> <?php echo $val -> namaProduk; ?> </a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                  
                    <div class="article-cta">
                      <a href="#" class=""><?php echo $val -> foto; ?></a>
                    </div>
                  </div>
                </article>
              </div>

             <?php } ?> 

        

          </div>
        </section>
      </div>