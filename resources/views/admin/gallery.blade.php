<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>PPID KALIMANTAN</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo_mobeos.png"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="{{ 'css/style.min.css' }}" rel="stylesheet">
</head>

<body>
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('admin.navbar')
        @include('admin.sidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Table</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Tabel Tipe</h4>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGalleryModal">Tambah</button>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="table table-bordered table-hover table-striped user-table">
                                        <thead class="table-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Link</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($galleries as $key => $gallery)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $gallery->id }}</td>
                                                <td>{{ $gallery->name }}</td>
                                                <td>
                                                    <a href="{{ $gallery->link }}" target="_blank">{{ $gallery->link }}</a>
                                                </td>
                                                <td>{{ $gallery->title }}</td>
                                                <td>{{ $gallery->description }}</td>
                                                <td>{{ $gallery->date }}</td> <!-- Format sudah disesuaikan di accessor -->
                                                <td>
                                                    <!-- Tombol Ubah -->
                                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editGalleryModal"
                                                            data-id="{{ $gallery->id }}" data-name="{{ $gallery->name }}">
                                                        Ubah
                                                    </button>

                                                    <!-- Form Hapus -->
                                                    <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus galeri ini?')">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal Tambah -->
           <!-- Modal Edit -->
           <div class="modal fade" id="addGalleryModal" tabindex="-1" aria-labelledby="addGalleryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGalleryModalLabel">Tambah Galeri</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('galleries.store') }}" method="POST" id="addGalleryForm">
                            @csrf
                            <!-- Form untuk menambah galeri baru -->
                            <div class="mb-3">
                                <label for="galleryTitle" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="galleryTitle" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="galleryDescription" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="galleryDescription" name="description" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="galleryLink" class="form-label">Link</label>
                                <input type="url" class="form-control" id="galleryLink" name="link" required>
                            </div>
                            <div class="mb-3">
                                <label for="galleryDate" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="galleryDate" name="date" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" form="addGalleryForm" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>




<div class="modal fade" id="editTypeModal" tabindex="-1" aria-labelledby="editTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTypeModalLabel">Ubah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="editTypeForm">
                    <!-- @csrf
                    @method('PUT') -->
                    <div class="mb-3">
                        <label for="typeId" class="form-label">ID Tipe</label>
                        <input type="text" class="form-control" id="typeId" name="typeId" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tipeName" class="form-label">Nama Tipe</label>
                        <input type="text" class="form-control" id="tipeName" name="types_name" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="editTypeForm" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>




            <footer class="footer"> © 2021 Material Pro Admin by <a href="https://www.wrappixel.com/">wrappixel.com </a>
            </footer>
        </div>
    


</body>

</html>
