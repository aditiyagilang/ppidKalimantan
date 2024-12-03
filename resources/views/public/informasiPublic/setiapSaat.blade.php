@extends('public.navbar')

@section('content')

<div class="container" style="margin-top: 110px;">
    <div class="text-center mb-5">
        <h2 class="mb-1">Informasi Setiap Saat</h2>
        <p class="text-muted">Unduh dokumen resmi terkait Informasi Setiap Saat di bawah ini.</p>
    </div>
    
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">1. Rencana Kerja dan Anggaran Provinsi Kaltim</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RKA Pemprov Kaltim Tahun 2015</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RKA Pemprov Kaltim Tahun 2016</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RKA Pemprov Kaltim Tahun 2017</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RKA Pemprov Kaltim Tahun 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RKA Pemprov Kaltim Tahun 2019</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RKA Pemprov Kaltim Tahun 2020</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RKA Pemprov Kaltim Tahun 2021</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RKA Pemprov Kaltim Tahun 2022</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2023.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- 2 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">2. Data Perencanaan Pembangunan</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Realisasi Investasi Daerah Provinsi Kalimantan Timur 2019</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RPJMD Pemprov Kaltim 2013 - 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RPJMD Pemprov Kaltim 2018 -2023</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>RPJMD Prov. Kaltim Tahun 2019-2023</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 3 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">3. Data Aparatur Sipil Negara Pemprov kaltim</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data ASN Pemprov Kaltim 2015</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Asn Pemprov Kaltim 2016</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Asn Pemprov Kaltim 2017</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Asn Pemprov Kaltim 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Asn Pemprov Kaltim 2019</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Asn Pemprov Kaltim 2020</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Asn Pemprov Kaltim 2021</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Asn Pemprov Kaltim 2022</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 4 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">4. Data Kerjasama Pemprov Kaltim</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Mou Pemprov Kaltim 2015</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data MOU Pemprov Kaltim 2016</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data MOU Pemprov Kaltim Dan BI</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data MOU Pemprov Kaltim 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Daftar Mou Pemrov Kaltim Tahun 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Daftar MoU Pemrov Kaltim Tahun 2017</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Daftar Mou Pemprov Kaltim 2018- 2019</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 5 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">5. Data Pengadaan</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Pengadaan Tahun 2015 (Pengawasan Pembanguan Tower Telekomunikasi)</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Pengadaan Tahun 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Pengadaan Tahun 2017</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>DATA PENGADAAN BARANG DAN JASA PEMPROV KALTIM TAHUN 2021</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Pengadaan Tahun 2021</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Dokumen kontrak</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 6 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">6. Laporan Pengaduan Masyarakat</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Laporan Dumas 2015</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Laporan Dumas 2016</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Laporan Dumas 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Tata Cara Pengaduan Penyalahgunaan Wewenang Pejabat Pemprov Kaltim</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Laporan Pengaduan Masyarakat Tahun 2020</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 7 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">7. Hasil Penelitian Pemprov Kaltim</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Hasil Penelitian 2013</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Hasil Penelitian 2014</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Hasil Penelitian 2015</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Hasil Penelitian 2017</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Hasil Penelitian 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Hasil Penelitian 2019</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Hasil Penelitian 2020</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 8 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">8. Rencana Strategis</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Renstra BPKAD 2019</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Rencana Strategis Diskominfo Kaltim 2019-2023</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 9 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">9. Naskah Akedemis, Risalah Rapat dan Pendapat Parapihak</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Naskah Akdemis Rencana Umum Penanaman Modal Provinsi Kalimantan Timur 2014 -- 2025</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Risalah Rapat tahun 2017 RAPERDA Tentang Perubahan Peraturan Daerah Prov. Kaltim . Timur NNomor 11 TAHUN 2009</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Naskah Akedemis Perda Kaltim Tentang Kawasan Tanpa Asap Rokok</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Perda dan Naskah Akademik Tentang Penyelenggaraan Pembangunan Ketahanan Keluarga</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 10 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">10. Data Aset Pemprov Kaltim</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Aset Pemprov Kaltim 2015</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Aset Pemprov Kaltim 2016</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Aset Pemprov Kaltim 2017</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Aset Pemprov Kaltim 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Aset Pemprov Kaltim 2019</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Aset Pemprov Kaltim 2020</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Data Aset Pemprov Kaltim 2021</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 11 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">11. Pedoman Pengelolaan Organisasi</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Sop Pengelolaan Organisasi</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 12 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">12. INFORMASI TENTANG PERATURAN, KEPUTUSAN/KEBIJAKAN YANG DIKELUARKAN OLEH PEMPROV KALTIM UNTUK PUBLIK</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Rekap Keputusan Gubernur Kaltim Tahun 2011 Sd 2018</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Perda, Pergub dan Raperda Pemprov Kaltim</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Informasi Peraturan Kaltim</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Informasi Tentang Peraturan/Keputusan/Kebijakan Badan Publik</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 13 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">13. Data Infrastruktur 2020</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Jalan Tol Balsam</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>PERSETUJUAN BERSAMA PANITIA KHUSUS PEMBAHAS RANCANGAN PERATURAN DAERAH TENTANG RENCANA PEMBANGUNAN INDUSTRI PROVINSI KALIMANTAN TIMUR TAHUN 2019-2039</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Draft Peraturan Gubernur No 18 Tahun 2013</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Draft Peraturan Gubernur No 18 Tahun 2013</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Surat Perjanjian Kerja Pengadaan Barang dan Jasa Tahun 2018 - 2020</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Surat Perjanjian Kerja Pengadaan Barang dan Jasa Tahun 2018 - 2020</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>aku ganteng</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Laporan Keuangan Audit Tahun 2021</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 14 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">14. RANGKING PEMERINGKATAN KETERBUKAAN INFORMASI PUBLIK TINGKAT NASIONAL</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Rangking Pemeringkatan Keterbukaan Informasi Publik Tingkat Nasional Pemrov. Kaltim</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 15 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">15. SOP PEDOMAN PENGELOLAAN ORGANISASI</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Pergub Nomor 9 Tahun 2016</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Pergub Nomor 65 Tahun 2019</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Perda Nomor 10 Tahun 2014</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 16 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">16. Dokumen Lingkungan Hidup</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Dokumen Studi Kelayakan</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2021.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span>Analisis Dampak Lingkungan</span>
                    <a href="{{ asset('pdf/dip/DIP PEMPROV KALTIM TAHUN 2022.pdf') }}" class="btn btn-outline-danger btn-sm" download>Download</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
