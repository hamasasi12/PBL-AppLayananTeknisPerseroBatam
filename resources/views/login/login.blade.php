<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title> Manajemen Layanan Teknis Dan IT</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('./assets/img/logo1.png') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{ asset('./assets1/vendor/fonts/boxicons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('./assets1/vendor/css/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('./assets1/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('./assets1/css/demo.css') }}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{  asset('./assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('./assets1/vendor/css/pages/page-auth.css') }}" />
  <!-- Helpers -->
  <script src="{{ asset('./assets1/vendor/js/helpers.js') }}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('./assets1/js/config.js') }}"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="{{ asset('./assets/img/logo1.png') }}" alt="" width="300" />
                </span>
                <!-- <span class="app-brand-text demo text-body fw-bolder">persero</span> -->
              </a>
            </div>
            <!-- /Logo -->

            <!-- ucapan -->
            <h4 class="mb-4" style="text-align: center; color: black; font-weight: bold;">Selamat Datang di Aplikasi
              Manajemen Layanan Teknis Dan IT Persero Batam</h4>
            <!-- /ucapan -->

            <!-- login -->
            <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
              <div class="mb-3">
                <input type="text" class="form-control" id="email" name="email-username" placeholder="Username"
                  autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="Password"
                    aria-describedby="password" />
                </div>
              </div>
              <div class="mb-3">
              </div>
              <div class="mb-3" style="text-align: center;">
                <a href="#" type="button" class="btn btn-rounded mb-3"
                  style="background-color: #525ceb; color: white; width: 3  0%">Login</a>
              </div>
            </form>
            <!-- /login -->
          </div>
        </div>
        <!-- /Register-->
      </div>
    </div>
  </div>

  <!-- / Content -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ asset('./assets1/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('./assets1/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('./assets1/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('./assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

  <script src="{{ asset('./assets1/vendor/js/menu.js') }}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="{{ asset('./assets1/js/main.js') }}"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>