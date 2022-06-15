<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header text-center"><h5 class="card-title">Form Register</h5></div>
                    <div class="card-body">
                    <form action="/simpanuser" method="POST">
                        @csrf
                            <div class="mb-3">
                              <label for="" class="form-label">Nama Pengguna</label>
                              <input type="text" required class="form-control" id="nama" name="nama" >
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email"" class="form-control" id="email" name="email" >
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password"  class="form-control" id="password" name="password" >
                            </div>
                    </div>
                    <div class="card-footer text-center">
                        <input name="" id="" class="mt-3 mb-3 btn-primary" type="submit" value="Sign Up">
                        <small>Sudah Punya Akun? <a href="/">Login</a> Sekarang</small>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>
