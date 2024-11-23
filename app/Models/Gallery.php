<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model ini
    protected $table = 'galleries';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'link',
        'title',
        'description',
        'date',
    ];

    // Menentukan apakah kolom timestamps (created_at dan updated_at) digunakan
    public $timestamps = true;

    /**
     * Menampilkan tanggal dalam format yang lebih mudah dibaca.
     */
    public function getDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d F Y'); // Mengubah format tanggal
    }
}
