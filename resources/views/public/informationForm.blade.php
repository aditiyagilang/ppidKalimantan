@extends('public.navbar')

@section('content')

<div class="container" style="margin-top: 90px;">
    <div class="text-center mb-5">
        <h2 class="mb-1">Form Permohonan Informasi</h2>
        <p class="text-muted">Silakan isi data di bawah ini dengan lengkap dan benar</p>
    </div>

    <form action="{{ route('request.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="kategoriPermohonan" class="form-label">Kategori Permohonan</label>
                    <select class="form-select" name="type" id="kategoriPermohonan">
                        <option value="individual">Perorangan</option>
                        <option value="organization">Lembaga / Organisasi</option>
                        <option value="goup">Kelompok Orang</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="nik" id="labelNik" class="form-label">NIK/No. Identitas Pribadi</label>
                    <input type="text" class="form-control" name="nik" id="inputNik" placeholder="Masukan NIK/No. Identitas">
                    <small class="d-block mb-1 text-danger">(Mohon pastikan NIK yang Anda masukkan sesuai dengan no NIK KTP)</small>
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
                
                <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="job" id="pekerjaan" placeholder="Masukan Pekerjaan Anda">
                </div>
            </div>
            
            <div class="col-md-6">
                
                <!-- <div class="mb-3">
                    <label class="form-label">Upload KTP Pribadi</label>
                    
                    <input type="file" name="ktp" class="form-control">
                    
                </div> -->

                <div class="mb-3">
                    <label for="uploadKTP" id="labelKtp" class="form-label">Upload KTP Pribadi</label>
                    <div class="drag-area" id="dragAreaKtp">
                        <p style="font-size: 90%;">Upload KTP Pribadi atau</p>
                        <p style="font-size: 90%;">Drag & Drop File KTP Pribadi</p>
                        <p style="font-size: 90%;">Max Upload 5 MB</p>
                    </div>
                    <input type="file" name="ktp" id="fileInputKTP" class="form-control d-none">
                </div>
                
                <div class="mb-3" id="aktaNotarisSection">
                    <label class="form-label" id="labelFile">Upload Akta Notaris Lembaga / Organisasi</label>
                    <div class="drag-area" id="dragAreaFile">
                        <p style="font-size: 90%;">Upload File Akta Notaris Lembaga / Organisasi</p>
                        <p style="font-size: 90%;">Drag File Akta Notaris</p>
                        <p style="font-size: 90%;">Max Upload 5 Mb</p>
                    </div>
                    <input type="file" name="file" id="inputFile" class="form-control d-none">
                </div>
                
                <div class="mb-3">
                    <label for="rincianInformasi" class="form-label">Rincian Informasi</label>
                    <textarea class="form-control" name="detail" id="rincianInformasi" rows="3"></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="tujuanPenggunaan" class="form-label">Tujuan Penggunaan Informasi</label>
                    <textarea class="form-control" name="reason" id="tujuanPenggunaan" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="text-center mt-4 mb-5">
            <button type="submit" class="btn btn-primary btn-md">Ajukan Permohonan</button>
        </div>
    </form>
</div>


@endsection

@push('scripts')
<script>
     // Handle kategoriPermohonan change event
     const kategoriPermohonan = document.getElementById('kategoriPermohonan');
    const aktaNotarisSection = document.getElementById('aktaNotarisSection');
    const inputFile = document.getElementById('inputFile');
    const dragAreaKtp = document.getElementById('dragAreaKtp');
    const dragAreaFile = document.getElementById('dragAreaFile');
    const labelNik = document.getElementById('labelNik');
    const labelName = document.getElementById('labelName');
    const inputNik = document.getElementById('inputNik');
    const inputName = document.getElementById('inputName');
    const labelKtp = document.getElementById('labelKtp');
    const labelFile = document.getElementById('labelFile');

    kategoriPermohonan.addEventListener('change', () => {
        if (kategoriPermohonan.value === 'individual') {
            aktaNotarisSection.style.display = 'none';
            inputFile.value = '';
            dragAreaFile.innerHTML = `
                <p style="font-size: 90%;">Upload File Akta Notaris Lembaga / Organisasi</p>
                <p style="font-size: 90%;">Drag File Akta Notaris</p>
                <p style="font-size: 90%;">Max Upload 5 Mb</p>
            `;
            dragAreaKtp.innerHTML = `
                <p style="font-size: 90%;">Upload KTP Pribadi atau</p>
                <p style="font-size: 90%;">Drag & Drop File KTP Pribadi</p>
                <p style="font-size: 90%;">Max Upload 5 MB</p>
            `;
            labelNik.innerHTML = 'NIK/No. Identitas Pribadi';
            labelName.innerHTML = 'Nama Lengkap';
            labelKtp.innerHTML = 'Upload KTP Pribadi';
            inputNik.placeholder = 'Masukkan NIK/No. Identitas Pribadi';
            inputName.placeholder = 'Masukkan Nama Lengkap';
        } else if (kategoriPermohonan.value === 'organization') {
            dragAreaFile.innerHTML = `
                <p style="font-size: 90%;">Upload File Akta Notaris Lembaga / Organisasi</p>
                <p style="font-size: 90%;">Drag File Akta Notaris</p>
                <p style="font-size: 90%;">Max Upload 5 Mb</p>
                `;
            dragAreaKtp.innerHTML = `
                <p style="font-size: 90%;">Upload KTP Pimpinan atau</p>
                <p style="font-size: 90%;">Drag & Drop File KTP Pimpinan</p>
                <p style="font-size: 90%;">Max Upload 5 MB</p>
                `;
            aktaNotarisSection.style.display = 'block';
            labelNik.innerHTML = 'NIK/No. Identitas Pimpinan';
            labelName.innerHTML = 'Nama Lembaga / Organisasi';
            labelKtp.innerHTML = 'Upload KTP Pimpinan';
            labelFile.innerHTML = 'Upload Akta Notaris Lembaga / Organisasi';
            inputNik.placeholder = 'Masukkan NIK/No. Identitas Pimpinan';
            inputName.placeholder = 'Masukkan Nama Lembaga / Organisasi Anda';
            
        } else if (kategoriPermohonan.value === 'group') {
            dragAreaFile.innerHTML = `
                <p style="font-size: 90%";">Upload Surat Kuasa</p>
                <p style="font-size: 90%";">Drag Upload Surat Kuasa</p>
                <p style="font-size: 90%";">Max Upload 5 Mb</p>
                `;
            dragAreaKtp.innerHTML = `
                <p style="font-size: 90%">Upload KTP Pemberi kuasa atau</p>
                <p style="font-size: 90%">Drag & Drop File KTP Pemberi kuasa</p>
                <p style="font-size: 90%">Max Upload 5 MB</p>
                `;
            aktaNotarisSection.style.display = 'block';
            labelNik.innerHTML = 'NIK/No. Identitas Pemberi kuasa';
            labelName.innerHTML = 'Nama Pemberi Kuasa';
            labelKtp.innerHTML = 'Upload KTP Pemberi Kuasa';
            labelFile.innerHTML = 'Upload Surat Kuasa';
            inputNik.placeholder = 'Masukkan NIK/No. Identitas Pemberi Kuasa';
            inputName.placeholder = 'Masukkan Nama Pemberi Kuasa';
        } else {

        }
    });

    kategoriPermohonan.dispatchEvent(new Event('change'));

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

    setupDragAndDrop('dragAreaKtp', 'fileInputKTP');
    setupDragAndDrop('dragAreaFile', 'inputFile');

</script>
@endpush