@extends('public.navbar')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators (opsional) -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Slides -->
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
  <div class="feature_section">
    <div class="feature_container">
      <div class="box border" style="border-radius: 15px;">
        <div class="img-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="512" height="512">
            <g id="paint-painted-paint_roller-home-house" data-name="paint-painted-paint roller-home-house">
              <path d="M60.01,25.05a2.963,2.963,0,0,0,1.85-1.54l.21-.41a3.022,3.022,0,0,0-1.14-3.91L58,17.43V7.82A3,3,0,0,0,57,2H49a3.009,3.009,0,0,0-3,3,2.979,2.979,0,0,0,1.99,2.81v3.62L33.54,2.76a2.988,2.988,0,0,0-3.08,0L3.07,19.19A3.022,3.022,0,0,0,1.93,23.1l.21.41a2.963,2.963,0,0,0,1.85,1.54,2.923,2.923,0,0,0,.83.12A3.033,3.033,0,0,0,6,24.9V56H5a3,3,0,0,0,0,6H59a3,3,0,0,0,0-6H58V24.91A2.9,2.9,0,0,0,60.01,25.05ZM49,4h8a1,1,0,0,1,0,2H49a1,1,0,0,1,0-2Zm7,4v8.23l-6.01-3.6V8ZM40,60H5a1,1,0,0,1,0-2H40Zm6,0H42V50h4Zm1-12H45V42.03a1.028,1.028,0,0,1,.42-.82l5.32-3.8A2.991,2.991,0,0,0,52,34.97V32a3.009,3.009,0,0,0-3-3H48V28a1,1,0,0,0-1-1H44a3.009,3.009,0,0,0-3-3H19a3.009,3.009,0,0,0-3,3H13a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h3a3.009,3.009,0,0,0,3,3h1v8a4,4,0,0,0,8,0V36h2a4,4,0,0,0,8,0h3a3.009,3.009,0,0,0,3-3h3a1,1,0,0,0,1-1V31h1a1,1,0,0,1,1,1v2.97a1.028,1.028,0,0,1-.42.82l-5.32,3.8A2.991,2.991,0,0,0,43,42.03V48H41a1,1,0,0,0-1,1v7H8V23.76L31.48,9.62a1.02,1.02,0,0,1,1.04,0L56,23.76V56H48V49A1,1,0,0,0,47,48ZM46,29v2H44V29Zm-4-2v6a1,1,0,0,1-1,1H38V26h3A1,1,0,0,1,42,27ZM29,30a3.009,3.009,0,0,0-3,3V44a2,2,0,0,1-4,0V26H36V36a2,2,0,0,1-4,0V33A3.009,3.009,0,0,0,29,30Zm1,3v1H28V33a1,1,0,0,1,2,0ZM20,26v8H19a1,1,0,0,1-1-1V27a1,1,0,0,1,1-1Zm-4,3v2H14V29ZM59,58a1,1,0,0,1,0,2H48V58ZM33.55,7.91a2.979,2.979,0,0,0-3.1,0L5.34,23.03a1.018,1.018,0,0,1-.8.1.972.972,0,0,1-.61-.51l-.21-.41A1.021,1.021,0,0,1,4.1,20.9L31.49,4.47a1,1,0,0,1,1.02,0L59.9,20.9a1.021,1.021,0,0,1,.38,1.31l-.21.41a.972.972,0,0,1-.61.51,1.018,1.018,0,0,1-.8-.1Z" />
            </g>
          </svg>
        </div>
        <h5 class="name">
          Form Permohonan Informasi Publik
        </h5>
      </div>
      <div class="box border" style="border-radius: 15px;">
        <div class="img-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="512" height="512">
            <path d="M62.707,31.293l-30-30a1,1,0,0,0-1.414,0l-30,30A1,1,0,0,0,2,33H7V57H6a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H58a1,1,0,0,0,1-1V58a1,1,0,0,0-1-1H57V33h5a1,1,0,0,0,.707-1.707ZM57,61H7V59H57ZM9,57V32.414l23-23,23,23V57ZM56.414,31,32.707,7.293a1,1,0,0,0-1.414,0L7.586,31H4.414L32,3.414,59.586,31Z" />
            <path d="M41,39H36V36a1,1,0,0,0-1-1H29a1,1,0,0,0-1,1v3H23a3,3,0,0,0-3,3v4a1,1,0,0,0,1,1h1v7a1,1,0,0,0,1,1H41a1,1,0,0,0,1-1V47h1a1,1,0,0,0,1-1V42A3,3,0,0,0,41,39ZM30,37h4v2H30ZM40,53H24V47h5v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V47h5Zm-9-6h2v2H31Zm11-2H22V42a1,1,0,0,1,1-1H41a1,1,0,0,1,1,1Z" />
            <path d="M46,31H42.422a1,1,0,0,1,0-2H46a1,1,0,0,0,.916-1.4A5.992,5.992,0,0,0,36.231,27h-8.04a5.992,5.992,0,0,0-10.685.6,1,1,0,0,0,.916,1.4H22a1,1,0,0,1,0,2H18.422a1,1,0,0,0-.916,1.4,5.992,5.992,0,0,0,10.685.6h8.04a5.992,5.992,0,0,0,10.685-.6A1,1,0,0,0,46,31Zm-4.578,3a4,4,0,0,1-3.662-2.4,1,1,0,0,0-.916-.6H27.578a1,1,0,0,0-.916.6,3.991,3.991,0,0,1-6.3,1.4H22a3,3,0,0,0,0-6H20.359a3.991,3.991,0,0,1,6.3,1.4,1,1,0,0,0,.916.6h9.266a1,1,0,0,0,.916-.6,3.991,3.991,0,0,1,6.3-1.4h-1.64a3,3,0,0,0,0,6h1.64A3.988,3.988,0,0,1,41.422,34Z" /></svg>
        </div>
        <h5 class="name">
          Form Pengajuan Keberatan
        </h5>
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

  var carousel = document.querySelector('#carouselExampleIndicators');
if (carousel) {
    console.log('Carousel element found');
} else {
    console.log('Carousel element not found');
}

  
</script>
@endpush