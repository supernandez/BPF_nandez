<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?=base_url('assets/');?>images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 mx-auto mt-lg-5 text-center">
            <h1><?= $kos['kos_nama'];?></h1>
            <p class="mb-5"><strong class="text-white">Rp <?= number_format($kos['kos_harga']);?>/bulan</strong></p>

          </div>
        </div>
      </div>

      <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>
    <div class="site-section" id="property-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="">
              <div><img src="<?= base_url('assets/');?>images/<?= $kos['kos_gambar'];?>" alt="Image" class="img-fluid"></div>
              </div>
          </div>
          <div class="col-lg-5 pl-lg-5 ml-auto">
            <div class="mb-5">
              <h3 class="text-black mb-4">Deskripsi</h3>
              <p>Alamat : <?= $kos['kos_alamat'];?></p>
              <?= $kos['kos_diskripsi'];?>
            </div>

            <div class="mb-5">

              <div class="mt-5">
                <img src="<?=base_url('assets/');?>images/person_1.jpg" alt="Image" class="w-25 mb-3 rounded-circle">
                <h4 class="text-black"><?= $pemilik['user_nama'];?></h4>
                <p><a href="https://api.whatsapp.com/send?phone=<?= $pemilik['user_wa'];?>&text=Halo, Saya ingin bertanya tentang <?= $kos['kos_nama'];?> dari Sikos" class="btn btn-primary btn-sm" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> Hubungi Pemilik Kos</a></p>
              </div>
            </div>
            <div class="mb-5">
            </div>
          </div>
          <div class="col-lg-12">
          <div class="mt-5">
            <?= 
              validation_errors();
              $this->session->flashdata('message');
            ?>
              <div class="container mt-5">
                <div class="d-flex">
                  <div class="col-md-12">
                    <div class="d-flex flex-column comment-section">
                      <?php
                          foreach($ulasan as $review){
                          $reviewer = $this->Kos_model->getUserReview($review['user_id']);
                      ?>
                        <div class="bg-white p-2">
                          <div class="d-flex flex-row user-info"><img class="rounded-circle" src="<?= base_url('assets/images/');?>avatar.png" width="40" height="40">
                              <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?= $reviewer['user_nama'];?></span><span class="date text-black-50"><?= $review['review_tanggal'];?></span></div>
                          </div>
                      <div class="mt-2">
                        <p class="comment-text"><?= $review['review_commend'];?></p>
                      </div>
                    <?php
                          }
                    ?>
                    </div>
                    <div class="bg-light p-2">
                      <form action="" method="POST">
                      <div class="d-flex flex-row align-items-start">
                        <textarea class="form-control ml-1 shadow-none textarea" name="review" placeholder="Tuliskan ulasan anda disini..." <?php if($this->session->userdata('email')==null){ echo "disabled";}?>></textarea>
                      </div>
                          <div class="mt-2 text-right">
                            <button class="btn btn-primary btn-sm shadow-none" type="submit" <?php if($this->session->userdata('email')==null){ echo "disabled";}?>><?php if($this->session->userdata('email')==null){ echo "Login untuk Review";}else{ echo "Post Review";}?></button>
                            <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Batal</button>
                          </div>
                      </form>
                      </div>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
