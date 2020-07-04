<?php

namespace App\Exports;

use App\Pengunjung;
use Maatwebsite\Excel\Concerns\FromCollection;

class PengunjungExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pengunjung::all();
    }
}