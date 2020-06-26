<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Pengeluaran;

class PencarianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pengeluaran = DB::table('pengeluaran')->get();
        return view('Pengeluaran',['pengeluaran'=>$pengeluaran]);
    }

}
