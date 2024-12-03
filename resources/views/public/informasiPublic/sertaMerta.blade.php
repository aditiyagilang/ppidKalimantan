@extends('public.navbar')

@section('content')

<div class="container" style="margin-top: 110px;">
    <div class="text-center mb-5">
        <h2 class="mb-1">Informasi Serta Merta</h2>
        <p class="text-muted">Unduh dokumen resmi terkait Informasi Serta Merta di bawah ini.</p>
    </div>
    
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">1. Informasi Ketahanan Pangan Kaltim</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Kebijakan Ketahanan Pangan</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Kebijakan Ketahanan Pangan</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">2. Informasi Cuaca,, Potensi Bencana Pemprov Kaltim</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Informasi Perkiraan Cuaca dan Potensi Bencana</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">3. Informasi Terkait Covid-19</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>KEGIATAN PENGURANGAN RESIKO PENULARAN COVID-19</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>PENGADAAN BARANG DAN JASA KHUSUS COVID-19</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>REALISASI ANGGARAN COVID-19 TAHUN 2022</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>PETUNJUK TEKNIS PENGELOLAAN PENERIMAAN SUMBANGAN DARI PIHAK KETIGA KHUSUS BENCANA CORONA VIRUS DISEASE 2019 (COVID-19)</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SANTUNAN MENINGGAL DUNIA KARENA CORONA VIRUS DISEASE 2019 DI PROVINSI KALIMANTAN TIMUR</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Informasi Ruang Perawatan Pasien Covid-19 di RSUD AWS Syahranie Prov.Kaltim</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>TIM KEWASPADAAN DAN BENCANA COVID-19 DI RSUD ABDOEL WAHAB SJAHRANIE SAMARINDA</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Informasi Pemberian Santunan Ahli Waris Korba Covid-19</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Petunjuk Teknis Penerimaan Sumbangan Dari Pihak Ketiga</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>PENGADAAN BARANG DAN JASA KHUSUS COVID-19 PERALATAN RUMAH TANGGA</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>PENGADAAN BARANG DAN JASA KHUSUS COVID-19 RUANG ISOLASI</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Surat Edaran Gubernur Penyesuaian Jam Kerja ASN</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>PEMBERLAKUAN PEMBATASAN KEGIATAN MASYARAKAT LEVEL 3, LEVEL 2, DAN</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Bantuan Menerima Hibah Covid</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Distribusi Vaksi Covid-19</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Penetapan Uji Konsekuensi Pemprov Kaltim Tahun 2023</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Dokumen Penanganan Covid-19 di Kaltim</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">4. Penanggulangan Bencana</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Pengamatan Gejala Bencana</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Pengamatan Gejala Bencana</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Peringatan Dini dan Evakuasi Keadaan Darurat Terhadap Bencana</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Kaji Cepat dan Tepat Terhadap Lokasi Kerugian dan Sumber Daya</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Triangulasi Bencana</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>SOP Pengambilan Tindakan oleh Masyarakat</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
