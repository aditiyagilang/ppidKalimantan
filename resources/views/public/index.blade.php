@extends('public.navbar')

@section('content')
<style>
  .box {
      height: 80%; /* Membuat box menyesuaikan dengan tinggi kontainer */
      display: flex;
      flex-direction: column;
  }
  
  .img-box img {
      width: 100%; /* Menjamin gambar mengisi lebar box */
      height: auto; /* Menjaga proporsi gambar */
  }
  
  .detail-box {
      flex-grow: 1; /* Memastikan detail-box mengambil sisa ruang */
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
  }
</style>
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="Banner 1">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="Banner 2">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100" alt="Banner 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">

  <div class="service_section">
    <div class=" ">
      <div class="row">
        <div class="col mx-auto">
            <a href="{{ route('request.form') }}" class="text-decoration-none text-dark">
                <div class="box rounded-lg d-flex flex-column">
                    <div class="img-box">
                        <img src="images/s1.png" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>
                            Form Pengajuan Informasi Publik
                        </h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mx-auto">
          <a href="{{ route('objection.form') }}" class="text-decoration-none text-dark">
            <div class="box rounded-lg d-flex flex-column">
              <div class="img-box">
                <img src="images/s1.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Form Pengajuan Keberatan
                </h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col mx-auto">
          <a href="{{ route('public.info') }}" class="text-decoration-none text-dark">
            <div class="box rounded-lg d-flex flex-column">
              <div class="img-box">
                <img src="images/s1.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Daftar Informasi Public PPID Perangkat Daerah
                </h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col mx-auto">
          <a href="{{ route('request.check') }}" class="text-decoration-none text-dark">
            <div class="box rounded-lg d-flex flex-column">
              <div class="img-box">
                <img src="images/s2.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Cek Status Permohonan Informasi Publik
                </h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col mx-auto">
          <a href="{{ route('objection.check') }}" class="text-decoration-none text-dark">
            <div class="box rounded-lg d-flex flex-column">
              <div class="img-box">
                <img src="images/s3.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Cek Status Pengajuan Keberatan Informasi Publik
                </h5>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="btn-box">
      </div>
    </div>
  </div>
  
  <div class="about_section layout_padding-bottom">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="detail-box">
          <h2>
            About us
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
      <div class="col-lg-7 col-md-6">
        <div class="img-box">
          <img src="images/about-img.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="img-box">
        <img src="images/professional-img.png" alt="">
      </div>
    </div>
    <div class="col-md-6 ">
      <div class="detail-box">
        <h2>
          We Provide Professional <br>
          Home Services.
        </h2>
        <p>
          randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All randomised words which don't look even slightly
        </p>
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
<script>
 document.addEventListener('DOMContentLoaded', function () {
  var carouselElement = document.querySelector('#carouselExampleIndicators');
  if (carouselElement) {
    var carousel = new bootstrap.Carousel(carouselElement);
  }
});  
</script>
@endpush