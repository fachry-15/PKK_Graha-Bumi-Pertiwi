<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keuangan extends Model
{
    protected $table = 'keuangan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenis', 'keterangan', 'sumber', 'nominal', 'tanggal',
    ];
}
