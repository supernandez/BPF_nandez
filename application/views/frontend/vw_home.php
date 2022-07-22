    
    <div class="site-block-wrap">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(<?= base_url('assets/');?>images/hero_1.jpg);" data-aos="fade" id="home-section">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Cari Kos di Rumbai</h1>
              <p class="mb-5 text-shadow">Temukan Kos Pilihanmu di RumbaiKos</a>  </p>
              <p><a href="<?= base_url();?>#recommend" class="btn btn-primary px-5 py-3">Cek Rekomendasi</a></p>
            </div>
          </div>
        </div>
    </div>   
  </div>      


  <div class="site-section" id="recommend">
      <div class="container">
        <div class="row large-gutters">
          <?php
            foreach($rekomendasi as $recommend){
          ?>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="<?= base_url('kos/detail/').$recommend['kos_id'];?>" class="d-inline-block mb-4"><img src="<?= base_url('assets/');?>images/<?= $recommend['kos_gambar'];?>" alt="<?= $recommend['kos_nama'];?>" class="img-fluid"></a>
                <div class="ftco-media-details">
                <a href="<?= base_url('kos/detail/').$recommend['kos_id'];?>"><h3><?= $recommend['kos_nama'];?></h3></a>
                  <p><?= $recommend['kos_alamat'];?></p>
                  <strong>Rp <?= number_format($recommend['kos_harga']);?></strong>
                </div>
              </div> 
            </div>
          </div>  
          <?php
            }
            ?>
        </div>
      </div>
    </div>