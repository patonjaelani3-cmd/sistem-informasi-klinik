<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rm',
        'nama_pasien',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'no_telepon',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
        ];
    }
}