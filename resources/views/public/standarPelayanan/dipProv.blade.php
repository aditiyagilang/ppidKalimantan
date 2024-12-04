@extends('public.navbar')

@section('content')

<div class="container" style="margin-top: 110px;">
    <div class="text-center mb-5">
        <h2 class="mb-1">DIP Provinsi</h2>
        <p class="text-muted">Unduh dokumen resmi terkait DIP Provinsi di bawah ini.</p>
    </div>
    
    <div class="card mb-4 shadow-sm">
        <div class="card-header custom-bg text-white">
            <h5 class="mb-0 text-white">DIP Pemprov Kaltim</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>DIP PEMPROV KALTIM TAHUN 2021</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>DIP PEMPROV KALTIM TAHUN 2022</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>DIP PEMPROV KALTIM TAHUN 2023</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>DIP PEMPROV KALTIM TAHUN 2024</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2024.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                    <span>DIP PEMPROV KALTIM</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
