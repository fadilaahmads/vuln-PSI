<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluaran';
    protected $fillable = ['nama_kegiatan', 'tanggal', 'bulan', 'tahun', 'biaya'];
    protected $primaryKey = 'id';
}
