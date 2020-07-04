<?php

namespace App\Exports;

use App\Pengeluaran;
use Maatwebsite\Excel\Concerns\FromCollection;

class PengeluaranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pengeluaran::all();
    }
}