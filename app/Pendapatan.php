<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    protected $table = 'pendapatan';
    protected $fillable = ['jenis', 'periode'];
    protected $primaryKey = 'id';
}
