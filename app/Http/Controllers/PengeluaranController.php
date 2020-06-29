<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
class PengeluaranController extends Controller
{
    public function index()
    {
        //Mengambil data dari tabel Pengeluaran kolom nominal dan melakukan operasi statistika
        $max = DB::table('pengeluaran')->get()->max('nominal');
        $min = DB::table('pengeluaran')->get()->min('nominal');
        $avg = DB::table('pengeluaran')->get()->avg('nominal');
        $total = DB::table('pengeluaran')->get()->sum('nominal');
        return view('Pengeluaran',['max'=>$max,'min'=>$min,'avg'=>$avg,'total'=>$total]);
        
    }
}
