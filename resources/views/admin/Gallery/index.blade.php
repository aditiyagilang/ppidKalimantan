@extends('admin.layout')

@section('content')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Galeri</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                Tambah Galeri
            </button>
        </div>

        <div class="table-responsive-sm mt-3">
            <table id="galleryTable" class="table table-striped table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Link</th>
                        <th>Type</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan dimuat melalui AJAX -->
                </tbody>
            </table>
        </div>

        <!-- Modal untuk Detail Galeri -->
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Detail Galeri</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Judul:</strong> <span id="detailTitle"></span></p>
                                <p><strong>Link:</strong> <a href="#" id="detailLink" target="_blank" style="color: #007bff; text-decoration: none;">Click here</a></p>

                                <p><strong>Deskripsi:</strong> <span id="detailDescription"></span></p>
                                <p><strong>Tanggal:</strong> <span id="detailDate"></span></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Type:</strong> <span id="detailType"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal untuk Edit Galeri -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('gallery.update') }}" method="POST" id="editGalleryForm">
            @csrf
            @method('POST')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="galleryId" name="id">
                    <div class="form-group">
                        <label for="galleryTitle">Judul</label>
                        <input type="text" class="form-control" id="galleryTitle" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="galleryLink">Link</label>
                        <input type="text" class="form-control" id="galleryLink" name="link" required>
                    </div>
                    <div class="form-group">
                        <label for="galleryType">Type</label>
                        <select class="form-control" id="galleryType" name="type" required>
                            <option value="foto">Foto</option>
                            <option value="video">Video</option>
                           
                            <option value="podcast">Podcast</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="galleryDescription">Deskripsi</label>
                        <textarea class="form-control" id="galleryDescription" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="galleryDate">Tanggal</label>
                        <input type="date" class="form-control" id="galleryDate" name="date" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>
</div>


        <!-- Modal untuk Tambah Galeri -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('gallery.store') }}" method="POST" id="addGalleryForm" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="addTitle">Judul</label>
                        <input type="text" class="form-control" id="addTitle" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="addType">Type</label>
                        <select class="form-control" id="addType" name="type" required onchange="toggleLinkInput()">
                            <option value="foto">Foto</option>
                            <option value="video">Video</option>
                         
                            <option value="podcast">Podcast</option>
                        </select>
                    </div>

                    <!-- Input untuk link atau upload file foto -->
                    <div class="form-group" id="addLinkGroup">
                        <label for="addLink">Link</label>
                        <input type="text" class="form-control" id="addLink" name="link" required>
                    </div>
                    
                    <!-- Input untuk foto -->
                    <div class="form-group" id="addPhotoGroup" style="display: none;">
                        <label for="addPhoto">Foto</label>
                        <input type="file" class="form-control" id="addPhoto" name="link">
                    </div>

                    <div class="form-group">
                        <label for="addDescription">Deskripsi</label>
                        <textarea class="form-control" id="addDescription" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="addDate">Tanggal</label>
                        <input type="date" class="form-control" id="addDate" name="date" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
        const galleryTable = $('#galleryTable').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            responsive: true,
            ajax: {
                url: '{{ route('gallery.show') }}',  // URL endpoint untuk mengambil data galeri
                type: 'GET',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'link', name: 'link' },
                { data: 'type', name: 'type' },
                { data: 'description', name: 'description' },
                { data: 'date', name: 'date' },
                {
                    data: 'actions', 
                    name: 'actions', 
                 
                },
            ]
        });

       

        $(document).on('click', '.edit-button', function () {
            const id = $(this).data('id');
            const link = $(this).data('link');
            const title = $(this).data('title');
            const description = $(this).data('description');
            const date = $(this).data('date');  // Format yang diterima adalah yyyy-mm-dd
            const type = $(this).data('type').toLowerCase();

            // Fungsi untuk mengubah format tanggal dari yyyy-mm-dd ke mm/dd/yyyy untuk tujuan tampilan
            function formatDateToMMDDYYYY(dateString) {
                const dateObj = new Date(dateString);
                const month = String(dateObj.getMonth() + 1).padStart(2, '0');  // Menambahkan leading zero untuk bulan
                const day = String(dateObj.getDate()).padStart(2, '0');  // Menambahkan leading zero untuk hari
                const year = dateObj.getFullYear();
                return `${month}/${day}/${year}`;
            }

            // Format tanggal untuk tampilan (mm/dd/yyyy)
            const formattedDate = formatDateToMMDDYYYY(date);

            // Isi data ke dalam modal edit
            $('#galleryId').val(id);
            $('#galleryLink').val(link);
            $('#galleryTitle').val(title);
            $('#galleryDescription').val(description);
            $('#galleryType').val(type);

            // Set tanggal di input dalam format yyyy-mm-dd (untuk input date)
            $('#galleryDate').val(date);  // Input type="date" harus dalam format yyyy-mm-dd

            // Tampilkan modal edit
            $('#editModal').modal('show');
        });





        // Submit data edit menggunakan AJAX
        $('#editForm').on('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);

            $.ajax({
                url: '{{ route("gallery.update") }}',
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
            const link = $(this).data('link');
            const title = $(this).data('title');
            const description = $(this).data('description');
            const date = $(this).data('date');
            const type = $(this).data('type');

            // Isi data detail ke modal
            $('#detailLink').attr('href', link).text(link); 
            $('#detailTitle').text(title);
            $('#detailDescription').text(description);
            $('#detailDate').text(date);
            $('#detailType').text(type);

          
            $('#detailModal').modal('show');
        });

    });
</script>

<script>
    function toggleLinkInput() {
        var type = document.getElementById("addType").value;
        var linkGroup = document.getElementById("addLinkGroup");
        var photoGroup = document.getElementById("addPhotoGroup");
        var addLink = document.getElementById("addLink");
        var addPhoto = document.getElementById("addPhoto");

        if (type === "foto") {
            linkGroup.style.display = "none"; // Sembunyikan input link
            addLink.disabled = true; // Nonaktifkan input link
            photoGroup.style.display = "block"; // Tampilkan input foto
            addPhoto.disabled = false; // Aktifkan input foto
        } else {
            linkGroup.style.display = "block"; // Tampilkan input link
            addLink.disabled = false; // Aktifkan input link
            photoGroup.style.display = "none"; // Sembunyikan input foto
            addPhoto.disabled = true; // Nonaktifkan input foto
        }
    }

    // Panggil fungsi untuk set tampilan yang benar saat halaman dimuat
    toggleLinkInput();
</script>
@endpush
