
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kos Saya</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Sikos</a></li>
              <li class="breadcrumb-item active" aria-current="page">Beranda</li>
              <li class="breadcrumb-item" aria-current="page">MyKos</li>
            </ol>
          </div>
          <?=$this->session->flashdata('message')?>

        <div class="row">
        <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a class="m-0 font-weight-bold text-primary" href="<?= base_url();?>beranda/tambahkos"><button type="button" class="btn btn-primary mb-1">Tambah Kos</button></a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th>Alamat</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                          foreach($kos as $k){
                        ?>
                      <tr>
                        <td><?= $k['kos_id'];?></td>
                        <td><?= $k['kos_nama'];?></td>
                        <td><?= $k['kos_jenis'];?></td>
                        <td>Rp <?= number_format($k['kos_harga']);?></td>
                        <td><?= $k['kos_alamat'];?></td>
                        <td><?= substr($k['kos_diskripsi'],0,36);?>...</td>
                        <td><img src="<?= base_url('assets/');?>images/<?= $k['kos_gambar'];?>" width="80px"/></td>
                        <td>
                            <a href="<?= base_url('kos/detail/').$k['kos_id'];?>" target="_blank" style="margin:1px"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-share"></i></button></a>
                            <a href="<?= base_url('beranda/editkos');?>/<?= $k['kos_id'];?>" style="margin:1px"><button type="button" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></button></a>
                            <a href="<?= base_url('beranda/hapusKos');?>/<?= $k['kos_id'];?>" style="margin:1px"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></a>
                        </td>
                      </tr>
                      <?php
                          }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
