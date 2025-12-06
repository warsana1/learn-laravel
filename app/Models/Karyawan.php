<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // Jika kamu pakai table bernama 'karyawans' sesuai konvensi, tidak perlu set $table.
    // protected $table = 'karyawan'; // gunakan ini jika tabelmu bernama 'karyawan' (singular)

    protected $fillable = [
        'nama',
        'email',
        'posisi',
        'gaji',
    ];

    // Jika ingin merubah format tanggal otomatis:
    protected $casts = [
        'tanggal_masuk' => 'date',
    ];
}
