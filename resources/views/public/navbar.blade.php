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
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" /> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style1.css" rel="stylesheet">
<script src="https://www.youtube.com/iframe_api"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
<div class="wrapper">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
    <div class="header_bottom">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <!-- Logo dan Nama Brand -->
          <a class="navbar-brand d-flex align-items-center" href="{{route('public.index')}}">
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
                <a class="nav-link" href="{{route('public.index')}}">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="profilDropdown">
                  <li><a class="dropdown-item" href="{{route('profile-ppid')}}">Profil PPID</a></li>
                  <li><a class="dropdown-item" href="{{route('visimisi-ppid')}}">Visi dan Misi</a></li>
                  <li><a class="dropdown-item" href="{{route('struktur-ppid')}}">Struktur Organisasi PPID</a></li>
                  <li><a class="dropdown-item" href="#">Tugas dan Fungsi</a></li>
                  <li><a class="dropdown-item" href="{{route('dasar-hukum')}}">Dasar Hukum</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Informasi Publik
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="informasiDropdown">
                  <li><a class="dropdown-item" href="{{route('info-berkala')}}">Informasi Berkala</a></li>
                  <li><a class="dropdown-item" href="{{route('info-serta-merta')}}">Informasi Serta Merta</a></li>
                  <li><a class="dropdown-item" href="{{route('info-setiap-saat')}}">Informasi Setiap Saat</a></li>
                  <li><a class="dropdown-item" href="{{route('info-dikecualikan')}}">Daftar Dikecualikan</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="standarLayananDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Standar Layanan
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="standarLayananDropdown">
                  <li><a class="dropdown-item" href="{{route('standar-informasi')}}">Prosedur Pelayanan Informasi Publik</a></li>
                  <li><a class="dropdown-item" href="{{route('standar-keberatan')}}">Prosedur Pengelolaan Keberatan Informasi Publik</a></li>
                  <li><a class="dropdown-item" href="{{route('standar-sengketa')}}">Prosedur Penanganan Sengketa Informasi</a></li>
                  <li><a class="dropdown-item" href="{{route('standar-maklumat')}}">Maklumat Informasi Publik</a></li>
                  <li><a class="dropdown-item" href="{{route('standar-sop')}}">SOP PPID</a></li>
                  <li><a class="dropdown-item" href="{{route('standar-dip')}}">DIP Provinsi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="/news" id="beritaDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Berita
                </a>
                
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="laporanDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Laporan
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="laporanDropdown">
                  <li><a class="dropdown-item" href="/report/finance">Laporan Keuangan Keuangan Pemerintah Daerah (LKPD)</a></li>
                  <li><a class="dropdown-item" href="/report/performance">Laporan Kinerja Instansi Pemerintah (LKIP)</a></li>
                  <li><a class="dropdown-item" href="/report/administration">Laporan Penyelenggaraan Pemerintah Daerah (LPPD)</a></li>
                  <li><a class="dropdown-item" href="/report/ppid">Laporan PPID</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="galeriDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Galeri
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="galeriDropdown">
                  <li><a class="dropdown-item" href="/gallery/photos">Foto</a></li>
                  <li><a class="dropdown-item" href="/gallery/video">Video</a></li>
                  <li><a class="dropdown-item" href="/gallery/podcast">Podcast</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="/contact"  role="button"  aria-expanded="false">
                  Kontak
                </a>
                
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
    <!-- end header section -->
  </div>

  <div class="content">
      @yield('content')
  </div>

  <!-- footer section -->
  <footer class="footer_section pt-5">
    <div class="container">
        <div class="row">
            <!-- Kolom Informasi Kontak -->
            <div class="col-lg-6">
                <h6 class="font-weight-bold"  style="color:white;">Informasi Kontak</h6>
                <div class="row mb-2">
                    <div class="col-4 font-weight-bold">Alamat Kantor:</div>
                    <div class="col-8">JL. Adhyaksa No 1 Banjarmasin, 70123 Kalimantan Selatan</div>
                </div>
                <div class="row mb-2">
                    <div class="col-4 font-weight-bold">Email:</div>
                    <div class="col-8">tulidiki11@kemendikbud.go.id</div>
                </div>
                <div class="row mb-2">
                    <div class="col-4 font-weight-bold">Telepon:</div>
                    <div class="col-8">0511-3304583, 0511-3304477</div>
                </div>
                <div class="row mb-2">
                    <div class="col-4 font-weight-bold">Jam Pelayanan:</div>
                    <div class="col-8">
                        Senin-Jumat: 08:00 - 16:00<br>
                        Sabtu-Minggu: Tutup
                    </div>
                </div>
            </div>

            <!-- Kolom Lokasi -->
            <div class="col-lg-6">
                <h6 class="font-weight-bold"  style="color:white;">Lokasi</h6>
                <!-- Tambahkan iframe Google Maps untuk lokasi -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe 
                        class="embed-responsive-item" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31825.287629398876!2d114.5739312!3d-3.3166941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4201345e91c45%3A0x472b51421dd3c5f5!2sJl.%20Adhyaksa%20No.1%2C%20Banjarmasin%2C%20Kalimantan%20Selatan!5e0!3m2!1sen!2sid!4v1697010113756!5m2!1sen!2sid" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <p>&copy; <span id="displayDateYear"></span> Dinas Komunikasi dan Informatika Pemprov Kaltim</p>
        </div>
    </div>
</footer>


</div>
  <!-- footer section -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="https://www.youtube.com/iframe_api"></script>


  <!-- Template Javascript -->
  <script src="js/main.js"></script>

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