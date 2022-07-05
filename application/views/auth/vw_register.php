<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title><?= $judul;?></title>
  <link href="<?= base_url('assets/admin/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/admin/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/admin/');?>css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <form method="POST" action="">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Enter Your Name" name="nama">
                      <?=form_error('nama', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address" name="email">
                      <?=form_error('email', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                      <?=form_error('password', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                      <label>No Wa</label>
                      <input type="number" class="form-control" id="noHp" placeholder="Enter Your Whatsapp Number" name="nowa">
                      <?=form_error('nowa', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="<?= base_url('auth/');?>login">Already have an account?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="<?= base_url('assets/admin/');?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/admin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/admin/');?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/admin/');?>js/ruang-admin.min.js"></script>
</body>

</html>