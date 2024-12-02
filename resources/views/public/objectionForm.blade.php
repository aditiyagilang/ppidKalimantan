@extends('public.navbar')

@section('content')

<div class="container" style="margin-top: 90px;">
    <div class="text-center mb-5">
        <h2 class="mb-1">Form Pengajuan Keberatan Informasi Publik</h2>
        <p class="text-muted">Silakan isi data di bawah ini dengan lengkap dan benar</p>
    </div>

    <form action="{{ route('objection.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-md-6"> 
                <div class="mb-3">
                    <label for="nik" id="labelNik" class="form-label">NIK/No. Identitas Pribadi</label>
                    <input type="text" class="form-control" name="nik" id="inputNik" placeholder="Masukan NIK/No. Identitas">
                    <small class="d-block text-danger mb-1">(Mohon pastikan NIK yang Anda masukkan sesuai dengan no NIK KTP)</small>
                </div>
                
                <div class="mb-3">
                    <label for="namaLengkap" id="labelName" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control"name="name"  id="inputName" placeholder="Masukan Nama Lengkap Anda">
                </div>
                
                <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="address" id="alamat" placeholder="Masukan Nama Alamat Anda">
                </div>
                
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Alamat Email Anda">
                </div>
                
                <div class="mb-3">
                <label for="nomorTelepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="phone" id="nomorTelepon" placeholder="Masukan Nomor Telepon Anda">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="rincianInformasi" class="form-label">Kasus Posisi (ringkasan mengenai kasus)*</label>
                    <textarea class="form-control" name="detail" id="rincianInformasi" rows="3"></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="tujuanPenggunaan" class="form-label">Alasan Pengajuan Keberatan*</label>
                    <textarea class="form-control" name="reason" id="tujuanPenggunaan" rows="3"></textarea>
                </div>
                
                <div class="mb-3" id="aktaNotarisSection">
                    <label class="form-label" id="labelFile">Upload Surat Keberatan (jika ada)</label>
                    <div class="drag-area" id="dragAreaFile">
                        <p style="font-size: 90%;">Upload Surat Keberatan atau</p>
                        <p style="font-size: 90%;">Drag File Surat Keberatan</p>
                        <p style="font-size: 90%;">Max Upload 5 Mb</p>
                    </div>
                    <input type="file" name="file" id="inputFile" class="form-control d-none">
                </div>
            </div>
        </div>
        <div class="text-center mt-4 mb-5">
            <button type="submit" class="btn btn-primary btn-md">Ajukan Keberatan</button>
        </div>
    </form>
</div>


@endsection

@push('scripts')
<script>
    function setupDragAndDrop(dragAreaId, fileInputId) {
        const dragArea = document.getElementById(dragAreaId);
        const fileInput = document.getElementById(fileInputId);

        dragArea.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', () => {
            showFileName(dragArea, fileInput.files[0]);
        });

        dragArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            dragArea.classList.add('drag-over');
        });

        dragArea.addEventListener('dragleave', () => {
            dragArea.classList.remove('drag-over');
        });

        dragArea.addEventListener('drop', (event) => {
            event.preventDefault();
            dragArea.classList.remove('drag-over');
            const file = event.dataTransfer.files[0];
            fileInput.value = event.dataTransfer.files[0];
            console.log(fileInput.files);
            showFileName(dragArea, file);
        });
    }

    function showFileName(dragArea, file) {
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                dragArea.innerHTML = `
                    <img src="${e.target.result}" alt="Preview" class="img-thumbnail" style="max-width: 25%; height: auto;">
                    <p><strong>${file.name}</strong> berhasil diunggah!</p>
                `;
            };
            reader.readAsDataURL(file);
        } else {
            dragArea.innerHTML = `<p><strong>${file.name}</strong> berhasil diunggah!</p>`;
        }
    }

    setupDragAndDrop('dragAreaFile', 'inputFile');

</script>
@endpush