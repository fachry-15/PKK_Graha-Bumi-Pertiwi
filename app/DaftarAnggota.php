<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarAnggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id';
    protected $fillable = [
        'namapanjang', 'rt', 'namapanggilan', 'jabatan', 'tahunjbt', 'created_at'
    ];
}
