<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | <?= $title ?> </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href=" <?=base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url() ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url() ?>template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="container p-5">
<div class="card pt-5">
    <div class="card-title text-center">
        <h1>Halaman Registrasi</h1>
    </div>
    <hr>
  <div class="card-body">
  <form action="<?=base_url('Auth/add')?>" method="post" accept-charset="utf-8">
            <div class="form-group">
                    <label> Nama User </label>
                    <input type="text" name="nama_user"  class="form-control"  placeholder="Nama User " required>
                  </div>

                  <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="username"  class="form-control"  placeholder="Username" required>
                  </div>

                  <div class="form-group">
                    <label> Password  </label>
                    <input type="password" name="password"  class="form-control"  placeholder="Password " required>
                  </div>
            </div>
              <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
            <div class="mt-3 text-center">
            <a href="<?=base_url('Auth/login_user')?>" class="">Sudah punya akun?</a>
          </div>
            </form>            
  </div>
</div>
</div>

<script src="<?=base_url() ?>template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url() ?>template/dist/js/adminlte.min.js"></script>

</body>
</html>