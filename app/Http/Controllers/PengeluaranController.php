<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = DB::table('pengeluaran')->get();
        return view('Pengeluaran', ['pengeluaran' => $pengeluaran]);
    }
}
