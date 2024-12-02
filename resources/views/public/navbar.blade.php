<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>PPID Kalimantan</title>

  <link rel="icon" href="{{ asset('images/logo_kaltim.png') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
    <div class="header_bottom">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <!-- Logo dan Nama Brand -->
          <a class="navbar-brand d-flex align-items-center" href="index.html">
            <!-- Logo -->
            <img src="{{ asset('images/logo_kaltim.png') }}" alt="Logo" class="brand-logo me-2" style="width: 35px; height: 42px;">

            <!-- Text -->
            <div class="brand-text" style="font-family: 'Roboto', sans-serif;">
              <span class="d-block">Pejabat Pengelola Informasi dan Dokumentasi</span>
              <small class="d-block text-secondary">Provinsi Kalimantan Timur</small>
            </div>
          </a>

          <!-- Toggler Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <!-- Navbar Menu -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="profilDropdown">
                  <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                  <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Informasi Publik
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="informasiDropdown">
                  <li><a class="dropdown-item" href="#">Kebijakan</a></li>
                  <li><a class="dropdown-item" href="#">Laporan Tahunan</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="standarLayananDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Standar Layanan
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="standarLayananDropdown">
                  <li><a class="dropdown-item" href="#">Standar Operasional</a></li>
                  <li><a class="dropdown-item" href="#">Prosedur Layanan</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="beritaDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Berita
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="beritaDropdown">
                  <li><a class="dropdown-item" href="#">Berita Terkini</a></li>
                  <li><a class="dropdown-item" href="#">Arsip Berita</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="laporanDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Laporan
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="laporanDropdown">
                  <li><a class="dropdown-item" href="#">Laporan Keuangan</a></li>
                  <li><a class="dropdown-item" href="#">Laporan Kinerja</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="galeriDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Galeri
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="galeriDropdown">
                  <li><a class="dropdown-item" href="#">Foto</a></li>
                  <li><a class="dropdown-item" href="#">Video</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="kontakDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Kontak
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="kontakDropdown">
                  <li><a class="dropdown-item" href="#">Lokasi</a></li>
                  <li><a class="dropdown-item" href="#">Hubungi Kami</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
    <!-- end header section -->
  </div>

  <div class="">
      @yield('content')
  </div>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

  @if (session('success'))
      <script>
          Swal.fire({
              title: 'Berhasil!',
              text: "{{ session('success') }}",
              icon: 'success',
              confirmButtonText: 'OK'
          });
      </script>
  @endif

  <script>
    document.addEventListener("scroll", function () {
      const header = document.querySelector(".header_section");
      if (window.scrollY > 50) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });
  </script>

  @stack('scripts')

</body>

</html>