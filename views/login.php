<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
      form.user .form-control-user {
        border-radius: 10rem;
        font-size: .8rem;
        padding: 1.5rem 1rem;
      }
      form.user .form-control-user-button {
        border-radius: 10rem;
        font-size: .8rem;
        padding: .75rem 1rem;
      }
    </style>
    <title>Login <?= siteName; ?></title>
  </head>
  <body class="bg-primary">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
          <div class="card my-5 border-0 shadow-lg" style="overflow: hidden!important">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-info" style="background: url('https://maalmusaddadiyah.files.wordpress.com/2017/03/gedung-ma2-2013.jpg?w=840'); background-size: cover; background-position: center;">
                </div>
                <div class="col-lg-6 d-lg-block bg-light">
                  <div class="p-5">                  
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-0">Selamat Datang</h1>
                      <p class="mt-0" style="font-size: .9rem">
                        silakan login terlebih dahulu untuk menggunakan Sistem ini
                      </p>
                    </div>
                    <hr>
                    <form class="user" action="" method="post">
                      <div class="form-group">
                        <input name="loginNama" type="text" class="form-control form-control-user" placeholder="Nama Lengkap">
                        <?= form_error('loginNama') ?>
                      </div>
                      <div class="form-group">
                        <input name="loginPassword" type="password" class="form-control form-control-user" placeholder="Password">
                        <?= form_error('loginPassword') ?>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary text-light form-control-user-button w-100">Login</button>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/jquery-slim.min') ?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>