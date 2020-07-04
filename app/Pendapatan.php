<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    protected $table = 'pendapatan';
    protected $fillable = ['nama_kegiatan', 'tanggal','bulan','tahun','biaya'];
    protected $primaryKey = 'id';
}
