<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicInformationRequest extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model ini
    protected $table = 'public_information_requests';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'request_category',
        'code',
        'nik',
        'full_name',
        'file',
        'ktp_url',
        'address',
        'detail_information',
        'reason',
        'email',
        'phone_number',
        'job',
        'status',
        'reject_reason',
    ];

    // Menentukan apakah kolom timestamps (created_at dan updated_at) digunakan
    public $timestamps = true;

    /**
     * Menampilkan status dalam format lebih ramah pengguna.
     */
    public function getStatusAttribute($value)
    {
        return ucfirst($value); // Misalnya, mengubah "approved" menjadi "Approved"
    }

    /**
     * Menampilkan kategori permohonan dalam format yang lebih ramah pengguna.
     */
    public function getRequestCategoryAttribute($value)
    {
        return ucfirst($value); // Misalnya, mengubah "individual" menjadi "Individual"
    }
}
