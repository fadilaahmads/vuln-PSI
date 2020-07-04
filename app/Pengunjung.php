<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'pengunjung';
    protected $fillable = ['jenis', 'jumlah','bulan','tahun'];
    protected $primaryKey = 'id';
   
}

