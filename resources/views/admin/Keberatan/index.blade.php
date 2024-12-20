@extends('admin.layout')

@section('content')
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Permohonan Informasi Publik</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Permohonan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive mt-3">
                <table id="objectionTable" class="table table-striped table-xm" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>No HP</th>
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
                            <h5 class="modal-title" id="detailModalLabel">Request Detail</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>NIK:</strong> <span id="detailNik"></span></p>
                                    <p><strong>Nama:</strong> <span id="detailName"></span></p>
                                    <p><strong>Telepon:</strong> <span id="detailPhone"></span></p>
                                    <p><strong>Alamat:</strong> <span id="detailAddress"></span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Alasan Keberatan:</strong> <span id="detailReason"></span></p>
                                    <p><strong>Kasus Posisi:</strong> <span id="detailCase"></span></p>
                                    <p><strong>File:</strong> <a id="detailFile" href="#" target="_blank">Download</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="rejectReasonModal" tabindex="-1" aria-labelledby="rejectReasonLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="rejectReasonLabel">Alasan Penolakan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <textarea id="rejectReason" class="form-control" rows="3" placeholder="Masukkan alasan penolakan"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="submitRejectReason">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="loadingOverlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9998;"></div>
    <div id="loadingSpinner" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        const requestTable = $('#objectionTable').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            responsive: true,
            ajax: {
                url: '{{ route('objection.data') }}',
                type: 'GET',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nik', name: 'nik' },
                { data: 'full_name', name: 'full_name' },
                { data: 'phone_number', name: 'phone_number' },
                { data: 'status', name: 'status', orderable: false, searchable: false },
                { data: 'actions', name: 'actions', orderable: false, searchable: false },
            ]
        });

        $(document).on('change', '.status-dropdown', function() {
            const requestId = $(this).data('id');
            const newStatus = $(this).val();

            if (newStatus === 'Rejected') {
                $('#rejectReasonModal').data('request-id', requestId).modal('show');
            } else {
                updateStatus(requestId, newStatus, null);
            }
        });

        function updateStatus(requestId, status, rejectReason) {
            $('#loadingOverlay').show();
            $('#loadingSpinner').show();

            $.ajax({
                url: '{{ route('objection.updateStatus') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: requestId,
                    status: status,
                    reject_reason: rejectReason
                },
                success: function(response) {
                    $('#loadingOverlay').hide();
                    $('#loadingSpinner').hide();
                    
                    if (response.success) {
                        requestTable.ajax.reload(null, false);
                        alert('Status berhasil diperbarui');
                    } else {
                        alert('Terjadi kesalahan: ' + response.message);
                    }
                },
                error: function() {
                    alert('Gagal memperbarui status');
                }
            });
        }

        $('#submitRejectReason').on('click', function() {
            const requestId = $('#rejectReasonModal').data('request-id');
            const rejectReason = $('#rejectReason').val();

            if (!rejectReason) {
                alert('Harap masukkan alasan penolakan');
                return;
            }

            updateStatus(requestId, 'Rejected', rejectReason);

            $('#rejectReasonModal').modal('hide');
            $('#rejectReason').val('');
        });
    });

    $(document).on('click', '.detail-button', function () {
        const id = $(this).data('id');
        const nik = $(this).data('nik');
        const name = $(this).data('name');
        const phone = $(this).data('phone');
        const address = $(this).data('address');
        const case_position = $(this).data('case_position');
        const reason = $(this).data('reason');
        const ktpUrl = $(this).data('ktp');
        const fileUrl = $(this).data('file');

        $('#detailNik').text(nik);
        $('#detailName').text(name);
        $('#detailPhone').text(phone);
        $('#detailAddress').text(address);
        $('#detailCase').text(case_position);
        $('#detailReason').text(reason);
        $('#detailFile').attr('href', `storage/${fileUrl}`);

        $('#detailModal').modal('show');
    });

</script>
@endpush