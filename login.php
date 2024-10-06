<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://media2.fishtank.my/media/syokbm/assets/gambar-artikel/screenshot-2023-04-26-at-2-33-17-pm.png');
            /* Ganti dengan URL gambar latar belakang perpustakaan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
          develop your careers <br />
            <span class="text-primary">keep working hard</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
          Keberhasilan tidak datang dengan sendirinya, tapi dengan kerja keras.
          Jangan pernah menyerah, karena kerja keras akan membuahkan hasil.
          pohon usahamu pasti akan akan membuahkan buah hasil yang manis
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
  
              <form action="proses_login.php" method="post">
              
                <div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control" required />
                  <label class="form-label">username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control" required />
                  <label class="form-label">password</label>
                </div>
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">
                  Log in
                </button>
                <div class="text-right mt-4">
                  <a href="registrasi.php" class="btn btn-back float-end text-danger">Registrasi</a>
                </div>
              </form>
              <!-- Form Ends Here -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

</body>
</html>
