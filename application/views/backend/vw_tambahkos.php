  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Kos</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Beranda</li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Kos</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-body">
                  <?php echo form_open_multipart('');?>

                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" value="<?=set_value('nama')?>"
                        placeholder="Masukkan Nama Kos">
                        <?=form_error('nama', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                      <label for="jenis">Jenis</label>
                      <select class="form-control" name="jenis">
                        <option value="">Pilih Jenis Kos</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                        <option value="Campur">Campur</option>
                      </select>
                      <?=form_error('jenis', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input type="number" class="form-control" id="harga" aria-describedby="harga" name="harga" value="<?=set_value('harga')?>"
                        placeholder="Masukkan harga Kos">
                        <?=form_error('harga', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" id="alamat" aria-describedby="alamat" name="alamat"
                        placeholder="Masukkan alamat kos"><?=set_value('alamat')?></textarea>
                        <?=form_error('alamat', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea class="form-control" id="deskripsi" aria-describedby="deskripsi" name="deskripsi"
                        placeholder="Masukkan deskripsi kos"><?=set_value('deskripsi')?></textarea>
                        <?=form_error('deskripsi', '<small class="text-danger pl-3">', '</small>')?>
                    </div>  
                    <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div class="custom-file">
                    <input type="file" name="gambar">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
