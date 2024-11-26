<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objection extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model ini
    protected $table = 'objection';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'code',
        'nik',
        'full_name',
        'address',
        'phone_number',
        'case_position',
        'reason',
        'file',
        'status',
        'reject_reason',
    ];

    // Menentukan kolom yang sebaiknya tidak bisa diubah langsung oleh pengguna
    protected $guarded = [];

    // Menentukan apakah kolom timestamps (created_at dan updated_at) digunakan
    public $timestamps = true;

    /**
     * Mengubah status ke format yang lebih mudah dibaca.
     */
    public function getStatusAttribute($value)
    {
        return ucfirst($value); // Misalnya, mengubah "approved" menjadi "Approved"
    }
}
