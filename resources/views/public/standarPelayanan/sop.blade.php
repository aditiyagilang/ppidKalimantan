@extends('public.navbar')

@section('content')

<div class="container" style="margin-top: 110px;">
    <div class="text-center mb-5">
        <h2 class="mb-1">Standar Operasi Pelayanan</h2>
        <p class="text-muted">Unduh dokumen resmi terkait standar operasi pelayanan di bawah ini.</p>
    </div>
    
    <div class="card mb-4 shadow-sm">
        <div class="card-header custom-bg text-white">
            <h5 class="mb-0 text-white">Standar Operasi Pelayanan PPID</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Akurasi Informasi 2022</span>
                    <a href="{{ asset('pdf/sop/SOP AKURASI INFORMASI 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Fasilitasi Sengketa Informasi 2022</span>
                    <a href="{{ asset('pdf/sop/SOP Fasilitasi Sengketa Informasi 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Pelayanan Informasi Publik 2022</span>
                    <a href="{{ asset('pdf/sop/SOP Pelayanan Informasi Publik 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Penanganan Keberatan Informasi Publik 2022</span>
                    <a href="{{ asset('pdf/sop/SOP Penanganan Keberatan Informasi Publik 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Pendokumentasian Informasi Publik 2022</span>
                    <a href="{{ asset('pdf/sop/SOP Pendokumentasian Informasi Publik 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Penyusunan dan Pemukhtahiran DIP 2022</span>
                    <a href="{{ asset('pdf/sop/SOP Penyusunan dan Pemukhtahiran DIP 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Uji Konsekuensi Publik 2022</span>
                    <a href="{{ asset('pdf/sop/SOP Uji Konsekuensi Publik 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                    <span>SOP Pengumuman Informasi Publik</span>
                    <a href="{{ asset('pdf/sop/STANDAR PENGUMUMAN INFORMASI PUBLIK.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
