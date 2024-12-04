@extends('public.navbar')

@section('content')

<div class="container" style="margin-top: 110px;">
    <div class="text-center mb-5">
        <h2 class="mb-1">Informasi Dikecualikan</h2>
        <p class="text-muted">Unduh dokumen resmi terkait Informasi Dikecualikan di bawah ini.</p>
    </div>
    
    <div class="card mb-4 shadow-sm">
        <div class="card-header custom-bg text-white">
            <h5 class="mb-0 text-white">1. Penetapan Informasi Yang Dikecualikan</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Penetapan Uji Konsekuensi Pemerintah Provinsi Kalimantan Timur Tahun 2021</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Penetapan Uji Konsekuensi Pemprov Kaltim Tahun 2023</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Penetapan Uji Konsekuensi Pemprov Kaltim Tahun 2024</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header custom-bg text-white">
            <h5 class="mb-0 text-white">2. Berita Acara Uji Konsekuensi</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Berita Acara Uji Konsekuensi</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Berita Acara Uji Konsekuensi 2024</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
