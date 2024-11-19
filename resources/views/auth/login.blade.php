<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wegweiser O'quv platformasi</title>
  <link rel="shortcut icon" type="image/png" href="/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="/assets/css/styles.min.css" />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
</head>
<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/login" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="/assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <form method="post">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefon raqam</label>
                    <input type="text" class="form-control" name="username"   onInput="this.value = phoneFormat(this.value)" value="998"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('username')
                        {{ $message }}
                    @enderror
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Parol</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @error('username')
                        {{ $message }}
                    @enderror
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Eslab qolish
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Kirish</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function phoneFormat(input) {
      input = input.replace(/\D/g,'').substring(0,12); 
      var size = input.length;
      if (size>0) {input=""+input}
      if (size>3) {input=input.slice(0,3)+" "+input.slice(3)}
      if (size>5) {input=input.slice(0,6)+" " +input.slice(6)}
      if (size>8) {input=input.slice(0,10)+" " +input.slice(10)}
      if (size>10) {input=input.slice(0,13)+" " +input.slice(13)}
      return input;
    }
</script>

</body>

</html>