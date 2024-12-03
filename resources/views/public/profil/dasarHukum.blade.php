@extends('public.navbar')

@section('content')

<div class="container" style="margin-top: 110px;">
    <div class="text-center mb-5">
        <h2 class="mb-1">Dasar Hukum PPID</h2>
    </div>
    
    <!-- Undang-Undang -->
    <div class="mb-4">
        <h5>Undang-Undang Republik Indonesia (2)</h5>
        <ul class="list-unstyled">
            <li class="d-flex justify-content-between align-items-center mb-2">
                <span>- Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik</span>
                <a href="{{ asset('pdf/uu1.pdf') }}" class="text-danger" download>Download</a>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
                <span>- Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik</span>
                <a href="{{ asset('pdf/uu2.pdf') }}" class="text-danger" download>Download</a>
            </li>
        </ul>
    </div>
    
    <!-- Peraturan Pemerintah -->
    <div class="mb-4">
        <h5>Peraturan Pemerintah (1)</h5>
        <ul class="list-unstyled">
            <li class="d-flex justify-content-between align-items-center mb-2">
                <span>- Peraturan Pemerintah Nomor 61 Tahun 2010 Tentang Pelaksanaan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik</span>
                <a href="{{ asset('pdf/perpem.pdf') }}" class="text-danger" download>Download</a>
            </li>
        </ul>
    </div>
    
    <!-- Peraturan Komisi Informasi -->
    <div class="mb-4">
        <h5>Peraturan Komisi Informasi (2)</h5>
        <ul class="list-unstyled">
            <li class="d-flex justify-content-between align-items-center mb-2">
                <span>- Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik</span>
                <a href="{{ asset('pdf/perkom1.pdf') }}" class="text-danger" download>Download</a>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
                <span>- Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik</span>
                <a href="{{ asset('pdf/perkom2.pdf') }}" class="text-danger" download>Download</a>
            </li>
        </ul>
    </div>

    <div class="mb-4">
        <h5>Peraturan Menteri dalam Negeri Republik Indonesia (1)</h5>
        <ul class="list-unstyled">
            <li class="d-flex justify-content-between align-items-center mb-2">
                <span>- Peraturan Menteri dalam Negeri Republik Indonesia Nomor 3 Tahun 2017 tentang Pedoman Pengelolaan Pelayanan Informasi dan Dokumentasi Kementerian dalam Negeri dan Pemerintahan Daerah</span>
                <a href="{{ asset('pdf/permen.pdf') }}" class="text-danger" download>Download</a>
            </li>
        </ul>
    </div>
    
    <div class="mb-4">
        <h5>Peraturan Gubernur (1)</h5>
        <ul class="list-unstyled">
            <li class="d-flex justify-content-between align-items-center mb-2">
                <span>- Peraturan Gubernur Nomor 18 Tahun 2013 tentang Pedoman Pengelolaan Pelayanan Informasi Publik dan Dokumentasi</span>
                <a href="{{ asset('pdf/pergub.pdf') }}" class="text-danger" download>Download</a>
            </li>
        </ul>
    </div>
    
    <div class="mb-5">
        <h5>Peraturan Daerah (1)</h5>
        <ul class="list-unstyled">
            <li class="d-flex justify-content-between align-items-center mb-2">
                <span>- Rancangan Peraturan Daerah Kaltim Tentang Teknologi Informasi Komunikasi</span>
                <a href="{{ asset('pdf/perda.pdf') }}" class="text-danger" download>Download</a>
            </li>
        </ul>
    </div>
</div>

@endsection
