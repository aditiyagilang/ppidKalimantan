@extends('admin.layout')

@section('content')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Laporan Permohonan Informasi Publik</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Laporan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                Tambah Laporan
            </button>
        </div>
        
        <div class="table-responsive-sm mt-3">
            <table id="reportTable" class="table table-striped table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tahun</th>
                        <th>Kategori</th>
                        <th>File</th>
                     
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Detail Laporan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Kategori:</strong> <span id="detailCategory"></span></p>
                                <p><strong>Nama:</strong> <span id="detailName"></span></p>
                                <p><strong>Tahun:</strong> <span id="detailYear"></span></p>
                                <p><strong>File:</strong> <a id="detailFile" href="#" target="_blank">Unduh</a></p>
                                <p>
                                    <strong>Foto:</strong>
                                    <a id="detailPhoto" href="#" download>Unduh</a>
                                </p>

                             
                                
                            </div>
                            <div class="col-md-6">
                            <p><strong>Foto Tampilan:</strong> 
                                    <img id="detailPhotoImg" src="" alt="Foto" style="max-width: 100%; height: auto;">
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <form action="{{ route('report.update') }}" method="POST" id="editReportForm" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Laporan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-3">
                        <label for="reportId" class="form-label">ID Laporan</label>
                        <input type="text" class="form-control" id="reportId" name="id" readonly>
                    </div>

                    <!-- Nama Laporan -->
               

                    <!-- Foto Laporan -->
                    <div class="mb-3">
                        <label for="reportPhotoPreview" class="form-label">Foto Sebelumnya</label>
                        <img id="reportPhotoPreview" src="" alt="Foto Laporan" class="img-thumbnail mb-2" style="max-width: 100%; height: auto;">
                        <input type="file" class="form-control" id="reportPhoto" name="photo" accept=".jpg,.jpeg,.png">
                    </div>

                    <!-- Foto Laporan -->
                    <div class="mb-3">
                        <label for="reportFilePreview" class="form-label">File Sebelumnya</label>
                        <a id="reportFilePreview" href="#" target="_blank" class="d-block mb-2">Unduh File</a>
                        <input type="file" class="form-control" id="reportFile" name="file" accept=".pdf,.doc,.xlx,.xlxs">
                    </div>


                    <!-- Dropdown Tipe -->
                    <div class="mb-3">
                        <label for="reportType" class="form-label">Tipe Laporan</label>
                        <select class="form-select" id="reportType" name="type" required>
                            <option value="ppid">PPID</option>
                            <option value="finance">Keuangan</option>
                            <option value="performance">Kinerja</option>
                            <option value="administration">Administrasi</option>
                        </select>
                    </div>

                    <!-- Tahun -->
                    <div class="mb-3">
                        <label for="reportYear" class="form-label">Tahun</label>
                        <input type="number" class="form-control" id="reportYear" name="year" min="1900" max="{{ date('Y') }}" required>
                    </div>
                

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="reportStatus" class="form-label">Status</label>
                        <select class="form-select" id="reportStatus" name="status" required>
                            <option value="private">Private</option>
                            <option value="public">Public</option>
                        </select>
                    </div>



                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="editReportForm" class="btn btn-primary">Simpan</button>
            </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('report.store') }}" method="POST" id="addReportForm" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Laporan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <!-- Nama Laporan -->
                  

                    <!-- Foto Laporan -->
                    <div class="mb-3">
                        <label for="reportPhoto" class="form-label">Foto Laporan</label>
                        <input type="file" class="form-control" id="reportPhoto" name="photo" accept=".jpg,.jpeg,.png">
                    </div>

                    <!-- File Laporan -->
                    <div class="mb-3">
                        <label for="reportFile" class="form-label">File Laporan</label>
                        <input type="file" class="form-control" id="reportFile" name="file" accept=".pdf,.doc,.xlx,.xlxs">
                    </div>

                    <!-- Dropdown Tipe -->
                    <div class="mb-3">
                        <label for="reportType" class="form-label">Tipe Laporan</label>
                        <select class="form-select" id="reportType" name="type" required>
                            <option value="ppid">PPID</option>
                            <option value="finance">Keuangan</option>
                            <option value="performance">Kinerja</option>
                            <option value="administration">Administrasi</option>
                        </select>
                    </div>

                    <!-- Tahun -->
                    <div class="mb-3">
                        <label for="reportYear" class="form-label">Tahun</label>
                        <input type="number" class="form-control" id="reportYear" name="year" min="1900" max="{{ date('Y') }}" required>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="reportStatus" class="form-label">Status</label>
                        <select class="form-select" id="reportStatus" name="status" required>
                            <option value="private">Private</option>
                            <option value="public">Public</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" form="addReportForm" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

        
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        const reportTable = $('#reportTable').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            responsive: true,
            ajax: {
                url: '{{ route('report.show') }}',  // URL endpoint untuk ambil data laporan
                type: 'GET',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'year', name: 'year' },
                { data: 'type', name: 'type' },
                { data: 'file', name: 'file' },
                { data: 'status', name: 'status' },
                { data: 'actions', name: 'actions' },
                
            ]
        });
        $(document).on('click', '.edit-button', function () {
            const id = $(this).data('id');
            const year = $(this).data('year');
            const photo = $(this).data('photo');  // Foto yang ada di database
            const file = $(this).data('file');    // File yang ada di database
            const type = $(this).data('type').toLowerCase();
            const status = $(this).data('status').toLowerCase();

            // Isi data ke dalam modal edit
            $('#reportId').val(id);
            $('#reportYear').val(year);
            $('#reportType').val(type);
            $('#reportStatus').val(status);

            // Menampilkan foto yang ada
            if (photo) {
                $('#reportPhotoPreview').attr('src', `/assets/foto/${photo}`);  // Ganti dengan path yang benar
            } else {
                $('#reportPhotoPreview').attr('src', "{{ asset('assets/photo.png') }}");
            }

            // Menampilkan file yang ada (jika ada)
            if (file) {
                $('#reportFilePreview').attr('href', `/assets/file/${file}`);  // Ganti dengan path yang benar
                $('#reportFilePreview').text("Unduh File"); // Tampilkan teks untuk file yang bisa diunduh
            } else {
                $('#reportFilePreview').attr('href', '#').text('File tidak tersedia');
            }

            $('#editModal').modal('show');
        });



        // Submit data edit menggunakan AJAX
        $('#editForm').on('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);

            $.ajax({
                url: '{{ route("report.update") }}',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#editModal').modal('hide');
                    alert(response.message);
                    reportTable.ajax.reload(); // Refresh tabel
                },
                error: function (error) {
                    alert('Gagal memperbarui data!');
                }
            });
        });



        $(document).on('click', '.detail-button', function () {
            const id = $(this).data('id');
            const category = $(this).data('category');
            const name = $(this).data('name');
            const year = $(this).data('year');
            const photo = $(this).data('photo');
            const file = $(this).data('file');

            // Isi data detail ke modal
            $('#detailCategory').text(category);
            $('#detailName').text(name);
            $('#detailYear').text(year);

            // Menampilkan foto
            if (photo) {
                const photoUrl = `/assets/foto/${photo}`;
                $('#detailPhoto').attr('href', photoUrl).attr('download', photo).text('Unduh Foto');
                $('#detailPhotoImg').attr('src', photoUrl); // Menampilkan gambar di modal
            } else {
                $('#detailPhoto').attr('href', '#').removeAttr('download').text('Foto tidak tersedia');
                $('#detailPhotoImg').attr('src', ''); // Kosongkan gambar jika tidak ada
            }

            // Menampilkan file
            if (file) {
                const fileUrl = `/assets/file/${file}`;
                $('#detailFile').attr('href', fileUrl).text('Unduh File');
            } else {
                $('#detailFile').attr('href', '#').text('File tidak tersedia');
            }

            $('#detailModal').modal('show');
        });


        // Update status laporan
        $(document).on('change', '.status-dropdown', function () {
            const id = $(this).data('id');
            const status = $(this).val();
            $.ajax({
                url: '{{ route("report.updateStatus") }}',
                method: 'POST',
                data: {
                    id: id,
                    status: status,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    alert(response.message);
                },
            });
        });
    });
</script>
@endpush
